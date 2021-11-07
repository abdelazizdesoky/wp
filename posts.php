<br>

<br>
<div class='container'>
 <div class=" row"> 
    
            <?php
        if (have_posts()){    //if condition
                while (have_posts()){
                    the_post();?>
               <!-- the post -->
               <div class=" col-lg-6 col-sm-12 ">
                   <div class="posts p-3 shadow-lg bg-white">
                            <div class ="text-center">
                            <?php if (has_post_thumbnail()) {  ?>
                            <img  class ="img-fluid  img-post shadow-lg bg-white rounded-lg"  src="<?php the_post_thumbnail_url(  )?>" class="card-img-top" alt="#"> 
                            <?php } ?>
                            </div>
                            <br> 
                                <a href="<?php the_permalink( );?>">
                                    <h5 class="card-title "> 
                                        <?php the_title();?> 
                                    </h5> 
                                </a>
                                <!-- the date & comment -->
                                <span class="card-text"><small class="text-muted"><i class="fa fa-pen"></i>  By <?php the_author_posts_link( ) ;?></small></span>
                                <span class="card-text"> <small class="text-muted"><i class="fa fa-calendar" ></i> <?php the_date();?></small></span>  
                                <span class="card-text"><small class="text-muted"><i class="fa fa-comment"></i>  <?php comments_popup_link(  );?></small></span>  
                                <!-- the contant -->
                                <div class="post-content">
                                <p class="card-text "><?php  the_excerpt() ;?></p> 
                                 </div>
                                 <!-- the author -->
                               
                                <br>
                                <span class="card-text"><small class="text-muted"><i class="fa fa-list-alt"></i>  <?php the_category(',') ;?></small></span>
                                <br>
                                <span class="card-text"><small class="text-muted"><i class="fa fa-tags"></i>  <?php the_tags('Tag: ' , ' , ');?></small></span> 
                               
                     </div>  
                 </div>
            <?php  } }//end if ?>   

    </div>
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
 </div> 



 <!-- tree info page static -->

<div class="infocom" >
                <div class="backifo">
                        <div class="container">
                            <div class=" row content ">
                                    <div class="col-md-6">
                                   <br>
                                    <h2>Subscribe Us</h2>
                             
                                <label for="exampleInputEmail1">Email address</label>
                                <input  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                               <button type="submit" class="btn btn-primary">Submit</button>
                           
                            </div>
                         <div class="col-md-6 text-center">
                         <h2 style="font-weight:700;font-size:18px;line-height:27px;padding-top: 50px;">Alarabia Group</h2>
                                            <em style="font-weight:600;font-size:17px;">Home Applections &amp; House Wear</em>
                                            <p style="font-size:16px;line-height:26px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus.</p>
                          </div>   
                                </div>   
                            </div>
                    </div>
</div>

 


<div style="padding-top: 50px; padding-bottom: 50px; background-color:#f4f4f4;" >
            <div class="container">
                    <div class="row text-center">
                         
                                <div class="col-md-6" style="margin: 25px 0;">  
                               <div class="content">
                                     <i class="fa fa-chart-pie fa-10x text-warning"></i> <br><br>
                                            <h2 style="font-weight:700;font-size:18px;line-height:27px;">MONEY BACK GUARANTEE</h2>
                                            <em style="font-weight:600;font-size:17px;color:#21293c;">Safe &amp; Fast</em>
                                            <p style="font-size:16px;line-height:26px;color:#7b858a;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus.</p>
                                        </div>
                                </div>
                                <div class="col-md-6" style="margin: 25px 0;">
                                        <div class="content">
                                        <i class="fa fa-chart-line fa-10x text-success"></i> <br> <br>
                                            <h2 style="font-weight:700;font-size:18px;line-height:27px;">More Success </h2>
                                            <em style="font-weight:600;font-size:17px;color:#21293c;">Need Assistence?</em>
                                            <p style="font-size:16px;line-height:26px;color:#7b858a;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus.</p>
                                        </div>
                                </div>
                        </div>
            </div>

            </div>
            <div style="padding-top: 50px; padding-bottom: 50px; background-color:#e6e6e6;" >
            <div class="container">
                    <div class="row brand text-center">
                         
                              >
                                <div class="col-md-12" style="margin: 25px 0;">
                                   
                                        <div class="content">
                                            <h2 style="font-weight:700;font-size:25px;line-height:27px;">OUR CUSTOMER</h2>
                                           <p style="font-size:16px;line-height:26px;color:#7b858a;">
                                           <i class="fab fa-wordpress"></i>
                                        <i class="fab fa-dhl text-dark"></i>
                                        <i class="fab fa-amazon text-warning"></i>
                                        <i class="fab fa-fedex text-danger"></i>
                                        <i class="fab fa-npm text-success"></i>
                                        
                                        
                                        <i class="fab fa-eBay"></i>

                                        
                                        </p>
                                        </div>
                                </div>
                        </div>
            </div>

            </div>
