<?php
/**
 * Template Name: Order Tracking Page
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
            <strong>ট্র্যাকিং</strong>
        </div>
        <h1 class="tholi-page-title">লাইভ পার্সেল ট্র্যাকিং</h1>
        <p class="tholi-page-subtitle">
            আপনার অর্ডার আইডি বা মোবাইল নম্বর দিয়ে ডেলিভারির বর্তমান অবস্থা জানুন।
        </p>
    </div>
</div>

<main class="tholi-inner-content">
    <div class="tholi-container">
        <div class="tholi-track-full-box">
            
            <div style="text-align: center; margin-bottom: 24px;">
                <div style="width: 56px; height: 56px; border-radius: 50%; background: #fef3c7; color: #8d5624; font-size: 26px; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                    🔍
                </div>
                <h3 style="font-size: 20px; font-weight: 800; color: #2e1d11; margin-bottom: 6px;">আপনার পার্সেল কোথায় আছে?</h3>
                <p style="font-size: 13px; color: #7d6756;">অর্ডার করার পর যে ট্র্যাকিং আইডি পেয়েছেন সেটি লিখুন:</p>
            </div>

            <form id="tholi-full-tracking-form" class="tholi-track-search-box" style="margin-bottom: 24px;">
                <input type="text" id="full-track-input" placeholder="অর্ডার আইডি (যেমন: TH-102938) বা ফোন নম্বর..." required class="tholi-track-input">
                <button type="submit" id="full-track-btn" class="tholi-track-btn">ট্র্যাক করুন</button>
            </form>

            <div id="full-tracking-result" style="display: none;">
                <div class="tholi-track-bar" style="margin-top: 14px; padding: 20px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid #ebd8c6; padding-bottom: 10px;">
                        <div>
                            <span class="tholi-track-title" id="full-track-id" style="font-size: 16px; text-align: left; margin: 0;">#TH-102938</span>
                            <small id="full-track-date" style="color: #7d6756;"></small>
                        </div>
                        <span style="background: #ecfdf5; color: #15803d; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 700;">কুরিয়ারে অন-ওয়ে</span>
                    </div>

                    <div class="tholi-track-steps">
                        <div class="tholi-t-step active">
                            <span class="tholi-t-num">✓</span>
                            <small>অর্ডার কনফার্মড</small>
                        </div>
                        <div class="tholi-t-step active">
                            <span class="tholi-t-num">✓</span>
                            <small>প্যাকিং শেষ</small>
                        </div>
                        <div class="tholi-t-step active">
                            <span class="tholi-t-num" style="background: #ea580c; color: #fff;">৩</span>
                            <small style="color: #ea580c; font-weight: 700;">কুরিয়ারে আছে</small>
                        </div>
                        <div class="tholi-t-step">
                            <span class="tholi-t-num">৪</span>
                            <small>ডেলিভার্ড</small>
                        </div>
                    </div>
                </div>

                <div class="tholi-modal-shipping-info" style="margin-top: 20px;">
                    <p><strong>বর্তমান অবস্থা:</strong> <span style="color: #ea580c; font-weight: 700;">পার্সেলটি আপনার স্থানীয় ডেলিভারি হাবে পৌঁছেছে</span></p>
                    <p><strong>কুরিয়ার পার্টনার:</strong> Steadfast Logistics / Pathao Express</p>
                    <p><strong>আনুমানিক ডেলিভারি সময়:</strong> আগামী ২৪ ঘণ্টার মধ্যে</p>
                    <p><strong>পেমেন্ট মোড:</strong> ক্যাশ অন ডেলিভারি (পণ্য হাতে পেয়ে দেখে টাকা দিন)</p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 30px; border-top: 1px solid var(--tholi-border); padding-top: 20px;">
                <p style="font-size: 12px; color: #7d6756; margin-bottom: 10px;">ট্র্যাকিং সংক্রান্ত কোনো সমস্যা হলে আমাদের হেল্পলাইনে যোগাযোগ করুন:</p>
                <a href="https://wa.me/8801793648214" target="_blank" class="tholi-btn-modal-wa" style="display: inline-block;">
                    💬 হোয়াটসঅ্যাপে সাপোর্ট প্রতিনিধিকে জানান
                </a>
            </div>

        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('tholi-full-tracking-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const input = document.getElementById('full-track-input').value.trim();
            if (!input) return;
            const btn = document.getElementById('full-track-btn');
            btn.textContent = 'খোঁজা হচ্ছে...';
            btn.disabled = true;

            setTimeout(function() {
                btn.textContent = 'ট্র্যাক করুন';
                btn.disabled = false;
                document.getElementById('full-track-id').textContent = input.startsWith('#') ? input : '#' + input;
                document.getElementById('full-track-date').textContent = new Date().toLocaleDateString('bn-BD', { day: 'numeric', month: 'long', year: 'numeric' });
                document.getElementById('full-tracking-result').style.display = 'block';
            }, 500);
        });
    }
});
</script>

<?php
get_footer();
