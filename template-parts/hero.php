<?php
/**
 * Hero Section Template Part
 */
$theme_uri = get_template_directory_uri();
?>
<section class="tholi-hero-section" id="hero">
    <div class="tholi-container">
        
        <!-- Category Quick Switcher Pills -->
        <div class="tholi-pill-nav">
            <span class="tholi-pill-label">কালেকশন দেখুন:</span>
            <button class="tholi-pill active" data-product="nova-tote">নোভা টোট ব্যাগ (৳১,০৯৯)</button>
            <button class="tholi-pill" data-product="aura-shoulder">অরা শোল্ডার ব্যাগ (৳১,১৯৯)</button>
            <button class="tholi-pill" data-product="knot-crossbody">নট ক্রস বডি ব্যাগ (৳৭০০)</button>
        </div>

        <div class="tholi-hero-grid">
            
            <!-- Left Column Content -->
            <div class="tholi-hero-text">
                
                <div class="tholi-badge-row">
                    <span class="tholi-tag-hot">🔥 হট বেস্টসেলার</span>
                    <span class="tholi-tag-cod">✓ ক্যাশ অন ডেলিভারি</span>
                    <span class="tholi-tag-stock">স্টক সীমিত</span>
                </div>

                <h1 class="tholi-hero-title" id="hero-title">NOVA Tote Bag</h1>
                <p class="tholi-hero-subtitle" id="hero-subtitle">
                    স্টাইলিশ, প্রিমিয়াম এবং প্রতিদিনের জন্য পারফেক্ট — প্রিমিয়াম সিনথেটিক লেদার ও সিগনেচার সিল্ক স্কার্ফ ডিজাইন।
                </p>

                <!-- Hero Price Card -->
                <div class="tholi-hero-price-card">
                    <div class="tholi-price-line">
                        <span class="tholi-current-price" id="hero-price">৳১,০৯৯</span>
                        <span class="tholi-old-price" id="hero-old-price">৳১,৬৫০</span>
                        <span class="tholi-discount-badge" id="hero-discount">৩৩% ছাড়!</span>
                    </div>
                    <p class="tholi-shipping-note">
                        📦 ডেলিভারি চার্জ: ঢাকায় ৳৮০ · ঢাকার বাইরে ৳১৫০ (পণ্য হাতে পেয়ে টাকা দিন)
                    </p>
                </div>

                <!-- Color Swatch Row -->
                <div class="tholi-swatches-wrap">
                    <div class="tholi-swatch-header">
                        <span>কালার পছন্দ করুন:</span>
                        <strong id="hero-variant-label" style="color: #8d5624;">মাস্টার্ড ইয়েলো (Mustard Yellow)</strong>
                        <span class="tholi-code-pill" id="hero-code-badge">কোড: TH-NV01</span>
                    </div>
                    <div class="tholi-swatches-list" id="hero-swatches">
                        <!-- Populated by tholi-app.js -->
                    </div>
                </div>

                <!-- CTAs -->
                <div class="tholi-hero-ctas">
                    <button class="tholi-btn-main" id="hero-order-now-btn">
                        🛒 এখনই অর্ডার করুন (ক্যাশ অন ডেলিভারি) →
                    </button>
                    <a href="#collection" class="tholi-btn-secondary">
                        বিস্তারিত দেখুন ↓
                    </a>
                </div>

                <!-- Trust Points -->
                <div class="tholi-hero-trust-bar">
                    <span>🚚 সারা দেশে হোম ডেলিভারি</span>
                    <span>🛡️ চেক করে পেমেন্ট</span>
                    <span>🔄 ৩ দিনে সহজ এক্সচেঞ্জ</span>
                </div>

            </div>

            <!-- Right Column Visual Card -->
            <div class="tholi-hero-visual">
                <div class="tholi-visual-card">
                    
                    <span class="tholi-visual-sale-tag" id="hero-float-discount">৩৩% OFF</span>
                    <span class="tholi-visual-code-tag" id="hero-float-code">TH-NV01</span>

                    <div class="tholi-img-container">
                        <img 
                            src="<?php echo esc_url($theme_uri . '/assets/products/nova_mustard.jpg'); ?>" 
                            alt="NOVA Tote Bag" 
                            id="hero-main-img" 
                            class="tholi-main-photo"
                        />
                    </div>

                    <div class="tholi-visual-caption">
                        <div>
                            <strong id="hero-caption-name">থলি নোভা টোট ব্যাগ</strong>
                            <span id="hero-caption-color">কালার: মাস্টার্ড ইয়েলো</span>
                        </div>
                        <div class="tholi-caption-price">
                            <span id="hero-caption-price">৳১,০৯৯</span>
                            <small class="tholi-stock-badge">ইন-স্টক (রেডি)</small>
                        </div>
                    </div>

                </div>

                <!-- Floating Star Card -->
                <div class="tholi-float-rating">
                    <span class="tholi-rating-badge">★ ৪.৯</span>
                    <div>
                        <div class="tholi-stars">★★★★★</div>
                        <small>৩৮০+ সন্তুষ্ট কাস্টমার রিভিউ</small>
                    </div>
                </div>
            </div>

        </div>

        <!-- 4 Stats Counters -->
        <div class="tholi-stats-banner">
            <div class="tholi-stat-item">
                <span class="tholi-stat-num">২,৫০০+</span>
                <span class="tholi-stat-lbl">ব্যাগ বিক্রি হয়েছে</span>
            </div>
            <div class="tholi-stat-item">
                <span class="tholi-stat-num">৪.৯ ★</span>
                <span class="tholi-stat-lbl">কাস্টমার স্যাটিসফ্যাকশন</span>
            </div>
            <div class="tholi-stat-item">
                <span class="tholi-stat-num">১০০%</span>
                <span class="tholi-stat-lbl">ক্যাশ অন ডেলিভারি</span>
            </div>
            <div class="tholi-stat-item">
                <span class="tholi-stat-num">২৪–৪৮ ঘণ্টা</span>
                <span class="tholi-stat-lbl">ঢাকায় দ্রুততম ডেলিভারি</span>
            </div>
        </div>

    </div>
</section>
