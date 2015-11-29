<?php

/* FOSUserBundle::layoutProfile.html.twig */
class __TwigTemplate_7d29e8d0c3376d9e9d2f24fe8511d86df44a720519273ad4e8989670c4648cc8 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE HTML>  
<html>
\t<head>
\t\t<title>Sweet-cakes Website Template | Home :: w3layouts</title>
\t\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
\t\t<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
\t\t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t <!-- Custom Theme files -->
\t\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
   \t\t <!-- Custom Theme files -->
   \t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
\t\t</script>
\t\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easydropdown.js"), "html", null, true);
        echo "\"></script>
\t\t<!----webfonts--->
\t\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
\t\t<!---//webfonts--->
\t</head>
\t<body>
\t<!-- container -->
\t\t<!-- top-header -->
\t<div class=\"top-header\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"top-header-left\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"http://localhost/WorkShopFOS/web/app_dev.php/profile/\">My Account</a></li>
\t\t\t\t\t\t<li><a href=\"checkout.html\">Checkout</a></li>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"top-header-center\">
\t\t\t\t\t<p><span class=\"cart\"> </span>Cart<label>\$5256</label></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"top-header-right\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"http://localhost/WorkShopFOS/web/app_dev.php/login\">Login</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"http://localhost/WorkShopFOS/web/app_dev.php/register/\">Register</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
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
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" title=\"Sweetcake\" /></a>
\t\t\t\t</div>
\t\t\t\t<!-- logo -->
\t\t\t</div>
\t\t</div>
\t\t<!-- /main-menu -->
\t<!---start-content----->
\t<div class=\"account\">
               <div class=\"container\">
\t\t   ";
        // line 84
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 85
        echo "\t\t
\t       </div>
\t\t</div>
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
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/foot.png"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fb\"> </i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"twet\">\t\t
\t\t\t\t\t\t<img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/foot.png"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t\t<a href=\"#\"><i class=\"twt\"> </i></a>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 sign\">
\t\t\t\t\t<h4>sign up for news later</h4>\t
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<input type=\"text\" class=\"text\" value=\"YOUR EMAIL\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'YOUR EMAIL ';}\">
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

    // line 84
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 85
        echo "                 ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layoutProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 85,  183 => 84,  157 => 115,  150 => 111,  122 => 85,  120 => 84,  108 => 75,  44 => 14,  36 => 9,  31 => 7,  26 => 5,  20 => 1,);
    }
}
/* <!DOCTYPE HTML>  */
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
/* 		<script src="{{ asset('js/jquery.easydropdown.js') }}"></script>*/
/* 		<!----webfonts--->*/
/* 		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>*/
/* 		<!---//webfonts--->*/
/* 	</head>*/
/* 	<body>*/
/* 	<!-- container -->*/
/* 		<!-- top-header -->*/
/* 	<div class="top-header">*/
/* 			<div class="container">*/
/* 				<div class="top-header-left">*/
/* 					<ul>*/
/* 						<li><a href="http://localhost/WorkShopFOS/web/app_dev.php/profile/">My Account</a></li>*/
/* 						<li><a href="checkout.html">Checkout</a></li>*/
/* 						<div class="clearfix"> </div>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="top-header-center">*/
/* 					<p><span class="cart"> </span>Cart<label>$5256</label></p>*/
/* 				</div>*/
/* 				<div class="top-header-right">*/
/* 					<ul>*/
/* 						<li>*/
/* 							<form>*/
/* 								<input type="text">*/
/* 								<input type="submit" value="" />*/
/* 							</form>*/
/* 						</li>*/
/* 						<li><a href="http://localhost/WorkShopFOS/web/app_dev.php/login">Login</a></li>*/
/* 						<li class="active"><a href="http://localhost/WorkShopFOS/web/app_dev.php/register/">Register</a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="clearfix"> </div>*/
/* 			</div>*/
/* 		</div>*/
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
/* 	<!---start-content----->*/
/* 	<div class="account">*/
/*                <div class="container">*/
/* 		   {% block fos_user_content %}*/
/*                  {% endblock fos_user_content %}		*/
/* 	       </div>*/
/* 		</div>*/
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
/* 							<input type="text" class="text" value="YOUR EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YOUR EMAIL ';}">*/
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
