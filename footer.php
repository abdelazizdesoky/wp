
<div class ="footer ">
            <div class='container'> 
                <div class ="row">
                    <div class ="col-md-6">
                        <?php get_sidebar();?>
                        </div>
                        <div class ="col-md-6">
                       <h4><?php bloginfo( "name" );?></h4> 
                        <h5><?php bloginfo("description");?></h5>
                        <hr style="background-color:#fff;">
                        <p>This address is used for admin purposes. If you change this, we will send you an email at your new address to confirm it. The new address will not </p>
                        <p><?php bloginfo("admin_email");?></p>

                        </div>
                    </div> 


                   
        </div>
                     
</div>
<div class ="end-footer text-center">
                            Copyright &copy; 2021 <?php bloginfo( "name" );?>
                     </div>


<?php wp_footer(  )?>
</body>
</html>