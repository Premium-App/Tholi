<?php
/**
 * 404 Page Template
 *
 * @package Tholi
 */

get_header();
?>

<div class="tholi-page-hero" style="padding: 70px 0;">
    <div class="tholi-container">
        <h1 class="tholi-page-title" style="font-size: 56px; color: #e6a860;">৪০৪</h1>
        <p class="tholi-page-subtitle" style="font-size: 18px; color: #fff;">দুঃখিত! পেজটি খুঁজে পাওয়া যায়নি</p>
    </div>
</div>

<main class="tholi-inner-content">
    <div class="tholi-container" style="max-width: 650px; text-align: center;">
        <div class="tholi-content-card">
            <div style="font-size: 48px; margin-bottom: 12px;">👜</div>
            <h3 style="font-size: 20px; font-weight: 800; color: #2e1d11; margin-bottom: 10px;">আপনি যে পেজটি খুঁজছেন তা স্থানান্তরিত বা মুছে ফেলা হয়েছে।</h3>
            <p style="font-size: 14px; color: #7d6756; margin-bottom: 24px;">আমাদের মূল কালেকশন দেখতে নিচের বাটনে ক্লিক করে হোম পেজে ফিরে যান:</p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="tholi-btn-main" style="display: inline-block; text-decoration: none; padding: 12px 28px;">
                হোম পেজে ফিরে যান →
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
