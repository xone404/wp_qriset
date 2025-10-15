<?php
/**
 * Template Name: Halaman Kontak
 */

get_header(); // Memanggil file header.php
?>

<main>
    <div class="container page-padding">
        <div class="kontak-grid">

            <div class="kontak-info">
                <h2 class="kontak-title">Hubungi Kami</h2>
                <p>Saya memiliki dukungan fleksibel melalui obrolan langsung, chat, email, dan telepon. Saya jamin Anda akan dapat menyelesaikan masalah apa pun dalam waktu 24 jam.</p>
                <div class="kontak-social-icons">
                    <a href="https://wa.me/6282223262722" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/iconwa.svg" alt="WhatsApp"></a>
                    <a href="https://www.facebook.com/profile.php?id=61571354378388" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/iconfb.svg" alt="Facebook"></a>
                    <a href="https://www.tiktok.com/@penerbitqrisetindonesia?_t=ZS-90VgLATUnE8&_r=1" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icontt.svg" alt="TikTok"></a>
                    <a href="https://www.instagram.com/penerbit_qriset?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/iconig.svg" alt="Instagram"></a>
                </div>
            </div>

            <div class="kontak-alamat">
                <img src="<?php echo get_template_directory_uri(); ?>/img/alamat.svg" alt="Informasi Alamat Qriset Indonesia">
            </div>

        </div>
    </div>
</main>

<?php 
get_footer(); // Memanggil file footer.php 
?>