<?php
/**
 * Template Name: About Us Page
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
            <strong>আমাদের সম্পর্কে</strong>
        </div>
        <h1 class="tholi-page-title">থলি (Tholi) — আমাদের গল্প</h1>
        <p class="tholi-page-subtitle">
            বাংলাদেশের আধুনিক নারীদের জন্য রুচিশীল, টেকসই এবং প্রিমিয়াম ডিজাইনার ব্যাগের বিশ্বস্ত ব্র্যান্ড।
        </p>
    </div>
</div>

<main class="tholi-inner-content">
    <div class="tholi-container" style="max-width: 900px;">
        <div class="tholi-content-card">
            
            <h2>👜 থলির যাত্রা ও লক্ষ্য</h2>
            <p>
                <strong>থলি (Tholi)</strong> শুধু একটি ব্যাগের ব্র্যান্ড নয়; এটি রুচিশীল আত্মবিশ্বাস ও আভিজাত্যের প্রতীক। আমাদের মূল লক্ষ্য হলো এমন ব্যাগ তৈরি করা যা একাধারে আন্তর্জাতিক ফ্যাশনের সাথে সামঞ্জস্যপূর্ণ এবং দৈনন্দিন ব্যবহারে অত্যন্ত টেকসই।
            </p>
            <p>
                বিশ্ববাজারের আধুনিক ট্রেন্ড এবং বাংলাদেশি নারীদের নিত্যদিনের প্রয়োজনীয়তা (অফিস, ভার্সিটি, ভ্রমণ কিংবা ঘরোয়া উৎসব) মাথায় রেখে প্রতিটি ব্যাগের ম্যাটেরিয়াল, জিপার ও স্টিচিং নিখুঁতভাবে নির্বাচন করা হয়।
            </p>

            <h2>✨ কেন থলি অনন্য?</h2>
            <ul>
                <li><strong>প্রিমিয়াম গ্রেড সিনথেটিক লেদার:</strong> সহজে দাগ পড়ে না, ওয়াটার-রেজিস্ট্যান্ট এবং দীর্ঘস্থায়ী মসৃণ ফিনিশ।</li>
                <li><strong>অ্যান্টিক গোল্ড হার্ডওয়্যার:</strong> হাই-কোয়ালিটি মেটালিক রিং লক ও মরিচারোধী জিপার।</li>
                <li><strong>স্মার্ট স্টোরেজ স্পেস:</strong> মোবাইল, লং ওয়ালেট, ট্যাব, সানগ্লাস ও মেকআপ কিট রাখার পরিকল্পিত আলাদা চেম্বার।</li>
                <li><strong>স্বচ্ছ ও সহজ ডেলিভারি:</strong> পুরো বাংলাদেশে ক্যাশ অন ডেলিভারি এবং কুরিয়ারের সামনে দেখে নেওয়ার পূর্ণ নিশ্চয়তা।</li>
            </ul>

            <h2>🇧🇩 মেইড ফর বাংলাদেশ</h2>
            <p>
                আমরা বিশ্বাস করি ফ্যাশন মানেই অতিরিক্ত চড়া দাম নয়। সরাসরি নিজস্ব প্রোডাকশন ও সোর্সিংয়ের মাধ্যমে মধ্যস্বত্বভোগীদের এড়িয়ে প্রতিটি গ্রাহকের কাছে সেরা মূল্যে লাক্সারি ব্যাগ পৌঁছে দেওয়াই আমাদের অঙ্গীকার।
            </p>

            <div style="margin-top: 32px; padding: 24px; background: #faf4ee; border-radius: 16px; border: 1px solid #ebd8c6; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
                <div>
                    <strong style="color: #2e1d11; font-size: 16px; display: block;">আমাদের ব্যাগ কালেকশন ঘুরে দেখুন</strong>
                    <span style="color: #7d6756; font-size: 13px;">আজই আপনার পছন্দের কালারটি অর্ডার করুন ক্যাশ অন ডেলিভারিতে</span>
                </div>
                <a href="<?php echo esc_url(home_url('/#collection')); ?>" class="tholi-btn-main" style="text-decoration: none; padding: 10px 20px;">
                    কালেকশন দেখুন →
                </a>
            </div>

        </div>
    </div>
</main>

<?php
get_footer();
