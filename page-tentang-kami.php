<?php
/**
 * Template Name: Halaman Tentang Kami
 */

get_header(); // Memanggil file header.php
?>

<main>
    <div class="container page-padding">
        <section class="profil-section">
            <div class="profil-content">
                <div class="profil-text">
                    <h2 class="section-title">PT. Penerbit Qriset Indonesia</h2>
                    <p>Qriset Indonesia adalah perusahaan penerbitan, percetakan buku dan publikasi jurnal nasional – internasional (single/scope). Beroperasi sejak tahun 2023, yang didukung oleh sumber daya manusia yang handal dan berkompeten di bidangnya, memiliki pengalaman yang cukup dalam dunia industri perbukuan nasional, serta cakupan distribusi pemasaran yang tersebar di seluruh Indonesia.</p>
                    <p>Qriset Indonesia juga merupakan sebuah perusahaan bergerak di bidang Penerbitan Buku dan Publikasi Jurnal dengan alamat website www.qriset-indonesia.com pada tahun 2018. Kami memiliki beragam layanan yang akan membantu untuk menerbitkan buku yang berkualitas dan bernilai jual tinggi, karena kami percaya bahwa sebuah buku akan memiliki makna yang lebih besar jika dapat dibaca oleh banyak orang, apalagi orang lain dapat mengambil manfaat dari buku tersebut.</p>
                </div>
                <div class="profil-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bannerqriset.svg" alt="Ilustrasi Gedung Qriset Indonesia">
                </div>
            </div>
        </section>
    </div>

    <section class="perbukuan-section">
        <div class="container">
            <h2 class="section-title text-center">Dunia Perbukuan di Indonesia</h2>
            <div class="perbukuan-content">
                <div class="perbukuan-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ilustrasibukukami.svg" alt="Ilustrasi Tumpukan Buku">
                </div>
                <div class="perbukuan-text">
                    <p><strong>BUKU</strong> menjadi salah satu media penting dalam pendidikan. Hal ini dikarenakan buku merupakan sarana yang utama dalam penyampaian informasi dan pengetahuan, pelestarian kebudayaan, peningkatan keterampilan, kesejahteraan, dan pengembangan pribadi, juga sebagai alat atau sarana hiburan. Dengan buku, dapat memperoleh informasi dari suatu pengetahuan/pelajaran, meningkatkan keterampilan, kesejahteraan, dan kualitas hidup, serta memeroleh kegembiraan dan kesenangan. Namun saat ini perbukuan di Indonesia masih banyak tertinggal dibandingkan dengan negara-negara lain, baik dalam jumlah judul, mutu isi dan corak kepenulisan, luas penyebaran dan pemanfaatan buku oleh masyarakatnya sendiri. Untuk mengupayakan kemajuan di bidang perbukuan perlu mengetahui keadaan sekarang, untuk kemudian melakukan langkah-langkah dan tindakan yang diperlukan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <h2 class="section-title text-center">Our Team</h2>
            <div class="team-grid">
                <div class="team-card-simple">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logoprofesional.svg" alt="Ikon Profesional">
                    <span>Profesional</span>
                </div>
                <div class="team-card-simple">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logowaktu.svg" alt="Ikon Hemat Waktu dan Tenaga">
                    <span>Hemat Waktu dan Tenaga</span>
                </div>
                <div class="team-card-simple">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logokonsultasi.svg" alt="Ikon Bimbingan dan Konsultasi">
                    <span>Bimbingan dan Konsultasi</span>
                </div>
                <div class="team-card-simple">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logoproteksi.svg" alt="Ikon Keamanan">
                    <span>Keamanan</span>
                </div>
            </div>
        </div>
    </section>
</main>

<?php 
get_footer(); // Memanggil file footer.php 
?>