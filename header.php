<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class('tholi-body'); ?>>
<?php wp_body_open(); ?>

<!-- Top Luxury Announcement Banner -->
<div class="tholi-topbar">
    <div class="tholi-container tholi-topbar-inner">
        <div class="tholi-topbar-content">
            <span class="tholi-sparkle-icon">✨</span>
            <span>যেকোনো ২টি ব্যাগ নিলে <strong>৳১০০ অতিরিক্ত ছাড়</strong> · ক্যাশ অন ডেলিভারি সারা বাংলাদেশে 🇧🇩</span>
        </div>
        <div class="tholi-topbar-contact">
            <a href="tel:8801793648214">📞 01793-648214</a>
        </div>
    </div>
</div>

<!-- Main Sticky Header -->
<header class="tholi-header" id="tholi-main-header">
    <div class="tholi-container tholi-header-inner">
        
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="tholi-brand">
            <div class="tholi-brand-icon">থ</div>
            <div class="tholi-brand-text">
                <div class="tholi-brand-title">থলি <span class="tholi-badge-tag">Tholi</span></div>
                <div class="tholi-brand-sub">প্রিমিয়াম উইমেন্স ব্যাগ কালেকশন</div>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="tholi-nav">
            <a href="#nova-tote">নোভা টোট ব্যাগ</a>
            <a href="#aura-shoulder">অরা শোল্ডার ব্যাগ</a>
            <a href="#knot-crossbody">নট ক্রস বডি</a>
            <a href="#combo-deal" class="tholi-nav-combo">🎁 কম্বো ডিল (৳১০০ ছাড়)</a>
            <a href="#reviews">কাস্টমার রিভিউ</a>
        </nav>

        <!-- Right Action Buttons -->
        <div class="tholi-header-actions">
            <a href="https://wa.me/8801793648214" target="_blank" class="tholi-btn-wa">
                <span class="tholi-wa-icon">💬</span>
                <span class="tholi-wa-text">WhatsApp</span>
            </a>
            <a href="#checkout" class="tholi-btn-order">
                <span>অর্ডার করুন</span>
                <span class="tholi-cart-count" id="tholi-cart-badge">১</span>
            </a>
            <button class="tholi-mobile-toggle" id="tholi-mobile-menu-btn" aria-label="Menu">
                ☰
            </button>
        </div>

    </div>

    <!-- Mobile Drawer Menu -->
    <div class="tholi-mobile-drawer" id="tholi-mobile-drawer">
        <a href="#nova-tote" class="tholi-m-link">👜 নোভা টোট ব্যাগ</a>
        <a href="#aura-shoulder" class="tholi-m-link">💼 অরা শোল্ডার ব্যাগ</a>
        <a href="#knot-crossbody" class="tholi-m-link">🎀 নট ক্রস বডি</a>
        <a href="#combo-deal" class="tholi-m-link tholi-m-combo">🎁 কম্বো অফার (৳১০০ ছাড়)</a>
        <a href="#reviews" class="tholi-m-link">⭐ কাস্টমার রিভিউ</a>
        <a href="tel:8801793648214" class="tholi-m-link">📞 সরাসরি কল করুন (01793-648214)</a>
    </div>
</header>
