<?php

//Custom logo login

function my_login_logo() { ?>
    <style type="text/css">

        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/login-logo.png);
            border-radius: 50vh;
        }
    </style>

<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

//Custom logo dashboard

function my_custom_admin_logo() {
    echo '
        <style type="text/css">
            #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {content:none;}
            #wpadminbar #wp-admin-bar-wp-logo > a {
                background-image: url(' . get_site_icon_url() . ') !important;
                background-size: cover !important;
            }
            #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon {width: 12px;}
            @media screen and (max-width:782px){ #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon {width: 46px;} }
            a.edit-post-fullscreen-mode-close.has-icon {
                background-image: url(' . get_site_icon_url() . ');
                background-size: cover;
            }
            .edit-post-fullscreen-mode-close.has-icon > svg > path { display: none;}
        </style>
    ';
}
//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'my_custom_admin_logo');

?>