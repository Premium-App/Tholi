<?php
/**
 * Tholi - Premium WooCommerce Bag Theme functions and definitions
 *
 * @package Tholi
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * 1. Theme Setup
 */
function tholi_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'tholi_theme_setup');

/**
 * 2. Enqueue Styles and Scripts
 */
function tholi_enqueue_scripts() {
    $theme_version = '1.0.0';

    // Google Fonts: Hind Siliguri and Plus Jakarta Sans
    wp_enqueue_style(
        'tholi-google-fonts',
        'https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Main Theme CSS
    wp_enqueue_style(
        'tholi-main-style',
        get_template_directory_uri() . '/assets/css/tholi-style.css',
        array(),
        $theme_version
    );

    // Main App JS
    wp_enqueue_script(
        'tholi-app-js',
        get_template_directory_uri() . '/assets/js/tholi-app.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Pass backend settings to JavaScript
    wp_localize_script('tholi-app-js', 'tholiSettings', array(
        'ajaxUrl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('tholi_order_nonce'),
        'themeUri'    => get_template_directory_uri(),
        'whatsappNum' => '8801793648214',
        'phoneRaw'    => '8801793648214',
        'phoneDisplay'=> '01793-648214',
        'isWooActive' => class_exists('WooCommerce')
    ));
}
add_action('wp_enqueue_scripts', 'tholi_enqueue_scripts');

/**
 * 3. Real WooCommerce AJAX Order Submission Handler
 */
function tholi_ajax_submit_order_handler() {
    check_ajax_referer('tholi_order_nonce', 'security');

    $name     = isset($_POST['customer_name']) ? sanitize_text_field($_POST['customer_name']) : '';
    $phone    = isset($_POST['customer_phone']) ? sanitize_text_field($_POST['customer_phone']) : '';
    $district = isset($_POST['customer_district']) ? sanitize_text_field($_POST['customer_district']) : '';
    $address  = isset($_POST['customer_address']) ? sanitize_textarea_field($_POST['customer_address']) : '';
    $notes    = isset($_POST['customer_notes']) ? sanitize_textarea_field($_POST['customer_notes']) : '';
    $shipping = isset($_POST['shipping_zone']) ? intval($_POST['shipping_zone']) : 0; // 0: Dhaka, 1: Outside
    $items    = isset($_POST['items']) ? json_decode(stripslashes($_POST['items']), true) : array();
    $coupon   = isset($_POST['coupon_code']) ? sanitize_text_field($_POST['coupon_code']) : '';

    if (empty($name) || empty($phone) || empty($address) || empty($items)) {
        wp_send_json_error(array('message' => 'অনুগ্রহ করে সকল প্রয়োজনীয় তথ্য পূরণ করুন।'));
    }

    $shipping_fee = ($shipping === 0) ? 80 : 150;
    $shipping_title = ($shipping === 0) ? 'ঢাকার সিটির ভিতর হোম ডেলিভারি' : 'ঢাকার বাইরে সারা দেশে হোম ডেলিভারি';

    // If WooCommerce is active, create real WooCommerce Order
    if (class_exists('WooCommerce')) {
        try {
            $order = wc_create_order();

            $total_qty = 0;
            $items_subtotal = 0;

            foreach ($items as $item) {
                $qty = isset($item['quantity']) ? intval($item['quantity']) : 1;
                $price = isset($item['price']) ? floatval($item['price']) : 0;
                $p_name = sanitize_text_field($item['name']);
                $v_name = sanitize_text_field($item['variant_name']);
                $v_code = isset($item['variant_code']) ? sanitize_text_field($item['variant_code']) : '';

                $item_id = $order->add_product(null, $qty, array(
                    'name'     => $p_name . ' (' . $v_name . ')',
                    'subtotal' => $price * $qty,
                    'total'    => $price * $qty,
                ));

                // Add custom item metadata
                if ($item_id) {
                    wc_add_order_item_meta($item_id, 'কালার (Color)', $v_name);
                    if (!empty($v_code)) {
                        wc_add_order_item_meta($item_id, 'প্রোডাক্ট কোড (Code)', $v_code);
                    }
                }

                $total_qty += $qty;
                $items_subtotal += ($price * $qty);
            }

            // Combo Discount (if 2 or more bags, give ৳100 discount)
            if ($total_qty >= 2) {
                $fee_item = new WC_Order_Item_Fee();
                $fee_item->set_name('🎁 কম্বো ডিসকাউন্ট (যেকোনো ২টি ব্যাগ)');
                $fee_item->set_amount(-100);
                $fee_item->set_total(-100);
                $order->add_item($fee_item);
            }

            // Coupon discount
            if (!empty($coupon) && strtoupper($coupon) === 'THOLI50') {
                $coupon_fee = new WC_Order_Item_Fee();
                $coupon_fee->set_name('কুপন ডিসকাউন্ট (THOLI50)');
                $coupon_fee->set_amount(-50);
                $coupon_fee->set_total(-50);
                $order->add_item($coupon_fee);
            }

            // Add Shipping
            $shipping_item = new WC_Order_Item_Shipping();
            $shipping_item->set_method_title($shipping_title);
            $shipping_item->set_total($shipping_fee);
            $order->add_item($shipping_item);

            // Set Billing & Shipping Address
            $address_data = array(
                'first_name' => $name,
                'last_name'  => '',
                'company'    => '',
                'email'      => 'customer_' . $phone . '@choynoy.com',
                'phone'      => $phone,
                'address_1'  => $address,
                'address_2'  => '',
                'city'       => $district,
                'state'      => '',
                'postcode'   => '',
                'country'    => 'BD'
            );

            $order->set_address($address_data, 'billing');
            $order->set_address($address_data, 'shipping');

            // Payment method: Cash on Delivery
            $order->set_payment_method('cod');
            $order->set_payment_method_title('ক্যাশ অন ডেলিভারি (Cash on Delivery)');

            if (!empty($notes)) {
                $order->set_customer_note($notes);
            }

            $order->calculate_totals();
            $order->update_status('processing', 'থলি ১-ক্লিক ল্যান্ডিং পেজ থেকে নতুন অর্ডার প্লেসড হয়েছে।');

            wp_send_json_success(array(
                'order_id'     => $order->get_id(),
                'order_number' => $order->get_order_number(),
                'total'        => $order->get_total(),
                'currency'     => '৳',
                'message'      => 'আপনার অর্ডারটি সফলভাবে গ্রহণ করা হয়েছে!'
            ));

        } catch (Exception $e) {
            wp_send_json_error(array('message' => 'অর্ডার প্রসেস করতে সমস্যা হয়েছে: ' . $e->getMessage()));
        }
    } else {
        // Fallback if WooCommerce is not yet active
        $simulated_id = 'TH-' . rand(100000, 999999);
        wp_send_json_success(array(
            'order_id'     => $simulated_id,
            'order_number' => $simulated_id,
            'total'        => isset($_POST['grand_total']) ? $_POST['grand_total'] : 0,
            'currency'     => '৳',
            'message'      => 'অর্ডারটি সফলভাবে গ্রহণ করা হয়েছে!'
        ));
    }
}
add_action('wp_ajax_tholi_submit_order', 'tholi_ajax_submit_order_handler');
add_action('wp_ajax_nopriv_tholi_submit_order', 'tholi_ajax_submit_order_handler');

/**
 * 4. Shortcode: [tholi_landing_page]
 * Allows inserting the entire landing page into any Page / Post / Elementor template!
 */
function tholi_landing_page_shortcode() {
    ob_start();
    get_template_part('template-parts/hero');
    get_template_part('template-parts/showcase');
    get_template_part('template-parts/combo-builder');
    get_template_part('template-parts/features');
    get_template_part('template-parts/checkout-form');
    get_template_part('template-parts/reviews');
    get_template_part('template-parts/faq');
    get_template_part('template-parts/order-modal');
    return ob_get_clean();
}
add_shortcode('tholi_landing_page', 'tholi_landing_page_shortcode');
