<?php
 $first_section = get_field('first_section');
 $hero_background = $first_section ['hero_background' ];
 $hero_title = $first_section ['hero_title'];
 $hero_description = $first_section [ 'hero_description']; 
 $button = $first_section['button'];
 

get_header();
?>
<main>
   
    <section class="section1">
        <?php if ($hero_background): ?>
        <img src="<?php echo $hero_background['url'] ?>" alt="<?php echo $hero_background['alt'] ?>">
        <?php endif; ?>
        <div class="hero-content">
            <h1><?php echo $hero_title ?></h1>
            <p><?php echo $hero_description ?></p>
            <button class="button">
                <a href="<?php echo $button ?>">Discover more</a>
            </button>
        </div>
    <section class="section2">
        <h1>Our Service</h1>
        <div class="cards">
                    
                    <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector.svg" alt="">
                        <h2>Ticket Booking</h2>
                        <p>We book all kind of national or internationalticket for your destinaion.</p>
                    </div>   
                    
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/house.svg" alt="">
                        <h2>Hotel Booking</h2>
                        <p>You can easily book your according to youbudget hotel by our website.</p>
                    </div>     
                  
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paper.svg" alt="">
                        <h2> Tour Plan</h2>
                        <p>We provide you the best plan within a shorttime explore more.</p>
                    </div>             
        </div>
    </section>
</main>

<!-- <?php
get_footer();
?> -->