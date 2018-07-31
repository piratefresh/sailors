<?php

/**
 * Template Name: menu
 */
get_header();
?>

    <div class="menu-grid">
        <div class="menu-head">
            <img src="<?php echo get_theme_file_uri('/src/images/menuhead.jpg') ?>" alt="" srcset="">
            <div class="center-text">
                <h2>FOOD MENU</h2>
            </div>
        </div>
        <div class="menu-starters center-text">
            <div class="menu-content">
                <h3>Starters</h3>
            </div>
        </div>
        <div class="menu-soups">
            <h4 class="center-text">Soups</h4>
            <div class="menu-content">
                <div class="item-desc">
                    <?php the_field('soupMenu1'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('soupPrice1'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('soupMenu2'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('soupPrice2'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('soupMenu3'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('soupPrice3'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('soupMenu4'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('soupPrice4'); ?>
                </div>
            </div>
        </div>
        <div class="menu-salads">
            <h4 class="center-text">Salads</h4>
            <div class="menu-content">
                <div class="item-desc">
                    <?php the_field('saladMenu1'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('saladPrice1'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('saladMenu2'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('saladPrice2'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('saladMenu3'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('saladPrice3'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('saladMenu4'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('saladPrice4'); ?>
                </div>
            </div>
        </div>
        <div class="menu-enteres center-text">
            <div class="menu-content">
                <h3>Enteres</h3>
            </div>
        </div>
        <div class="menu-burgers">
            <h4 class="center-text">Angus Burgers</h4>
            <p class="center-text" style="border: none;">Served with fries sub sweet potato fries .99, sub waffle fries 1.99</p>
            <div class="menu-content">
                <div class="item-desc">
                    <?php the_field('burgersMenu1'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('burgersPrice1'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('burgersMenu2'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('burgersPrice2'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('burgersMenu3'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('burgersPrice3'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('burgersMenu4'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('burgersPrice4'); ?>
                </div>            
            </div>
        </div>
        <div class="menu-sandwiches">
            <h4 class="center-text">Sandwiches</h4>
            <p class="center-text" style="border: none;">Served with fries sub sweet potato fries .99, sub waffle fries 1.99</p>
            <div class="menu-content">
                <div class="item-desc">
                    <?php the_field('sandwichesMenu1'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('sandwichesPrice1'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('sandwichesMenu2'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('sandwichesPrice2'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('sandwichesMenu3'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('sandwichesPrice3'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('sandwichesMenu4'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('sandwichesPrice4'); ?>
                </div>
                </div>
            </div>
            <div class="menu-wraps">
                <h4 class="center-text">Wraps</h4>
                <p class="center-text" style="border: none;">in a flour tortilla, served with house made chips</p>
                <div class="menu-content">
                    <div class="item-desc">
                        <?php the_field('wrapsMenu1'); ?>
                    </div>
                    <div class="item-price center-text">
                        <?php the_field('wrapsPrice1'); ?>
                    </div>
                    <div class="item-desc">
                        <?php the_field('wrapsMenu2'); ?>
                    </div>
                    <div class="item-price center-text">
                        <?php the_field('wrapsPrice2'); ?>
                    </div>
                    <div class="item-desc">
                        <?php the_field('wrapsMenu3'); ?>
                    </div>
                    <div class="item-price center-text">
                        <?php the_field('wrapsPrice3'); ?>
                    </div>
                    <div class="item-desc">
                        <?php the_field('wrapsMenu4'); ?>
                    </div>
                    <div class="item-price center-text">
                        <?php the_field('wrapsPrice4'); ?>
                    </div>
                </div>
            </div>
            <div class="menu-fajitas">
                <h4 class="center-text">Fajitas</h4>
                <p class="center-text" style="border: none;">
                    All fajitas served with cheddar, jack, peppers,
                        onions, sour cream, guacamole, 3 flour tortillas
                        choice of two meats, 5 tortillas</p>
                <div class="menu-content">
                    <div class="item-desc">
                        <?php the_field('fajitasMenu1'); ?>
                    </div>
                    <div class="item-price center-text">
                        <?php the_field('fajitasPrice1'); ?>
                    </div>
                    <div class="item-desc">
                        <?php the_field('fajitasMenu2'); ?>
                    </div>
                    <div class="item-price center-text">
                        <?php the_field('fajitasPrice2'); ?>
                    </div>
                    <div class="item-desc">
                        <?php the_field('fajitasMenu3'); ?>
                    </div>
                    <div class="item-price center-text">
                        <?php the_field('fajitasPrice3'); ?>
                    </div>
                    <div class="item-desc">
                        <?php the_field('fajitasMenu4'); ?>
                    </div>
                    <div class="item-price center-text">
                        <?php the_field('fajitasPrice4'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php get_footer(); ?>