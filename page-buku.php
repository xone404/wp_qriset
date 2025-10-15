<?php
/**
 * Template Name: Halaman Daftar Buku
 */
get_header();
?>

<main>
    <div class="container page-padding">

        <a href="<?php echo esc_url( home_url( '/produk' ) ); ?>" class="breadcrumb">
            <i class="fa-solid fa-chevron-left"></i> BUKU
        </a>

        <?php
        // PAGINATION
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        // QUERY UNTUK POST TYPE "BUKU"
        $args = array(
            'post_type'      => 'buku',
            'posts_per_page' => 6,
            'paged'          => $paged
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            echo '<div class="buku-grid">';
            while ($query->have_posts()) : $query->the_post(); ?>

                <div class="buku-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" class="buku-cover">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/buku2.svg" alt="Default Cover" class="buku-cover">
                    <?php endif; ?>

                    <div class="buku-info">
                        <h3 class="buku-title"><?php the_title(); ?></h3>
                        <p class="buku-description"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                        <a href="<?php the_permalink(); ?>" class="button-selengkapnya">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            <?php endwhile;
            echo '</div>';

            // PAGINATION BAWAH
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('← Sebelumnya'),
                'next_text' => __('Berikutnya →'),
            ));

        else :
            echo '<p>Tidak ada buku ditemukan.</p>';
        endif;

        wp_reset_postdata();
        ?>

    </div>
</main>

<?php get_footer(); ?>
