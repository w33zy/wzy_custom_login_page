<?php

/*
Plugin Name: Custom Login Screen for YWOP
Plugin URI: http://wzymedia.com
Description: It customizes the WordPress login screen.
Version: 1.0
Author: w33zy
Author URI: http://wzymedia.com
License: GPLv2
*/

// changes the title of the logo to match the websites url
function new_login_title() {
    return get_option('blogname');
}

// changes the url of the logo to match the websites url
function new_login_url() {
    return home_url( '/' );
}

// changes the styling of the login page
function wzy_custom_login_page() { ?>
    <style type="text/css">
        .login #login h1 a {
            background-image: url( <?php echo plugins_url( 'media/logo.png' , __FILE__ ); ?> );
            background-size: 80px auto;
            height: 70px;
        }
        .login #nav a, .login #backtoblog a {
            color: #27adab !important;
        }
        .login #nav a:hover, .login #backtoblog a:hover {
            color: #d228bc !important;
        }
        .login .button-primary {
            background: #27adab; /* Old browsers */
            background: -moz-linear-gradient(top, #27adab 0%, #135655 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#27adab), color-stop(100%,#135655)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #27adab 0%,#135655 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #27adab 0%,#135655 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #27adab 0%,#135655 100%); /* IE10+ */
            background: linear-gradient(to bottom, #27adab 0%,#135655 100%); /* W3C */
        }
        .login .button-primary:hover {
            background: #85aaaa; /* Old browsers */
            background: -moz-linear-gradient(top, #85aaaa 0%, #208e8c 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#85aaaa), color-stop(100%,#208e8c)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #85aaaa 0%,#208e8c 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #85aaaa 0%,#208e8c 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #85aaaa 0%,#208e8c 100%); /* IE10+ */
            background: linear-gradient(to bottom, #85aaaa 0%,#208e8c 100%); /* W3C */
        }
			body.login {
			background-color:#FFF !important;
			background-image:url( <?php echo plugins_url( 'media/bkgd.jpg' , __FILE__ ); ?> ); 
			background-position:top !important; 
			background-repeat:no-repeat !important; 
		}

        .login #nav {
            margin: 16px 0 0;
            float: left !important;
        }
        .login #backtoblog {
           float: right !important;
        }

    </style>

<?php }
add_filter('login_headertitle', 'new_login_title');
add_filter('login_headerurl', 'new_login_url');
add_action( 'login_enqueue_scripts', 'wzy_custom_login_page' );
?>