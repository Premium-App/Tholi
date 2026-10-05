<?php
/**
 * Order Success Modal Template Part
 */
?>
<div class="tholi-modal-overlay" id="tholi-success-modal" style="display: none;">
    <div class="tholi-modal-box">
        
        <button type="button" class="tholi-modal-close" id="modal-close-btn">✕</button>

        <div class="tholi-modal-header">
            <div class="tholi-modal-success-icon">✓</div>
            <span class="tholi-modal-badge">অর্ডার সফল হয়েছে!</span>
            <h3 id="modal-cust-name">ধন্যবাদ!</h3>
            <p>অর্ডার নং: <strong id="modal-order-id" style="color: #8d5624;">#TH-102938</strong></p>
        </div>

        <!-- Tracking Timeline -->
        <div class="tholi-track-bar">
            <span class="tholi-track-title">অর্ডার ট্র্যাকিং স্ট্যাটাস:</span>
            <div class="tholi-track-steps">
                <div class="tholi-t-step active">
                    <span class="tholi-t-num">✓</span>
                    <small>অর্ডার প্লেসড</small>
                </div>
                <div class="tholi-t-step active">
                    <span class="tholi-t-num">২</span>
                    <small>ফোন কনফার্ম</small>
                </div>
                <div class="tholi-t-step">
                    <span class="tholi-t-num">৩</span>
                    <small>কুরিয়ার ডেলিভারি</small>
                </div>
                <div class="tholi-t-step">
                    <span class="tholi-t-num">৪</span>
                    <small>পণ্য রিসিভ</small>
                </div>
            </div>
        </div>

        <!-- Order Summary Breakdown -->
        <div class="tholi-modal-details">
            <div class="tholi-md-header">
                <strong>অর্ডারকৃত আইটেম:</strong>
            </div>
            <div class="tholi-md-items" id="modal-items-list">
                <!-- Dynamically populated -->
            </div>
            <div class="tholi-md-costs">
                <div class="tholi-md-row">
                    <span>ডেলিভারি চার্জ:</span>
                    <span id="modal-shipping-fee">৳৮০</span>
                </div>
                <div class="tholi-md-row tholi-md-total">
                    <span>সর্বমোট প্রদেয় (ক্যাশ অন ডেলিভারি):</span>
                    <strong id="modal-grand-total">৳১,১৭৯</strong>
                </div>
            </div>
        </div>

        <!-- Delivery address info -->
        <div class="tholi-modal-shipping-info">
            <p><strong>প্রাপক:</strong> <span id="modal-recipient"></span></p>
            <p><strong>ঠিকানা:</strong> <span id="modal-address"></span></p>
            <small style="color: #15803d; font-weight: 700;">💵 ক্যাশ অন ডেলিভারি (পণ্য দেখে মূল্য পরিশোধ করবেন)</small>
        </div>

        <!-- Actions -->
        <div class="tholi-modal-actions">
            <a href="#" id="modal-wa-btn" target="_blank" class="tholi-btn-modal-wa">
                💬 হোয়াটসঅ্যাপে অর্ডার কনফার্মেশন পাঠান
            </a>
            <button type="button" class="tholi-btn-modal-print" onclick="window.print()">
                🖨️ ইনভয়েস প্রিন্ট বা সেভ করুন
            </button>
        </div>

    </div>
</div>
