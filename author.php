<?php get_header();?>
<div class='container'>
    <div class="author-page">
      <div class="row">
            <div class="col-md-4">
            <?php
            echo  get_avatar(get_the_author_meta('id'));
            ?>

            </div>

            <div class="col-md-8">
                  <div class="card-body list-group text-muted">
                    <h5 class="card-title"> <?php  echo   get_the_author( );echo ' (' . get_the_author_meta( 'nickname'  ) . ')'?></h5>
                    <p class="card-text"><a calss="list-group-item list-group-item-action" href="<?php echo   get_the_author_meta( 'user_url', $author_id );?>">Web page</a>
                    <p class="card-text"><?php echo   get_the_author_meta( 'email', $author_id );?></p>
                    <p class="card-text"><?php echo   get_the_author_meta( 'description');?></p>
                    <p class="card-text"><small class="text-muted"></small></p>
                  </div>
                </div>
      </div>

          <div class="row  justify-content-md-center notes text-center ">
                  <div class="col-md-2">
                  <h4>Posts</h4>
                  <hr>
                  <h5><?php echo count_user_posts( get_the_author_meta( 'ID' ));?></h5>
                </div>

                <div class="col-md-2">
                  <h4>Comments</h4>
                  <hr>
                  <h5>
                    <?php 
                    $comm_arg = array(
                      'user_id' => get_the_author_meta( 'ID' ),
                      'count'    => true
                    );
                   echo  get_comments($comm_arg);?></h5>
                </div>


                <div class="col-md-2">
                  <h4>Actives</h4>
                  <hr>
                  <h5>22</h5>
                </div>

                <div class="col-md-2">
                  <h4>Ads</h4>
                  <hr>
                <h5>3</h5>
                </div>
          </div>
    </div> 
      
   <?php //Qurey post per users*******
    $the_post_num =5;
  
      $the_qurey =  my_Qurey_p($the_post_num);

     

  //connt latest post*********
         if (count_user_posts( get_the_author_meta( 'ID' )) > 4 ){ ?>

            <h4 class ="author_h4">The Latest [<?php echo $the_post_num ?>] Posts <?php get_the_author_meta('nickname')?></h4><hr>

              <?php }else{ ?>

            <h4 class ="author_h4">The Latest Posts <?php get_the_author_meta('nickname')?></h4><hr>

           <?php } //end if connt last posts******

           if ($the_qurey-> have_posts()){    //if condition fech post

                while ($the_qurey-> have_posts()): $the_qurey->the_post();

                ?>

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
                                               
                                              <!-- the contant -->
                                                <div class="post-content">
                                                <p class="card-text "><?php
                                               echo the_excerpt(); ?></p> 
                                                </div>
                               </div>
                         </div> 
                  <!-- the post -->
            <?php 
            
           
          endwhile;
      
       

            }else{
              echo '<H5 class="text-center">Not Post For Auther </H5>';
            } //end if 
            wp_reset_query();
            ?>
<br>
<br>
     <?php //Qurey comment  per users*******

     //connt latest comments *********

     if (count_user_posts( get_the_author_meta( 'ID' )) > 4 ){ ?>

      <h4 class ="author_h4">The Latest [<?php echo $the_post_num ?>] comments <?php get_the_author_meta('nickname')?></h4><hr>

        <?php }else{ ?>

      <h4 class ="author_h4">The Latest comments <?php get_the_author_meta('nickname')?></h4><hr>

     <?php } 
    $the_comment_num =5;

      $args = array(
          'user_id' =>get_the_author_meta( 'ID' ) ,
          'status'  => 'approve',
          'number'  => $the_comment_num,
          'post_status' =>'publish',
          'post_type' => 'post',
      );

      $comments = get_comments( $args );
      
      foreach ( $comments as $comment ) :
        ?> 
         <div class="row post_author">
                       
                      <div  class =" col-lg-12">
                                    <a href="<?php echo  get_permalink($comment->comment_post_id );?>">
                                      <?php echo get_the_title( $comment->comment_post_ID);?> 
                                     </a>
                                      <!-- the date & comment -->
                                      <br>
                                      <span class="card-text"> <small class="text-muted"><i class="fa fa-calendar" ></i> <?php echo $comment->comment_date;?></small></span>  
                                      
                                        <div class="post-content">
                                        <p class="card-text ">  <?php echo   $comment->comment_content  ;?></p> 
                                        </div>
                       </div>
                 </div>
        <?php
          
      endforeach;



    ?>  
</div>
<?php get_footer();?>