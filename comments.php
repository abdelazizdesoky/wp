<?php
echo '<hr> <h3 class="comment-num">';
 comments_number(  );

 ?>
 </h3>
 <div class="commentpage">
<?php
if (comments_open( )){

        $args = array(
            
            'max_depth'         => '3',
            'style'             => 'ul',
            'callback'          => null,
            'end-callback'      => null,
            'type'              => 'all',
            'page'              => '',
            'per_page'          => '',
            'avatar_size'       => 32,
            
        );
 wp_list_comments($args );
?>
<div class ="row comment-r">
    <div class ="col-lg-6  col-ml-6">

<?php
$comments_args = array(

'fields'         => array(
            'author'     => ' <label for="exampleFormControlInput1">Name *</label><input  class="form-control"  id="author" name="author" placeholder="Your Name">',
            'email'      =>'<label for="exampleFormControlInput1">Email * </label> <input  class="form-control" id="email" name="email"  type="text" placeholder="name@example.com"><small id="emailHelp" class="form-text text-muted" >We\'ll never share your email with anyone else.</small>',
            'url'        =>'<label for="exampleFormControlInput1">Website </label><input id="url" name="url" class="form-control">'
              ),
'comment_field'          => '<label for="exampleFormControlInput1">Comment * </label><textarea id="comment" name="comment"  class="form-control"  rows="3" aria-required="true"></textarea>',
'class_form'             =>'form-group',
'class_submit'           =>'btn btn-primary',
'label_submit'           =>' Send ',
'comment_notes_before'   => '',
//'comment_notes_after'    => '',
);
comment_form( $comments_args );

 }else{
    echo "<h4> no cooment</h4>";
}
?>

</div>
</div>  
</div>