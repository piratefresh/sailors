<?php

/**
 * Template Name: drinkmenu
 */
get_header();
?>

    <div class="drinkmenu-grid">
        <div class="menu-head">
            <img src="<?php echo get_theme_file_uri('/src/images/menuhead.jpg') ?>" alt="" srcset="">
            <div class="center-text">
                <h2>DRINK MENU</h2>
            </div>
        </div>
        <div class="menu-beers">
            <h4 class="center-text">Beers</h4>
            <div class="menu-content">
                    <div class="item-desc">
                        <?php the_field('beerMenu1'); ?>
                    </div>
                    <div class="item-price center-text">
                        <?php the_field('beerPrice1'); ?>
                    </div>
                    <div class="item-desc">
                        <?php the_field('beerMenu2'); ?>
                    </div>
                    <div class="item-price center-text">
                        <?php the_field('beerPrice2'); ?>
                    </div>
                    <div class="item-desc">
                        <?php the_field('beerMenu3'); ?>
                    </div>
                    <div class="item-price center-text">
                        <?php the_field('beerPrice3'); ?>
                    </div>
                    <div class="item-desc">
                        <?php the_field('beerMenu4'); ?>
                    </div>
                    <div class="item-price center-text">
                        <?php the_field('beerPrice4'); ?>
                    </div>
            </div>
        </div>
        <div class="menu-margartias">
            <h4 class="center-text">Margaritas</h4>
            <div class="menu-content">
                <div class="item-desc">
                    <?php the_field('margaritaMenu1'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('margaritaPrice1'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('margaritaMenu2'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('margaritaPrice2'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('margaritaMenu3'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('margaritaPrice3'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('margaritaMenu4'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('margaritaPrice4'); ?>
                </div>
            </div>
        </div>
        <div class="menu-favs">
            <h4 class="center-text">Favourite Cocktails</h4>
            <div class="menu-content">
                <div class="item-desc">
                    <?php the_field('cocktailMenu1'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('cocktailPrice1'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('cocktailMenu2'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('cocktailPrice2'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('cocktailMenu3'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('cocktailPrice3'); ?>
                </div>
                <div class="item-desc">
                    <?php the_field('cocktailMenu4'); ?>
                </div>
                <div class="item-price center-text">
                    <?php the_field('cocktailPrice4'); ?>
                </div>            
            </div>
        </div>
            </div>
        </div>
    </div>



<?php get_footer(); ?>