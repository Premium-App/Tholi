<?php
/**
 * 1-Step Instant Cash on Delivery Checkout Form Template Part
 */
?>
<section class="tholi-checkout-section" id="checkout">
    <div class="tholi-container">
        
        <div class="tholi-section-header">
            <span class="tholi-sub-pill" style="background: #8d5624; color: #fff;">🚚 ১-ক্লিক ক্যাশ অন ডেলিভারি</span>
            <h2 class="tholi-section-title">সহজেই অর্ডার কনফার্ম করুন</h2>
            <p class="tholi-section-desc">
                নিচের ফর্মটি পূরণ করে অর্ডার করুন। কোনো অগ্রিম পেমেন্ট নেই — পার্সেল হাতে পেয়ে দেখে মূল্য পরিশোধ করবেন।
            </p>
        </div>

        <div class="tholi-checkout-wrapper">
            
            <!-- Left Form Details -->
            <div class="tholi-checkout-card tholi-form-card">
                <div class="tholi-card-title">
                    <span class="tholi-step-num">১</span>
                    <h3>ডেলিভারি ঠিকানা ও যোগাযোগের তথ্য</h3>
                </div>

                <form id="tholi-order-form">
                    
                    <!-- Customer Name -->
                    <div class="tholi-field-group">
                        <label for="cust-name">আপনার সম্পূর্ণ নাম <span class="tholi-req">*</span></label>
                        <input type="text" id="cust-name" name="customer_name" placeholder="যেমন: ফারহানা আহমেদ" required class="tholi-input">
                    </div>

                    <!-- Customer Phone -->
                    <div class="tholi-field-group">
                        <label for="cust-phone">মোবাইল নম্বর <span class="tholi-req">*</span></label>
                        <input type="tel" id="cust-phone" name="customer_phone" placeholder="যেমন: 017XXXXXXXX" required class="tholi-input">
                        <small class="tholi-field-hint">ডেলিভারিম্যান এই নম্বরে কল করে পার্সেল বুঝিয়ে দেবেন।</small>
                    </div>

                    <!-- Shipping Zone Radios -->
                    <div class="tholi-field-group">
                        <label>ডেলিভারি এলাকা নির্বাচন করুন: <span class="tholi-req">*</span></label>
                        <div class="tholi-zone-grid">
                            <label class="tholi-zone-opt active" id="opt-zone-dhaka">
                                <input type="radio" name="shipping_zone" value="0" checked>
                                <div class="tholi-zone-info">
                                    <strong>🏙️ ঢাকার সিটির ভিতর</strong>
                                    <small>২৪–৪৮ ঘণ্টার মধ্যে ডেলিভারি</small>
                                </div>
                                <span class="tholi-zone-price">৳৮০</span>
                            </label>

                            <label class="tholi-zone-opt" id="opt-zone-outside">
                                <input type="radio" name="shipping_zone" value="1">
                                <div class="tholi-zone-info">
                                    <strong>🌍 ঢাকার বাইরে সারা দেশ</strong>
                                    <small>২–৩ কার্যদিবসের মধ্যে ডেলিভারি</small>
                                </div>
                                <span class="tholi-zone-price">৳১৫০</span>
                            </label>
                        </div>
                    </div>

                    <!-- District Dropdown -->
                    <div class="tholi-field-group">
                        <label for="cust-district">আপনার জেলা: <span class="tholi-req">*</span></label>
                        <select id="cust-district" name="customer_district" class="tholi-select">
                            <!-- Populated with 64 Bangladesh districts via JS -->
                        </select>
                    </div>

                    <!-- Detailed Address -->
                    <div class="tholi-field-group">
                        <label for="cust-address">সম্পূর্ণ ঠিকানা (বাসা নং, রোড, থানা, এলাকা) <span class="tholi-req">*</span></label>
                        <textarea id="cust-address" name="customer_address" rows="2" placeholder="যেমন: বাসা ১২, রোড ৫, ব্লক সি, ধানমন্ডি, ঢাকা" required class="tholi-textarea"></textarea>
                    </div>

                    <!-- Payment Method Selector -->
                    <div class="tholi-field-group tholi-payment-selector">
                        <label>পেমেন্ট মেথড নির্বাচন করুন: <span class="tholi-req">*</span></label>
                        <div class="tholi-payment-options">
                            <label class="tholi-pay-opt active" id="pay-opt-cod">
                                <input type="radio" name="payment_method" value="cod" checked>
                                <span class="tholi-pay-opt-icon">💵</span>
                                <div class="tholi-pay-opt-text">
                                    <strong>ক্যাশ অন ডেলিভারি (COD)</strong>
                                    <small>পণ্য হাতে পেয়ে দেখে টাকা দিন</small>
                                </div>
                            </label>

                            <label class="tholi-pay-opt" id="pay-opt-bkash">
                                <input type="radio" name="payment_method" value="bkash">
                                <span class="tholi-pay-opt-icon">📱</span>
                                <div class="tholi-pay-opt-text">
                                    <strong>বিকাশ / নগদ পেমেন্ট</strong>
                                    <small>অগ্রিম পেমেন্টে স্পেশাল গিফট</small>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Order Notes (Optional) -->
                    <div class="tholi-field-group">
                        <label for="cust-notes">বিশেষ নির্দেশনা (ঐচ্ছিক)</label>
                        <input type="text" id="cust-notes" name="customer_notes" placeholder="যেমন: ডেলিভারির আগে কল করবেন..." class="tholi-input">
                    </div>

                </form>
            </div>

            <!-- Right Cart Summary -->
            <div class="tholi-checkout-card tholi-cart-card">
                <div class="tholi-card-title">
                    <span class="tholi-step-num">২</span>
                    <h3>অর্ডারকৃত ব্যাগ ও বিলিং হিসাব</h3>
                </div>

                <!-- Cart Items Container -->
                <div class="tholi-cart-items-list" id="tholi-cart-items">
                    <!-- Populated dynamically via JS -->
                </div>

                <!-- Incentive notification -->
                <div class="tholi-combo-hint-banner" id="tholi-combo-hint" style="display: none;">
                    🎁 যেকোনো ২টি ব্যাগ নিলে সাথে সাথে <strong>৳১০০ ক্যাশ ডিসকাউন্ট</strong> পাবেন!
                </div>

                <!-- Coupon Input -->
                <div class="tholi-coupon-row">
                    <input type="text" id="coupon-code-input" placeholder="কুপন কোড (যেমন: THOLI50)" class="tholi-input-coupon">
                    <button type="button" id="coupon-apply-btn" class="tholi-btn-coupon">প্রয়োগ</button>
                </div>
                <div id="coupon-msg" class="tholi-coupon-feedback"></div>

                <!-- Financials Breakdown -->
                <div class="tholi-price-breakdown">
                    <div class="tholi-b-row">
                        <span>ব্যাগের সাবটোটাল:</span>
                        <strong id="summary-subtotal">৳১,০৯৯</strong>
                    </div>
                    <div class="tholi-b-row tholi-discount-row" id="row-combo-discount" style="display: none;">
                        <span>🎁 কম্বো ডিসকাউন্ট (২+ ব্যাগ):</span>
                        <strong id="summary-combo">-৳১০০</strong>
                    </div>
                    <div class="tholi-b-row tholi-discount-row" id="row-coupon-discount" style="display: none;">
                        <span>🏷️ কুপন ডিসকাউন্ট:</span>
                        <strong id="summary-coupon">-৳০</strong>
                    </div>
                    <div class="tholi-b-row">
                        <span>হোম ডেলিভারি চার্জ:</span>
                        <strong id="summary-shipping">৳৮০</strong>
                    </div>
                    <div class="tholi-b-row tholi-total-row">
                        <span>সর্বমোট প্রদেয় টাকা:</span>
                        <strong id="summary-grand-total">৳১,১৭৯</strong>
                    </div>
                </div>

                <!-- Place Order Button -->
                <button type="button" class="tholi-btn-place-order" id="btn-submit-order">
                    <span class="tholi-btn-icon">✓</span>
                    <span id="btn-submit-text">অর্ডার কনফার্ম করুন (ক্যাশ অন ডেলিভারি)</span>
                </button>

                <!-- Trust Guarantee Note -->
                <div class="tholi-cod-notice">
                    <p>💵 <strong>পণ্য হাতে পেয়ে টাকা পরিশোধ করবেন।</strong></p>
                    <p>🚚 অর্ডারের পর আমাদের টিম ফোন দিয়ে ভেরিফাই করবে।</p>
                </div>

            </div>

        </div>

    </div>
</section>
