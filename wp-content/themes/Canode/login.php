<?php 
/*
  Template Name:Login and registration

*/

?>
<?php $url=$_SERVER['REQUEST_URI'];
$parse_url=parse_url($url);
parse_str($parse_url['query'],$output);
$_REQUEST+=$output;
?>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <!-- <link rel="shortcut icon" href="../favicon.ico">  -->
        <link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/demo.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/style2.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/animate-custom.css" type="text/css" media="screen, projection" />
    </head>
        <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="<?php echo site_url(); ?>">
                    <strong>&laquo; Go to Site </strong>
                </a>
                
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <!-- <span>with HTML5 and CSS3</span> -->
                <h1>Login and Registration </h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toforget"></a>
                    <div id="wrapper">

              <?php if(!$_REQUEST['action']) { ?>
                        <div id="login" class="animate form">
                            <form  action="<?php echo $_SERVER['REQUEST_URI']; ?>" autocomplete="on" method="GET"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
    								<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
    								<label for="loginkeeping">Keep me logged in</label>
    							</p>
                                <?php  
                                    if($_REQUEST['a']==1){
                                   
                                        ?>
                                Please Enter Correct email id and Password. <a href="<?php echo site_url('login/?action=lostpassword') ?> "> Lost your password ?</a>
                                        <?php
                                                                   // }
                                } ?>
                                
                                <p class="login button"> 
                                    <input type="submit" name="submit" value="Login" /> 
    						              	</p>
                                <p class="change_link">
    					                 			Not a member yet ?
    					                 			<a href="#toregister" class="to_register">Join us</a>
    					               		</p>
                            </form>
                        </div>                    
                        <div id="register" class="animate form">
                            <form action="http://localhost/bapudhammotihari/login/#toregister" method="post" autocomplete="on" > 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									               <p><input type="submit" name="submit" id="submit" value="Sign up" /></p>
							                 	</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
			  <?php } ?>
              <?php if($_REQUEST['action'] && 'lostpassword'==$_REQUEST['action']) {
              ?>
                        <div id="login">                          
                            <form method="post" action="<?php echo site_url('login/?action=lostpassword&value=tg_pwd_reset') ?>" autocomplete="on" class="wp-user-form">
                                <h1>Forget Password</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="user_login" name="user_login" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>   
                          <?php if($_REQUEST['value'] && 'emailerror'==$_REQUEST['value']){  ?>                  
                                  Email id is invalied.
                          <?php } ?>
                          <?php if($_REQUEST['value'] && 'usernameerror'==$_REQUEST['value']){  ?>                  
                                   User Name is invalied.
                          <?php } ?>
                          <?php if($_REQUEST['value'] && 'emailfail'==$_REQUEST['value']){  ?>                  
                                    Email failed to send for some unknown reason.
                          <?php } ?>
                          <?php if($_REQUEST['value'] && 'emailsuccess'==$_REQUEST['value']){  ?>                  
                                    We have just sent you an email with Password reset instructions.
                          <?php } ?>
                               <p class="login button"> 
                                    <input type="submit" name="user-submit" value="<?php _e('Reset my password'); ?>" /> 
                                </p>
                                <p class="change_link">
                                    Not a member yet ?
                                    <a href="http://localhost/bapudhammotihari/login/#toregister" class="to_register">Join us</a>
                                </p>
                            </form>
                        </div>     
                           <?php
                    }

                 if (!$user_ID) { //block logged in users

                    if(isset($_REQUEST['key']) && $_REQUEST['action'] == 'reset_pwd') {
                        $reset_key = $_REQUEST['key'];
                        $user_login = $_REQUEST['login'];
                        $user_data = $wpdb->get_row($wpdb->prepare("SELECT ID, user_login, user_email FROM $wpdb->users WHERE user_activation_key = %s AND user_login = %s", $reset_key, $user_login));
                    // -reset password form-------
                        if(!empty($reset_key) && !empty($user_data)) {
                        ?>
                            <div id="login" class="animate form">
                                <form method="post" id="adduser" autocomplete="on" action="<?php echo site_url('login/?action=change_pwd&userid='.$user_data->ID);?>">
                                    <h1>Reset Password</h1> 
                                    <p> 
                                        <label for="password" class="uname" data-icon="u" > Password </label>
                                        <input class="text-input" name="pass1" type="password" id="pass1" required="required" placeholder="eg. X8df!90EO" />
                                    </p>
                                    <p> 
                                        <label for="retypepassword" class="youpasswd" data-icon="p"> Retype password </label>                               
                                        <input class="text-input" name="pass2" type="password" id="pass2" required="required" placeholder="eg. X8df!90EO" />
                                    </p>
                                    <p class="login button"> 
                                        <?php echo $referer; ?>
                                        <input name="updateuser" type="submit" id="updateuser" class="submit button" value="change password";  />
                                    </p>
                                    <p class="change_link">
                                        Not a member yet ?
                                        <a href="#toregister" class="to_register">Join us</a>
                                    </p>
                                </form>
                            </div>
                        <?php
                        } 
                        else exit('Not a Valid Key.');
                    }
                 }
                else exit("You are already Login in this site.Please Logout first then reclick");
                //to change password action

                if (!empty( $_REQUEST['action'] ) && $_REQUEST['action'] == 'change_pwd' ) {
            /* Change user password. */
                    if ( !empty($_REQUEST['pass1'] ) && !empty( $_REQUEST['pass2'] ) ) {
                        if ( $_REQUEST['pass1'] == $_REQUEST['pass2'] ) {
                            wp_update_user( array( 'ID' => $_REQUEST['userid'], 'user_pass' => esc_attr( $_REQUEST['pass1'] ) ) );
                            echo 'Your password has been Successfull change.  <a href="'.site_url().'/login">Click here for Login</a>';
                        }
                        else
                            echo 'The passwords you entered do not match.';
                    }
                }
                ?>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
<?php 
    if($_REQUEST['submit']=='Login') {
       echo ":";
         $username=$_REQUEST['username'];
         $password=$_REQUEST['password'];
        if(!empty($username) && !empty($password)) {
            $creds = array();
            $creds['user_login'] = $username;
            $creds['user_password'] = $password;
            $creds['remember'] = true;
            $user = wp_signon( $creds, false );
            if ( is_wp_error($user) ){

                wp_redirect(site_url('login/?a=1'));
                  }
            else{
              if(isset($_REQUEST['redirect_to'])){
                    wp_redirect($_REQUEST['redirect_to']);
              }
              else{
                wp_redirect(home_url());
              } 
            }   
        }
        else {
        ?>
            <div style="float:left">
            <p style="padding: 5px; border: 1px solid #e6db55; background-color: #ffffe0; color: #333;">
              please enter user name and password.
            </p>
          </div>
          <?php
        }
    }
?>
<!-- - - - - mail for reset password - - - -  -->
<?php
if($_REQUEST['value'] == 'tg_pwd_reset'){
    if(empty($_REQUEST['user_login'])) {
      echo "<div class='error'>Please enter your Username or E-mail address</div>";
      exit();
    }
    $user_login = $wpdb->escape(trim($_REQUEST['user_login']));
    if ( strpos($user_login, '@') ) {
        $user_data = get_user_by_email($user_login);
        if(empty($user_data) || $user_data->caps[administrator] == 1) {
        //delete the condition $user_data->caps[administrator] == 1, if you want to allow password reset for admins also
            wp_redirect(site_url('login/?action=lostpassword&value=emailerror'));
        }
    }
    else {
      $user_data = get_userdatabylogin($user_login);
      if(empty($user_data) || $user_data->caps[administrator] == 1) { //delete the condition $user_data->caps[administrator] == 1, if you want to allow password reset for admins also
         wp_redirect(site_url('login/?action=lostpassword&value=usernameerror'));
     }
    }
    if(!empty($user_data) ){
     // redefining user_login ensures we return the right case in the email
      $user_login = $user_data->user_login;
      $user_email = $user_data->user_email;
      $key = $wpdb->get_var("SELECT user_activation_key FROM $wpdb->users WHERE user_login = %s", $user_login);
      if(empty($key)) {
      $key = wp_generate_password(20, false);
      $a=$wpdb->update($wpdb->users, array('user_activation_key' => $key), array('user_login' => $user_login)); 
    }
    
    //mailing reset details to the user
    $message .= get_option('siteurl') . "\r\n\r\n";
    $message .= sprintf(__('Username: %s'), $user_login) . "\r\n\r\n";
    $message .= __('If this was a mistake, just ignore this email and nothing will happen.') . "\r\n\r\n";
    $message .= __('To reset your password, visit the following address:') . "\r\n\r\n";
    $message .= tg_validate_url() . "action=reset_pwd&key=$key&login=" . rawurlencode($user_login) . "\r\n";
    
    if ( $message && !wp_mail($user_email, 'Password Reset Request', $message)) {
        wp_redirect(site_url('login/?action=lostpassword&value=emailfail'));    
    }
    else {
           wp_redirect(site_url('login/?action=lostpassword&value=emailsuccess'));
    }
  }

}
function tg_validate_url() {
    
    global $post;
    $page_url = esc_url(get_permalink( $post->ID ));
    $urlget = strpos($page_url, "?");
    if ($urlget === false) {
      $concate = "?";
    }
    else {
      $concate = "&";
    }
    return $page_url.$concate;
}  
?>
 <!-- for change password  -->
 <?php
 if ($_REQUEST['action']  && $_REQUEST['action'] == 'change_pwd' ) {
    echo "string";
 /* Change user password. */
    if ( !empty($_REQUEST['pass1'] ) && !empty( $_REQUEST['pass2'] ) ) {
         if ( $_REQUEST['pass1'] == $_REQUEST['pass2'] ) {
           wp_update_user( array( 'ID' => $_REQUEST['userid'], 'user_pass' => esc_attr( $_REQUEST['pass1'] ) ) );
           echo 'Your password has been Successfull change.  <a href="'.site_url().'/login">Click here for Login</a>';
     }
     else
       echo 'The passwords you entered do not match.';
      }

 }
?>
<!-- registration -->
<?php
  // Registration routine
  
  // if($_REQUEST['submit'] == 'Sign up') { // has the form been submitted?
    
  //   // You need to sanitize data here
          
  //   $password = $_POST['password'];
  //   $username = $_POST['username'];
  //   $email = $_POST['email'];  
  //   echo $password;
  //   echo $username;
  //   echo $email;   
  
    // Create a new WordPress user
    
  // wp_insert_user(array(
  //         'user_pass' => $password,
  //         'user_login'=> $username,
  //         'user_email' => $email,
  //         'role' => 'subscriber')
  //   );
          
  //   $login = wp_login_url(); // Login page URL
  //   wp_redirect($login);  // Redirect the user
  //   exit();


// }
?>