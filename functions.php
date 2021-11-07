<?php
/*
********************************
*  function add css and script *
********************************

*/ 
/**
 * Register Custom Navigation Walker
 */
	require_once ('class-wp-bootstrap-navwalker.php');




function css_path(){

    wp_enqueue_style( "my-bootstrap",get_template_directory_uri() . '/layout/css/bootstrap.min.css'); //include bootstrap
    wp_enqueue_style( "my-font",get_template_directory_uri() . '/layout/css/all.min.css');  //include icon fontawseme 
    wp_enqueue_style( "my-style",get_template_directory_uri() . '/layout/css/main.css');  //include my css style 
}

function script_path(){
    // call JQuery
   wp_deregister_script("jquery");   //remove script jqurey
   wp_register_script( "jquery", includes_url( "js/jquery/jquery.js" ),false,'',true ); //add jq and path 
   wp_enqueue_script("jquery");  //enqueue jq


   wp_enqueue_script("my-script-bootstrap",get_template_directory_uri() . '/layout/js/bootstrap.min.js' ,array(), false,true);  //include bootstrap JS
   wp_enqueue_script("my-script",get_template_directory_uri() . '/layout/js/main.js' ,array(), false,true);  //include My Js
   wp_enqueue_script("html5shiv",get_template_directory_uri() . '/layout/js/html5shiv.js') ;  //include My Js
   wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
   wp_enqueue_script("respond",get_template_directory_uri() . '/layout/js/respond.js');  //include My Js
   wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
 
}

//***************
//add manu Nav  *
//***************


 function my_nav_menu(){

    register_nav_menus(array(

     'my_menu_bar' => 'navigation bar',
     'My_menu_footer' =>'footer bar'
    
     ) );
}

function nav_bar(){

    wp_nav_menu( array(
        'theme_location'    => 'my_menu_bar',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'navbarSupportedContent',
        'menu_class'        => 'nav navbar-nav ml-auto',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            =>  new WP_Bootstrap_Navwalker(),
       
    ) );
}

// define the comment_form_submit_button callback
function filter_comment_form_submit_button( $submit_button, $args ) {
    // make filter magic happen here...
    $submit_before = '<div class="form-group">';
    $submit_after = '</div>';
    return $submit_before . $submit_button . $submit_after;
};
 
// add the filter
add_filter( 'comment_form_submit_button', 'filter_comment_form_submit_button', 10, 2 );



/***************************
Action add in suit wordpress
****************************
 */


            
        add_action("wp_enqueue_scripts","css_path");
        add_action("wp_enqueue_scripts","script_path");
        add_action( 'init', 'my_nav_menu');




    /*Add fueather wp */

    add_theme_support( 'post-thumbnails' );

/****************************
 * the_excerpt function     *
****************************/

function excerpt_fun_length($length){
        if (is_author()){
            return 20;   //excerpt auther page
    }else{
            return 50; //all excerpt poast page
        }
}
add_filter('excerpt_length','excerpt_fun_length');


function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow"> Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/****************************
 * Qurey Posts    *
****************************/
        function my_Qurey_p($the_num_qurey){
                $arg =array(
                'author'        => get_the_author_meta('id'),
                'posts_per_page'  => $the_num_qurey
                );
        $the_qurey_p = new WP_Query($arg);

        return $the_qurey_p;

        }


        function Random_post(){
            
        }

/****************************
 * Qurey Posts    *
****************************/
add_filter( 'avatar_defaults', 'wpb_new_gravatar' );

function wpb_new_gravatar ($avatar_defaults) {
    $myavatar =  get_home_url('Template_directory') . '/layout/img/brand.png';
    $avatar_defaults[$myavatar] = "Default my avatar";
    return $avatar_defaults;
}


/***********************************
pagetion number_format
*********************************/

   function my_num_pagetion(){
    

    global $wp_query;
 
    $big = 999999999; 
     
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages
    ) );

   }