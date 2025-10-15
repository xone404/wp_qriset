<?php
/**
 * Template Name: Halaman HKI
 */

get_header(); // Memanggil file header.php
?>

<main>
    <div class="container page-padding">
        
        <section class="hki-hero-section">
            <div class="hki-hero-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ilustrasihomehki.svg" alt="Ilustrasi Pengurusan HKI">
            </div>
            <div class="hki-hero-text">
                <h2>Pengurusan HKI</h2>
                <p>Hindari plagiarisme atau klaim dari orang lain atas karya Anda. Amankan dan lindungi setiap karya dengan membuat Hak atas Kekayaan Intelektual (HKI) Bersama PT. Penerbit Qriset Indonesia.</p>
                <a href="https://wa.me/6282223262722" target="_blank" class="button-outline">Hubungi Kami</a>
            </div>
        </section>

        <section class="manfaat-hki-section">
            <h2 class="section-title text-center">Manfaat HKI (Hak atas Kekayaan Intelektual)</h2>
            <div class="manfaat-grid">
                
                <div class="manfaat-card">
                    <span class="manfaat-number">01</span>
                    <p>HAKI memberikan keamanan hukum dan hak eksklusif kepada pencipta, sehingga mereka dapat melindungi dan memanfaatkan karya-karya mereka.</p>
                </div>

                <div class="manfaat-card">
                    <span class="manfaat-number">02</span>
                    <p>HAKI memberikan keamanan hukum dan hak eksklusif kepada pencipta, sehingga mereka dapat melindungi dan memanfaatkan karya-karya mereka.</p>
                </div>

                <div class="manfaat-card">
                    <span class="manfaat-number">03</span>
                    <p>HAKI memberikan keamanan hukum dan hak eksklusif kepada pencipta, sehingga mereka dapat melindungi dan memanfaatkan karya-karya mereka.</p>
                </div>

            </div>
        </section>

    </div>
</main>

<?php 
get_footer(); // Memanggil file footer.php 
?>