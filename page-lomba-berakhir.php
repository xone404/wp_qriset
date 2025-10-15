<?php
/**
 * Template Name: Halaman Lomba Berakhir
 */

get_header(); // Memanggil file header.php
?>

<main>
    <div class="container page-padding">
        
        <div class="event-ended-content">
            <h2 class="section-title text-center">Lomba Telah Berakhir</h2>
            <p class="text-center">Terima kasih atas partisipasi Anda. Nantikan event kami selanjutnya!</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/nextevent.svg" alt="Ilustrasi Lomba Telah Berakhir">
        </div>

    </div>
</main>

<?php 
get_footer(); // Memanggil file footer.php 
?>