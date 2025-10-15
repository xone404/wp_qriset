<?php

/**
 * Memuat semua file CSS dan JavaScript tema.
 */
function qriset_assets() {
    wp_enqueue_style( 'qriset-style', get_stylesheet_uri() );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' );
    wp_enqueue_script( 'qriset-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'qriset_assets' );

/**
 * Mendaftarkan lokasi menu navigasi.
 */
function qriset_register_menus() {
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'qriset-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'qriset_register_menus' );

/**
 * Mendaftarkan Custom Post Type 'Buku'.
 */
function register_post_type_buku() {
    $labels = array(
        'name'          => 'Buku',
        'singular_name' => 'Buku',
        'add_new_item'  => 'Tambah Buku Baru',
        'edit_item'     => 'Edit Buku',
        'all_items'     => 'Semua Buku',
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'buku'),
        'menu_icon'     => 'dashicons-book',
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),

        // 🔧 Tambahan penting agar bisa dicari & ditampilkan di front-end
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'capability_type' => 'post',
    );

    register_post_type('buku', $args);
}
add_action('init', 'register_post_type_buku');

/**
 * Mendaftarkan Taksonomi 'Kategori Buku' untuk Post Type 'Buku'.
 */
function register_taxonomy_kategori_buku() {
    $labels = array(
        'name'          => 'Kategori Buku',
        'singular_name' => 'Kategori Buku',
        'add_new_item'  => 'Tambah Kategori Baru',
        'menu_name'     => 'Kategori Buku',
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array( 'slug' => 'kategori-buku' ),
    );
    register_taxonomy( 'kategori_buku', array( 'buku' ), $args );
}
add_action( 'init', 'register_taxonomy_kategori_buku' );


/**
 * Menambahkan kotak input (Meta Box) di halaman editor 'Buku'.
 */
function buku_add_meta_boxes() {
    add_meta_box(
        'buku_info',
        'Informasi Buku',
        'buku_info_callback',
        'buku'
    );
}
add_action('add_meta_boxes', 'buku_add_meta_boxes');

/**
 * Fungsi untuk menampilkan HTML dari input field di dalam Meta Box.
 */
function buku_info_callback($post) {
    $penulis = get_post_meta($post->ID, '_penulis', true);
    $issn = get_post_meta($post->ID, '_issn', true);
    $editor = get_post_meta($post->ID, '_editor', true); 
    $layout_cover = get_post_meta($post->ID, '_layout_cover', true);
    ?>
    <p>
        <label for="penulis"><strong>Penulis:</strong></label><br>
        <textarea id="penulis" name="penulis" style="width:100%; height:100px;"><?php echo esc_textarea($penulis); ?></textarea>
    </p>
    <p>
        <label for="issn"><strong>ISSN:</strong></label><br>
        <input type="text" id="issn" name="issn" value="<?php echo esc_attr($issn); ?>" style="width:100%;" />
    </p>
    <p>
        <label for="editor"><strong>Editor:</strong></label><br>
        <input type="text" id="editor" name="editor" value="<?php echo esc_attr($editor); ?>" style="width:100%;" />
    </p>
    <p>
        <label for="layout_cover"><strong>Layout Cover:</strong></label><br>
        <input type="text" id="layout_cover" name="layout_cover" value="<?php echo esc_attr($layout_cover); ?>" style="width:100%;" />
    </p>
    <?php
}

/**
 * Memperluas hasil pencarian agar mencakup:
 * - Judul dan konten buku
 * - Custom fields: penulis, issn, editor, layout_cover
 * - Custom post type: buku
 */
function qriset_custom_search( $search, $wp_query ) {
    global $wpdb;

    if ( empty( $search ) || ! isset( $wp_query->query_vars['s'] ) ) {
        return $search;
    }

    $search_term = esc_sql( $wpdb->esc_like( $wp_query->query_vars['s'] ) );
    $search = "
        AND (
            {$wpdb->posts}.post_title LIKE '%{$search_term}%'
            OR {$wpdb->posts}.post_content LIKE '%{$search_term}%'
            OR EXISTS (
                SELECT 1 FROM {$wpdb->postmeta}
                WHERE {$wpdb->postmeta}.post_id = {$wpdb->posts}.ID
                AND {$wpdb->postmeta}.meta_value LIKE '%{$search_term}%'
            )
        )
    ";

    return $search;
}
add_filter( 'posts_search', 'qriset_custom_search', 10, 2 );

/**
 * Memastikan search juga menampilkan post type 'buku'.
 */
function qriset_include_buku_in_search( $query ) {
    if ( $query->is_search() && !is_admin() && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'post', 'page', 'buku' ) );
    }
}
add_action( 'pre_get_posts', 'qriset_include_buku_in_search' );


/**
 * Fungsi untuk menyimpan data dari Meta Box ke database.
 */
function buku_save_meta_box_data($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (get_post_type($post_id) != 'buku') return;

    if (array_key_exists('penulis', $_POST)) {
        update_post_meta($post_id, '_penulis', sanitize_textarea_field($_POST['penulis']));
    }
    if (array_key_exists('issn', $_POST)) {
        update_post_meta($post_id, '_issn', sanitize_text_field($_POST['issn']));
    }
    if (array_key_exists('editor', $_POST)) {
        update_post_meta($post_id, '_editor', sanitize_text_field($_POST['editor']));
    }
    if (array_key_exists('layout_cover', $_POST)) {
        update_post_meta($post_id, '_layout_cover', sanitize_text_field($_POST['layout_cover']));
    }
}
add_action('save_post', 'buku_save_meta_box_data');

// Mengaktifkan dukungan Gambar Unggulan
add_theme_support( 'post-thumbnails' );

/**
 * 🔹 Tambahan: flush rewrite rules saat theme diaktifkan
 * Agar custom post type & taxonomy dikenali oleh WordPress
 */
function qriset_flush_rewrite_on_activation() {
    register_post_type_buku();
    register_taxonomy_kategori_buku();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'qriset_flush_rewrite_on_activation' );

/**
 * Mendaftarkan Service Worker untuk fungsionalitas offline.
 */
function qriset_register_service_worker() {
    ?>
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('<?php echo get_template_directory_uri(); ?>/sw.js')
                .then(function(registration) {
                    console.log('Service Worker berhasil didaftarkan dengan scope:', registration.scope);
                }).catch(function(error) {
                    console.log('Pendaftaran Service Worker gagal:', error);
                });
        }
    </script>
    <?php
}
add_action('wp_footer', 'qriset_register_service_worker');

?>
