<?php get_header();?>

<div class='container'>
            <?php
            if (have_posts()){    //if condition
                while (have_posts()){
                    the_post();?>
               <!-- the post -->
             <div class=" row post   shadow-lg bg-white">
                       <!-- edit -->
                           <div class="edit-post"> <?php edit_post_link(' <i class="fa fa-pen">  Edit  </i>  '); ?></div>

                     <!-- title post -->
                      <div class =" col-lg-6 col-sm-12 ">
                                <a href="<?php the_permalink( );?>">
                                        <h5 class="card-title "> 
                                            <?php the_title();?> 
                                        </h5> 
                                    </a>
                                    <!-- the date & comment -->
                                  
                                    <span class="card-text"> <small class="text-muted"><i class="fa fa-calendar" ></i> <?php the_date();?></small></span>  
                                    <span class="card-text"><small class="text-muted"><i class="fa fa-comment"></i>  <?php comments_popup_link(  );?></small></span>  
                                    <img  class ="img-thumbnail  single-post shadow-lg bg-white rounded-lg "  src="<?php the_post_thumbnail_url(  )?>" class="card-img-top" alt="#"> 
                      </div>

                           <!-- the contant -->
                     <div class = "col-lg-6 col-sm-12"> 
                            <div class="single-content">
                            <p class="card-text "><?php the_content( "Read More ...." ) ;?></p> 
                            </div>
                                  <!-- the author -->
                                  <span class="card-text"><small class="text-muted"><i class="fa fa-list-alt"></i>  <?php the_category(',') ;?></small></span>
                                  <span class="card-text"><small class="text-muted"><i class="fa fa-tags"></i>  <?php the_tags('Tag: ' , ' , ');?></small></span>        
                      </div>  
                     <?php  } }//end if ?>   

            </div>  <!-- end Row -->

            <!------- paignation------->
            <div class="row pigation-post ">
                       <div class ="col-6 ">
                      <?php
                            my_num_pagetion();
                            
                       

                          if(get_previous_post_link()){
                                
                                 previous_post_link('%link','<div class="btn btn-outline-danger "><i class ="fa fa-chevron-left"></i> %title </div>','true');
                                 
                                }else{
                                echo ' <div class="btn btn-outline-danger  disabled" tabindex="-1" role="button" aria-disabled="true">No Prev </div>';
                                }?>
                            
                        </div>
                        <div class ="col-6  "> 
                        <div class="float-right">
                        
                                <?php
                                if(get_next_post_link()){
                                    
                                    next_post_link('%link','<div class="btn btn-outline-danger ">%title <i class ="fa fa-chevron-right"></i></div>' ,'true' );
                                    
                                }else{

                                echo ' <div class="btn btn-outline-danger  disabled" tabindex="-1" role="button" aria-disabled="true">No post
                                </div>';
                                }?>
                           </div> 
                        </div>
                    </div>
                      

                    <!-- auther post -->
<hr>    

  <div class ="author-post ">
  <div class="row no-gutters ">
    <div class="col-md-4">
     <?php
     $arg =array(
        'height' =>80,
        'width'  =>80,
        'class' =>'card-img',
     );
    
    echo get_avatar( get_the_author_meta( 'ID' ),'','','Avatar_user',$arg );
     ?>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo   get_the_author_meta( 'display_name');?></h5>
        <p class="card-text"><small class="text-muted"><?php echo   get_the_author_meta( 'email', $author_id );?></small></p>
        <p class="card-text"><?php echo   get_the_author_meta( 'description');?></p>
        <p class="card-text"><small class="text-muted"></small></p>
        <samp><small class="text-muted">Post Author: <?php echo count_user_posts( get_the_author_meta( 'ID' ));?> </small>    </samp> <br>
    <samp><small class="text-muted">  Profile Page :<?php the_author_posts_link( ) ;?></small></samp>
      </div>
    </div>
   
  </div>
</div>

                 

                 <!-- comment -->
                 <div class="row">
                     <div class="col-12">

                         <?php comments_template();?>

                </div>
                  </div>
         </div>
     </div> <!--end container -->
<?php get_footer();?>
