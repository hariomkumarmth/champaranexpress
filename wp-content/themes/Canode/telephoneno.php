<?php
/*
Template Name: mobilenumbertrace  */ 
?>
<?php global $theme; get_header(); ?>

    <div id="main">
    
        <?php $theme->hook('main_before'); ?>

        <div id="content">
            
            <?php $theme->hook('content_before'); ?>
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                    /**
                     * Find the post formatting for the pages in the post-page.php file
                     */
                    get_template_part('post', 'page');


                    endwhile;
				endif; 
                    ?>
        <div class="pincode" style="margin-top:100px;">
        	<form name="mobiletrace" id="mobiletrace" action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">     			
    			<label ><center><strong>Enter the 10 degit Mobile Number </strong></center></label>
				<div style="margin-top:10px;">
				<span style=" display: inline-block; width:70px;">Mobile Number : </span> 
				<input  class = "validateNumber" id="txtmobilenumber" name="txtmobilenumber" size="20" type="text" value="" required="true" maxlength="10" data-dojo-type="dijit/form/ValidationTextBox"
	                data-dojo-props="regExp:'\\d{10}',
	                invalidMessage:'Invalid Number'">
				<input type="submit"  class="css3button" name="submit" value="Trace"></td>
			</form>
		</div>
</div>
<div class="pincode" style="margin-top:10px;">
            <div style="margin-top: 8px;">
 <?php
 	if($_REQUEST['submit'] && 'Trace'==$_REQUEST['submit']){
        $mobilenumber=$_REQUEST['txtmobilenumber'];
        if (!empty($mobilenumber)) {
        	   mobilenumbertrace($mobilenumber);
        }

        else{ ?>
            <div class="error">
               <label ><center>Please Enter a Number </center></label> 
            </div>

            <?php
        }
        ?>
         </div>  
        <div> 
        <?php
        	
    }
?> 
    <div class ="comment" style="margin-top: 10px;">
    <?php 
        if(comments_open( get_the_ID() ))  {
            comments_template('', true); 
        }
    ?>
    </div>
		 <?php $theme->hook('content_after'); ?>
        
        </div><!-- #content -->
    
        <?php get_sidebars(); ?>
        
        <?php $theme->hook('main_after'); ?>
        
    </div><!-- #main -->
    
<?php get_footer(); ?>

<?php 
function mobilenumbertrace($mobileNumber){
    $code=substr($_REQUEST['txtmobilenumber'],0,4);
    global $wpdb;
    $mobileresult=$wpdb->get_row("SELECT * FROM mobileNumber where Series=".$code);
    if($mobileresult){
    ?>
        
            <table class="table table-bordered table-hover">
               <tr>
                    <th>Mobile  Number</th><td><?php echo $mobileNumber; ?></td>
                </tr>
                <tr>
                    <th>Service Provider Name</th><td><?php echo $mobileresult->Operators; ?></td>
                </tr>
                <tr>
                    <th>State</th><td><?php echo $mobileresult->Telecom_Circle; ?></td>
                </tr>
                <tr>
                    <th> Service Type</th><td><?php echo $mobileresult->GSM_CDMA; ?></td>
                </tr>
               
            </table>
          
    <?php
    }
    else
    { ?>
        <div class="error" >
           <label ><center>This number is not in service </center></label> 
        </div>

    <?php
    }
}
?>


					
