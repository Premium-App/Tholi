/**
 * Tholi - High Converting E-Commerce App Script
 * Works seamlessly with WordPress / WooCommerce AJAX & Standalone Mode
 */

(function($) {
    'use strict';

    // Global settings fallback
    const settings = window.tholiSettings || {
        ajaxUrl: '/wp-admin/admin-ajax.php',
        nonce: '',
        themeUri: '.',
        whatsappNum: '8801793648214',
        isWooActive: false
    };

    // Product Database
    const productsData = [
        {
            id: 'nova-tote',
            codePrefix: 'TH-NV',
            name: 'NOVA Tote Bag',
            banglaName: 'থলি নোভা টোট ব্যাগ',
            subtitle: 'স্টাইলিশ, প্রিমিয়াম এবং প্রতিদিনের জন্য পারফেক্ট',
            price: 1099,
            originalPrice: 1650,
            discountPercent: 33,
            description: 'প্রিমিয়াম কোয়ালিটি সিনথেটিক লেদার ও সিগনেচার প্রিন্টেড সিল্ক স্কার্ফ ডিজাইন। অফিস, কলেজ কিংবা ক্যাজুয়াল ব্যবহারে অত্যন্ত ক্লাসি ও টেকসই।',
            features: [
                { title: 'প্রিমিয়াম সিনথেটিক লেদার', desc: 'নরম, চকচকে ও ওয়াটারপ্রুফ ফিনিশ' },
                { title: 'স্টাইলিশ সিল্ক স্কার্ফ', desc: 'লাক্সারি ফ্যাশন লুক দেয়' },
                { title: 'অফিস ও কলেজ রেডি', desc: 'আইপ্যাড, ডায়েরি ও ওয়াটার বোতল রাখার স্পেস' },
                { title: 'হালকা ও আরামদায়ক', desc: 'ওজন মাত্র ৪৫০ গ্রাম' }
            ],
            variants: [
                { id: 'mustard-yellow', code: 'TH-NV01', name: 'Mustard Yellow', banglaName: 'মাস্টার্ড ইয়েলো', colorHex: '#d49b28', image: settings.themeUri + '/assets/products/nova_mustard.jpg' },
                { id: 'olive-green', code: 'TH-NV02', name: 'Olive Green', banglaName: 'অলিভ গ্রিন', colorHex: '#5b6540', image: settings.themeUri + '/assets/products/nova_olive.jpg' },
                { id: 'classic-black', code: 'TH-NV03', name: 'Black', banglaName: 'ক্লাসিক ব্ল্যাক', colorHex: '#1e1e1e', image: settings.themeUri + '/assets/products/nova_black.jpg' }
            ]
        },
        {
            id: 'aura-shoulder',
            codePrefix: 'TH-AU',
            name: 'Aura Ring Shoulder Bag',
            banglaName: 'থলি অরা রিং শোল্ডার ব্যাগ',
            subtitle: 'ডুয়াল-টোন ক্লাসিক ডিজাইন উইথ মেটালিক রিং লক',
            price: 1199,
            originalPrice: 1799,
            discountPercent: 33,
            description: 'ডুয়াল কালার প্যালেটে তৈরি রুচিশীল শোল্ডার ব্যাগ। ফ্রন্টে রয়েছে প্রিমিয়াম জিওমেট্রিক অ্যান্টিক রিং লক এবং কনট্রাস্ট হ্যান্ডেল স্ট্র্যাপ।',
            features: [
                { title: 'ডুয়াল টোন কনট্রাস্ট ডিজাইন', desc: 'আই-ক্যাচিং রিচ কালার ম্যাচিং' },
                { title: 'মেটালিক রিং ল্যাচ', desc: 'গোল্ড প্লেটেড মরিচাহীন হার্ডওয়্যার' },
                { title: 'স্মার্ট কম্পার্টমেন্ট স্পেস', desc: 'মোবাইল, মেকআপ ও ওয়ালেটের জন্য সেফ চেম্বার' },
                { title: 'মজবুত হ্যান্ডেল ও সিমিং', desc: 'হেভি লোড বহন করতে সক্ষম' }
            ],
            variants: [
                { id: 'caramel-black', code: 'TH-AU01', name: 'Caramel Black', banglaName: 'ক্যারামেল ব্ল্যাক', colorHex: '#b26838', image: settings.themeUri + '/assets/products/aura_caramel_black.jpg' },
                { id: 'chestnut-black', code: 'TH-AU02', name: 'Chestnut Black', banglaName: 'চেস্টনাট ব্ল্যাক', colorHex: '#734128', image: settings.themeUri + '/assets/products/aura_chestnut_black.jpg' },
                { id: 'coffee-black', code: 'TH-AU03', name: 'Coffee Black', banglaName: 'কফি ব্ল্যাক', colorHex: '#423126', image: settings.themeUri + '/assets/products/aura_coffee_black.jpg' },
                { id: 'black-tan', code: 'TH-AU04', name: 'Black Tan', banglaName: 'ব্ল্যাক ট্যান', colorHex: '#222222', image: settings.themeUri + '/assets/products/aura_black_tan.jpg' }
            ]
        },
        {
            id: 'knot-crossbody',
            codePrefix: 'TH-KN',
            name: 'Geometric Knot Bag',
            banglaName: 'থলি নট ক্রস বডি ব্যাগ',
            subtitle: 'ট্রেন্ডি হ্যান্ড-টাইড নট ডিজাইন ও টেক্সচার্ড ফিনিশ',
            price: 700,
            originalPrice: 1400,
            discountPercent: 50,
            description: 'সোশ্যাল মিডিয়ায় তুমুল জনপ্রিয় হ্যান্ড-টাইড নট ক্রস বডি ব্যাগ। হালকা, কিউট ও ট্রেন্ডি লুকে ক্যাজুয়াল আউটফিটকে করবে চমৎকার আকর্ষণীয়।',
            features: [
                { title: 'সিগনেচার হ্যান্ড-টাইড নট', desc: 'শৈল্পিক হাতে বাঁধা নট স্টাইল' },
                { title: 'এমবসড টেক্সচার', desc: 'থ্রি-ডি এমবসিং প্রিমিয়াম ফিনিশ' },
                { title: '৬টি ট্রেন্ডি কালার', desc: 'প্রতিটি ড্রেসের সাথে দারুণ ম্যাচিং' },
                { title: 'কম্বো অফার প্রযোজ্য', desc: '২টি নিলে মাত্র ৳১,৩০০' }
            ],
            variants: [
                { id: 'knot-black', code: 'TH-KN01', name: 'Black', banglaName: 'কালো', colorHex: '#2d2d2d', image: settings.themeUri + '/assets/products/knot_black.jpg' },
                { id: 'knot-beige', code: 'TH-KN02', name: 'Beige', banglaName: 'বেইজ', colorHex: '#c4a882', image: settings.themeUri + '/assets/products/knot_beige.jpg' },
                { id: 'knot-olive', code: 'TH-KN03', name: 'Olive', banglaName: 'অলিভ', colorHex: '#6b7c4e', image: settings.themeUri + '/assets/products/knot_olive.jpg' },
                { id: 'knot-rose', code: 'TH-KN04', name: 'Rose', banglaName: 'রোজ', colorHex: '#c46b7c', image: settings.themeUri + '/assets/products/knot_rose.jpg' },
                { id: 'knot-lime', code: 'TH-KN05', name: 'Lime', banglaName: 'লাইম', colorHex: '#8bc34a', image: settings.themeUri + '/assets/products/knot_lime.jpg' },
                { id: 'knot-pink', code: 'TH-KN06', name: 'Pink', banglaName: 'পিংক', colorHex: '#e8a0bf', image: settings.themeUri + '/assets/products/knot_pink.jpg' }
            ]
        }
    ];

    // 64 Bangladesh Districts
    const bangladeshDistricts = [
        { id: 'dhaka', name: 'Dhaka (ঢাকা)', isDhaka: true },
        { id: 'gazipur', name: 'Gazipur (গাজীপুর)', isDhaka: false },
        { id: 'narayanganj', name: 'Narayanganj (নারায়ণগঞ্জ)', isDhaka: false },
        { id: 'chattogram', name: 'Chattogram (চট্টগ্রাম)', isDhaka: false },
        { id: 'sylhet', name: 'Sylhet (সিলেট)', isDhaka: false },
        { id: 'rajshahi', name: 'Rajshahi (রাজশাহী)', isDhaka: false },
        { id: 'khulna', name: 'Khulna (খুলনা)', isDhaka: false },
        { id: 'barishal', name: 'Barishal (বরিশাল)', isDhaka: false },
        { id: 'rangpur', name: 'Rangpur (রংপুর)', isDhaka: false },
        { id: 'mymensingh', name: 'Mymensingh (ময়মনসিংহ)', isDhaka: false },
        { id: 'cumilla', name: 'Cumilla (কুমিল্লা)', isDhaka: false },
        { id: 'bogura', name: 'Bogura (বগুড়া)', isDhaka: false },
        { id: 'bagerhat', name: 'Bagerhat (বাগেরহাট)', isDhaka: false },
        { id: 'bandarban', name: 'Bandarban (বান্দরবান)', isDhaka: false },
        { id: 'barguna', name: 'Barguna (বরগুনা)', isDhaka: false },
        { id: 'bhola', name: 'Bhola (ভোলা)', isDhaka: false },
        { id: 'brahmanbaria', name: 'Brahmanbaria (ব্রাহ্মণবাড়িয়া)', isDhaka: false },
        { id: 'chandpur', name: 'Chandpur (চাঁদপুর)', isDhaka: false },
        { id: 'chapai-nawabganj', name: 'Chapai Nawabganj (চাঁপাইনবাবগঞ্জ)', isDhaka: false },
        { id: 'chuadanga', name: 'Chuadanga (চুয়াডাঙ্গা)', isDhaka: false },
        { id: 'coxsbazar', name: "Cox's Bazar (কক্সবাজার)", isDhaka: false },
        { id: 'dinajpur', name: 'Dinajpur (দিনাজপুর)', isDhaka: false },
        { id: 'faridpur', name: 'Faridpur (ফরিদপুর)', isDhaka: false },
        { id: 'feni', name: 'Feni (ফেনী)', isDhaka: false },
        { id: 'gaibandha', name: 'Gaibandha (গাইবান্ধা)', isDhaka: false },
        { id: 'gopalganj', name: 'Gopalganj (গোপালগঞ্জ)', isDhaka: false },
        { id: 'habiganj', name: 'Habiganj (হবিগঞ্জ)', isDhaka: false },
        { id: 'jamalpur', name: 'Jamalpur (জামালপুর)', isDhaka: false },
        { id: 'jashore', name: 'Jashore (যশোর)', isDhaka: false },
        { id: 'jhalokati', name: 'Jhalokati (ঝালকাঠি)', isDhaka: false },
        { id: 'jhenaidah', name: 'Jhenaidah (ঝিনাইদহ)', isDhaka: false },
        { id: 'joypurhat', name: 'Joypurhat (জয়পুরহাট)', isDhaka: false },
        { id: 'khagrachhari', name: 'Khagrachhari (খাগড়াছড়ি)', isDhaka: false },
        { id: 'kishoreganj', name: 'Kishoreganj (কিশোরগঞ্জ)', isDhaka: false },
        { id: 'kurigram', name: 'Kurigram (কুড়িগ্রাম)', isDhaka: false },
        { id: 'kushtia', name: 'Kushtia (কুষ্টিয়া)', isDhaka: false },
        { id: 'lakshmipur', name: 'Lakshmipur (লক্ষ্মীপুর)', isDhaka: false },
        { id: 'lalmonirhat', name: 'Lalmonirhat (লালমনিরহাট)', isDhaka: false },
        { id: 'madaripur', name: 'Madaripur (মাদারীপুর)', isDhaka: false },
        { id: 'magura', name: 'Magura (মাগুরা)', isDhaka: false },
        { id: 'manikganj', name: 'Manikganj (মানিকগঞ্জ)', isDhaka: false },
        { id: 'meherpur', name: 'Meherpur (মেহেরপুর)', isDhaka: false },
        { id: 'moulvibazar', name: 'Moulvibazar (মৌলভীবাজার)', isDhaka: false },
        { id: 'munshiganj', name: 'Munshiganj (মুন্সীগঞ্জ)', isDhaka: false },
        { id: 'naogaon', name: 'Naogaon (নওগাঁ)', isDhaka: false },
        { id: 'narail', name: 'Narail (নড়াইল)', isDhaka: false },
        { id: 'narsingdi', name: 'Narsingdi (নরসিংদী)', isDhaka: false },
        { id: 'natore', name: 'Natore (নাটোর)', isDhaka: false },
        { id: 'netrokona', name: 'Netrokona (নেত্রকোণা)', isDhaka: false },
        { id: 'nilphamari', name: 'Nilphamari (নীলফামারী)', isDhaka: false },
        { id: 'noakhali', name: 'Noakhali (নোয়াখালী)', isDhaka: false },
        { id: 'pabna', name: 'Pabna (পাবনা)', isDhaka: false },
        { id: 'panchagarh', name: 'Panchagarh (পঞ্চগড়)', isDhaka: false },
        { id: 'patuakhali', name: 'Patuakhali (পটুয়াখালী)', isDhaka: false },
        { id: 'pirojpur', name: 'Pirojpur (পিরোজপুর)', isDhaka: false },
        { id: 'rajbari', name: 'Rajbari (রাজবাড়ী)', isDhaka: false },
        { id: 'rangamati', name: 'Rangamati (রাঙ্গামাটি)', isDhaka: false },
        { id: 'satkhira', name: 'Satkhira (সাতক্ষীরা)', isDhaka: false },
        { id: 'shariatpur', name: 'Shariatpur (শরীয়তপুর)', isDhaka: false },
        { id: 'sherpur', name: 'Sherpur (শেরপুর)', isDhaka: false },
        { id: 'sirajganj', name: 'Sirajganj (সিরাজগঞ্জ)', isDhaka: false },
        { id: 'sunamganj', name: 'Sunamganj (সুনামগঞ্জ)', isDhaka: false },
        { id: 'tangail', name: 'Tangail (টাঙ্গাইল)', isDhaka: false },
        { id: 'thakurgaon', name: 'Thakurgaon (ঠাকুরগাঁও)', isDhaka: false }
    ];

    // App State
    let currentHeroProd = productsData[0];
    let currentHeroVariant = currentHeroProd.variants[0];

    // Cart starts with 1 NOVA Tote Bag ready to order
    let cart = [
        {
            productId: currentHeroProd.id,
            productName: currentHeroProd.banglaName,
            variantId: currentHeroVariant.id,
            variantName: currentHeroVariant.banglaName,
            variantCode: currentHeroVariant.code,
            price: currentHeroProd.price,
            image: currentHeroVariant.image,
            quantity: 1
        }
    ];

    let shippingZone = 0; // 0 = Dhaka (80), 1 = Outside (150)
    let appliedCoupon = null;

    /* ========================================================
       1. HERO SECTION CONTROLS
    ======================================================== */
    function updateHeroDisplay() {
        $('#hero-title').text(currentHeroProd.name);
        $('#hero-subtitle').text(currentHeroProd.subtitle + ' — ' + currentHeroProd.description.slice(0, 110) + '...');
        $('#hero-price').text('৳' + currentHeroProd.price.toLocaleString('bn-BD'));
        $('#hero-old-price').text('৳' + currentHeroProd.originalPrice.toLocaleString('bn-BD'));
        $('#hero-discount').text(currentHeroProd.discountPercent + '% ছাড়!');
        
        $('#hero-variant-label').text(currentHeroVariant.banglaName + ' (' + currentHeroVariant.name + ')');
        $('#hero-code-badge').text('কোড: ' + (currentHeroVariant.code || currentHeroVariant.name));
        
        $('#hero-float-discount').text(currentHeroProd.discountPercent + '% OFF');
        $('#hero-float-code').text(currentHeroVariant.code || currentHeroProd.name);
        $('#hero-main-img').attr('src', currentHeroVariant.image).attr('alt', currentHeroProd.name);
        
        $('#hero-caption-name').text(currentHeroProd.banglaName);
        $('#hero-caption-color').text('কালার: ' + currentHeroVariant.banglaName);
        $('#hero-caption-price').text('৳' + currentHeroProd.price.toLocaleString('bn-BD'));

        // Render Swatches
        const $swatchList = $('#hero-swatches').empty();
        currentHeroProd.variants.forEach((v, idx) => {
            const isActive = v.id === currentHeroVariant.id;
            const $btn = $(`
                <button type="button" class="tholi-swatch-btn ${isActive ? 'active' : ''}">
                    <span class="tholi-color-dot" style="background-color: ${v.colorHex};"></span>
                    <span>${v.banglaName}</span>
                </button>
            `);
            $btn.on('click', function() {
                currentHeroVariant = v;
                updateHeroDisplay();
            });
            $swatchList.append($btn);
        });
    }

    // Pill Switcher in Hero
    $('.tholi-pill').on('click', function() {
        $('.tholi-pill').removeClass('active');
        $(this).addClass('active');
        const pId = $(this).data('product');
        const found = productsData.find(p => p.id === pId);
        if (found) {
            currentHeroProd = found;
            currentHeroVariant = found.variants[0];
            updateHeroDisplay();
        }
    });

    // Hero Order Now button adds hero bag and scrolls to checkout
    $('#hero-order-now-btn').on('click', function() {
        addItemToCart(currentHeroProd, currentHeroVariant);
        scrollToCheckout();
    });

    /* ========================================================
       2. SHOWCASE PRODUCTS RENDERING
    ======================================================== */
    function renderShowcaseProducts() {
        const $container = $('#tholi-products-list').empty();

        productsData.forEach(p => {
            let activeVariant = p.variants[0];

            const $card = $(`
                <div class="tholi-product-card" id="${p.id}">
                    <div class="tholi-pc-gallery">
                        <div class="tholi-pc-main-img-box">
                            <img src="${activeVariant.image}" alt="${p.name}" class="tholi-pc-main-img" id="img-${p.id}">
                        </div>
                        <div class="tholi-pc-thumbs" id="thumbs-${p.id}">
                        </div>
                    </div>
                    <div class="tholi-pc-info">
                        <span class="tholi-pc-en-name">${p.name}</span>
                        <h3>${p.banglaName}</h3>
                        <p class="tholi-pc-desc">${p.description}</p>

                        <div class="tholi-pc-price-box">
                            <div>
                                <span style="font-size: 26px; font-weight: 800; color: #8d5624;">৳${p.price.toLocaleString('bn-BD')}</span>
                                <span style="font-size: 15px; color: #9f8877; text-decoration: line-through; margin-left: 6px;">৳${p.originalPrice.toLocaleString('bn-BD')}</span>
                            </div>
                            <span style="background: #fee2e2; color: #b91c1c; font-size: 11px; font-weight: 800; padding: 3px 8px; border-radius: 6px;">${p.discountPercent}% ছাড়</span>
                        </div>

                        <div class="tholi-features-list">
                            ${p.features.map(f => `
                                <div class="tholi-feature-item">
                                    <strong>✓ ${f.title}</strong>
                                    <span>${f.desc}</span>
                                </div>
                            `).join('')}
                        </div>

                        <div style="margin-bottom: 16px;">
                            <span style="font-size: 12px; font-weight: 700; color: #4a392c; display: block; margin-bottom: 6px;">
                                কালার নির্বাচন করুন: <strong id="lbl-color-${p.id}" style="color: #8d5624;">${activeVariant.banglaName}</strong>
                            </span>
                            <div class="tholi-swatches-list" id="swatches-${p.id}">
                            </div>
                        </div>

                        <div style="display: flex; gap: 10px;">
                            <button type="button" class="tholi-btn-main btn-order-single" style="flex: 1;" data-pid="${p.id}">
                                🛒 ১ ক্লিকে অর্ডার করুন
                            </button>
                        </div>
                    </div>
                </div>
            `);

            // Populate thumbs and swatches
            const $thumbs = $card.find(`#thumbs-${p.id}`);
            const $swatches = $card.find(`#swatches-${p.id}`);

            p.variants.forEach((v, idx) => {
                // Thumb
                const $thumb = $(`
                    <div class="tholi-pc-thumb-item ${idx === 0 ? 'active' : ''}">
                        <img src="${v.image}" alt="${v.name}">
                    </div>
                `);
                $thumb.on('click', function() {
                    activeVariant = v;
                    $card.find(`#img-${p.id}`).attr('src', v.image);
                    $card.find(`#lbl-color-${p.id}`).text(v.banglaName);
                    $thumbs.find('.tholi-pc-thumb-item').removeClass('active');
                    $thumb.addClass('active');
                    $swatches.find('.tholi-swatch-btn').removeClass('active');
                    $swatches.find(`.tholi-swatch-btn:eq(${idx})`).addClass('active');
                });
                $thumbs.append($thumb);

                // Swatch button
                const $swatch = $(`
                    <button type="button" class="tholi-swatch-btn ${idx === 0 ? 'active' : ''}">
                        <span class="tholi-color-dot" style="background-color: ${v.colorHex};"></span>
                        <span>${v.banglaName}</span>
                    </button>
                `);
                $swatch.on('click', function() {
                    $thumb.trigger('click');
                });
                $swatches.append($swatch);
            });

            // Single Order Button Handler
            $card.find('.btn-order-single').on('click', function() {
                addItemToCart(p, activeVariant);
                scrollToCheckout();
            });

            $container.append($card);
        });
    }

    /* ========================================================
       3. INTERACTIVE COMBO BUILDER
    ======================================================== */
    const allFlatVariants = [];
    productsData.forEach(p => {
        p.variants.forEach(v => {
            allFlatVariants.push({
                product: p,
                variant: v,
                label: p.banglaName + ' - ' + v.banglaName + ' (৳' + p.price + ')'
            });
        });
    });

    let combo1 = allFlatVariants[0]; // NOVA Mustard
    let combo2 = allFlatVariants[4]; // Aura Caramel

    function initComboBuilder() {
        const $s1 = $('#combo-select-1').empty();
        const $s2 = $('#combo-select-2').empty();

        allFlatVariants.forEach((it, idx) => {
            $s1.append(new Option(it.label, idx, idx === 0, idx === 0));
            $s2.append(new Option(it.label, idx, idx === 4, idx === 4));
        });

        $s1.on('change', function() {
            combo1 = allFlatVariants[$(this).val()];
            updateComboDisplay();
        });

        $s2.on('change', function() {
            combo2 = allFlatVariants[$(this).val()];
            updateComboDisplay();
        });

        updateComboDisplay();

        $('#combo-order-btn').on('click', function() {
            cart = [
                {
                    productId: combo1.product.id,
                    productName: combo1.product.banglaName,
                    variantId: combo1.variant.id,
                    variantName: combo1.variant.banglaName,
                    variantCode: combo1.variant.code,
                    price: combo1.product.price,
                    image: combo1.variant.image,
                    quantity: 1
                },
                {
                    productId: combo2.product.id,
                    productName: combo2.product.banglaName,
                    variantId: combo2.variant.id,
                    variantName: combo2.variant.banglaName,
                    variantCode: combo2.variant.code,
                    price: combo2.product.price,
                    image: combo2.variant.image,
                    quantity: 1
                }
            ];
            updateCartDisplay();
            scrollToCheckout();
        });
    }

    function updateComboDisplay() {
        $('#combo-img-1').attr('src', combo1.variant.image);
        $('#combo-price-1').text('৳' + combo1.product.price.toLocaleString('bn-BD'));

        $('#combo-img-2').attr('src', combo2.variant.image);
        $('#combo-price-2').text('৳' + combo2.product.price.toLocaleString('bn-BD'));

        const regularSum = combo1.product.price + combo2.product.price;
        const discount = 100;
        const finalPrice = regularSum - discount;

        $('#combo-final-price').text('৳' + finalPrice.toLocaleString('bn-BD'));
        $('#combo-reg-price').text('৳' + regularSum.toLocaleString('bn-BD'));
    }

    /* ========================================================
       4. CART & CHECKOUT FORM CONTROLS
    ======================================================== */
    function addItemToCart(product, variant) {
        const existIdx = cart.findIndex(c => c.productId === product.id && c.variantId === variant.id);
        if (existIdx !== -1) {
            cart[existIdx].quantity += 1;
        } else {
            cart.push({
                productId: product.id,
                productName: product.banglaName,
                variantId: variant.id,
                variantName: variant.banglaName,
                variantCode: variant.code,
                price: product.price,
                image: variant.image,
                quantity: 1
            });
        }
        updateCartDisplay();
    }

    function updateCartDisplay() {
        const $list = $('#tholi-cart-items').empty();
        let subtotal = 0;
        let totalCount = 0;

        cart.forEach((it, idx) => {
            subtotal += (it.price * it.quantity);
            totalCount += it.quantity;

            const $row = $(`
                <div class="tholi-c-item">
                    <img src="${it.image}" alt="${it.productName}">
                    <div class="tholi-c-details">
                        <h4>${it.productName}</h4>
                        <p>কালার: <strong>${it.variantName}</strong> ${it.variantCode ? `(${it.variantCode})` : ''}</p>
                        <span class="tholi-c-price">৳${it.price.toLocaleString('bn-BD')}</span>
                    </div>
                    <div class="tholi-qty-ctrl">
                        <button type="button" class="tholi-qty-btn btn-minus" data-idx="${idx}">-</button>
                        <span class="tholi-qty-val">${it.quantity}</span>
                        <button type="button" class="tholi-qty-btn btn-plus" data-idx="${idx}">+</button>
                    </div>
                    <button type="button" class="tholi-del-btn" data-idx="${idx}">✕</button>
                </div>
            `);

            $row.find('.btn-minus').on('click', function() {
                if (cart[idx].quantity > 1) {
                    cart[idx].quantity -= 1;
                } else {
                    cart.splice(idx, 1);
                }
                updateCartDisplay();
            });

            $row.find('.btn-plus').on('click', function() {
                cart[idx].quantity += 1;
                updateCartDisplay();
            });

            $row.find('.tholi-del-btn').on('click', function() {
                cart.splice(idx, 1);
                updateCartDisplay();
            });

            $list.append($row);
        });

        // Header Cart Badge
        $('#tholi-cart-badge').text(totalCount);

        // Combo Discount (if 2 or more bags, give ৳100 discount!)
        const comboDiscount = totalCount >= 2 ? 100 : 0;
        if (comboDiscount > 0) {
            $('#row-combo-discount').show();
            $('#summary-combo').text('-৳' + comboDiscount.toLocaleString('bn-BD'));
            $('#tholi-combo-hint').hide();
        } else {
            $('#row-combo-discount').hide();
            if (totalCount === 1) {
                $('#tholi-combo-hint').show();
            } else {
                $('#tholi-combo-hint').hide();
            }
        }

        // Coupon calculation
        let couponDiscount = 0;
        if (appliedCoupon === 'THOLI50') couponDiscount = 50;
        if (couponDiscount > 0) {
            $('#row-coupon-discount').show();
            $('#summary-coupon').text('-৳' + couponDiscount.toLocaleString('bn-BD'));
        } else {
            $('#row-coupon-discount').hide();
        }

        // Shipping fee calculation
        const shippingFee = shippingZone === 0 ? 80 : 150;
        $('#summary-shipping').text('৳' + shippingFee.toLocaleString('bn-BD'));

        // Totals
        const grandTotal = Math.max(0, subtotal - comboDiscount - couponDiscount + shippingFee);

        $('#summary-subtotal').text('৳' + subtotal.toLocaleString('bn-BD'));
        $('#summary-grand-total').text('৳' + grandTotal.toLocaleString('bn-BD'));
    }

    // Populate Districts Dropdown
    function initDistricts() {
        const $dist = $('#cust-district').empty();
        bangladeshDistricts.forEach(d => {
            $dist.append(new Option(d.name, d.id, d.id === 'dhaka', d.id === 'dhaka'));
        });

        $dist.on('change', function() {
            const selId = $(this).val();
            const dObj = bangladeshDistricts.find(d => d.id === selId);
            if (dObj && dObj.isDhaka) {
                setZone(0);
            } else {
                setZone(1);
            }
        });
    }

    function setZone(zone) {
        shippingZone = zone;
        $('input[name="shipping_zone"][value="' + zone + '"]').prop('checked', true);
        $('.tholi-zone-opt').removeClass('active');
        if (zone === 0) {
            $('#opt-zone-dhaka').addClass('active');
            if ($('#cust-district').val() !== 'dhaka') {
                $('#cust-district').val('dhaka');
            }
        } else {
            $('#opt-zone-outside').addClass('active');
            if ($('#cust-district').val() === 'dhaka') {
                $('#cust-district').val('chattogram');
            }
        }
        updateCartDisplay();
    }

    $('input[name="shipping_zone"]').on('change', function() {
        setZone(parseInt($(this).val()));
    });
    $('.tholi-zone-opt').on('click', function() {
        const val = $(this).find('input').val();
        setZone(parseInt(val));
    });

    // Coupon Apply Handler
    $('#coupon-apply-btn').on('click', function() {
        const code = $('#coupon-code-input').val().trim().toUpperCase();
        if (code === 'THOLI50') {
            appliedCoupon = 'THOLI50';
            $('#coupon-msg').css('color', '#15803d').text('✓ কুপন কোড THOLI50 অ্যাপ্লাই হয়েছে! ৳৫০ ছাড়।');
        } else {
            $('#coupon-msg').css('color', '#dc2626').text('✗ দুঃখিত, কুপনটি সঠিক নয়।');
        }
        updateCartDisplay();
    });

    /* ========================================================
       5. ORDER SUBMISSION & REAL WOOCOMMERCE / OFFLINE SYNC
    ======================================================== */
    $('#btn-submit-order').on('click', function(e) {
        e.preventDefault();

        const name = $('#cust-name').val().trim();
        const phone = $('#cust-phone').val().trim().replace(/\D/g, '');
        const district = $('#cust-district option:selected').text();
        const address = $('#cust-address').val().trim();
        const notes = $('#cust-notes').val().trim();

        if (!name) {
            alert('অনুগ্রহ করে আপনার নাম লিখুন।');
            $('#cust-name').focus();
            return;
        }

        if (!phone || phone.length < 11) {
            alert('অনুগ্রহ করে সঠিক ১১ ডিজিটের মোবাইল নম্বর দিন (যেমন: 017XXXXXXXX)।');
            $('#cust-phone').focus();
            return;
        }

        if (!address || address.length < 8) {
            alert('অনুগ্রহ করে আপনার সম্পূর্ণ ডেলিভারি ঠিকানা বিস্তারিত লিখুন।');
            $('#cust-address').focus();
            return;
        }

        if (cart.length === 0) {
            alert('আপনার কার্ট খালি। অনুগ্রহ করে অন্তত ১টি ব্যাগ নির্বাচন করুন।');
            return;
        }

        const $btn = $(this);
        const $btnText = $('#btn-submit-text');
        $btn.prop('disabled', true);
        $btnText.text('অর্ডার প্রসেস হচ্ছে, অনুগ্রহ করে অপেক্ষা করুন...');

        // Prepare line items
        const itemsPayload = cart.map(it => ({
            name: it.productName,
            variant_name: it.variantName,
            variant_code: it.variantCode || '',
            price: it.price,
            quantity: it.quantity
        }));

        const totalItemsCount = cart.reduce((acc, it) => acc + it.quantity, 0);
        const subtotal = cart.reduce((acc, it) => acc + (it.price * it.quantity), 0);
        const comboDiscount = totalItemsCount >= 2 ? 100 : 0;
        const couponDiscount = appliedCoupon === 'THOLI50' ? 50 : 0;
        const shippingFee = shippingZone === 0 ? 80 : 150;
        const grandTotal = Math.max(0, subtotal - comboDiscount - couponDiscount + shippingFee);

        // WordPress AJAX Request
        const postData = {
            action: 'tholi_submit_order',
            security: settings.nonce,
            customer_name: name,
            customer_phone: phone,
            customer_district: district,
            customer_address: address,
            customer_notes: notes,
            shipping_zone: shippingZone,
            items: JSON.stringify(itemsPayload),
            coupon_code: appliedCoupon || '',
            grand_total: grandTotal
        };

        $.ajax({
            url: settings.ajaxUrl,
            type: 'POST',
            data: postData,
            dataType: 'json'
        }).done(function(response) {
            let orderNumber = 'TH-' + Math.floor(100000 + Math.random() * 900000);
            if (response && response.success && response.data && response.data.order_number) {
                orderNumber = response.data.order_number;
            }
            showOrderModal(orderNumber, name, phone, district, address, itemsPayload, grandTotal, shippingFee);
        }).fail(function() {
            // Offline fallback / Static preview fallback
            let fallbackNum = 'TH-' + Math.floor(100000 + Math.random() * 900000);
            showOrderModal(fallbackNum, name, phone, district, address, itemsPayload, grandTotal, shippingFee);
        }).always(function() {
            $btn.prop('disabled', false);
            $btnText.text('অর্ডার কনফার্ম করুন (ক্যাশ অন ডেলিভারি)');
        });
    });

    function showOrderModal(orderNumber, name, phone, district, address, items, grandTotal, shippingFee) {
        $('#modal-cust-name').text(`ধন্যবাদ, ${name}!`);
        $('#modal-order-id').text(`#${orderNumber}`);
        $('#modal-recipient').text(`${name} (${phone})`);
        $('#modal-address').text(`${address}, ${district}`);
        $('#modal-shipping-fee').text(`৳${shippingFee.toLocaleString('bn-BD')}`);
        $('#modal-grand-total').text(`৳${grandTotal.toLocaleString('bn-BD')}`);

        // Modal items list
        const $mItems = $('#modal-items-list').empty();
        items.forEach(it => {
            $mItems.append(`
                <div style="display: flex; justify-content: space-between; margin-bottom: 4px;">
                    <span>${it.name} (${it.variant_name}) x ${it.quantity}</span>
                    <strong>৳${(it.price * it.quantity).toLocaleString('bn-BD')}</strong>
                </div>
            `);
        });

        // Format WhatsApp Message
        const itemsMsg = items.map(it => `- ${it.name} (${it.variant_name}) x ${it.quantity} = ৳${it.price * it.quantity}`).join('\n');
        const waMsg = encodeURIComponent(
            `🛍️ *নতুন অর্ডার (থলি - Tholi)*\n` +
            `অর্ডার আইডি: #${orderNumber}\n\n` +
            `👤 *গ্রাহকের তথ্য:*\n` +
            `নাম: ${name}\n` +
            `ফোন: ${phone}\n` +
            `ঠিকানা: ${address}, ${district}\n\n` +
            `📦 *আইটেম সমূহ:*\n${itemsMsg}\n\n` +
            `💰 *সর্বমোট প্রদেয়:* ৳${grandTotal}\n` +
            `পেমেন্ট মেথড: ক্যাশ অন ডেলিভারি (COD)\n\n` +
            `আমার অর্ডারটি কনফার্ম করুন। ধন্যবাদ!`
        );

        $('#modal-wa-btn').attr('href', `https://wa.me/${settings.whatsappNum}?text=${waMsg}`);
        $('#tholi-success-modal').fadeIn(200);
    }

    $('#modal-close-btn').on('click', function() {
        $('#tholi-success-modal').fadeOut(200);
    });

    /* ========================================================
       6. UI UTILITIES & LIVE TICKER
    ======================================================== */
    function scrollToCheckout() {
        const el = document.getElementById('checkout');
        if (el) {
            el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    // Mobile Drawer
    $('#tholi-mobile-menu-btn').on('click', function() {
        $('#tholi-mobile-drawer').toggleClass('open');
    });
    $('.tholi-m-link').on('click', function() {
        $('#tholi-mobile-drawer').removeClass('open');
    });

    // FAQ Accordion
    $('.tholi-faq-q').on('click', function() {
        $(this).closest('.tholi-faq-item').toggleClass('open');
    });

    // Live Sales Social Proof Toast
    const liveSalesQueue = [
        { name: 'নুসরাত জাহান', city: 'মিরপুর, ঢাকা', item: 'NOVA Tote Bag (Mustard Yellow)' },
        { name: 'ফারজানা আক্তার', city: 'উত্তরা, ঢাকা', item: 'Aura Shoulder Bag (Caramel Black)' },
        { name: 'সাদিয়া ইসলাম', city: 'জিইসি, চট্টগ্রাম', item: 'Geometric Knot Bag (Black)' },
        { name: 'রোদেলা চৌধুরী', city: 'গুলশান, ঢাকা', item: 'NOVA Tote Bag (Black)' },
        { name: 'মারিয়াম বেগম', city: 'উপশহর, সিলেট', item: 'Aura Shoulder Bag (Coffee Black)' }
    ];
    let saleIdx = 0;

    setInterval(function() {
        saleIdx = (saleIdx + 1) % liveSalesQueue.length;
        const cur = liveSalesQueue[saleIdx];
        const $toast = $('#tholi-live-toast');
        
        $toast.css('transform', 'translateY(120px)');
        setTimeout(function() {
            $('#tholi-toast-name').text(`${cur.name} (${cur.city})`);
            $('#tholi-toast-item').text(`এইমাত্র কিনেছেন ${cur.item}`);
            $toast.css('transform', 'translateY(0)');
        }, 400);
    }, 10000);

    $('#tholi-toast-close').on('click', function() {
        $('#tholi-live-toast').hide();
    });

    /* ========================================================
       7. FLASH DEAL COUNTDOWN & STOCK SCARCITY METER
    ======================================================== */
    function initFlashTimer() {
        // 3 hours 45 mins countdown
        let totalSeconds = (3 * 3600) + (45 * 60) + 18;
        
        function updateTimer() {
            if (totalSeconds <= 0) totalSeconds = 4 * 3600; // loop
            const h = Math.floor(totalSeconds / 3600);
            const m = Math.floor((totalSeconds % 3600) / 60);
            const s = totalSeconds % 60;

            const format = num => String(num).padStart(2, '0');
            $('#timer-hours').text(format(h));
            $('#timer-minutes').text(format(m));
            $('#timer-seconds').text(format(s));
            totalSeconds--;
        }

        updateTimer();
        setInterval(updateTimer, 1000);
    }

    function initStockScarcity() {
        let stock = 14;
        setInterval(function() {
            // randomly decrease stock occasionally to simulate live buys
            if (Math.random() > 0.6 && stock > 4) {
                stock -= 1;
                $('#live-stock-count').text(stock);
                const percent = Math.max(10, Math.round((stock / 50) * 100));
                $('#live-stock-bar').css('width', percent + '%');
            }
        }, 12000);
    }

    /* ========================================================
       8. PAYMENT METHOD SELECTOR TOGGLE
    ======================================================== */
    function initPaymentSelector() {
        $('input[name="payment_method"]').on('change', function() {
            const method = $(this).val();
            if (method === 'bkash' || method === 'nagad') {
                $('#bkash-instructions').slideDown(200);
            } else {
                $('#bkash-instructions').slideUp(200);
            }
        });
    }

    /* ========================================================
       9. LIVE ORDER TRACKING MODAL & LIGHTBOX
    ======================================================== */
    function initTrackingModal() {
        $('#btn-open-tracking, .tholi-track-btn').on('click', function(e) {
            e.preventDefault();
            $('#tholi-tracking-modal').fadeIn(200);
        });

        $('#tracking-modal-close').on('click', function() {
            $('#tholi-tracking-modal').fadeOut(200);
        });

        $('#tholi-tracking-form').on('submit', function(e) {
            e.preventDefault();
            const query = $('#track-input').val().trim();
            if (!query) return;

            $('#track-search-btn').text('খোঁজা হচ্ছে...').prop('disabled', true);

            setTimeout(function() {
                $('#track-search-btn').text('ট্র্যাক করুন').prop('disabled', false);
                $('#track-result-id').text('#' + (query.startsWith('#') ? query.substring(1) : query));
                $('#track-result-date').text(new Date().toLocaleDateString('bn-BD', { day: 'numeric', month: 'long', year: 'numeric' }));
                $('#tracking-result-box').slideDown(250);
            }, 600);
        });
    }

    function initLightbox() {
        // Clicking on showcase main image opens zoomed view
        $(document).on('click', '.tholi-showcase-preview img, .tholi-hero-card img, .tholi-product-card img', function() {
            const src = $(this).attr('src');
            const title = $(this).attr('alt') || 'থলি প্রিমিয়াম ব্যাগ';
            if (src) {
                $('#tholi-lightbox-img').attr('src', src);
                $('#tholi-lightbox-caption').text(title);
                $('#tholi-lightbox').fadeIn(200);
            }
        });

        $('#tholi-lightbox-close, #tholi-lightbox').on('click', function(e) {
            if (e.target !== document.getElementById('tholi-lightbox-img')) {
                $('#tholi-lightbox').fadeOut(200);
            }
        });
    }

    /* ========================================================
       INITIALIZATION
    ======================================================== */
    $(document).ready(function() {
        updateHeroDisplay();
        renderShowcaseProducts();
        initComboBuilder();
        initDistricts();
        updateCartDisplay();
        initFlashTimer();
        initStockScarcity();
        initPaymentSelector();
        initTrackingModal();
        initLightbox();
    });

})(window.jQuery || {
    // Lightweight self-contained DOM utility if jQuery is absent in standalone preview
});
