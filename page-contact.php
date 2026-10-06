<?php
/**
 * Template Name: Contact Page
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
            <strong>যোগাযোগ</strong>
        </div>
        <h1 class="tholi-page-title">আমাদের সাথে যোগাযোগ করুন</h1>
        <p class="tholi-page-subtitle">
            অর্ডার সংক্রান্ত যেকোনো তথ্য, বাল্ক অর্ডার কিংবা সাপোর্টের জন্য সরাসরি কল বা হোয়াটসঅ্যাপে মেসেজ দিন।
        </p>
    </div>
</div>

<main class="tholi-inner-content">
    <div class="tholi-container">
        <div class="tholi-contact-grid">
            
            <!-- Left Info Column -->
            <div class="tholi-contact-info-card">
                <h3 style="font-size: 20px; font-weight: 800; color: #2e1d11; margin-bottom: 24px;">কাস্টমার কেয়ার ইনফরমেশন</h3>
                
                <div class="tholi-contact-item">
                    <div class="tholi-contact-icon">📞</div>
                    <div class="tholi-contact-text">
                        <strong>হটলাইন নম্বর</strong>
                        <a href="tel:8801793648214">01793-648214</a>
                        <span style="display: block; font-size: 11px; color: #8a7566;">(সকাল ৯:০০ টা - রাত ১১:০০ টা)</span>
                    </div>
                </div>

                <div class="tholi-contact-item">
                    <div class="tholi-contact-icon">💬</div>
                    <div class="tholi-contact-text">
                        <strong>অফিসিয়াল হোয়াটসঅ্যাপ</strong>
                        <a href="https://wa.me/8801793648214" target="_blank">+880 1793-648214</a>
                        <span style="display: block; font-size: 11px; color: #15803d; font-weight: 600;">ইনস্ট্যান্ট রিপ্লাই পাবেন</span>
                    </div>
                </div>

                <div class="tholi-contact-item">
                    <div class="tholi-contact-icon">📍</div>
                    <div class="tholi-contact-text">
                        <strong>হেড অফিস ও ডিসপ্যাচ হাব</strong>
                        <span>ধানমন্ডি, ঢাকা, বাংলাদেশ</span>
                        <span style="display: block; font-size: 11px; color: #8a7566;">সারা দেশে হোম ডেলিভারি হাব</span>
                    </div>
                </div>

                <div class="tholi-contact-item">
                    <div class="tholi-contact-icon">✉️</div>
                    <div class="tholi-contact-text">
                        <strong>ইমেইল সাপোর্ট</strong>
                        <a href="mailto:support@choynoy.com">support@choynoy.com</a>
                    </div>
                </div>

                <div style="margin-top: 30px; padding: 16px; background: #faf4ee; border-radius: 14px; border: 1px solid #ebd8c6; text-align: center;">
                    <a href="https://wa.me/8801793648214" target="_blank" class="tholi-btn-main" style="display: block; text-decoration: none; padding: 12px;">
                        💬 সরাসরি হোয়াটসঅ্যাপে চ্যাট করুন
                    </a>
                </div>
            </div>

            <!-- Right Form Column -->
            <div class="tholi-content-card">
                <h3 style="font-size: 20px; font-weight: 800; color: #2e1d11; margin-bottom: 8px;">একটি মেসেজ পাঠান</h3>
                <p style="font-size: 13px; color: #7d6756; margin-bottom: 24px;">আপনার যেকোনো জিজ্ঞাসা বা মতামত জানাতে নিচের ফর্মটি পূরণ করুন:</p>

                <form id="tholi-contact-form" onsubmit="event.preventDefault(); alert('ধন্যবাদ! আপনার মেসেজটি আমরা পেয়েছি। দ্রুত যোগাযোগ করা হবে।');">
                    <div class="tholi-field-group">
                        <label for="c-name">আপনার নাম <span class="tholi-req">*</span></label>
                        <input type="text" id="c-name" required class="tholi-input" placeholder="যেমন: আয়েশা সিদ্দিকা">
                    </div>

                    <div class="tholi-field-group">
                        <label for="c-phone">মোবাইল নম্বর <span class="tholi-req">*</span></label>
                        <input type="tel" id="c-phone" required class="tholi-input" placeholder="017XXXXXXXX">
                    </div>

                    <div class="tholi-field-group">
                        <label for="c-subject">বিষয়</label>
                        <select id="c-subject" class="tholi-select">
                            <option value="order">অর্ডার সংক্রান্ত তথ্য</option>
                            <option value="delivery">ডেলিভারি ট্র্যাকিং সাহায্য</option>
                            <option value="return">রিটার্ন বা এক্সচেঞ্জ রিকোয়েস্ট</option>
                            <option value="wholesale">হোলসেল / বাল্ক অর্ডার</option>
                            <option value="other">অন্যান্য জিজ্ঞাসা</option>
                        </select>
                    </div>

                    <div class="tholi-field-group">
                        <label for="c-msg">মেসেজ লিখুন <span class="tholi-req">*</span></label>
                        <textarea id="c-msg" rows="4" required class="tholi-textarea" placeholder="আপনার বার্তা বিস্তারিত লিখুন..."></textarea>
                    </div>

                    <button type="submit" class="tholi-btn-main" style="width: 100%; padding: 14px; font-size: 15px;">
                        ✉️ মেসেজ পাঠান
                    </button>
                </form>
            </div>

        </div>
    </div>
</main>

<?php
get_footer();
