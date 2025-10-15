<?php
/**
 * Template Name: Halaman Paket Jurnal
 */

get_header(); // Memanggil file header.php
?>

<main>
    <div class="container page-padding">
        
        <div class="section-header" style="text-align: center;">
            <h2 class="section-title">Paket Penerbitan Jurnal</h2>
        </div>

        <div class="paket-grid">
            <div class="paket-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/paket1.svg" alt="Paket Penerbitan Jurnal ISSN">
            </div>
            <div class="paket-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/paket2.svg" alt="Paket Penerbitan Jurnal SINTA 6">
            </div>
            <div class="paket-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/paket3.svg" alt="Paket Penerbitan Jurnal SINTA 5">
            </div>
            <div class="paket-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/paket4.svg" alt="Paket Penerbitan Jurnal SINTA 4">
            </div>
            <div class="paket-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/paket5.svg" alt="Paket Penerbitan Jurnal SINTA 3">
            </div>
            <div class="paket-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/paket6.svg" alt="Paket Penerbitan Jurnal SINTA 2">
            </div>
        </div>

        <div class="section-footer">
            <a href="https://wa.me/6282223262722" target="_blank" class="button-outline">Hubungi Kami</a>
        </div>
    </div>
</main>

<?php 
get_footer(); // Memanggil file footer.php 
?>