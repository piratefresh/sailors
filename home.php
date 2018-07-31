<?php 
/**
 * Template Name: Homepage
 */
get_header(); ?>

<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content-area">
        <h3 class="title">Sailor's</h3>
        <h4 class="title">Enjoy Every Moment</h4>
        <div class="header-contact">
            <p>
                <i class="fa fa-phone" aria-hidden="true"></i>
                150602323
            </p>
            <p>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                1100 West Montgomery Ave, Philly PA
            </p>
        </div>
    </div>
</section>

<section class="menus" id="menu">
    <h3 class="title">Menu's</h3>
    <div class="menu-selection-grid">
        <a href="/menu/">
            <div class="food-menu wrapper">
                    <img src="<?php echo get_theme_file_uri('/src/images/menu2.jpg') ?>" alt="" srcset="">
                <div class="menu-card-desc overlay-text ">
                    <h4 class="center-text title">Food Menu</h4>
                    <p class="center-text">Wide range from bar food to homemade food</p>
                </div>
            </div>
        </a>
        <a href="/menu/">
            <div class="drink-menu wrapper">
                <img src="<?php echo get_theme_file_uri('/src/images/bar2.jpg') ?>" alt="" srcset="">
                <div class="menu-card-desc overlay-text ">
                    <h4 class="center-text title">Drink Menu</h4>
                    <p class="center-text">Check our HUGE selection of beers and cocktails</p>
                </div>
            </div>
        </a>
    </div>
</section>

<section class="mini-about" id="about">
    <div class="friendly">
        <div class="content-area">
            <h4>A Family</h4>
            <h5>friendly</h5>
            <h4>Gastropub</h4>
            <h5>serving fresh food</h5>
            <h4>all day</h4>
            <h5>everyday</h5>
        </div>
    </div>
    <div class="mini-descrip">
        <div class="content-area">
            <h4>Welcome to</h4>
            <h3>The Sailers</h3>
            <p><?php the_field('aboutUsMiddle'); ?></p>
            <button>About us >></button>
        </div>
    </div>
    <div class="membership">
        <div class="content-area">
            <i class="fas fa-calendar-alt"></i>
            <p>Want to share meals with friends?</p>
            <h4>Book your table here</h4>
            <button>Book Table >></button>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <div class="content-area">
        <div class="opening1">            
            <h4>Our Opening Hours</h4>
            <h5>Mon-Thu</h5>
            <p>11.00 - 23.00</p>
        </div>
        <div class="opening1">            
            <h5>Fri-Sun</h5>
            <p>11.00 - 03.00</p>
        </div>
        <hr>
        <div class="opening1">            
                <h4>Our Food Hours</h4>
                <h5>Mon-Thu</h5>
                <p>11.00 - 23.00</p>
            </div>
            <div class="opening1">            
                <h5>Fri-Sun</h5>
                <p>11.00 - 03.00</p>
            </div>
    </div>
    <div id="map">
    <script src="<?php echo get_theme_file_uri('/src/js/googlemaps.js') ?>"></script>
    </div>
</section>

<section class="news" id="events">
    <div class="news-grid">
        <div class="lastest-news">
            <h2>Lastest News</h2>
            <div>
            <?php the_field('event1'); ?>
            </div>
            <div>
            <?php the_field('event2'); ?>
            </div>
            <div>
            <?php the_field('event3'); ?>
            </div>
        </div>
        <div class="upcoming-events">
            <h2>Upcoming Events</h2>
            <div>
            <?php the_field('news1'); ?>
            </div>
            <div>
            <?php the_field('news2'); ?>
            </div>
            <div>
            <?php the_field('news3'); ?>
            </div>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="slider">
        <div class="slide"><img src="<?php echo get_theme_file_uri('/src/images/magaritamonday.jpg'); ?>" alt="" srcset=""></div>
        <div class="slide"><img src="<?php echo get_theme_file_uri('/src/images/bar1.jpg') ?>" alt="" srcset=""></div>
        <div class="slide"><img src="<?php echo get_theme_file_uri('/src/images/friendly.jpg') ?>" alt="" srcset=""></div>
        <div class="slide"><img src="<?php echo get_theme_file_uri('/src/images/table1.jpg') ?>" alt="" srcset=""></div>
        <div class="slide"><img src="<?php echo get_theme_file_uri('/src/images/vipmember.jpg') ?>" alt="" srcset=""></div>
        <div class="slide"><img src="<?php echo get_theme_file_uri('/src/images/menu1.jpg'); ?>" alt="" srcset=""></div>
    </div>
</section>

<?php get_footer(); ?>