<?php
    include('./partials/header.php');
?>
<main>
    <!--
        Commented the Area that is not in use
        Please uncomment the 'include(....)' if needed
    --->
    <?php 

        // Banner Area 
        include('./components/home/banner.php');
        
        // Text Scroll Area
        include('./components/home/text-scroll.php');

        // Popular Area
        //include('./components/home/popular.php');

        // Work Area
        include('./components/home/work.php');

        // Trending Area
        include('./components/home/trending.php');

        // Function Brand Area
        //include('./components/home/function-brand.php');

        // Special Event Area
        include('./components/home/special-event.php');

        // Testimonial Area
        include('./components/home/testimonial.php');

        // Special Event Area
        include('./components/home/special-event-b.php');

        // Partner Area
        //include('./components/home/partner.php');

        // CTA Area
        //include('./components/home/cta.php');
        
    ?>

</main>

<?php
    include('./partials/footer.php');
?>
        