<!Doctype html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $args["metaDescription"] ?>">
    <meta name="keywords" content="">
    <link delay-1 rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon">
    <link delay-1 rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon">
    <meta property="og:locale" content="pl_PL">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $args["ogTitle"] ?>">
    <meta property="og:url" content="<?php echo $args["ogUrl"] ?>">
    <meta property="og:site_name" content="<?php echo $args["ogSite_name"] ?>">
    <meta name="google-site-verification" content="" />
    <title><?php echo $args["title"] ?></title>

    <?php
    wp_head();
    ?>
</head>

<body>
    <header class="container-fluid nav-wrapper m-0 p-0 ">
        <div class="row nav-row">
            <div class="openbtn-wrapper">
                <span class=""></span>
                <span class=""></span>
                <span class=""></span>
            </div>
            <div class="language-wrapper"><span class="language-button"></span><span class="pl">
                    <p>PL</p>
                </span><i class="bi bi-arrow-right-short"></i><span class="en">
                    <p>EN</p>
                </span></div>
            <nav class="col-sm-12 navi-container-mobile">

                <a href="#aboutMe" class="nav-link nav-link-mobile">O mnie</a>
                <a href="#mySkills" class="nav-link nav-link-mobile">Umiejętności kodowania</a>
                <a href="#mySkillsPractical" class="nav-link nav-link-mobile">Umiejętności praktyczne</a>
                <a href="#port" class="nav-link nav-link-mobile">Portfolio</a>
                <a href="#containerReview" class="nav-link nav-link-mobile">Opinie</a>
                <a href="#contact" class="nav-link nav-link-mobile">Kontakt</a>
            </nav>



            <nav class="col-sm-12 navi-container">

                <span class="nav-link-wrapper"> <a href="#aboutMe" class="nav-link nav-link-desktop">O mnie <span class="borderBottom"></span></a></span>
                <span class="nav-link-wrapper"> <a href="#mySkills" class="nav-link nav-link-desktop">Umiejętności
                        kodowania<span class="borderBottom"></span></a></span>
                <span class="nav-link-wrapper"> <a href="#mySkillsPractical" class="nav-link nav-link-desktop">Umiejętności
                        praktycze<span class="borderBottom"></span></a></span>
                <span class="nav-link-wrapper"> <a href="#port" class="nav-link nav-link-desktop">Portfolio <span class="borderBottom"></span></a></span>
                <span class="nav-link-wrapper"> <a href="#containerReview" class="nav-link nav-link-desktop">Opinie <span class="borderBottom"></span></a></span>
                <span class="nav-link-wrapper"> <a href="#contact" class="nav-link nav-link-desktop">Kontakt <span class="borderBottom"></span></a></span>
            </nav>
        </div>
    </header>