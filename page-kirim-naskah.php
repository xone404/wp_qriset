<?php
/**
 * Template Name: Halaman Kirim Naskah
 */

get_header(); // Memanggil file header.php
?>

<main>
    <section class="naskah-hero-section">
        <div class="container">
            <div class="naskah-hero-content">
                <div class="naskah-hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ilustrasinaskah.svg" alt="Ilustrasi Penulis">
                </div>
                <div class="naskah-hero-text">
                    <p><strong>Qriset</strong> hadir untuk membuat proses penerbitan buku menjadi lebih mudah dan transparan. Lupakan kerumitan dan ketidakpastian; fokuslah pada esensi dari penulisan: mengubah ide menjadi buku tanpa khawatir ditolak. Anda memegang kendali kreatif sepenuhnya, mulai dari sampul sampai harga jual, dan kami berada di sini untuk mendukung visi Anda menjadi nyata. Fokuslah untuk berkarya, biar kami yang membantu mewujudkannya menjadi buku berkualitas.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="decoration-wave"></section>

    <section class="template-section">
        <div class="container">
            <h2 class="template-title">Template Naskah Buku</h2>
            <div class="template-cards">
                <a href="<?php echo esc_url( get_template_directory_uri() . '/files/A5.docx' ); ?>" 
                class="template-card" 
                download>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/word.svg' ); ?>" 
                        alt="Ikon Word A5">
                    <div class="template-card-text">
                        <h3>Download Template A5</h3>
                        <span>Ukuran Standar</span>
                    </div>
                </a>

                <a href="<?php echo esc_url( get_template_directory_uri() . '/files/B5.docx' ); ?>" 
                class="template-card" 
                download>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/word.svg' ); ?>" 
                        alt="Ikon Word B5">
                    <div class="template-card-text">
                        <h3>Download Template B5</h3>
                        <span>Ukuran Buku UNESCO</span>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section class="alur-section">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/alur-penerbitan.svg" alt="Alur Proses Penerbitan Qriset Indonesia" style="width:100%; height:auto;">
        </div>
    </section>

    <section class="info-naskah-section">
        <div class="container">
            <div class="info-naskah-grid">
                <div class="info-naskah-col">
                    <h4>Bagaimana Format Pengiriman Naskah ke Penerbit Qriset Indonesia?</h4>
                    <ol>
                        <li>Naskah diketik dalam ukuran kertas A5 dengan size 13 cm x 19 cm / 14.8 cm x 20 cm/ 14 cm x 21 cm; atau dengan ukuran kertas B5 Unesco 15,5 cm x 23 cm (templat tersedia).</li>
                        <li>Spasi 1.15 dengan font Times New Roman 12 pt.</li>
                        <li>Format sitasi American Style (APA).</li>
                        <li>Panjang naskah fiksi/non-fiksi minimal 60 halaman; 100-150 halaman untuk Paket Bronze dan Silver; 150-200 halaman untuk paket Gold dan Platinum (termasuk kelengkapan naskah seperti Halaman Judul, Copyright, dll).</li>
                        <li>Draft naskah yang dikirim, setidaknya meliputi: Judul, Kata Pengantar, Daftar Isi, Isi Naskah, Daftar Pustaka, Biografi Penulis, dan Sinopsis (jika fiksi) atau Blurb (jika non-fiksi).</li>
                    </ol>
                </div>
                <div class="info-naskah-col">
                    <h4>Apa Kriteria Naskah yang Diterima oleh Penerbit Qriset Indonesia?</h4>
                    <ol>
                        <li>Fiksi/nonfiksi untuk kelompok pembaca dewasa, remaja, dan anak-anak.</li>
                        <li>Karya asli penulis, bukan jiplakan atau terjemahan dari karya orang lain. Lampirkan sumber aslinya dalam naskah.</li>
                        <li>Tidak sedang atau belum pernah diterbitkan oleh penerbit lain. Bila sudah pernah terbit, sertakan bukti kontrak yang menunjukan telah selesai atau diputus di antara kedua belah pihak.</li>
                        <li>Tema menarik, up to date, unik, & dibutuhkan pembaca masa kini.</li>
                        <li>Lolos dari seleksi tim review naskah.</li>
                        <li>Tidak berpotensi menimbulkan/memicu konflik SARA.</li>
                    </ol>
                </div>
            </div>
            <div class="info-naskah-cta">
                <h4>Cara Pengiriman Naskah</h4>
                <p>Silahkan kirim naskah anda diterbitkan pada <a href="https://linktr.ee/PenerbitQriset" target="_blank">link sebagai berikut</a> atau klik Link Bio pada instagram @penerbit_qriset. Informasi lebih lanjut hubungi kami di Contact Us. Silahkan menunggu proses penerbitan naskahnya.</p>
            </div>
        </div>
    </section>

    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number">288</span>
                    <span class="stat-label">Buku Telah Terbit</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">132</span>
                    <span class="stat-label">Buku ber-ISBN</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">156</span>
                    <span class="stat-label">Buku ber-QRCBN</span>
                </div>
            </div>
        </div>
    </section>
</main>

<?php 
get_footer(); // Memanggil file footer.php 
?>