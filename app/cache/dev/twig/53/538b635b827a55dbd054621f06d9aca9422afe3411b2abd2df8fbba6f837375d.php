<?php

/* MyAppUserBundle::index.html.twig */
class __TwigTemplate_9e4c99e737409974c6ca40779347ce26c912c9ee21ab6f0e8f58abe11dcfc099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
\t<head>
\t\t<title>Sweet-cakes Website Template | Home :: w3layouts</title>
\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
\t\t<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
\t\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t <!-- Custom Theme files -->
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
   \t\t <!-- Custom Theme files -->
   \t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
\t\t</script>
\t\t<!----webfonts--->
\t\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
\t\t<!---//webfonts--->
\t</head>
\t<body>
\t<!-- container -->
\t\t<!-- top-header -->
\t\t<div class=\"top-header\">
\t\t\t
\t\t</div>
              
            ";
        // line 32
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 34
        echo "
\t\t<!-- /top-header -->
\t\t<!-- main-menu -->
\t\t<div class=\"main-menu\">
\t\t\t<div class=\"container\">
\t\t\t<div class=\"head-nav\">
\t\t\t\t<span class=\"menu\"> </span>
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"active\"><a href=\"index.html\">Home</a></li>
\t\t\t\t\t<li><a href=\"products.html\">products</a></li>
\t\t\t\t\t<li><a href=\"about.html\">about</a></li>
\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</ul>
\t\t\t</div>\t
\t\t\t\t<!-- script-for-nav -->
\t\t\t\t\t<script>
\t\t\t\t\t\t\$( \"span.menu\" ).click(function() {
\t\t\t\t\t\t  \$( \".head-nav ul\" ).slideToggle(300, function() {
\t\t\t\t\t\t\t// Animation complete.
\t\t\t\t\t\t  });
\t\t\t\t\t\t});
\t\t\t\t\t</script>
\t\t\t\t<!-- script-for-nav -->

\t\t\t\t<!-- logo -->
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"index.html\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" title=\"Sweetcake\" /></a>
\t\t\t\t</div>
\t\t\t\t<!-- logo -->
\t\t\t</div>
\t\t</div>
\t\t<!-- /main-menu -->
\t\t<!-- banner -->
\t\t<div class=\"container\">
\t\t\t\t<div class=\"img-slider\">
\t\t\t\t\t\t<!----start-slider-script---->
\t\t\t\t\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t <script>
\t\t\t\t\t    // You can also use \"\$(window).load(function() {\"
\t\t\t\t\t    \$(function () {
\t\t\t\t\t      // Slideshow 4
\t\t\t\t\t      \$(\"#slider4\").responsiveSlides({
\t\t\t\t\t        auto: true,
\t\t\t\t\t        pager: true,
\t\t\t\t\t        nav: true,
\t\t\t\t\t        speed: 500,
\t\t\t\t\t        namespace: \"callbacks\",
\t\t\t\t\t        before: function () {
\t\t\t\t\t          \$('.events').append(\"<li>before event fired.</li>\");
\t\t\t\t\t        },
\t\t\t\t\t        after: function () {
\t\t\t\t\t          \$('.events').append(\"<li>after event fired.</li>\");
\t\t\t\t\t        }
\t\t\t\t\t      });
\t\t\t\t\t
\t\t\t\t\t    });
\t\t\t\t\t  </script>
\t\t\t\t\t<!----//End-slider-script---->
\t\t\t\t\t<!-- Slideshow 4 -->
\t\t\t\t\t    <div  id=\"top\" class=\"callbacks_container\">
\t\t\t\t\t      <ul class=\"rslides\" id=\"slider4\">
\t\t\t\t\t        <li>
\t\t\t\t\t          <img  src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t          <div class=\"slider-caption\">
\t\t\t\t\t          \t <div class=\"slider-caption-left text-center\">
\t\t\t\t\t          \t \t<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
\t\t\t\t\t          \t \t<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
\t\t\t\t\t          \t \t<a class=\"buy-btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t          \t </div>
\t\t\t\t\t          \t  <div class=\"slider-caption-right\">
\t\t\t\t\t          \t  \t<a href=\"#\"><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/iteam.png"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\" /></a>
\t\t\t\t\t          \t  </div>
\t\t\t\t\t          \t  <div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t           <!-- share-on -->
\t\t\t\t\t          <div class=\"share-on\">
\t\t\t\t\t          \t<div class=\"share-on-grid\">
\t\t\t\t\t          \t\t<div class=\"share-on-grid-left\">
\t\t\t\t\t          \t\t\t<h3>Share On</h3>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"share-on-grid-right\">
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"facebook\"> </span></a>
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"twitter\"> </span></a>
\t\t\t\t\t          \t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t</div>
\t\t\t\t\t          \t<div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t          <!-- share-on -->
\t\t\t\t\t        </li>
\t\t\t\t\t         <li>
\t\t\t\t\t          <img  src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t          <div class=\"slider-caption\">
\t\t\t\t\t          \t <div class=\"slider-caption-left text-center\">
\t\t\t\t\t          \t \t<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
\t\t\t\t\t          \t \t<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
\t\t\t\t\t          \t \t<a class=\"buy-btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t          \t </div>
\t\t\t\t\t          \t  <div class=\"slider-caption-right\">
\t\t\t\t\t          \t  \t<a href=\"#\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/iteam.png"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\" /></a>
\t\t\t\t\t          \t  </div>
\t\t\t\t\t          \t  <div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t          <!-- share-on -->
\t\t\t\t\t          <div class=\"share-on\">
\t\t\t\t\t          \t<div class=\"share-on-grid\">
\t\t\t\t\t          \t\t<div class=\"share-on-grid-left\">
\t\t\t\t\t          \t\t\t<h3>Share On</h3>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"share-on-grid-right\">
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"facebook\"> </span></a>
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"twitter\"> </span></a>
\t\t\t\t\t          \t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t</div>
\t\t\t\t\t          \t<div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t          <!-- share-on -->
\t\t\t\t\t        </li>
\t\t\t\t\t        <li>
\t\t\t\t\t          <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t           <div class=\"slider-caption\">
\t\t\t\t\t          \t <div class=\"slider-caption-left text-center\">
\t\t\t\t\t          \t \t<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
\t\t\t\t\t          \t \t<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
\t\t\t\t\t          \t \t<a class=\"buy-btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t          \t </div>
\t\t\t\t\t          \t  <div class=\"slider-caption-right\">
\t\t\t\t\t          \t  \t<a href=\"#\"><img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/iteam.png"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\" /></a>
\t\t\t\t\t          \t  </div>
\t\t\t\t\t          \t  <div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t           <!-- share-on -->
\t\t\t\t\t          <div class=\"share-on\">
\t\t\t\t\t          \t<div class=\"share-on-grid\">
\t\t\t\t\t          \t\t<div class=\"share-on-grid-left\">
\t\t\t\t\t          \t\t\t<h3>Share On</h3>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"share-on-grid-right\">
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"facebook\"> </span></a>
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"twitter\"> </span></a>
\t\t\t\t\t          \t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t</div>
\t\t\t\t\t          \t<div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t          <!-- share-on -->
\t\t\t\t\t        </li>
\t\t\t\t\t        <li>
\t\t\t\t\t          <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t           <div class=\"slider-caption\">
\t\t\t\t\t            <div class=\"slider-caption-left text-center\">
\t\t\t\t\t          \t \t<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
\t\t\t\t\t          \t \t<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
\t\t\t\t\t          \t \t<a class=\"buy-btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t          \t </div>
\t\t\t\t\t          \t  <div class=\"slider-caption-right\">
\t\t\t\t\t          \t  \t<a href=\"#\"><img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/iteam.png"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\" /></a>
\t\t\t\t\t          \t  </div>
\t\t\t\t\t          \t  <div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t           <!-- share-on -->
\t\t\t\t\t          <div class=\"share-on\">
\t\t\t\t\t          \t<div class=\"share-on-grid\">
\t\t\t\t\t          \t\t<div class=\"share-on-grid-left\">
\t\t\t\t\t          \t\t\t<h3>Share On</h3>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"share-on-grid-right\">
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"facebook\"> </span></a>
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"twitter\"> </span></a>
\t\t\t\t\t          \t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t</div>
\t\t\t\t\t          \t<div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t          <!-- share-on -->
\t\t\t\t\t        </li>
\t\t\t\t\t      </ul>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"clearfix\"> </div>
\t\t\t\t\t</div>
\t\t<!-- /banner -->
\t\t</div>
\t\t<!-- top-grids -->
\t\t<div class=\"top-grids\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"col-md-4 top-grid\">
\t\t\t\t\t<div class=\"top-grid-head\">
\t\t\t\t\t\t<h3>OUR CAKES</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"top-grid-info\">
\t\t\t\t\t\t<img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\"/>
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
\t\t\t\t\t\t<span>\$60</span>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 top-grid\">
\t\t\t\t\t<div class=\"top-grid-head\">
\t\t\t\t\t\t<h3>OUR CAKES</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"top-grid-info\">
\t\t\t\t\t\t<img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\"/>
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
\t\t\t\t\t\t<span>\$80</span>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 top-grid\">
\t\t\t\t\t<div class=\"top-grid-head\">
\t\t\t\t\t\t<h3>OUR CAKES</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"top-grid-info\">
\t\t\t\t\t\t<img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\"/>
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
\t\t\t\t\t\t<span>\$120</span>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- top-grids-bg -->
\t\t\t<div class=\"top-grids-bg\">
\t\t\t\t<span> </span>
\t\t\t</div>
\t\t\t<!-- top-grids-bg -->
\t\t</div>
\t\t<!-- top-grids -->
\t\t<!-- bottom-grids -->
\t\t<div class=\"bottom-grids\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"col-md-8 bottom-grid-left\">
\t\t\t\t\t<div class=\"col-md-3 bottom-grid-left-grid text-center\">
\t\t\t\t\t\t<img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic2.jpg"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<h4>kids birthday cake</h4>
\t\t\t\t\t\t<p>\$40</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 bottom-grid-left-grid text-center\">
\t\t\t\t\t\t<img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic1.jpg"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<h4>kids birthday cake</h4>
\t\t\t\t\t\t<p>\$40</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 bottom-grid-left-grid text-center\">
\t\t\t\t\t\t<img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic3.jpg"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<h4>kids birthday cake</h4>
\t\t\t\t\t\t<p>\$40</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 bottom-grid-left-grid text-center\">
\t\t\t\t\t\t<img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic4.jpg"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<h4>kids birthday cake</h4>
\t\t\t\t\t\t<p>\$40</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t<span class=\"best-sale\">Best sellers</span>
\t\t\t\t\t<a href=\"#\" class=\"order\"> </a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 bottom-grid-right\">
\t\t\t\t\t<h3><span class=\"tweet\"> </span> latest tweet</h3>
\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
\t\t\t\t\t<label>1 day ago</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t\t<!-- bottom-grids -->
\t<!-- /container -->
\t<!-- footer -->
\t<div class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"col-md-3 location\">
\t\t\t\t\t<h4>location</h4>
\t\t\t\t\t<p>#04 Dist.City,State,PK</p>
\t\t\t\t\t<h4>hours</h4>
\t\t\t\t\t<p>Weekdays 7 a.m.-7 p.m.</p>
\t\t\t\t\t<p>Weekends 8 a.m.-7 p.m.</p>
\t\t\t\t\t<p>Call for Holidays Hours.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 customer\">
\t\t\t\t\t<h4>customer service</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. </p>
\t\t\t\t\t<h4>phone</h4>
\t\t\t\t\t<h6>1(234)567-8910</h6>
\t\t\t\t\t<h4>contact us</h4>
\t\t\t\t\t<h6>contact us page.</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 social\">
\t\t\t\t\t<h4>get social</h4>
\t\t\t\t\t<div class=\"face-b\">
\t\t\t\t\t\t<img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/foot.png"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fb\"> </i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"twet\">\t\t
\t\t\t\t\t\t<img src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/foot.png"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t\t<a href=\"#\"><i class=\"twt\"> </i></a>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 sign\">
\t\t\t\t\t<h4>sign up for news later</h4>\t
\t\t\t\t\t\t<form>
\t\t\t\t\t\t<input type=\"text\" class=\"text\" value=\"YOUR EMAIL\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'YOUR EMAIL ';}\">
\t\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<p>Template by <a href=\"http://w3layouts.com\" target=\"_blank\"> w3layouts</a></p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /footer -->
\t</body>
</html>

";
    }

    // line 32
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 33
        echo "            ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 33,  445 => 32,  419 => 334,  412 => 330,  368 => 289,  360 => 284,  352 => 279,  344 => 274,  321 => 254,  306 => 242,  291 => 230,  253 => 195,  242 => 187,  217 => 165,  206 => 157,  181 => 135,  170 => 127,  145 => 105,  134 => 97,  105 => 71,  92 => 61,  63 => 34,  61 => 32,  42 => 16,  37 => 14,  32 => 12,  20 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <!--*/
/* Author: W3layouts*/
/* Author URL: http://w3layouts.com*/
/* License: Creative Commons Attribution 3.0 Unported*/
/* License URL: http://creativecommons.org/licenses/by/3.0/*/
/* -->*/
/* <!DOCTYPE HTML>*/
/* <html>*/
/* 	<head>*/
/* 		<title>Sweet-cakes Website Template | Home :: w3layouts</title>*/
/* 		<link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />*/
/* 		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/* 		<script src="{{ asset('js/jquery.min.js') }}"></script>*/
/* 		 <!-- Custom Theme files -->*/
/* 		<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />*/
/*    		 <!-- Custom Theme files -->*/
/*    		<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/* 		</script>*/
/* 		<!----webfonts--->*/
/* 		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>*/
/* 		<!---//webfonts--->*/
/* 	</head>*/
/* 	<body>*/
/* 	<!-- container -->*/
/* 		<!-- top-header -->*/
/* 		<div class="top-header">*/
/* 			*/
/* 		</div>*/
/*               */
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/* */
/* 		<!-- /top-header -->*/
/* 		<!-- main-menu -->*/
/* 		<div class="main-menu">*/
/* 			<div class="container">*/
/* 			<div class="head-nav">*/
/* 				<span class="menu"> </span>*/
/* 				<ul>*/
/* 					<li class="active"><a href="index.html">Home</a></li>*/
/* 					<li><a href="products.html">products</a></li>*/
/* 					<li><a href="about.html">about</a></li>*/
/* 					<li><a href="contact.html">Contact</a></li>*/
/* 					<div class="clearfix"> </div>*/
/* 				</ul>*/
/* 			</div>	*/
/* 				<!-- script-for-nav -->*/
/* 					<script>*/
/* 						$( "span.menu" ).click(function() {*/
/* 						  $( ".head-nav ul" ).slideToggle(300, function() {*/
/* 							// Animation complete.*/
/* 						  });*/
/* 						});*/
/* 					</script>*/
/* 				<!-- script-for-nav -->*/
/* */
/* 				<!-- logo -->*/
/* 				<div class="logo">*/
/* 					<a href="index.html"><img src="{{ asset('images/logo.png') }}" title="Sweetcake" /></a>*/
/* 				</div>*/
/* 				<!-- logo -->*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- /main-menu -->*/
/* 		<!-- banner -->*/
/* 		<div class="container">*/
/* 				<div class="img-slider">*/
/* 						<!----start-slider-script---->*/
/* 					<script src="{{ asset('js/responsiveslides.min.js') }}"></script>*/
/* 					 <script>*/
/* 					    // You can also use "$(window).load(function() {"*/
/* 					    $(function () {*/
/* 					      // Slideshow 4*/
/* 					      $("#slider4").responsiveSlides({*/
/* 					        auto: true,*/
/* 					        pager: true,*/
/* 					        nav: true,*/
/* 					        speed: 500,*/
/* 					        namespace: "callbacks",*/
/* 					        before: function () {*/
/* 					          $('.events').append("<li>before event fired.</li>");*/
/* 					        },*/
/* 					        after: function () {*/
/* 					          $('.events').append("<li>after event fired.</li>");*/
/* 					        }*/
/* 					      });*/
/* 					*/
/* 					    });*/
/* 					  </script>*/
/* 					<!----//End-slider-script---->*/
/* 					<!-- Slideshow 4 -->*/
/* 					    <div  id="top" class="callbacks_container">*/
/* 					      <ul class="rslides" id="slider4">*/
/* 					        <li>*/
/* 					          <img  src="{{ asset('images/slide.jpg') }}" class="img-responsive" alt="">*/
/* 					          <div class="slider-caption">*/
/* 					          	 <div class="slider-caption-left text-center">*/
/* 					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>*/
/* 					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>*/
/* 					          	 	<a class="buy-btn" href="#">Buy Now</a>*/
/* 					          	 </div>*/
/* 					          	  <div class="slider-caption-right">*/
/* 					          	  	<a href="#"><img src="{{ asset('images/iteam.png') }}" class="img-responsive" title="name" /></a>*/
/* 					          	  </div>*/
/* 					          	  <div class="clearfix"> </div>*/
/* 					          </div>*/
/* 					           <!-- share-on -->*/
/* 					          <div class="share-on">*/
/* 					          	<div class="share-on-grid">*/
/* 					          		<div class="share-on-grid-left">*/
/* 					          			<h3>Share On</h3>*/
/* 					          		</div>*/
/* 					          		<div class="share-on-grid-right">*/
/* 					          			<a href="#"><span class="facebook"> </span></a>*/
/* 					          			<a href="#"><span class="twitter"> </span></a>*/
/* 					          			<div class="clearfix"> </div>*/
/* 					          		</div>*/
/* 					          		<div class="clearfix"> </div>*/
/* 					          	</div>*/
/* 					          	<div class="clearfix"> </div>*/
/* 					          </div>*/
/* 					          <!-- share-on -->*/
/* 					        </li>*/
/* 					         <li>*/
/* 					          <img  src="{{ asset('images/slide.jpg') }}" class="img-responsive" alt="">*/
/* 					          <div class="slider-caption">*/
/* 					          	 <div class="slider-caption-left text-center">*/
/* 					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>*/
/* 					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>*/
/* 					          	 	<a class="buy-btn" href="#">Buy Now</a>*/
/* 					          	 </div>*/
/* 					          	  <div class="slider-caption-right">*/
/* 					          	  	<a href="#"><img src="{{ asset('images/iteam.png') }}" class="img-responsive" title="name" /></a>*/
/* 					          	  </div>*/
/* 					          	  <div class="clearfix"> </div>*/
/* 					          </div>*/
/* 					          <!-- share-on -->*/
/* 					          <div class="share-on">*/
/* 					          	<div class="share-on-grid">*/
/* 					          		<div class="share-on-grid-left">*/
/* 					          			<h3>Share On</h3>*/
/* 					          		</div>*/
/* 					          		<div class="share-on-grid-right">*/
/* 					          			<a href="#"><span class="facebook"> </span></a>*/
/* 					          			<a href="#"><span class="twitter"> </span></a>*/
/* 					          			<div class="clearfix"> </div>*/
/* 					          		</div>*/
/* 					          		<div class="clearfix"> </div>*/
/* 					          	</div>*/
/* 					          	<div class="clearfix"> </div>*/
/* 					          </div>*/
/* 					          <!-- share-on -->*/
/* 					        </li>*/
/* 					        <li>*/
/* 					          <img src="{{ asset('images/slide.jpg') }}" class="img-responsive" alt="">*/
/* 					           <div class="slider-caption">*/
/* 					          	 <div class="slider-caption-left text-center">*/
/* 					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>*/
/* 					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>*/
/* 					          	 	<a class="buy-btn" href="#">Buy Now</a>*/
/* 					          	 </div>*/
/* 					          	  <div class="slider-caption-right">*/
/* 					          	  	<a href="#"><img src="{{ asset('images/iteam.png') }}" class="img-responsive" title="name" /></a>*/
/* 					          	  </div>*/
/* 					          	  <div class="clearfix"> </div>*/
/* 					          </div>*/
/* 					           <!-- share-on -->*/
/* 					          <div class="share-on">*/
/* 					          	<div class="share-on-grid">*/
/* 					          		<div class="share-on-grid-left">*/
/* 					          			<h3>Share On</h3>*/
/* 					          		</div>*/
/* 					          		<div class="share-on-grid-right">*/
/* 					          			<a href="#"><span class="facebook"> </span></a>*/
/* 					          			<a href="#"><span class="twitter"> </span></a>*/
/* 					          			<div class="clearfix"> </div>*/
/* 					          		</div>*/
/* 					          		<div class="clearfix"> </div>*/
/* 					          	</div>*/
/* 					          	<div class="clearfix"> </div>*/
/* 					          </div>*/
/* 					          <!-- share-on -->*/
/* 					        </li>*/
/* 					        <li>*/
/* 					          <img src="{{ asset('images/slide.jpg') }}" class="img-responsive" alt="">*/
/* 					           <div class="slider-caption">*/
/* 					            <div class="slider-caption-left text-center">*/
/* 					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>*/
/* 					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>*/
/* 					          	 	<a class="buy-btn" href="#">Buy Now</a>*/
/* 					          	 </div>*/
/* 					          	  <div class="slider-caption-right">*/
/* 					          	  	<a href="#"><img src="{{ asset('images/iteam.png') }}" class="img-responsive" title="name" /></a>*/
/* 					          	  </div>*/
/* 					          	  <div class="clearfix"> </div>*/
/* 					          </div>*/
/* 					           <!-- share-on -->*/
/* 					          <div class="share-on">*/
/* 					          	<div class="share-on-grid">*/
/* 					          		<div class="share-on-grid-left">*/
/* 					          			<h3>Share On</h3>*/
/* 					          		</div>*/
/* 					          		<div class="share-on-grid-right">*/
/* 					          			<a href="#"><span class="facebook"> </span></a>*/
/* 					          			<a href="#"><span class="twitter"> </span></a>*/
/* 					          			<div class="clearfix"> </div>*/
/* 					          		</div>*/
/* 					          		<div class="clearfix"> </div>*/
/* 					          	</div>*/
/* 					          	<div class="clearfix"> </div>*/
/* 					          </div>*/
/* 					          <!-- share-on -->*/
/* 					        </li>*/
/* 					      </ul>*/
/* 					    </div>*/
/* 					    <div class="clearfix"> </div>*/
/* 					</div>*/
/* 		<!-- /banner -->*/
/* 		</div>*/
/* 		<!-- top-grids -->*/
/* 		<div class="top-grids">*/
/* 			<div class="container">*/
/* 				<div class="col-md-4 top-grid">*/
/* 					<div class="top-grid-head">*/
/* 						<h3>OUR CAKES</h3>*/
/* 					</div>*/
/* 					<div class="top-grid-info">*/
/* 						<img src="{{ asset('images/img1.jpg') }}" class="img-responsive" title="name"/>*/
/* 						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>*/
/* 						<span>$60</span>*/
/* 						<div class="clearfix"> </div>*/
/* 						<a class="btn" href="#">Buy Now</a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-4 top-grid">*/
/* 					<div class="top-grid-head">*/
/* 						<h3>OUR CAKES</h3>*/
/* 					</div>*/
/* 					<div class="top-grid-info">*/
/* 						<img src="{{ asset('images/img2.jpg') }}" class="img-responsive" title="name"/>*/
/* 						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>*/
/* 						<span>$80</span>*/
/* 						<div class="clearfix"> </div>*/
/* 						<a class="btn" href="#">Buy Now</a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-4 top-grid">*/
/* 					<div class="top-grid-head">*/
/* 						<h3>OUR CAKES</h3>*/
/* 					</div>*/
/* 					<div class="top-grid-info">*/
/* 						<img src="{{ asset('images/img3.jpg') }}" class="img-responsive" title="name"/>*/
/* 						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>*/
/* 						<span>$120</span>*/
/* 						<div class="clearfix"> </div>*/
/* 						<a class="btn" href="#">Buy Now</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- top-grids-bg -->*/
/* 			<div class="top-grids-bg">*/
/* 				<span> </span>*/
/* 			</div>*/
/* 			<!-- top-grids-bg -->*/
/* 		</div>*/
/* 		<!-- top-grids -->*/
/* 		<!-- bottom-grids -->*/
/* 		<div class="bottom-grids">*/
/* 			<div class="container">*/
/* 				<div class="col-md-8 bottom-grid-left">*/
/* 					<div class="col-md-3 bottom-grid-left-grid text-center">*/
/* 						<img src="{{ asset('images/pic2.jpg') }}" title="name"/>*/
/* 						<h4>kids birthday cake</h4>*/
/* 						<p>$40</p>*/
/* 					</div>*/
/* 					<div class="col-md-3 bottom-grid-left-grid text-center">*/
/* 						<img src="{{ asset('images/pic1.jpg') }}" title="name"/>*/
/* 						<h4>kids birthday cake</h4>*/
/* 						<p>$40</p>*/
/* 					</div>*/
/* 					<div class="col-md-3 bottom-grid-left-grid text-center">*/
/* 						<img src="{{ asset('images/pic3.jpg') }}" title="name"/>*/
/* 						<h4>kids birthday cake</h4>*/
/* 						<p>$40</p>*/
/* 					</div>*/
/* 					<div class="col-md-3 bottom-grid-left-grid text-center">*/
/* 						<img src="{{ asset('images/pic4.jpg') }}" title="name"/>*/
/* 						<h4>kids birthday cake</h4>*/
/* 						<p>$40</p>*/
/* 					</div>*/
/* 					<div class="clearfix"> </div>*/
/* 					<span class="best-sale">Best sellers</span>*/
/* 					<a href="#" class="order"> </a>*/
/* 				</div>*/
/* 				<div class="col-md-4 bottom-grid-right">*/
/* 					<h3><span class="tweet"> </span> latest tweet</h3>*/
/* 					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>*/
/* 					<label>1 day ago</label>*/
/* 				</div>*/
/* 				<div class="clearfix"> </div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- bottom-grids -->*/
/* 	<!-- /container -->*/
/* 	<!-- footer -->*/
/* 	<div class="footer">*/
/* 		<div class="container">*/
/* 			<div class="footer-top">*/
/* 				<div class="col-md-3 location">*/
/* 					<h4>location</h4>*/
/* 					<p>#04 Dist.City,State,PK</p>*/
/* 					<h4>hours</h4>*/
/* 					<p>Weekdays 7 a.m.-7 p.m.</p>*/
/* 					<p>Weekends 8 a.m.-7 p.m.</p>*/
/* 					<p>Call for Holidays Hours.</p>*/
/* 				</div>*/
/* 				<div class="col-md-3 customer">*/
/* 					<h4>customer service</h4>*/
/* 					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. </p>*/
/* 					<h4>phone</h4>*/
/* 					<h6>1(234)567-8910</h6>*/
/* 					<h4>contact us</h4>*/
/* 					<h6>contact us page.</h6>*/
/* 				</div>*/
/* 				<div class="col-md-3 social">*/
/* 					<h4>get social</h4>*/
/* 					<div class="face-b">*/
/* 						<img src="{{ asset('images/foot.png') }}" title="name"/>*/
/* 						<a href="#"><i class="fb"> </i></a>*/
/* 					</div>*/
/* 					<div class="twet">		*/
/* 						<img src="{{ asset('images/foot.png') }}" title="name"/>*/
/* 							<a href="#"><i class="twt"> </i></a>*/
/* 					</div>	*/
/* 				</div>*/
/* 				<div class="col-md-3 sign">*/
/* 					<h4>sign up for news later</h4>	*/
/* 						<form>*/
/* 						<input type="text" class="text" value="YOUR EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YOUR EMAIL ';}">*/
/* 						</form>*/
/* 				</div>*/
/* 					<div class="clearfix"> </div>*/
/* 			</div>*/
/* 			<div class="footer-bottom">*/
/* 				<p>Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- /footer -->*/
/* 	</body>*/
/* </html>*/
/* */
/* */
