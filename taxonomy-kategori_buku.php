<?php
get_header(); // Memanggil file header.php
?>

<main>
    <div class="container page-padding">
        
        <div class="archive-header">
            <a href="<?php echo get_post_type_archive_link('buku'); ?>" class="breadcrumb">
                <i class="fa-solid fa-chevron-left"></i> SEMUA BUKU
            </a>
            <h1><?php single_term_title(); ?></h1>
        </div>

        <?php if ( have_posts() ) : ?>

            <div class="buku-grid">

                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="buku-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" class="buku-cover">
                            </a>
                        <?php else : ?>
                             <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bukudummy.svg" alt="Default Cover" class="buku-cover">
                            </a>
                        <?php endif; ?>

                        <div class="buku-info">
                            <h3 class="buku-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="buku-description"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="button-selengkapnya">
                                Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div> <nav class="pagination">
                <?php the_posts_pagination(); ?>
            </nav>

        <?php else : ?>
            <p style="text-align: center;">Tidak ada buku yang ditemukan dalam kategori ini.</p>
        <?php endif; ?>

    </div>
</main>

<?php 
get_footer(); // Memanggil file footer.php 
?>