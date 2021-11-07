<?php 
 get_header();

?>

 <div class='container'>
 
 
         <?php
         if (have_posts()){    //if condition
             while (have_posts()){
                 the_post();?>
        
                <div class="jumbotron">
                    <?php if (has_post_thumbnail()) { 
                   
                   if (has_post_thumbnail()) {     ?>

                <img  class =" mx-auto d-block  img-page shadow-lg bg-white rounded-lg"  src="<?php the_post_thumbnail_url(  )?>" class="card-img-top" alt="#"> 

                    <?php } } ?>
                    
                <h1 class="display-4"><?php the_title();?> </h1>
                <p class="lead"><?php  the_content () ;?> </p>
                </div>       
                            
                             
                          
          
         <?php  } }//end if ?>   

 </div>

</div>






<?php get_footer();
?>