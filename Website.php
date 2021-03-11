<?php

include 'db.php';

$id = $_GET['id'];

$sql = "SELECT title, content, author FROM website WHERE id=$id";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {



?>







<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title><?php echo $row["title"]; ?></title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel='stylesheet' id='generate-style-css' href='https://blog.rachacuca.com.br/wp-content/themes/generatepress/css/all.min.css?ver=2.4.1' type='text/css' media='all' />
<style id='generate-style-inline-css' type='text/css'>
.post-navigation {display:none;}
body{background-color:#fbfbfb;color:#3a3a3a;}a, a:visited{color:#3373cf;}a:hover, a:focus, a:active{color:#000000;}body .grid-container{max-width:1170px;}.wp-block-group__inner-container{max-width:1170px;margin-left:auto;margin-right:auto;}body, button, input, select, textarea{font-family:"Open Sans", sans-serif;font-weight:300;font-size:20px;}body{line-height:1.6;}.entry-content > [class*="wp-block-"]:not(:last-child){margin-bottom:1.5em;}.main-title{text-transform:uppercase;font-size:29px;}.main-navigation a, .menu-toggle{font-weight:300;text-transform:uppercase;font-size:16px;}.main-navigation .main-nav ul ul li a{font-size:15px;}.widget-title{font-family:"Lato", sans-serif;font-weight:500;text-transform:uppercase;}button:not(.menu-toggle),html input[type="button"],input[type="reset"],input[type="submit"],.button,.button:visited,.wp-block-button .wp-block-button__link{font-weight:500;text-transform:uppercase;font-size:14px;}h1{font-family:"Playfair Display", serif;font-weight:normal;font-size:50px;}h2{font-family:"Playfair Display", serif;font-weight:normal;}h3{font-family:"Playfair Display", serif;font-size:24px;}h4{font-weight:700;font-size:18px;}@media (max-width:768px){.main-title{font-size:30px;}h1{font-size:30px;}h2{font-size:24px;}}.top-bar{background-color:#000000;color:#ffffff;}.top-bar a,.top-bar a:visited{color:#ffffff;}.top-bar a:hover{color:#303030;}.site-header{background-color:rgba(255,255,255,0);color:#3a3a3a;}.site-header a,.site-header a:visited{color:#3a3a3a;}.main-title a,.main-title a:hover,.main-title a:visited{color:#222222;}.site-description{color:#757575;}.main-navigation,.main-navigation ul ul{background-color:rgba(255,255,255,0);}.main-navigation .main-nav ul li a,.menu-toggle{color:#3a3a3a;}.main-navigation .main-nav ul li:hover > a,.main-navigation .main-nav ul li:focus > a, .main-navigation .main-nav ul li.sfHover > a{color:#3a3a3a;background-color:rgba(255,84,129,0);}button.menu-toggle:hover,button.menu-toggle:focus,.main-navigation .mobile-bar-items a,.main-navigation .mobile-bar-items a:hover,.main-navigation .mobile-bar-items a:focus{color:#3a3a3a;}.main-navigation .main-nav ul li[class*="current-menu-"] > a{color:#3a3a3a;background-color:rgba(63,63,63,0);}.main-navigation .main-nav ul li[class*="current-menu-"] > a:hover,.main-navigation .main-nav ul li[class*="current-menu-"].sfHover > a{color:#3a3a3a;background-color:rgba(63,63,63,0);}.navigation-search input[type="search"],.navigation-search input[type="search"]:active, .navigation-search input[type="search"]:focus, .main-navigation .main-nav ul li.search-item.active > a{color:#3a3a3a;background-color:rgba(255,84,129,0);}.main-navigation ul ul{background-color:#3a3a3a;}.main-navigation .main-nav ul ul li a{color:#ffffff;}.main-navigation .main-nav ul ul li:hover > a,.main-navigation .main-nav ul ul li:focus > a,.main-navigation .main-nav ul ul li.sfHover > a{color:#ffffff;background-color:#4f4f4f;}.main-navigation .main-nav ul ul li[class*="current-menu-"] > a{color:#ffffff;background-color:#4f4f4f;}.main-navigation .main-nav ul ul li[class*="current-menu-"] > a:hover,.main-navigation .main-nav ul ul li[class*="current-menu-"].sfHover > a{color:#ffffff;background-color:#4f4f4f;}.separate-containers .inside-article, .separate-containers .comments-area, .separate-containers .page-header, .one-container .container, .separate-containers .paging-navigation, .inside-page-header{background-color:#fbfbfb;}.entry-title a,.entry-title a:visited{color:#000000;}.entry-title a:hover{color:#000000;}.entry-meta{color:#595959;}.entry-meta a,.entry-meta a:visited{color:#595959;}.entry-meta a:hover{color:#222222;}h2{color:#222222;}.sidebar .widget{background-color:#f4f6f7;}.sidebar .widget .widget-title{color:#3a3a3a;}.footer-widgets{color:#3a3a3a;background-color:rgba(0,0,0,0);}.footer-widgets a,.footer-widgets a:visited{color:#3373cf;}.footer-widgets a:hover{color:#222222;}.footer-widgets .widget-title{color:#ff1956;}.site-info{color:#0a0000;background-color:rgba(34,34,34,0);}.site-info a,.site-info a:visited{color:#0a0a0a;}.site-info a:hover{color:#606060;}.footer-bar .widget_nav_menu .current-menu-item a{color:#606060;}input[type="text"],input[type="email"],input[type="url"],input[type="password"],input[type="search"],input[type="tel"],input[type="number"],textarea,select{color:#666666;background-color:#fafafa;border-color:#cccccc;}input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="search"]:focus,input[type="tel"]:focus,input[type="number"]:focus,textarea:focus,select:focus{color:#666666;background-color:#ffffff;border-color:#bfbfbf;}button,html input[type="button"],input[type="reset"],input[type="submit"],a.button,a.button:visited,a.wp-block-button__link:not(.has-background){color:#ffffff;background-color:#ff1956;}button:hover,html input[type="button"]:hover,input[type="reset"]:hover,input[type="submit"]:hover,a.button:hover,button:focus,html input[type="button"]:focus,input[type="reset"]:focus,input[type="submit"]:focus,a.button:focus,a.wp-block-button__link:not(.has-background):active,a.wp-block-button__link:not(.has-background):focus,a.wp-block-button__link:not(.has-background):hover{color:#b5005a;background-color:#ffffff;}.generate-back-to-top,.generate-back-to-top:visited{background-color:rgba( 0,0,0,0.4 );color:#ffffff;}.generate-back-to-top:hover,.generate-back-to-top:focus{background-color:rgba( 0,0,0,0.6 );color:#ffffff;}.inside-header{padding:10px;}.separate-containers .inside-article, .separate-containers .comments-area, .separate-containers .page-header, .separate-containers .paging-navigation, .one-container .site-content, .inside-page-header, .wp-block-group__inner-container{padding:0px 0px 60px 0px;}.entry-content .alignwide, body:not(.no-sidebar) .entry-content .alignfull{margin-left:-0px;width:calc(100% + 0px);max-width:calc(100% + 0px);}.one-container.right-sidebar .site-main,.one-container.both-right .site-main{margin-right:0px;}.one-container.left-sidebar .site-main,.one-container.both-left .site-main{margin-left:0px;}.one-container.both-sidebars .site-main{margin:0px;}.separate-containers .widget, .separate-containers .site-main > *, .separate-containers .page-header, .widget-area .main-navigation{margin-bottom:30px;}.separate-containers .site-main{margin:30px;}.both-right.separate-containers .inside-left-sidebar{margin-right:15px;}.both-right.separate-containers .inside-right-sidebar{margin-left:15px;}.both-left.separate-containers .inside-left-sidebar{margin-right:15px;}.both-left.separate-containers .inside-right-sidebar{margin-left:15px;}.separate-containers .page-header-image, .separate-containers .page-header-contained, .separate-containers .page-header-image-single, .separate-containers .page-header-content-single{margin-top:30px;}.separate-containers .inside-right-sidebar, .separate-containers .inside-left-sidebar{margin-top:30px;margin-bottom:30px;}.main-navigation .main-nav ul li a,.menu-toggle,.main-navigation .mobile-bar-items a{line-height:50px;}.navigation-search input{height:50px;}.rtl .menu-item-has-children .dropdown-menu-toggle{padding-left:20px;}.rtl .main-navigation .main-nav ul li.menu-item-has-children > a{padding-right:20px;}.widget-area .widget{padding:15px;}@media (max-width:768px){.separate-containers .inside-article, .separate-containers .comments-area, .separate-containers .page-header, .separate-containers .paging-navigation, .one-container .site-content, .inside-page-header, .wp-block-group__inner-container{padding:20px;}.entry-content .alignwide, body:not(.no-sidebar) .entry-content .alignfull{margin-left:-20px;width:calc(100% + 40px);max-width:calc(100% + 40px);}}/* End cached CSS */@media (max-width: 768px){.main-navigation .menu-toggle,.main-navigation .mobile-bar-items,.sidebar-nav-mobile:not(#sticky-placeholder){display:block;}.main-navigation ul,.gen-sidebar-nav{display:none;}[class*="nav-float-"] .site-header .inside-header > *{float:none;clear:both;}}@font-face {font-family: "GeneratePress";src:  url("https://blog.rachacuca.com.br/wp-content/themes/generatepress/fonts/generatepress.eot");src:  url("https://blog.rachacuca.com.br/wp-content/themes/generatepress/fonts/generatepress.eot#iefix") format("embedded-opentype"),  url("https://blog.rachacuca.com.br/wp-content/themes/generatepress/fonts/generatepress.woff2") format("woff2"),  url("https://blog.rachacuca.com.br/wp-content/themes/generatepress/fonts/generatepress.woff") format("woff"),  url("https://blog.rachacuca.com.br/wp-content/themes/generatepress/fonts/generatepress.ttf") format("truetype"),  url("https://blog.rachacuca.com.br/wp-content/themes/generatepress/fonts/generatepress.svg#GeneratePress") format("svg");font-weight: normal;font-style: normal;}.main-navigation .slideout-toggle a:before,.slide-opened .slideout-overlay .slideout-exit:before {font-family: GeneratePress;}.slideout-navigation .dropdown-menu-toggle:before {content: "\f107" !important;}.slideout-navigation .sfHover > a .dropdown-menu-toggle:before {content: "\f106" !important;}
.navigation-branding .main-title{font-weight:bold;text-transform:uppercase;font-size:29px;}@media (max-width: 768px){.navigation-branding .main-title{font-size:30px;}}
</style>


<style>

p{

white-space: pre-wrap;

}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1"> <style type="text/css" id="wp-custom-css">
			/* GeneratePress Site CSS */ /* Colors */
.main-navigation ul li:after {
    background-color: #000;
}

.main-navigation .inside-navigation {
    border-top: 0.5px solid #d4d7d8;
}

.wpsp-card, .wpsp-card a, .wpsp-card .wp-show-posts-meta a, .wpsp-card .wp-show-posts-meta a:visited {
    color: #fff;
}
.navigation-search.nav-search-active {
	background-color: rgba(255,255,255,0.95);
	top: 100%;
}

/* Theme Global */
@media (min-width: 769px) {
    body {
        margin: 0 30px;
    }
}

body.single-post.no-sidebar .site-content {
    max-width: 720px;
    margin-left: auto;
    margin-right: auto;
}

/* Navigation */
.second-nav.grid-container {
    padding: 0;
}

@media (min-width: 769px) {
    .main-navigation ul li {
        position: relative;
    }

    .main-navigation ul li:after {
        content: '';
        position: absolute;
        height: 0;
        width: 100%;
        bottom: 0;
        left: 0;
        pointer-events: none;
        filter: hue-rotation(90deg);
        -webkit-filter: hue-rotation(90deg);
        -webkit-transition: height 0.35s ease;
        transition: height 0.35s ease;
    }

    .main-navigation ul li:hover:after, .main-navigation ul li.current-menu-item:after {
        height: 6px;
    }
}

/* Widgets */
.widget-title {
    margin: 1em 0;
    font-size: 0.8em !Important;
}

.widget .wp-show-posts article {
    margin-bottom: 0.5em !important;
}

.zero-padding {
    padding: 0 !important;
}

.widget.no-background {
    background-color: transparent;
}

/* Buttons */
button, html input[type="button"], input[type="reset"], input[type="submit"], a.button, a.button:visited, a.wp-block-button__link:not(.has-background) {
    pointer-events: initial !important;
    border-color: inherit;
    border: 1px solid;
}

/* Page Heros */
.page-hero.overlay {
    -webkit-box-shadow: inset 0px -180px 83px -15px rgba(0, 0, 0, 0.75);
    box-shadow: inset 0px -180px 83px -15px rgba(0, 0, 0, 0.75);
}

.gradient-overlay {
    position: relative;
    z-index: -1;
}

.gradient-overlay:after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: -webkit-gradient(linear, left top, left bottom, from(rgba(3, 89, 155, .5)), to(rgba(14, 161, 234, .6)));
    background: linear-gradient(rgba(3, 89, 155, .5), rgba(14, 161, 234, .6));
    z-index: -1;
}

/* Blog */
.generate-columns .inside-article {
    padding: 0 0 15px;
}

@media (max-width: 768px) {
    .generate-columns .inside-article>*:not(.post-image) {
        padding: 0 15px;
    }
}

.generate-columns-container article .inside-article .post-image {
    margin-bottom: 0.5em;
}

.generate-columns-container article .inside-article .entry-summary {
    margin-top: 0.5em;
    font-size: 0.8em;
}

.generate-columns-container article .entry-header, .wp-show-posts-entry-header {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
    -ms-flex-direction: column-reverse;
    flex-direction: column-reverse;
}

@media (min-width: 768px) {
.generate-columns-container article .entry-header .entry-title, .wp-show-posts article .wp-show-posts-entry-title {
    line-height: 2.5ex;
    /*height: 5ex;*/
    overflow: hidden;
    text-overflow: ellipsis;
}
}

.wp-show-posts .wp-show-posts-inner {
    overflow: hidden;
}

@media (min-width: 420px) {
.wpsp-align .wp-show-posts-image {
    margin-bottom: 0;
}
}
.wpsp-align .wp-show-posts-image a, .wpsp-align .wp-show-posts-image img {
    height: 100%;
}

.generate-columns-container article .inside-article img, .wp-show-posts-image img {
    -o-object-fit: cover !important;
    object-fit: cover !important;
}

/* WPSP Grids */
/* Single column align side image */
/* Add wpsp-align class to to WPSP List shortcode wrapper */
@media (min-width: 420px) {
    .wpsp-align .wp-show-posts-inner {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .wpsp-align .wp-show-posts-inner>div {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }
}

@media (max-width: 768px) and (min-width: 420px) {
    .wpsp-align .wp-show-posts-inner .wp-show-posts-image {
        margin-right: 1.5em;
    }
}

/* magazine Grid Golden Ratio 5 block standard */
/* Add wpsp-grid class to WPSP List shortcode wrapper */
@media (min-width: 600px) {
    .wpsp-grid .wp-show-posts {
        display: grid;
    }
}

@media (min-width: 900px) {
    .wpsp-grid .wp-show-posts {
        grid-template-columns: repeat(8, 1fr);
        grid-template-rows: 1fr auto;
    }

    .wpsp-grid .wp-show-posts article:first-child {
        grid-column: 1 / 5;
        grid-row: 1 / 4;
    }

    .wpsp-grid .wp-show-posts article:nth-child(2) {
        grid-column: 5 / end;
        grid-row: 1 / 2;
    }

    .wpsp-grid .wp-show-posts article:nth-child(3) {
        grid-column: 5 / 7;
        grid-row: 2 / 4;
    }

    .wpsp-grid .wp-show-posts article:nth-child(4) {
        grid-column: 7 / end;
        grid-row: 2 / 4;
    }
}

@media (max-width: 899px) and (min-width: 600px) {
    .wpsp-grid .wp-show-posts article {
        grid-column: span 4;
    }

    .wpsp-grid .wp-show-posts article:nth-child(3), .wpsp-grid .wp-show-posts article:nth-child(4) {
        grid-row: 3;
        grid-column: span 2;
    }
}

.wpsp-grid article:not(:first-child) .wp-show-posts-image a img {
    height: 250px;
    width: 100%;
    -o-object-fit: cover;
    object-fit: cover;
}

.wpsp-grid article:first-child .wp-show-posts-image a img {
    height: 500px;
    width: 100%;
    -o-object-fit: cover;
    object-fit: cover;
}

.wpsp-grid article:not(:first-child) .wp-show-posts-entry-summary, .wpsp-grid article:not(:first-child) .wp-show-posts-entry-meta-below-post, .wpsp-grid article:not(:first-child) .wpsp-read-more {
    display: none;
}

/* WPSP Card Styling */
/* Add wpsp-card class to WPSP List shortcode wrapper */
.wpsp-card .wp-show-posts-meta a, .wpsp-card .wp-show-posts-meta a:visited {
    font-size: 1em;
    font-weight: 500;
    text-transform: uppercase;
}

:not(.widget).wpsp-card .wp-show-posts article, .wpsp-card .wp-show-posts-image {
    margin-bottom: 0 !important;
}

.wpsp-card .wp-show-posts-inner {
    position: relative;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.wpsp-card .wpsp-content-wrap {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 5% 8%;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    background-color: rgba(0, 0, 0, 0.35);
    background: -webkit-gradient(linear, left bottom, left top, color-stop(30%, rgba(80, 50, 50, 0.5)), to(rgba(0, 0, 0, 0)));
    background: linear-gradient(0deg, rgba(80, 50, 50, 0.5) 30%, rgba(0, 0, 0, 0) 100%);
    pointer-events: none;
}

.wpsp-card article {
    position: relative;
    overflow: hidden;
}

.wpsp-card article, .wpsp-card article .wp-show-posts-image img {
    -webkit-backface-visibility: hidden;
    -webkit-transition: 0.3s all ease;
    transition: 0.3s all ease;
}

.wpsp-card article:hover .wp-show-posts-image img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    -webkit-transition: 0.3s all ease;
    transition: 0.3s all ease;
}

/* Post Navigation */
#post-nav a {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 50%;
    flex: 1 0 50%;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

@media (max-width: 768px) {
    #post-nav a {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 100%;
        flex: 1 0 100%;
    }
}

#post-nav, #post-nav .post-nav-wrap {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

#post-nav {
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-top: 60px;
}

#post-nav .post-nav-wrap {
    background-size: cover !important;
    background-position: center center !important;
    min-height: 120px;
    height: 100%;
    padding: calc(6% + 1em) 5%;
    -webkit-box-shadow: inset 0 -50px 70px 20px rgba(0, 0, 0, 0.5);
    box-shadow: inset 0 -50px 70px 20px rgba(0, 0, 0, 0.5);
    -webkit-transition: -webkit-box-shadow 500ms;
    transition: -webkit-box-shadow 500ms;
    transition: box-shadow 500ms;
    transition: box-shadow 500ms, -webkit-box-shadow 500ms;
    position: relative;
	box-sizing: border-box;
}

#post-nav .post-nav-wrap:hover {
    -webkit-box-shadow: inset 0 -90px 70px 20px rgba(0, 0, 0, 0.5);
    box-shadow: inset 0 -90px 70px 20px rgba(0, 0, 0, 0.5);
}

.post-nav-wrap>* {
    color: #fff;
}

.post-nav-date {
    font-size: 0.9em;
}

.post-nav-title {
    margin: 5px 0 !important;
}

.post-nav {
    min-width: 60px;
    position: absolute;
    top: 0;
    border-radius: 0 0 2px 0;
}

.post-nav:first-child {
    left: 0;
}

.post-nav:last-child {
    right: 0;
}

.post-nav {
    padding: 6px 12px;
    border-radius: 3px;
    font-size: 0.7em;
    text-transform: uppercase;
    background-color: #ff1956;
    color: #fff !important;
}

.header-widget .lsi-social-icons li {
	margin-bottom: 0 !important;
}

body .happyforms-flex {
	padding: 0;
} /* End GeneratePress Site CSS */		</style>

</head>
<body class="post-template-default single single-post postid-1747 single-format-standard wp-custom-logo wp-embed-responsive post-image-above-header post-image-aligned-center slideout-enabled slideout-mobile sticky-menu-fade right-sidebar nav-below-header contained-header separate-containers active-footer-widgets-3 nav-aligned-left header-aligned-left dropdown-hover featured-image-active" itemtype="https://schema.org/Blog" itemscope>
<div class="inside-header grid-container grid-parent" style="width: 330px;">

<style>



</style>

<h2 style="font-family: 'RocknRoll One', sans-serif; margin-top: -10px; width: 200px;">Pablo Dev</h2>
<a href="Index.php"><h4 style="margin-top: -10px; font-family: 'RocknRoll One', sans-serif; color: black; float: right; margin-top: -53px;">I'm Creator</h4></a>


 </div>
</header>

<div align="center">

<nav id="site-navigation" class="main-navigation grid-container grid-parent" itemtype="https://schema.org/SiteNavigationElement" itemscope>
<div id="page" class="hfeed site grid-container container grid-parent">
<div id="content" class="site-content">
<div id="primary" class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75">
<main id="main" class="site-main">
<article id="post-1747" class="post-1747 post type-post status-publish format-standard has-post-thumbnail hentry category-curiosidades" itemtype="https://schema.org/CreativeWork" itemscope>
<div class="inside-article">
<header class="entry-header">
<h1 class="entry-title" itemprop="headline" style="font-family: 'RocknRoll One', sans-serif;"><?php echo $row["title"]; ?></h1> <div class="entry-meta">
<span class="byline" style="align: left;">By <span class="author vcard" itemprop="author" itemscope><a class="url fn n" title="Ver todos os posts por Emilly Carvalho" rel="author" itemprop="url"><span class="author-name" itemprop="name"><?php echo $row["author"]; ?> | Today </span></a></span></span> </div>
<a class="screen-reader-text skip-link" href="#content" title="Pular para o conteúdo" style="align: right;">Skip to Content</a> <header id="masthead" class="site-header grid-container grid-parent" itemtype="https://schema.org/WPHeader" itemscope>


  <br>
  <br>

  <img src="start.png" style="max-width: 100%;
    height: auto; ">

  <br>
  <br>


</header>


<div class="entry-content" itemprop="text">
<p style="text-align: justify; font-family: 'RocknRoll One', sans-serif;"><?php echo $row["content"]; ?></p>





<?php

}
} else {
  echo "0 results";
}

mysqli_close($conn);

?>






<div class="site-footer grid-container grid-parent">
<footer class="site-info" itemtype="https://schema.org/WPFooter" itemscope>
<div class="inside-site-info grid-container grid-parent">
<div class="copyright-bar">
&copy; 2020-2021 Pablo Dev </div>
</div>
</footer>
</div>

 </div>
</nav>
</button>
</div>
</body>
</html>
