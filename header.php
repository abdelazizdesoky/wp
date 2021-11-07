<!DOCTYPE html>
<html <?php language_attributes( );?>>
<head>
    <meta charset="<?php bloginfo("charset");?>"/>
    <title> <?php 
     bloginfo( "name" );
    wp_title( ' | ' );
   
    ?> </title>
    <link rel="pingback" href="<?php bloginfo( "pingback_url" );?>">
 
    <?php wp_head();?>
  
</head>
<body >

   <!----------nav bar--------------- --> 
  
<nav  class="navbar navbar-expand-lg navbar-dark  bg-danger sticky-top ">
   <div class='container'>  
   <img class=" p-1  " src="<?php echo  get_template_directory_uri( )?>\layout\img\brand.png" width="30" height="30" alt=""> 
       <a class="navbar-brand" href="<?php bloginfo( "url" );?>">  <?php bloginfo( "name" );?>
       
      </a> 
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
       </button>
            <!-- nav bar -->
            <?php  nav_bar();  ?>
     
           
</nav>
</header>

    