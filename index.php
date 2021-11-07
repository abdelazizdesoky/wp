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
    <script>
       
    document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY >50) {
          document.getElementById('navbar_top').classList.add('bg-danger') ;
          // add padding top to show content behind navbar
          navbar_height = document.querySelector('.navbar').offsetHeight;
       //  document.body.style.paddingTop = navbar_height + 'px';
        } else {
          document.getElementById('navbar_top').classList.remove('bg-danger');
           // remove padding top from body
         document.body.style.paddingTop = '0';
        } 
    });
  }); 

    </script>
</head>
<body >


<header>
<div class="">
      <div class=" up-nav">
      <!-- background caver -->
      <img class=" d-block w-100" style="height:650px;" src="<?php echo  get_template_directory_uri( )?>/layout/img/slider2.png" alt="cover">
      </div>
</div>

   <!----------nav bar--------------- --> 
  
<nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark fixed-top  ">
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

    
<?php

 
   
   include_once('slider.php');
   include_once('posts.php');
 

   get_footer();

?>

