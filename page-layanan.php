<?php
/**
 * Template Name: Halaman Layanan
 */

get_header(); // Memanggil file header.php
?>

<main>
    <div class="container page-padding">
        <div class="layanan-list">

            <div class="layanan-item-card">
                <div class="layanan-item-banner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bannerhki.svg" alt="Banner Layanan HKI">
                </div>
                <div class="layanan-item-details">
                    <h2>Layanan HKI</h2>
                    <p>Kami melayani pengajuan HKI (Hak Kekayaan Intelektual)</p>
                    <a href="<?php echo esc_url( home_url( '/pengurusan-hki' ) ); ?>" class="button-outline">Selengkapnya</a>                
                </div>
            </div>

            <div class="layanan-item-card">
                <div class="layanan-item-banner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bannerpenerbit.svg" alt="Banner Penerbitan Jurnal">
                </div>
                <div class="layanan-item-details">
                    <h2>Paket Penerbitan Jurnal</h2>
                    <p>Kami melayani pengajuan penerbitan jurnal ISSN, SINTA, SCOPUS</p>
                    <a href="<?php echo esc_url( home_url( '/paket-penerbitan-jurnal' ) ); ?>" class="button-outline">Selengkapnya</a>                
                </div>
            </div>

        </div>
    </div>
</main>

<?php 
get_footer(); // Memanggil file footer.php 
?>