<?php
session_start(); 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("include/admin.func.php");
require_once("include/dbinfo.inc.php");

//print_r($_SESSION);

$t = time();
$t0 = $_SESSION['CREATED'];
$diff = $t - $t0;
if ($diff > 7800|| !isset($t0)) {          //log off after being idle for 30 minutes or trying to log illegally
session_unset();
session_destroy();
?>
	 
	 <script type="text/javascript">
	<!--
	window.location = "index.php"
	//-->
	</script>
	<?php
}
else {
$_SESSION['time'] = time();
}


if (($_SESSION['logged'] != 1)) { // There was no session found!
	?>
	 
	 <script type="text/javascript">
	<!--
	window.location = "index.php"
	//-->
	</script>
	<?php // Stops the rest of the script.
}

unset($_SESSION['CREATED']);
$_SESSION['CREATED']=time();

$url="index.php";

 header ("Cache-Control: no-cache, must-revalidate");


?>

<title>Loan System</title>


<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<?php echo "<meta http-equiv='refresh' content='1803;".$url."'/> " ?>
<link rel='stylesheet' id='layerslider-css'  href='css/layerslider.css?ver=6.6.5' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='css/styles.css?ver=4.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='css/settings.css?ver=5.4.6.3.1' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='wprls-style-css'  href='css/slider-pro.min.css?ver=4.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='css/style.css?ver=20.4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-base-css'  href='css/base.css?ver=20.4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-layout-css'  href='css/layout.css?ver=20.4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-shortcodes-css'  href='css/shortcodes.css?ver=20.4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-animations-css'  href='css/animations.min.css?ver=20.4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-jquery-ui-css'  href='css/jquery.ui.all.css?ver=20.4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-jplayer-css'  href='css/jplayer.blue.monday.css?ver=20.4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-responsive-css'  href='css/responsive.css?ver=20.4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='Roboto-css'  href='css/roboto.css' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-skin-green-css'  href='css/greenstyle.css?ver=20.4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='addtoany-css'  href='css/addtoany.min.css?ver=1.14' type='text/css' media='all' />
<link rel='stylesheet' id='rpt-css'  href='css/rpt_style.min.css?ver=4.9.7' type='text/css' media='all' />
<script type='text/javascript' data-cfasync="false" src='js/layerslider.kreaturamedia.jquery.js?ver=6.6.5'></script>
<script type='text/javascript' data-cfasync="false" src='js/greensock.js?ver=1.19.0'></script>
<script type='text/javascript' data-cfasync="false" src='js/layerslider.transitions.js?ver=6.6.5'></script>

<script type='text/javascript' src='js/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='js/jquery-migrate.min.js?ver=1.4.1'></script>

<style id="mfn-dnmc-style-css">
@media only screen and (min-width: 1240px) {body:not(.header-simple) #Top_bar #menu{display:block!important}.tr-menu #Top_bar #menu{background:none!important}#Top_bar .menu > li > ul.mfn-megamenu{width:984px}#Top_bar .menu > li > ul.mfn-megamenu > li{float:left}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-1{width:100%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-2{width:50%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-3{width:33.33%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-4{width:25%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-5{width:20%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-6{width:16.66%}#Top_bar .menu > li > ul.mfn-megamenu > li > ul{display:block!important;position:inherit;left:auto;top:auto;border-width:0 1px 0 0}#Top_bar .menu > li > ul.mfn-megamenu > li:last-child > ul{border:0}#Top_bar .menu > li > ul.mfn-megamenu > li > ul li{width:auto}#Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{text-transform:uppercase;font-weight:400;background:none}#Top_bar .menu > li > ul.mfn-megamenu a .menu-arrow{display:none}.menuo-right #Top_bar .menu > li > ul.mfn-megamenu{left:auto;right:0}.menuo-right #Top_bar .menu > li > ul.mfn-megamenu-bg{box-sizing:border-box}#Top_bar .menu > li > ul.mfn-megamenu-bg{padding:20px 166px 20px 20px;background-repeat:no-repeat;background-position:right bottom}.rtl #Top_bar .menu > li > ul.mfn-megamenu-bg{padding-left:166px;padding-right:20px;background-position:left bottom}#Top_bar .menu > li > ul.mfn-megamenu-bg > li{background:none}#Top_bar .menu > li > ul.mfn-megamenu-bg > li a{border:none}#Top_bar .menu > li > ul.mfn-megamenu-bg > li > ul{background:none!important;-webkit-box-shadow:0 0 0 0;-moz-box-shadow:0 0 0 0;box-shadow:0 0 0 0}.mm-vertical #Top_bar .container{position:relative;}.mm-vertical #Top_bar .top_bar_left{position:static;}.mm-vertical #Top_bar .menu > li ul{box-shadow:0 0 0 0 transparent!important;background-image:none;}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu{width:98%!important;margin:0 1%;padding:20px 0;}.mm-vertical.header-plain #Top_bar .menu > li > ul.mfn-megamenu{width:100%!important;margin:0;}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li{display:table-cell;float:none!important;width:10%;padding:0 15px;border-right:1px solid rgba(0, 0, 0, 0.05);}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li:last-child{border-right-width:0}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li.hide-border{border-right-width:0}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li a{border-bottom-width:0;padding:9px 15px;line-height:120%;}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{font-weight:700;}.rtl .mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li:first-child{border-right-width:0}.rtl .mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li:last-child{border-right-width:1px}#Header_creative #Top_bar .menu > li > ul.mfn-megamenu{width:980px!important;margin:0;}.header-plain:not(.menuo-right) #Header .top_bar_left{width:auto!important}.header-stack.header-center #Top_bar #menu{display:inline-block!important}.header-simple #Top_bar #menu{display:none;height:auto;width:300px;bottom:auto;top:100%;right:1px;position:absolute;margin:0}.header-simple #Header a.responsive-menu-toggle{display:block;right:10px}.header-simple #Top_bar #menu > ul{width:100%;float:left}.header-simple #Top_bar #menu ul li{width:100%;padding-bottom:0;border-right:0;position:relative}.header-simple #Top_bar #menu ul li a{padding:0 20px;margin:0;display:block;height:auto;line-height:normal;border:none}.header-simple #Top_bar #menu ul li a:after{display:none}.header-simple #Top_bar #menu ul li a span{border:none;line-height:44px;display:inline;padding:0}.header-simple #Top_bar #menu ul li.submenu .menu-toggle{display:block;position:absolute;right:0;top:0;width:44px;height:44px;line-height:44px;font-size:30px;font-weight:300;text-align:center;cursor:pointer;color:#444;opacity:0.33;}.header-simple #Top_bar #menu ul li.submenu .menu-toggle:after{content:"+"}.header-simple #Top_bar #menu ul li.hover > .menu-toggle:after{content:"-"}.header-simple #Top_bar #menu ul li.hover a{border-bottom:0}.header-simple #Top_bar #menu ul.mfn-megamenu li .menu-toggle{display:none}.header-simple #Top_bar #menu ul li ul{position:relative!important;left:0!important;top:0;padding:0;margin:0!important;width:auto!important;background-image:none}.header-simple #Top_bar #menu ul li ul li{width:100%!important;display:block;padding:0;}.header-simple #Top_bar #menu ul li ul li a{padding:0 20px 0 30px}.header-simple #Top_bar #menu ul li ul li a .menu-arrow{display:none}.header-simple #Top_bar #menu ul li ul li a span{padding:0}.header-simple #Top_bar #menu ul li ul li a span:after{display:none!important}.header-simple #Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{text-transform:uppercase;font-weight:400}.header-simple #Top_bar .menu > li > ul.mfn-megamenu > li > ul{display:block!important;position:inherit;left:auto;top:auto}.header-simple #Top_bar #menu ul li ul li ul{border-left:0!important;padding:0;top:0}.header-simple #Top_bar #menu ul li ul li ul li a{padding:0 20px 0 40px}.rtl.header-simple #Top_bar #menu{left:1px;right:auto}.rtl.header-simple #Top_bar a.responsive-menu-toggle{left:10px;right:auto}.rtl.header-simple #Top_bar #menu ul li.submenu .menu-toggle{left:0;right:auto}.rtl.header-simple #Top_bar #menu ul li ul{left:auto!important;right:0!important}.rtl.header-simple #Top_bar #menu ul li ul li a{padding:0 30px 0 20px}.rtl.header-simple #Top_bar #menu ul li ul li ul li a{padding:0 40px 0 20px}.menu-highlight #Top_bar .menu > li{margin:0 2px}.menu-highlight:not(.header-creative) #Top_bar .menu > li > a{margin:20px 0;padding:0;-webkit-border-radius:5px;border-radius:5px}.menu-highlight #Top_bar .menu > li > a:after{display:none}.menu-highlight #Top_bar .menu > li > a span:not(.description){line-height:50px}.menu-highlight #Top_bar .menu > li > a span.description{display:none}.menu-highlight.header-stack #Top_bar .menu > li > a{margin:10px 0!important}.menu-highlight.header-stack #Top_bar .menu > li > a span:not(.description){line-height:40px}.menu-highlight.header-transparent #Top_bar .menu > li > a{margin:5px 0}.menu-highlight.header-simple #Top_bar #menu ul li,.menu-highlight.header-creative #Top_bar #menu ul li{margin:0}.menu-highlight.header-simple #Top_bar #menu ul li > a,.menu-highlight.header-creative #Top_bar #menu ul li > a{-webkit-border-radius:0;border-radius:0}.menu-highlight:not(.header-fixed):not(.header-simple) #Top_bar.is-sticky .menu > li > a{margin:10px 0!important;padding:5px 0!important}.menu-highlight:not(.header-fixed):not(.header-simple) #Top_bar.is-sticky .menu > li > a span{line-height:30px!important}.header-modern.menu-highlight.menuo-right .menu_wrapper{margin-right:20px}.menu-line-below #Top_bar .menu > li > a:after{top:auto;bottom:-4px}.menu-line-below #Top_bar.is-sticky .menu > li > a:after{top:auto;bottom:-4px}.menu-line-below-80 #Top_bar:not(.is-sticky) .menu > li > a:after{height:4px;left:10%;top:50%;margin-top:20px;width:80%}.menu-line-below-80-1 #Top_bar:not(.is-sticky) .menu > li > a:after{height:1px;left:10%;top:50%;margin-top:20px;width:80%}.menu-link-color #Top_bar .menu > li > a:after{display:none!important}.menu-arrow-top #Top_bar .menu > li > a:after{background:none repeat scroll 0 0 rgba(0,0,0,0)!important;border-color:#ccc transparent transparent;border-style:solid;border-width:7px 7px 0;display:block;height:0;left:50%;margin-left:-7px;top:0!important;width:0}.menu-arrow-top.header-transparent #Top_bar .menu > li > a:after,.menu-arrow-top.header-plain #Top_bar .menu > li > a:after{display:none}.menu-arrow-top #Top_bar.is-sticky .menu > li > a:after{top:0!important}.menu-arrow-bottom #Top_bar .menu > li > a:after{background:none!important;border-color:transparent transparent #ccc;border-style:solid;border-width:0 7px 7px;display:block;height:0;left:50%;margin-left:-7px;top:auto;bottom:0;width:0}.menu-arrow-bottom.header-transparent #Top_bar .menu > li > a:after,.menu-arrow-bottom.header-plain #Top_bar .menu > li > a:after{display:none}.menu-arrow-bottom #Top_bar.is-sticky .menu > li > a:after{top:auto;bottom:0}.menuo-no-borders #Top_bar .menu > li > a span:not(.description){border-right-width:0}.menuo-no-borders #Header_creative #Top_bar .menu > li > a span{border-bottom-width:0}.menuo-right #Top_bar .menu_wrapper{float:right}.menuo-right.header-stack:not(.header-center) #Top_bar .menu_wrapper{margin-right:150px}body.header-creative{padding-left:50px}body.header-creative.header-open{padding-left:250px}body.error404,body.under-construction,body.template-blank{padding-left:0!important}.header-creative.footer-fixed #Footer,.header-creative.footer-sliding #Footer,.header-creative.footer-stick #Footer.is-sticky{box-sizing:border-box;padding-left:50px;}.header-open.footer-fixed #Footer,.header-open.footer-sliding #Footer,.header-creative.footer-stick #Footer.is-sticky{padding-left:250px;}.header-rtl.header-creative.footer-fixed #Footer,.header-rtl.header-creative.footer-sliding #Footer,.header-rtl.header-creative.footer-stick #Footer.is-sticky{padding-left:0;padding-right:50px;}.header-rtl.header-open.footer-fixed #Footer,.header-rtl.header-open.footer-sliding #Footer,.header-rtl.header-creative.footer-stick #Footer.is-sticky{padding-right:250px;}#Header_creative{background:#fff;position:fixed;width:250px;height:100%;left:-200px;top:0;z-index:9002;-webkit-box-shadow:2px 0 4px 2px rgba(0,0,0,.15);box-shadow:2px 0 4px 2px rgba(0,0,0,.15)}#Header_creative .container{width:100%}#Header_creative .creative-wrapper{opacity:0;margin-right:50px}#Header_creative a.creative-menu-toggle{display:block;width:34px;height:34px;line-height:34px;font-size:22px;text-align:center;position:absolute;top:10px;right:8px;border-radius:3px}.admin-bar #Header_creative a.creative-menu-toggle{top:42px}#Header_creative #Top_bar{position:static;width:100%}#Header_creative #Top_bar .top_bar_left{width:100%!important;float:none}#Header_creative #Top_bar .top_bar_right{width:100%!important;float:none;height:auto;margin-bottom:35px;text-align:center;padding:0 20px;top:0;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}#Header_creative #Top_bar .top_bar_right:before{display:none}#Header_creative #Top_bar .top_bar_right_wrapper{top:0}#Header_creative #Top_bar .logo{float:none;text-align:center;margin:15px 0}#Header_creative #Top_bar .menu_wrapper{float:none;margin:0 0 30px}#Header_creative #Top_bar .menu > li{width:100%;float:none;position:relative}#Header_creative #Top_bar .menu > li > a{padding:0;text-align:center}#Header_creative #Top_bar .menu > li > a:after{display:none}#Header_creative #Top_bar .menu > li > a span{border-right:0;border-bottom-width:1px;line-height:38px}#Header_creative #Top_bar .menu li ul{left:100%;right:auto;top:0;box-shadow:2px 2px 2px 0 rgba(0,0,0,0.03);-webkit-box-shadow:2px 2px 2px 0 rgba(0,0,0,0.03)}#Header_creative #Top_bar .menu > li > ul.mfn-megamenu{width:700px!important;}#Header_creative #Top_bar .menu > li > ul.mfn-megamenu > li > ul{left:0}#Header_creative #Top_bar .menu li ul li a{padding-top:9px;padding-bottom:8px}#Header_creative #Top_bar .menu li ul li ul{top:0!important}#Header_creative #Top_bar .menu > li > a span.description{display:block;font-size:13px;line-height:28px!important;clear:both}#Header_creative #Top_bar .search_wrapper{left:100%;top:auto;bottom:0}#Header_creative #Top_bar a#header_cart{display:inline-block;float:none;top:3px}#Header_creative #Top_bar a#search_button{display:inline-block;float:none;top:3px}#Header_creative #Top_bar .wpml-languages{display:inline-block;float:none;top:0}#Header_creative #Top_bar .wpml-languages.enabled:hover a.active{padding-bottom:9px}#Header_creative #Top_bar a.button.action_button{display:inline-block;float:none;top:16px;margin:0}#Header_creative #Top_bar .banner_wrapper{display:block;text-align:center}#Header_creative #Top_bar .banner_wrapper img{max-width:100%;height:auto;display:inline-block}#Header_creative #Action_bar{position:absolute;bottom:0;top:auto;clear:both;padding:0 20px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}#Header_creative #Action_bar .social{float:none;text-align:center;padding:5px 0 15px}#Header_creative #Action_bar .social li{margin-bottom:2px}#Header_creative .social li a{color:rgba(0,0,0,.5)}#Header_creative .social li a:hover{color:#000}#Header_creative .creative-social{position:absolute;bottom:10px;right:0;width:50px}#Header_creative .creative-social li{display:block;float:none;width:100%;text-align:center;margin-bottom:5px}.header-creative .fixed-nav.fixed-nav-prev{margin-left:50px}.header-creative.header-open .fixed-nav.fixed-nav-prev{margin-left:250px}.menuo-last #Header_creative #Top_bar .menu li.last ul{top:auto;bottom:0}.header-open #Header_creative{left:0}.header-open #Header_creative .creative-wrapper{opacity:1;margin:0!important;}.header-open #Header_creative .creative-menu-toggle,.header-open #Header_creative .creative-social{display:none}body.header-rtl.header-creative{padding-left:0;padding-right:50px}.header-rtl #Header_creative{left:auto;right:-200px}.header-rtl.nice-scroll #Header_creative{margin-right:10px}.header-rtl #Header_creative .creative-wrapper{margin-left:50px;margin-right:0}.header-rtl #Header_creative a.creative-menu-toggle{left:8px;right:auto}.header-rtl #Header_creative .creative-social{left:0;right:auto}.header-rtl #Footer #back_to_top.sticky{right:125px}.header-rtl #popup_contact{right:70px}.header-rtl #Header_creative #Top_bar .menu li ul{left:auto;right:100%}.header-rtl #Header_creative #Top_bar .search_wrapper{left:auto;right:100%;}.header-rtl .fixed-nav.fixed-nav-prev{margin-left:0!important}.header-rtl .fixed-nav.fixed-nav-next{margin-right:50px}body.header-rtl.header-creative.header-open{padding-left:0;padding-right:250px!important}.header-rtl.header-open #Header_creative{left:auto;right:0}.header-rtl.header-open #Footer #back_to_top.sticky{right:325px}.header-rtl.header-open #popup_contact{right:270px}.header-rtl.header-open .fixed-nav.fixed-nav-next{margin-right:250px}#Header_creative.active{left:-1px;}.header-rtl #Header_creative.active{left:auto;right:-1px;}#Header_creative.active .creative-wrapper{opacity:1;margin:0}.header-creative .vc_row[data-vc-full-width]{padding-left:50px}.header-creative.header-open .vc_row[data-vc-full-width]{padding-left:250px}.header-open .vc_parallax .vc_parallax-inner { left:auto; width: calc(100% - 250px); }.header-open.header-rtl .vc_parallax .vc_parallax-inner { left:0; right:auto; }#Header_creative.scroll{height:100%;overflow-y:auto}#Header_creative.scroll:not(.dropdown) .menu li ul{display:none!important}#Header_creative.scroll #Action_bar{position:static}#Header_creative.dropdown{outline:none}#Header_creative.dropdown #Top_bar .menu_wrapper{float:left}#Header_creative.dropdown #Top_bar #menu ul li{position:relative;float:left}#Header_creative.dropdown #Top_bar #menu ul li a:after{display:none}#Header_creative.dropdown #Top_bar #menu ul li a span{line-height:38px;padding:0}#Header_creative.dropdown #Top_bar #menu ul li.submenu .menu-toggle{display:block;position:absolute;right:0;top:0;width:38px;height:38px;line-height:38px;font-size:26px;font-weight:300;text-align:center;cursor:pointer;color:#444;opacity:0.33;}#Header_creative.dropdown #Top_bar #menu ul li.submenu .menu-toggle:after{content:"+"}#Header_creative.dropdown #Top_bar #menu ul li.hover > .menu-toggle:after{content:"-"}#Header_creative.dropdown #Top_bar #menu ul li.hover a{border-bottom:0}#Header_creative.dropdown #Top_bar #menu ul.mfn-megamenu li .menu-toggle{display:none}#Header_creative.dropdown #Top_bar #menu ul li ul{position:relative!important;left:0!important;top:0;padding:0;margin-left:0!important;width:auto!important;background-image:none}#Header_creative.dropdown #Top_bar #menu ul li ul li{width:100%!important}#Header_creative.dropdown #Top_bar #menu ul li ul li a{padding:0 10px;text-align:center}#Header_creative.dropdown #Top_bar #menu ul li ul li a .menu-arrow{display:none}#Header_creative.dropdown #Top_bar #menu ul li ul li a span{padding:0}#Header_creative.dropdown #Top_bar #menu ul li ul li a span:after{display:none!important}#Header_creative.dropdown #Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{text-transform:uppercase;font-weight:400}#Header_creative.dropdown #Top_bar .menu > li > ul.mfn-megamenu > li > ul{display:block!important;position:inherit;left:auto;top:auto}#Header_creative.dropdown #Top_bar #menu ul li ul li ul{border-left:0!important;padding:0;top:0}#Header_creative{transition: left .5s ease-in-out, right .5s ease-in-out;}#Header_creative .creative-wrapper{transition: opacity .5s ease-in-out, margin 0s ease-in-out .5s;}#Header_creative.active .creative-wrapper{transition: opacity .5s ease-in-out, margin 0s ease-in-out;}}@media only screen and (min-width: 1240px) {#Top_bar.is-sticky{position:fixed!important;width:100%;left:0;top:-60px;height:60px;z-index:701;background:#fff;opacity:.97;filter:alpha(opacity = 97);-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.1);-moz-box-shadow:0 2px 5px 0 rgba(0,0,0,0.1);box-shadow:0 2px 5px 0 rgba(0,0,0,0.1)}.layout-boxed.header-boxed #Top_bar.is-sticky{max-width:1240px;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.layout-boxed.header-boxed.nice-scroll #Top_bar.is-sticky{margin-left:-5px}#Top_bar.is-sticky .top_bar_left,#Top_bar.is-sticky .top_bar_right,#Top_bar.is-sticky .top_bar_right:before{background:none}#Top_bar.is-sticky .top_bar_right{top:-4px;height:auto;}#Top_bar.is-sticky .top_bar_right_wrapper{top:15px}.header-plain #Top_bar.is-sticky .top_bar_right_wrapper{top:0}#Top_bar.is-sticky .logo{width:auto;margin:0 30px 0 20px;padding:0}#Top_bar.is-sticky #logo{padding:5px 0!important;height:50px!important;line-height:50px!important}.logo-no-sticky-padding #Top_bar.is-sticky #logo{height:60px!important;line-height:60px!important}#Top_bar.is-sticky #logo img.logo-main{display:none}#Top_bar.is-sticky #logo img.logo-sticky{display:inline;max-height:35px;}#Top_bar.is-sticky .menu_wrapper{clear:none}#Top_bar.is-sticky .menu_wrapper .menu > li > a{padding:15px 0}#Top_bar.is-sticky .menu > li > a,#Top_bar.is-sticky .menu > li > a span{line-height:30px}#Top_bar.is-sticky .menu > li > a:after{top:auto;bottom:-4px}#Top_bar.is-sticky .menu > li > a span.description{display:none}#Top_bar.is-sticky .secondary_menu_wrapper,#Top_bar.is-sticky .banner_wrapper{display:none}.header-overlay #Top_bar.is-sticky{display:none}.sticky-dark #Top_bar.is-sticky{background:rgba(0,0,0,.8)}.sticky-dark #Top_bar.is-sticky #menu{background:rgba(0,0,0,.8)}.sticky-dark #Top_bar.is-sticky .menu > li > a{color:#fff}.sticky-dark #Top_bar.is-sticky .top_bar_right a{color:rgba(255,255,255,.5)}.sticky-dark #Top_bar.is-sticky .wpml-languages a.active,.sticky-dark #Top_bar.is-sticky .wpml-languages ul.wpml-lang-dropdown{background:rgba(0,0,0,0.3);border-color:rgba(0,0,0,0.1)}}@media only screen and (min-width: 768px) and (max-width: 1240px){.header_placeholder{height:0!important}}@media only screen and (max-width: 1239px){#Top_bar #menu{display:none;height:auto;width:300px;bottom:auto;top:100%;right:1px;position:absolute;margin:0}#Top_bar a.responsive-menu-toggle{display:block}#Top_bar #menu > ul{width:100%;float:left}#Top_bar #menu ul li{width:100%;padding-bottom:0;border-right:0;position:relative}#Top_bar #menu ul li a{padding:0 25px;margin:0;display:block;height:auto;line-height:normal;border:none}#Top_bar #menu ul li a:after{display:none}#Top_bar #menu ul li a span{border:none;line-height:44px;display:inline;padding:0}#Top_bar #menu ul li a span.description{margin:0 0 0 5px}#Top_bar #menu ul li.submenu .menu-toggle{display:block;position:absolute;right:15px;top:0;width:44px;height:44px;line-height:44px;font-size:30px;font-weight:300;text-align:center;cursor:pointer;color:#444;opacity:0.33;}#Top_bar #menu ul li.submenu .menu-toggle:after{content:"+"}#Top_bar #menu ul li.hover > .menu-toggle:after{content:"-"}#Top_bar #menu ul li.hover a{border-bottom:0}#Top_bar #menu ul li a span:after{display:none!important}#Top_bar #menu ul.mfn-megamenu li .menu-toggle{display:none}#Top_bar #menu ul li ul{position:relative!important;left:0!important;top:0;padding:0;margin-left:0!important;width:auto!important;background-image:none!important;box-shadow:0 0 0 0 transparent!important;-webkit-box-shadow:0 0 0 0 transparent!important}#Top_bar #menu ul li ul li{width:100%!important}#Top_bar #menu ul li ul li a{padding:0 20px 0 35px}#Top_bar #menu ul li ul li a .menu-arrow{display:none}#Top_bar #menu ul li ul li a span{padding:0}#Top_bar #menu ul li ul li a span:after{display:none!important}#Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{text-transform:uppercase;font-weight:400}#Top_bar .menu > li > ul.mfn-megamenu > li > ul{display:block!important;position:inherit;left:auto;top:auto}#Top_bar #menu ul li ul li ul{border-left:0!important;padding:0;top:0}#Top_bar #menu ul li ul li ul li a{padding:0 20px 0 45px}.rtl #Top_bar #menu{left:1px;right:auto}.rtl #Top_bar a.responsive-menu-toggle{left:20px;right:auto}.rtl #Top_bar #menu ul li.submenu .menu-toggle{left:15px;right:auto;border-left:none;border-right:1px solid #eee}.rtl #Top_bar #menu ul li ul{left:auto!important;right:0!important}.rtl #Top_bar #menu ul li ul li a{padding:0 30px 0 20px}.rtl #Top_bar #menu ul li ul li ul li a{padding:0 40px 0 20px}.header-stack .menu_wrapper a.responsive-menu-toggle{position:static!important;margin:11px 0!important}.header-stack .menu_wrapper #menu{left:0;right:auto}.rtl.header-stack #Top_bar #menu{left:auto;right:0}.admin-bar #Header_creative{top:32px}.header-creative.layout-boxed{padding-top:85px}.header-creative.layout-full-width #Wrapper{padding-top:60px}#Header_creative{position:fixed;width:100%;left:0!important;top:0;z-index:1001}#Header_creative .creative-wrapper{display:block!important;opacity:1!important}#Header_creative .creative-menu-toggle,#Header_creative .creative-social{display:none!important;opacity:1!important;filter:alpha(opacity=100)!important}#Header_creative #Top_bar{position:static;width:100%}#Header_creative #Top_bar #logo{height:50px;line-height:50px;padding:5px 0}#Header_creative #Top_bar #logo img.logo-sticky{max-height:40px!important}#Header_creative #logo img.logo-main{display:none}#Header_creative #logo img.logo-sticky{display:inline-block}.logo-no-sticky-padding #Header_creative #Top_bar #logo{height:60px;line-height:60px;padding:0}.logo-no-sticky-padding #Header_creative #Top_bar #logo img.logo-sticky{max-height:60px!important}#Header_creative #Top_bar #header_cart{top:21px}#Header_creative #Top_bar #search_button{top:20px}#Header_creative #Top_bar .wpml-languages{top:11px}#Header_creative #Top_bar .action_button{top:9px}#Header_creative #Top_bar .top_bar_right{height:60px;top:0}#Header_creative #Top_bar .top_bar_right:before{display:none}#Header_creative #Top_bar .top_bar_right_wrapper{top:0}#Header_creative #Action_bar{display:none}#Header_creative.scroll{overflow:visible!important}}html { background-color: #ffffff;}#Wrapper, #Content { background-color: #ffffff;}body, button, span.date_label, .timeline_items li h3 span, input[type="submit"], input[type="reset"], input[type="button"],input[type="text"], input[type="password"], input[type="tel"], input[type="email"], textarea, select, .offer_li .title h3 {font-family: "Roboto", Arial, Tahoma, sans-serif;}#menu > ul > li > a, .action_button, #overlay-menu ul li a {font-family: "Roboto", Arial, Tahoma, sans-serif;}#Subheader .title {font-family: "Roboto", Arial, Tahoma, sans-serif;}h1, h2, h3, h4, .text-logo #logo {font-family: "Roboto", Arial, Tahoma, sans-serif;}h5, h6 {font-family: "Roboto", Arial, Tahoma, sans-serif;}blockquote {font-family: "Roboto", Arial, Tahoma, sans-serif;}.chart_box .chart .num, .counter .desc_wrapper .number-wrapper, .how_it_works .image .number,.pricing-box .plan-header .price, .quick_fact .number-wrapper, .woocommerce .product div.entry-summary .price {font-family: "Roboto", Arial, Tahoma, sans-serif;}body {font-size: 16px;line-height: 25px;font-weight: 400;letter-spacing: 0px;}big,.big {font-size: 16px;line-height: 28px;font-weight: 400;letter-spacing: 0px;}#menu > ul > li > a, a.button.action_button, #overlay-menu ul li a{font-size: 14px;font-weight: 400;letter-spacing: 1px;}#overlay-menu ul li a{line-height: 21px;}#Subheader .title {font-size: 30px;line-height: 30px;font-weight: 700;letter-spacing: 1px;}h1, .text-logo #logo { font-size: 48px;line-height: 60px;font-weight: 400;letter-spacing: 0px;}h2 { font-size: 36px;line-height: 44px;font-weight: 400;letter-spacing: 0px;}h3 {font-size: 30px;line-height: 38px;font-weight: 400;letter-spacing: 0px;}h4 {font-size: 20px;line-height: 28px;font-weight: 400;letter-spacing: 0px;}h5 {font-size: 18px;line-height: 26px;font-weight: 700;letter-spacing: 0px;}h6 {font-size: 16px;line-height: 25px;font-weight: 400;letter-spacing: 0px;}#Intro .intro-title { font-size: 70px;line-height: 70px;font-weight: 400;letter-spacing: 0px;}@media only screen and (min-width: 768px) and (max-width: 959px){body {font-size: 14px;line-height: 21px;}big,.big {font-size: 14px;line-height: 24px;}#menu > ul > li > a, a.button.action_button, #overlay-menu ul li a {font-size: 13px;}#overlay-menu ul li a{line-height: 19.5px;}#Subheader .title {font-size: 26px;line-height: 26px;}h1, .text-logo #logo { font-size: 41px;line-height: 51px;}h2 { font-size: 31px;line-height: 37px;}h3 {font-size: 26px;line-height: 32px;}h4 {font-size: 17px;line-height: 24px;}h5 {font-size: 15px;line-height: 22px;}h6 {font-size: 14px;line-height: 21px;}#Intro .intro-title { font-size: 60px;line-height: 60px;}blockquote { font-size: 15px;}.chart_box .chart .num { font-size: 45px; line-height: 45px; }.counter .desc_wrapper .number-wrapper { font-size: 45px; line-height: 45px;}.counter .desc_wrapper .title { font-size: 14px; line-height: 18px;}.faq .question .title { font-size: 14px; }.fancy_heading .title { font-size: 38px; line-height: 38px; }.offer .offer_li .desc_wrapper .title h3 { font-size: 32px; line-height: 32px; }.offer_thumb_ul li.offer_thumb_li .desc_wrapper .title h3 {font-size: 32px; line-height: 32px; }.pricing-box .plan-header h2 { font-size: 27px; line-height: 27px; }.pricing-box .plan-header .price > span { font-size: 40px; line-height: 40px; }.pricing-box .plan-header .price sup.currency { font-size: 18px; line-height: 18px; }.pricing-box .plan-header .price sup.period { font-size: 14px; line-height: 14px;}.quick_fact .number { font-size: 80px; line-height: 80px;}.trailer_box .desc h2 { font-size: 27px; line-height: 27px; }}@media only screen and (min-width: 480px) and (max-width: 767px){body {font-size: 13px;line-height: 19px;}big,.big {font-size: 13px;line-height: 21px;}#menu > ul > li > a, a.button.action_button, #overlay-menu ul li a {font-size: 13px;}#overlay-menu ul li a{line-height: 19.5px;}#Subheader .title {font-size: 23px;line-height: 23px;}h1, .text-logo #logo { font-size: 36px;line-height: 45px;}h2 { font-size: 27px;line-height: 33px;}h3 {font-size: 23px;line-height: 29px;}h4 {font-size: 15px;line-height: 21px;}h5 {font-size: 14px;line-height: 20px;}h6 {font-size: 13px;line-height: 19px;}#Intro .intro-title { font-size: 53px;line-height: 53px;}blockquote { font-size: 14px;}.chart_box .chart .num { font-size: 40px; line-height: 40px; }.counter .desc_wrapper .number-wrapper { font-size: 40px; line-height: 40px;}.counter .desc_wrapper .title { font-size: 13px; line-height: 16px;}.faq .question .title { font-size: 13px; }.fancy_heading .title { font-size: 34px; line-height: 34px; }.offer .offer_li .desc_wrapper .title h3 { font-size: 28px; line-height: 28px; }.offer_thumb_ul li.offer_thumb_li .desc_wrapper .title h3 {font-size: 28px; line-height: 28px; }.pricing-box .plan-header h2 { font-size: 24px; line-height: 24px; }.pricing-box .plan-header .price > span { font-size: 34px; line-height: 34px; }.pricing-box .plan-header .price sup.currency { font-size: 16px; line-height: 16px; }.pricing-box .plan-header .price sup.period { font-size: 13px; line-height: 13px;}.quick_fact .number { font-size: 70px; line-height: 70px;}.trailer_box .desc h2 { font-size: 24px; line-height: 24px; }}@media only screen and (max-width: 479px){body {font-size: 13px;line-height: 19px;}big,.big {font-size: 13px;line-height: 19px;}#menu > ul > li > a, a.button.action_button, #overlay-menu ul li a {font-size: 13px;}#overlay-menu ul li a{line-height: 19.5px;}#Subheader .title {font-size: 18px;line-height: 19px;}h1, .text-logo #logo { font-size: 29px;line-height: 36px;}h2 { font-size: 22px;line-height: 26px;}h3 {font-size: 18px;line-height: 23px;}h4 {font-size: 13px;line-height: 19px;}h5 {font-size: 13px;line-height: 19px;}h6 {font-size: 13px;line-height: 19px;}#Intro .intro-title { font-size: 42px;line-height: 42px;}blockquote { font-size: 13px;}.chart_box .chart .num { font-size: 35px; line-height: 35px; }.counter .desc_wrapper .number-wrapper { font-size: 35px; line-height: 35px;}.counter .desc_wrapper .title { font-size: 13px; line-height: 26px;}.faq .question .title { font-size: 13px; }.fancy_heading .title { font-size: 30px; line-height: 30px; }.offer .offer_li .desc_wrapper .title h3 { font-size: 26px; line-height: 26px; }.offer_thumb_ul li.offer_thumb_li .desc_wrapper .title h3 {font-size: 26px; line-height: 26px; }.pricing-box .plan-header h2 { font-size: 21px; line-height: 21px; }.pricing-box .plan-header .price > span { font-size: 32px; line-height: 32px; }.pricing-box .plan-header .price sup.currency { font-size: 14px; line-height: 14px; }.pricing-box .plan-header .price sup.period { font-size: 13px; line-height: 13px;}.quick_fact .number { font-size: 60px; line-height: 60px;}.trailer_box .desc h2 { font-size: 21px; line-height: 21px; }}.with_aside .sidebar.columns {width: 23%;}.with_aside .sections_group {width: 77%;}.aside_both .sidebar.columns {width: 18%;}.aside_both .sidebar.sidebar-1{ margin-left: -82%;}.aside_both .sections_group {width: 64%;margin-left: 18%;}@media only screen and (min-width:1240px){#Wrapper, .with_aside .content_wrapper {max-width: 1240px;}.section_wrapper, .container {max-width: 1220px;}.layout-boxed.header-boxed #Top_bar.is-sticky{max-width: 1240px;}}@media only screen and (max-width: 767px){.section_wrapper,.container,.four.columns .widget-area { max-width: 700px !important; }}#Top_bar #logo,.header-fixed #Top_bar #logo,.header-plain #Top_bar #logo,.header-transparent #Top_bar #logo {height: 60px;line-height: 60px;padding: 15px 0;}.logo-overflow #Top_bar:not(.is-sticky) .logo {height: 90px;}#Top_bar .menu > li > a {padding: 15px 0;}.menu-highlight:not(.header-creative) #Top_bar .menu > li > a {margin: 20px 0;}.header-plain:not(.menu-highlight) #Top_bar .menu > li > a span:not(.description) {line-height: 90px;}.header-fixed #Top_bar .menu > li > a {padding: 30px 0;}#Top_bar .top_bar_right,.header-plain #Top_bar .top_bar_right {height: 90px;}#Top_bar .top_bar_right_wrapper { top: 25px;}.header-plain #Top_bar a#header_cart, .header-plain #Top_bar a#search_button,.header-plain #Top_bar .wpml-languages,.header-plain #Top_bar a.button.action_button {line-height: 90px;}.header-plain #Top_bar .wpml-languages,.header-plain #Top_bar a.button.action_button {height: 90px;}@media only screen and (max-width: 767px){#Top_bar a.responsive-menu-toggle { top: 40px;}.mobile-header-mini #Top_bar #logo{height:50px!important;line-height:50px!important;margin:5px 0;}}.twentytwenty-before-label::before { content: "Before";}.twentytwenty-after-label::before { content: "After";}.blog-teaser li .desc-wrapper .desc{background-position-y:-1px;}
</style>
<style id="mfn-dnmc-theme-css">
.section-border-bottom { border-bottom: 1px solid #dddddd; }

/* Icon box */
.icon_box .desc_wrapper { margin: 0 5%; }

/* Header */
.tr-menu.header-classic #Top_bar:not(.is-sticky) { background: rgba(0, 0, 0, 0.2) !important; border-bottom: 1px solid rgba(255, 255, 255, 0.5); }
</style>

<body data-rsssl=1 class="home page-template-default page page-id-2387 template-slider  color-green style-simple button-default layout-full-width nice-scroll-on no-content-padding header-creative header-open minimalist-header-no sticky-header sticky-tb-color ab-show subheader-both-center menu-line-below menuo-right mobile-tb-left mobile-mini-ml-lc mobile-header-mini tr-header tr-menu be-reg-20431 wpb-js-composer js-comp-ver-5.4.5 vc_responsive">
			
<div id="Header_creative" class="">	
	<a href="#" class="creative-menu-toggle"><i class="icon-menu-fine"></i></a>

	<div class="creative-social"><ul class="social"><li class="skype"><a  href="skype:ryanadaltd" title="Skype"><i class="icon-skype"></i></a></li><li class="facebook"><a  href="https://www.facebook.com/my.jisort/" title="Facebook"><i class="icon-facebook"></i></a></li><li class="googleplus"><a  href="https://plus.google.com/+ryanadacompany" title="Google+"><i class="icon-gplus"></i></a></li><li class="twitter"><a  href="https://twitter.com/JisortInc" title="Twitter"><i class="icon-twitter"></i></a></li><li class="youtube"><a  href="https://www.youtube.com/channel/UCdGJRRAcBrhKjR_XyiNyCBg/featured" title="YouTube"><i class="icon-play"></i></a></li><li class="linkedin"><a  href="https://www.linkedin.com/company-beta/2481487" title="LinkedIn"><i class="icon-linkedin"></i></a></li></ul></div>	
	<div class="creative-wrapper">
		<div class="header_placeholder"></div>
		<div id="Top_bar">
			<div class="one clearfix">
		
				<div class="top_bar_left">
				
					<!-- Logo -->
					<div class="logo"><a id="logo" href="loans.php" title="Loan System" data-height="60" data-padding="15">
					<img class="logo-main scale-with-grid" src="images/logo.png"  data-height="536" alt="jisort logo" />
					<img class="logo-sticky scale-with-grid" src="images/logo.png" data-retina="images/logo.png" data-height="536" alt="jisort logo" />
					<img class="logo-mobile scale-with-grid" src="images/logo.png" data-retina="images/logo.png" data-height="536" alt="jisort logo" />
					<img class="logo-mobile-sticky scale-with-grid" src="images/logo.png" data-retina="images/logo.png" data-height="536" alt="jisort logo" /></a></div>			
					<div class="menu_wrapper">
					<?php
					$pid = @$_REQUEST['pid'];
					if ($pid == 1)
					{
						$employer ='current-menu-item page_item page-item-2760 current_page_item';
					}
					else if ($pid == 2)
					{
						$banks ='current-menu-item page_item page-item-2760 current_page_item';
					}
					else if ($pid == 3)
					{
						$searches ='current-menu-item page_item page-item-2760 current_page_item';
					}
					else if ($pid == 4)
					{
						$reports ='current-menu-item page_item page-item-2760 current_page_item';
					}
					else if ($pid == 5)
					{
						$admin ='current-menu-item page_item page-item-2760 current_page_item';
					}
					else if ($pid == 6)
					{
						$savings = 'current-menu-item page_item page-item-2760 current_page_item';
					}
					else
					{
						$dashboard ='current-menu-item page_item page-item-2760 current_page_item';
					}
					?>
<?php
if($_SESSION['roleid'] == 1) //Employers
{
?>
<nav id="menu" class="menu-main-menu-container"><ul id="menu-main-menu" class="menu">
<li id="menu-item-2427" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children <?php echo $employer; ?>"><a href="#"><span>Employers</span></a>
<ul class="sub-menu">
	<li id="menu-item-2428" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="loans.php?act=add-client-info&pid=1"><span>Add Client Info</span></a></li>
	<li id="menu-item-2424" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="loans.php?act=view-client-info&pid=1"><span>View Clients</span></a></li>
</ul>
</li>

<li id="menu-item-2762" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo $searches; ?>"><a href="loans.php?act=loan-computerization&pid=3"><span>Compute Loan Amount</span></a></li>


<?php	
}
else if($_SESSION['roleid'] == 2) //Bank
{
?>
<nav id="menu" class="menu-main-menu-container"><ul id="menu-main-menu" class="menu">
<li id="menu-item-2636" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children <?php echo $banks;?>"><a href="#"><span>Bank Loan</span></a>
<ul class="sub-menu">
	<li id="menu-item-2538" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="loans.php?act=add-loan&pid=2"><span>Add Loan</span></a></li>
	<li id="menu-item-2532" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="loans.php?act=view-loans&pid=2"><span>View Loans</span></a></li>
	<li id="menu-item-2676" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="loans.php?act=loan-defaulters&pid=2"><span>Loan Defaulters</span></a></li>

</ul>
</li>

<li id="menu-item-2762" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo $searches; ?>"><a href="loans.php?act=loan-computerization&pid=3"><span>Compute Loan Amount</span></a></li>


<?php	
}
else
{
?>
<nav id="menu" class="menu-main-menu-container">
	<ul id="menu-main-menu" class="menu">
<li id="menu-item-2451" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children <?php  echo $dashboard; ?>"><a href="loans.php"><span>Dashboard</span></a>
</li>

<li id="menu-item-2762" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo $searches; ?>"><a href="loans.php?act=salary-mpesa&pid=3"><span>Salary To Mpesa</span></a></li>

<li id="menu-item-2636" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children <?php echo $banks;?>"><a href="loans.php?act=daraja_money&pid=2"><span>Daraja Salary Money</span></a></li>

<li id="menu-item-2470" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children <?php echo $savings; ?>"><a href="loans.php?act=savings&pid=6"><span>Savings</span></a>

<li id="menu-item-2697" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children <?php echo $reports; ?>"><a href="loans.php?act=view-loans&pid=4"><span>Loan Requests</span></a>



<li id="menu-item-2390" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children <?php echo $admin; ?>"><a href="#"><span>Admin Settings</span></a>
<ul class="sub-menu">
	<li id="menu-item-2462" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="loans.php?act=roles-management&pid=5"><span>Roles Management</span></a></li>
	<li id="menu-item-2463" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="loans.php?act=users-management&pid=5"><span>Users Management</span></a></li>->
</ul>
</li>
<li id="menu-item-2427" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children <?php echo $employer; ?>"><a href="loans.php?act=view-client-info&pid=1"><span>Staff</span></a></li>
</ul>
</nav>
<?php
}
?>

<a class="responsive-menu-toggle " href="#">
	<img src="images/icons/menu.png" class="scale-with-grid" alt="" width="" height=""/></i></a>					
					</div>		
				
					<div class="search_wrapper">
						<!-- #searchform -->
												<form method="get" id="searchform" action="#">
														<i class="icon_search icon-search-fine"></i>
							<a href="#" class="icon_close"><i class="icon-cancel-fine"></i></a>
							<input type="text" class="field" name="s" id="s" placeholder="Enter your search" />			
							<input type="submit" class="submit" value="" style="display:none;" />
						</form>
					</div>

				</div>
			
				<div class="top_bar_right">
				<div class="top_bar_right_wrapper"><a href="index.php" class="button button_theme button_js action_button "><span class="button_label">Logout</span></a></div>
				</div>				
				<div class="banner_wrapper">
									</div>
					
			</div>
		</div>


					
	</div>
	
</div>	

<div id="Wrapper">
		
<div id="Content">
 <div align=center><a href="loans.php">Dashboard</a> &nbsp;|&nbsp; <a href="#">My Account</a> &nbsp;|&nbsp; <a href="index.php">Logout</a></div>
  <div align="right">You are logged in as <font color=#BE0000><?php echo $_SESSION['names']; ?></font> &nbsp;&nbsp;&nbsp;</div>
  	 <font color=#FFFFFF>
<?php
print_r($_SESSION);

?>
</font>

	   <hr class="" style="margin: 0 auto 40px;">
<?php

$module = @$_REQUEST['act'];

		switch ($module) {
			
		case "add-client-info":
			include_once('settings/add_client_info.php');
			break;
			
		case "view-client-info":
			include_once('settings/view_client_info.php');
			break;
			
		case "add-loan":
			include_once('settings/add_loan.php');
			break;
			
		case "view-loans":
			include_once('settings/view_loans.php');
			break;
			
		case "loan-defaulters":
			include_once('settings/view_loan_defaulters.php');
			break;
			
		case "loan-computerization":
			include_once('settings/loan_computerization.php');
			break;
			
		case "account":
			include_once('settings/my_account.php');
			break;
			
		case "daraja_money":
			include_once('settings/view_employers.php');
			break;
			
		case "salary-mpesa":
			include_once('settings/view_banks.php');
			break;
			
		case "roles-management":
			include_once('settings/roles_management.php');
			break;
			
		case "assign-role":
			include_once('settings/assign_role.php');
			break;
			
		case "users-management":
			include_once('settings/users_management.php');
			break;
		case "savings":
			include_once('settings/savings.php');
			break;
		default:
		    if($_SESSION['roleid'] == 1) //Employers
			{
				include_once('settings/view_client_info.php');
			}
			else if($_SESSION['roleid'] == 2)
			{
				include_once('settings/view_loans.php');
			}
			else
			{
			include_once('settings/home.php');
			}
			
		}
		

?>
  
  
</div>

<!-- #Footer -->		
<footer id="Footer" class="clearfix">
	

		
		<div class="footer_copy">
			<div class="container">
				<div class="column one">


					<div class="copyright">
						Copyright © <?php echo date('Y'); ?>. All Rights Reserved.					</div>
					
												
				</div>
			</div>
		</div>
	
		
	
	
	
</footer>

</div>

<!-- script | dynamic -->
<script id="mfn-dnmc-config-js">
//<![CDATA[
window.mfn = {mobile_init:1240,nicescroll:40,parallax:"translate3d",responsive:1,retina_js:0};
window.mfn_lightbox = {disable:false,disableMobile:false,title:false,};
window.mfn_sliders = {blog:0,clients:0,offer:0,portfolio:0,shop:0,slider:0,testimonials:0};
//]]>
</script>

<script type='text/javascript' src='js/scripts.js?ver=4.9.2'></script>
<script type='text/javascript' src='js/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/mouse.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/sortable.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/tabs.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/accordion.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/plugins.js?ver=20.4.3.1'></script>
<script type='text/javascript' src='js/menu.js?ver=20.4.3.1'></script>
<script type='text/javascript' src='js/animations.min.js?ver=20.4.3.1'></script>
<script type='text/javascript' src='js/jplayer.min.js?ver=20.4.3.1'></script>
<script type='text/javascript' src='js/translate3d.js?ver=20.4.3.1'></script>
<script type='text/javascript' src='js/scripts1.js?ver=20.4.3.1'></script>
<script type='text/javascript' src='js/comment-reply.min.js?ver=4.9.7'></script>
<script type='text/javascript' src='js/embed.min.js?ver=4.9.7'></script>

</body>
</html>
