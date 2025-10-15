<?php
/**
 * Template Name: Halaman Depan
 */

get_header(); // Memanggil file header.php
?>

<main>
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <p class="welcome-text">Selamat datang!</p>
                    <h1>PT Penerbit Qriset Indonesia</h1>
                    <p>Qriset Indonesia (PT Penerbit Qriset Indonesia) adalah lembaga yang menyediakan jasa penerbitan buku serta publikasi jurnal nasional dan internasional. Kami percaya buku adalah sarana utama untuk penyebaran ilmu pengetahuan, peningkatan keterampilan, dan pengembangan diri.</p>
                    <a href="https://wa.me/6282223262722" class="cta-button" target="_blank">
                        <span class="icon-headset"></span>
                        Hubungi Kami
                    </a>
                </div>
                <div class="hero-illustration">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/IlustrasiHome.svg" alt="Ilustrasi orang bekerja di penerbitan">
                </div>
            </div>
        </div>
    </section>

    <section class="decoration-wave"></section>

    <section class="layanan-section">
        <div class="container">
                <div class="section-header">
                <a href="<?php echo esc_url( get_permalink( get_page_by_path('layanan') ) ); ?>" class="cta-button">
                    Layanan
                </a>

                </div>
            <div class="layanan-grid">
                <div class="layanan-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ButtonPenerbit.svg" alt="Ikon Penerbit Buku" class="layanan-icon">
                    <h3 class="layanan-title">Penerbit Buku</h3>
                    <p class="layanan-description">Jadikan naskah Anda sebuah karya. Sebagai mitra penerbitan, kami menyediakan dukungan penuh mulai dari editorial, produksi, hingga pemasaran.</p>
                </div>
                <div class="layanan-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ButtonJurnalNasional.svg" alt="Ikon Jurnal Nasional" class="layanan-icon">
                    <h3 class="layanan-title">Publikasi Jurnal Nasional</h3>
                    <p class="layanan-description">Wadah diseminasi hasil riset terbaik untuk menjangkau audiens akademis di seluruh Indonesia. Terbitkan karya Anda di platform yang kredibel dan bereputasi.</p>
                </div>
                <div class="layanan-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ButtonJurnalInternasional.svg" alt="Ikon Jurnal Internasional" class="layanan-icon">
                    <h3 class="layanan-title">Publikasi Jurnal Internasional</h3>
                    <p class="layanan-description">Bawa riset Anda ke panggung dunia. Kami memfasilitasi publikasi pada jurnal terindeks global untuk memastikan karya Anda mendapatkan pengakuan dan dampak internasional.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="produk-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">PRODUK</span>
                <h2 class="section-title">Produk Terkini</h2>
            </div>

            <div class="produk-list">
                <?php
                // Query untuk menampilkan 6 buku terbaru
                $args = array(
                    'post_type'      => 'buku',      // Nama post type
                    'posts_per_page' => 6,           // Maksimal 6 buku
                    'orderby'        => 'date',
                    'order'          => 'DESC'
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $penulis = get_post_meta(get_the_ID(), 'penulis', true);
                ?>
                    <a href="<?php the_permalink(); ?>" class="produk-list-item">
                        <div class="produk-list-cover">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/buku2.svg" alt="Cover Buku">
                            <?php endif; ?>
                        </div>
                        <div class="produk-list-details">
                            <h3 class="produk-title"><?php the_title(); ?></h3>
                            <p class="produk-description"><?php echo get_the_excerpt(); ?></p>
                            <?php if ($penulis) : ?>
                                <span class="produk-author"><?php echo esc_html($penulis); ?></span>
                            <?php endif; ?>
                        </div>
                    </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>Tidak ada buku terbaru saat ini.</p>';
                endif;
                ?>
            </div>

            <div class="section-footer">
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'daftar-buku' ) ) ); ?>" class="button-outline">Lihat Semua</a>
            </div>
        </div>
    </section>
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Konsultan</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">900+</span>
                    <span class="stat-label">Projek</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">5,000</span>
                    <span class="stat-label">Pelanggan</span>
                </div>
            </div>
        </div>
    </section>
        <section class="faq-section">
            <div class="container">
                <div class="section-header">
                    <span class="section-tag">FAQ</span>
                    <h2 class="section-title">Pertanyaan paling sering diajukan</h2>
                </div>
                <div class="faq-list">
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Apakah Qriset Indonesia menerima jasa translate dan cek plagiasi?</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </summary>
                        <div class="faq-answer">
                            <p>Ya, kami juga menerima jasa translate dan cek plagiasi artikel.</p>
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Apakah bisa publikasi jurnal ber-ISSN?</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </summary>
                        <div class="faq-answer">
                            <p>Tentu saja. Kami memfasilitasi publikasi jurnal nasional yang sudah terdaftar dan memiliki ISSN (International Standard Serial Number) resmi.</p>
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Apakah jurnal yang dipublikasi di Jakad terhindar dari predator?</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </summary>
                        <div class="faq-answer">
                            <p>Kami sangat selektif dalam memilih platform jurnal. Semua jurnal mitra kami memiliki reputasi yang baik, terindeks, dan terjamin bukan merupakan jurnal predator.</p>
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Apakah Qriset Indonesia melayani editing service saja sebelum publikasi?</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </summary>
                        <div class="faq-answer">
                            <p>Ya, kami menyediakan layanan terpisah untuk editing naskah (proofreading, copy editing) sesuai standar akademik sebelum Anda mengajukannya untuk publikasi di mana pun.</p>
                        </div>
                    </details>
                </div>
            </div>
        </section>

    <section class="sertifikat-section">
        <div class="container">
            <h2 class="sertifikat-title">SERTIFIKAT KEANGGOTAAN IKAPI</h2>
            <div class="sertifikat-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sertifikat-ikapi.svg" alt="Sertifikat Keanggotaan IKAPI">
            </div>
        </div>
    </section>

    <section class="lomba-section">
        <div class="container">
            <div class="lomba-content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/lombamenulis.svg" alt="Lomba Menulis" class="lomba-image">
                <a href="<?php echo esc_url( home_url( '/lomba' ) ); ?>" class="button-outline-blue">Lihat Selengkapnya</a>            
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <div class="cta-text">
                    <h2>Jadilah penulis terbaik selanjutnya!</h2>
                    <p>Dapatkan pelayanan terbaik dari kami.</p>
                </div>
                <div class="cta-button-wrapper">
                    <a href="https://wa.me/6282223262722?text=Halo,%20saya%20ingin%20konsultasi." target="_blank" class="button-cta-solid">
                        <span class="icon-headset"></span>
                        Konsultasi Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); // Memanggil file footer.php ?>