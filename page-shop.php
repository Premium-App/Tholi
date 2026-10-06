<?php
/**
 * Template Name: Shop / All Products Page
 *
 * @package Tholi
 */

get_header();
?>

<div class="tholi-page-hero">
    <div class="tholi-container">
        <div class="tholi-breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">হোম</a>
            <span>/</span>
            <strong>সব কালেকশন</strong>
        </div>
        <h1 class="tholi-page-title">প্রিমিয়াম উইমেন্স ব্যাগ শপ</h1>
        <p class="tholi-page-subtitle">
            অফিস, কলেজ কিংবা ক্যাজুয়াল ভ্রমণের জন্য ট্রেন্ডি ও রুচিশীল লাক্সারি ব্যাগের সম্পূর্ণ কালেকশন। ১০০% ক্যাশ অন ডেলিভারি।
        </p>
    </div>
</div>

<main class="tholi-inner-content">
    <div class="tholi-container">
        
        <!-- Category Filters -->
        <div class="tholi-shop-toolbar">
            <div class="tholi-filter-tags">
                <a href="#all" class="tholi-filter-btn active" data-filter="all">সব ব্যাগ (১৩টি ভ্যারিয়েন্ট)</a>
                <a href="#nova" class="tholi-filter-btn" data-filter="nova-tote">নোভা টোট ব্যাগ (৳১,০৯৯)</a>
                <a href="#aura" class="tholi-filter-btn" data-filter="aura-shoulder">অরা শোল্ডার ব্যাগ (৳১,১৯৯)</a>
                <a href="#knot" class="tholi-filter-btn" data-filter="knot-crossbody">নট ক্রস বডি ব্যাগ (৳৭০০)</a>
            </div>
            <div style="font-size: 13px; color: #7d6756; font-weight: 600;">
                📦 সারা বাংলাদেশে হোম ডেলিভারি
            </div>
        </div>

        <!-- Product Grid -->
        <div class="tholi-products-container" id="tholi-products-list">
            <!-- Rendered by tholi-app.js -->
        </div>

        <!-- Special Combo Banner -->
        <div style="margin-top: 40px; background: linear-gradient(135deg, #fef3c7, #faf4ee); border: 1px dashed #d49b28; border-radius: 20px; padding: 30px; text-align: center;">
            <h3 style="font-size: 20px; font-weight: 800; color: #8d5624; margin-bottom: 8px;">🎁 স্পেশাল কম্বো অফার!</h3>
            <p style="font-size: 14px; color: #665040; margin-bottom: 16px;">যেকোনো ২টি বা তার বেশি ব্যাগ একসাথে অর্ডার করলেই সাথে সাথে অতিরিক্ত ৳১০০ ক্যাশ ডিসকাউন্ট!</p>
            <a href="<?php echo esc_url(home_url('/#combo-deal')); ?>" class="tholi-btn-main" style="display: inline-block; text-decoration: none; padding: 10px 24px;">
                কম্বো বিল্ডার ওপেন করুন →
            </a>
        </div>

    </div>
</main>

<?php
get_footer();
