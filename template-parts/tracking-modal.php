<?php
/**
 * Order Tracking Modal Template Part
 */
?>
<div class="tholi-modal-overlay" id="tholi-tracking-modal" style="display: none;">
    <div class="tholi-modal-box">
        <button type="button" class="tholi-modal-close" id="track-modal-close-btn">✕</button>

        <div class="tholi-modal-header">
            <div class="tholi-modal-success-icon" style="background: #fef3c7; color: #8d5624;">🔍</div>
            <span class="tholi-modal-badge">লাইভ পার্সেল ট্র্যাকিং</span>
            <h3>আপনার অর্ডার ট্র্যাক করুন</h3>
            <p>আপনার অর্ডার আইডি বা মোবাইল নম্বর দিয়ে বর্তমান অবস্থা জানুন।</p>
        </div>

        <div class="tholi-track-search-box">
            <input type="text" id="track-query-input" placeholder="অর্ডার আইডি (যেমন: TH-102938) বা ফোন নং..." class="tholi-track-input">
            <button type="button" id="track-search-btn" class="tholi-track-btn">খুঁজুন</button>
        </div>

        <div id="track-result-box" style="display: none;">
            <div class="tholi-track-bar" style="margin-top: 14px;">
                <span class="tholi-track-title" id="track-display-id" style="font-size: 13px;">অর্ডার #TH-849201</span>
                <div class="tholi-track-steps">
                    <div class="tholi-t-step active">
                        <span class="tholi-t-num">✓</span>
                        <small>কনফার্মড</small>
                    </div>
                    <div class="tholi-t-step active">
                        <span class="tholi-t-num">✓</span>
                        <small>প্যাকিং শেষ</small>
                    </div>
                    <div class="tholi-t-step active" id="track-step-courier">
                        <span class="tholi-t-num" style="background: #ea580c; color: #fff;">৩</span>
                        <small style="color: #ea580c; font-weight: 700;">কুরিয়ারে আছে</small>
                    </div>
                    <div class="tholi-t-step" id="track-step-delivery">
                        <span class="tholi-t-num">৪</span>
                        <small>ডেলিভার্ড</small>
                    </div>
                </div>
            </div>

            <div class="tholi-modal-shipping-info" style="margin-bottom: 10px;">
                <p><strong>বর্তমান অবস্থা:</strong> <span style="color: #ea580c; font-weight: 700;">পার্সেলটি আপনার জেলায় ডেলিভারির পথে রয়েছে</span></p>
                <p><strong>কুরিয়ার পার্টনার:</strong> Steadfast / Pathao Express</p>
                <p><strong>আনুমানিক ডেলিভারি:</strong> আগামী ২৪ ঘণ্টার মধ্যে</p>
            </div>
        </div>

        <div class="tholi-modal-actions" style="margin-top: 14px;">
            <a href="https://wa.me/8801793648214" target="_blank" class="tholi-btn-modal-wa">
                💬 কোনো সমস্যা হলে কাস্টমার সাপোর্টে মেসেজ দিন
            </a>
        </div>
    </div>
</div>

<!-- Image Lightbox Modal -->
<div class="tholi-lightbox-overlay" id="tholi-lightbox" style="display: none;">
    <div class="tholi-lightbox-card">
        <button type="button" class="tholi-modal-close" id="lightbox-close-btn" style="z-index: 10;">✕</button>
        <div class="tholi-lightbox-img-wrap">
            <img id="lightbox-img" src="" alt="Zoomed view">
        </div>
        <div class="tholi-lightbox-footer">
            <strong id="lightbox-title">থলি নোভা টোট ব্যাগ</strong>
            <button type="button" class="tholi-btn-main" id="lightbox-order-btn" style="padding: 8px 18px; font-size: 13px;">
                🛒 এখনই এই কালারটি অর্ডার করুন
            </button>
        </div>
    </div>
</div>
