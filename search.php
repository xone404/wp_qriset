<?php
get_header(); // Memanggil file header.php
?>

<main>
    <div class="container page-padding">
        
        <div class="archive-header">
            <h1>Hasil Pencarian untuk: "<?php echo get_search_query(); ?>"</h1>
        </div>

        <?php if ( have_posts() ) : ?>
            <div class="produk-list">
                <?php while ( have_posts() ) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="produk-list-item">
                        <div class="produk-list-cover">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bukudummy.svg" alt="Default Cover">
                            <?php endif; ?>
                        </div>
                        <div class="produk-list-details">
                            <h3 class="produk-title"><?php the_title(); ?></h3>
                            <p class="produk-description"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                            <?php 
                            $penulis = get_post_meta(get_the_ID(), '_penulis', true);
                            if (!empty($penulis)) : 
                            ?>
                                <span class="produk-author">Penulis: <?php echo esc_html($penulis); ?></span>
                            <?php endif; ?>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
            <nav class="pagination">
                <?php the_posts_pagination(); ?>
            </nav>
        <?php else : ?>
            <p style="text-align: center;">Maaf, tidak ada hasil yang ditemukan untuk pencarian Anda.</p>
        <?php endif; ?>

    </div>
</main>

<?php 
get_footer(); // Memanggil file footer.php 
?>