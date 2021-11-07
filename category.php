<?php 
get_header();

 //Qurey post per users*******
    $the_post_num =5;
    ?>
<br>
<br>
<div class='container'>
    <h4><a href="<?php  get_category_link( $categories[0]->term_id )  ?> "> <?php echo esc_html( $categories[0]->name );  ?> </a> </h4>
    <?php
     
    
     $the_qurey =  my_Qurey_p(10);

if ( get_category( 7 )->category_count > 1 ) {

                        if ($the_qurey->have_posts()){    //if condition
                            while ($the_qurey->have_posts()){
                                $the_qurey->the_post();?>

                

                    <!-- the post -->
                            <div class="row post_author">
                            
                                    <?php if (has_post_thumbnail()) {  ?>
                                        <div class="col-lg-3 ">
                                                <div class ="   text-center">
                                                    <img  class ="img-fluid  img-post shadow-lg bg-white rounded-lg"  src="<?php the_post_thumbnail_url(  )?>" class="card-img-top" alt="#"> 
                                                </div>
                                        </div>
                                    <?php  } ?>
                                
                                <div  class =" col-lg-8">

                                                <a href="<?php the_permalink( );?>">
                                                    <h5 class="card-title "> 
                                                        <?php the_title();?> 
                                                    </h5> 
                                                </a>
                                                <!-- the date & comment -->
                                                <span class="card-text"> <small class="text-muted"><i class="fa fa-calendar" ></i> <?php the_date();?></small></span>  
                                                <span class="card-text"><small class="text-muted"><i class="fa fa-comment"></i>  <?php comments_popup_link(  );?></small></span>  
                                                <!-- the contant -->
                                                    <div class="post-content">
                                                    <p class="card-text "><?php
                                                echo the_excerpt(); ?></p> 
                                                    </div>
                                </div>
                            </div> 
                    <!-- the post -->
                <?php 
                
            
            
                                    }
        

                }
}else{
    echo '<H5 class="text-center">Not Post  </H5>';
    } //end if 
    wp_reset_query();
    ?>   
  
        <!------- paignation------->
                    <div class="row pigation ">
                            <div class ="col-6 ">
                                        <?php 
                                        if(get_previous_posts_link()){
                                        previous_posts_link(' <div class="btn btn-outline-danger "><i class ="fa fa-chevron-left"></i> Prev</div>');
                                        }else{
                                        echo ' <div class="btn btn-outline-danger  disabled" tabindex="-1" role="button" aria-disabled="true">Prev
                                        </div>';
                                        }?>
                                    
                                </div>
                                <div class ="col-6  "> 
                                    <div class="float-right">
                                        <?php
                                        if(get_next_posts_link(  )){
                                        next_posts_link( '<div class="btn btn-outline-danger ">Next <i class ="fa fa-chevron-right"></i></div>' );
                                        }else{
                                        echo ' <div class="btn btn-outline-danger  disabled" tabindex="-1" role="button" aria-disabled="true">Next
                                        </div>';
                                        }?>
                                    </div> 
                                </div>
                    </div>
         
    <!-- tree info page static -->
</div>










<?php

get_footer();

?>