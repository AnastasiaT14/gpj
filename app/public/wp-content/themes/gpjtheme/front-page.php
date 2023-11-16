<?php
 $first_section = get_field('first_section');
 $hero_background = $first_section ['hero_background' ];
 $hero_title = $first_section ['hero_title'];
 $hero_description = $first_section [ 'hero_description']; 
 $button = $first_section['button'];
 

get_header();
?>
<main>
    <!-- first section -->
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

</main>

<?php
get_footer();
?>