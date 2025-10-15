<?php
get_header(); // Memanggil file header.php
?>

<main>
    <div class="container page-padding">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <a href="<?php echo esc_url( home_url( '/daftar-buku' ) ); ?>" class="breadcrumb">
                <i class="fa-solid fa-chevron-left"></i> BUKU
            </a>

            <div class="detail-buku-layout">

                <div class="detail-buku-cover">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="Cover <?php the_title(); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/bukudummy.svg" alt="Cover Default">
                    <?php endif; ?>
                </div>

                <div class="detail-buku-info">
                    <h1><?php the_title(); ?></h1>
                    
                    <div class="purchase-icons">
                        <a href="https://wa.me/6282223262722" aria-label="Beli di WhatsApp"><img src="<?php echo get_template_directory_uri(); ?>/img/iconwea (1).svg" alt="Ikon WhatsApp"></a>
                        <a href="https://www.tokopedia.com/archive-qrisetindonesia-1743642261" aria-label="Beli di Tokopedia"><img src="<?php echo get_template_directory_uri(); ?>/img/icontokped (1).svg" alt="Ikon Tokopedia"></a>
                        <a href="https://shopee.co.id/penerbitqriset?categoryId=100643&entryPoint=ShopByPDP&itemId=26191348717" aria-label="Beli di Shopee"><img src="<?php echo get_template_directory_uri(); ?>/img/iconshope (1).svg" alt="Ikon Shopee"></a>
                    </div>

                    <div class="book-meta-section">
                        <h4>Rincian Buku :</h4>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <?php 
                    $penulis = get_post_meta(get_the_ID(), '_penulis', true);
                    if (!empty($penulis)) : 
                    ?>
                        <div class="book-meta-section">
                            <h4>Penulis :</h4>
                            <p><?php echo nl2br(esc_html($penulis)); ?></p>
                        </div>
                    <?php endif; ?>
                                        <?php 
                    $editor = get_post_meta(get_the_ID(), '_editor', true);
                    if (!empty($editor)) : 
                    ?>
                        <div class="book-meta-section">
                            <h4>Editor :</h4>
                            <p><?php echo esc_html($editor); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php 
                    $layout_cover = get_post_meta(get_the_ID(), '_layout_cover', true);
                    if (!empty($layout_cover)) : 
                    ?>
                        <div class="book-meta-section">
                            <h4>Layout Cover :</h4>
                            <p><?php echo esc_html($layout_cover); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $kategori = get_the_term_list( $post->ID, 'kategori_buku', '', ', ' );
                    if ( ! empty( $kategori ) ) :
                    ?>
                        <div class="book-meta-section">
                            <h4>Kategori :</h4>
                            <p><?php echo $kategori; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php 
                    $isbn = get_post_meta(get_the_ID(), '_issn', true);
                    if (!empty($isbn)) : 
                    ?>
                        <div class="book-meta-section">
                            <h4>Nomor ISBN :</h4>
                            <p><?php echo esc_html($isbn); ?></p>
                        </div>
                    <?php endif; ?>

                </div>

            </div>

        <?php endwhile; endif; ?>

    </div>
</main>

<?php 
get_footer(); // Memanggil file footer.php 
?>