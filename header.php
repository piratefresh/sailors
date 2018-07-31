<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<header id="navigation" data-speed="1000">
    <div class="logo-brand">
        <a href="#">
            <img src="#">
        </a>
    </div>
    <nav>
    <?php if (!is_front_page()) : ?>
        <li><a href="<?php echo home_url('#about') ?>">About</a></li>
        <li><a href="<?php echo home_url('#menu') ?>">Menu</a></li>
        <li><a href="<?php echo home_url('#contact') ?>">Contact</a></li>
        <li><a href="<?php echo home_url('#events') ?>">Events</a></li>
    <?php else : ?>
        <li><a class="scroll" href="#about">About</a></li>
        <li><a class="scroll" href="#menu">Menu</a></li>
        <li><a class="scroll" href="#contact">Contact</a></li>
        <li><a class="scroll" href="#events">Events</a></li>
    <?php endif ?>
    </nav>
</header>


