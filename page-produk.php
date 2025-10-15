<?php
/**
 * Template Name: Halaman Produk
 */

get_header(); // Memanggil file header.php
?>

<main>
    <div class="container page-padding">
        <div class="produk-cards-grid">

            <div class="produk-card-item">
                <div class="produk-card-header">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/iconjurnal.svg" alt="Ikon Jurnal" class="produk-card-icon">
                    <h2>Jurnal - Jurnal</h2>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ilustrasijurnal.svg" alt="Ilustrasi Jurnal" class="produk-card-illustration">
                <p>Berikut adalah kumpulan dari jurnal-jurnal yang telah kami terbitkan.</p>
                <div class="produk-card-buttons">
                <a href="<?php echo esc_url( home_url( '/jurnal' ) ); ?>" class="button-primary">Lihat Semua Jurnal</a>                </div>
            </div>

            <div class="produk-card-item">
                <div class="produk-card-header">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/iconbuku.svg" alt="Ikon Buku" class="produk-card-icon">
                    <h2>Buku - Buku</h2>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ilustrasibuku.svg" alt="Ilustrasi Buku" class="produk-card-illustration">
                <p>Berikut adalah kumpulan buku-buku yang telah kami terbitkan.</p>
                <div class="produk-card-buttons">
                <div class="kategori-dropdown">
                    <button class="button-secondary">Kategori Buku <i class="fa-solid fa-chevron-down"></i></button>
                    <div class="dropdown-content">
                        <?php
                        $kategori_terms = get_terms( array(
                            'taxonomy'   => 'kategori_buku',
                            'hide_empty' => false,
                        ) );
                        foreach ( $kategori_terms as $term ) {
                            echo '<a href="' . get_term_link( $term ) . '">' . $term->name . '</a>';
                        }
                        ?>
                    </div>
                </div>

                <a href="<?php echo esc_url( home_url( '/daftar-buku' ) ); ?>" class="button-primary">Lihat Semua Buku</a>
            </div>
        </div>
    </div>
</main>

<?php 
get_footer(); // Memanggil file footer.php 
?>