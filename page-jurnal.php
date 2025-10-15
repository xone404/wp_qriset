<?php
/**
 * Template Name: Halaman Jurnal
 */

get_header(); // Memanggil file header.php
?>

<main>
    <div class="container page-padding">
        
        <a href="<?php echo esc_url( home_url( '/produk' ) ); ?>" class="breadcrumb">
            <i class="fa-solid fa-chevron-left"></i> JURNAL
        </a>

        <div class="jurnal-list">

            <div class="jurnal-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bgsajoas.svg" alt="Banner Southeast Asian Journal of Agricultural Sciences">
                <a href="https://ejournal.qrisetindonesia.com/index.php/sajoas/login?source=%2Findex.php%2Fsajoas%2Findex" class="button-primary" target="_blank">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="jurnal-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bgjaqi.svg" alt="Banner Jurnal Abdimas Qriset Indonesia">
                <a href="https://ejournal.qrisetindonesia.com/index.php/jabdimas/login?source=%2Findex.php%2Fjabdimas" class="button-primary">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
            </div>

        </div> </div>
</main>

<?php 
get_footer(); // Memanggil file footer.php 
?>