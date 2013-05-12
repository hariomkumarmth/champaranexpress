<?php

/*
 Template Name:Gallery
 */

 get_header(); 
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>India STD Codes, India Area Codes, Search India Telephone Codes</title>
<link rel="canonical" href="http://localhost/bapudhammotihari/gallery/india-std-codes.html"/>
<meta name="description" content="Veethi provides India STD codes search, STD code finder in India and Telephone STD Code lists and directory in India."/>
<meta name="keywords" content="India std codes search, std code finder India, India telephone std code lists, India telephone std code directory"/>
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<!--
STYLE SHEETS INCLUDES
-->
<!-- Common Style-->
<!-- <link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/article.css" rel="stylesheet" type="text/css" /> -->
<!-- auto complete Style-->
<link rel="stylesheet" type="text/css" href="../css/jquery.autocomplete.css" />
<!-- modalbox Style-->
<link rel="stylesheet" type="text/css" href="../css/modalbox_style.css" />
<!--This page styles--> 
<link href="../css/ylpg_style.css" rel="stylesheet" type="text/css" />
<!--This place styles-->  
<link href="../css/place.css" rel="stylesheet" type="text/css" />
<style> 

 
</style>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ajax_stdcode.js"></script>
<!-- <script type="text/javascript" src="../js/ajax_stdcode.js" ></script> -->
</head>
<body>
<div class="wrapper">

  <div class="mainPan">
  
 <!--JAVA SCRIPT INCLUDES-->
<!-- common script -->
<div class="twoColumn currentPage">
<div id="header">
<div class="contenth">
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<!-- <script type="text/javascript" src="http://localhost/bapudhammotihari/js/script.js"></script> -->
<!-- city directory ajax script -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ajax_city_directory.js"></script>
<!-- <script type="text/javascript" src="http://localhost/bapudhammotihari/js/ajax_city_directory.js"></script> -->
<!-- jquery common script -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery/jquery.js"></script>
<!-- <script type="text/javascript" src="http://localhost/bapudhammotihari/js/jquery/jquery.js"></script> -->
<!-- auto complete script -->
<!-- <script type='text/javascript' src='http://localhost/bapudhammotihari/js/jquery/jquery.autocomplete.js'></script> -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery/jquery.autocomplete.js"></script>
<!-- tooltip script -->
<!-- <script type="text/javascript" src="http://localhost/bapudhammotihari/js/tooltip-min.js"></script> -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/tooltip-min.js"></script>
<!--
JAVA SCRIPTS
-->

<!-- auto complete script -->
<script type="text/javascript" language="javascript">
<!--
jQuery().ready(function() {
  function log(event, data, formatted) {
    jQuery("<li>").html( !data ? "No match!" : "Selected: " + formatted);
  }
  function formatItem(row) {
    return row[0] + " (<strong>id: " + row[1] + "<\/strong>)";
  }
  function formatResult(row) {
    return row[0].replace(/(<.+?>)/gi, '');
  }
  jQuery("#txtSearch").autocomplete("autocomplete_search.php", {
    width: 450,
    selectFirst: false
    //alert('hi');
  });
  jQuery("#txtSearch").result(function(event, data, formatted) {
    if (data)
    var url='gallery/india_results-'+escape(data[1])+'.htm';
    window.open(url,'_self');
  });
  //for new home page====================================================================================================
  jQuery("#txtSearch_new").autocomplete("autocomplete_search.php", {
    width: 450,
    selectFirst: false
  });
  jQuery("#txtSearch_new").result(function(event, data, formatted) {
    if (data)
    var url='gallery/india_results-'+escape(data[1])+'.htm';
    window.open(url,'_self');
  });
  jQuery("#txtplacecity_new").autocomplete("gallery/autocomplete_placecity.php", {
    width: 450,
    selectFirst: false
  });
  jQuery("#txtplacecity_new").result(function(event, data, formatted) {
    
    if (data)
    { if(data[4] == 'city')
      {
        var url='gallery/'+data[3]+'-'+data[2]+'-place-'+data[1]+'.htm';
        window.open(url,'_self');
      }
      else
      {
        var url='gallery/'+data[3]+'-'+data[2]+'-locality-'+data[1]+'.htm';
        window.open(url,'_self');
      }
    }
  });
  jQuery("#txtpeople_new").autocomplete("india-people/autocomplete_people.php", {
    width: 450,
    selectFirst: false
  });
  jQuery("#txtpeople_new").result(function(event, data, formatted) {
    if (data)
    var url='india-people/'+data[3]+'-profile-'+data[1]+'-'+data[2]+'.htm';
    window.open(url,'_self');
  });
//for new home end ==========================================================================================================
  //for yellowpages
  jQuery("#keyword").autocomplete("/gallery/autocomplete_search_new.php", {
    width: 380,
    selectFirst: false
    //alert('hi');
  });
  jQuery("#keyword").result(function(event, data, formatted) {
    
    if (data)
    { if(data[4] == 'l')
      {
        var url='/gallery/'+data[1]+'-'+data[2]+'-details-'+data[3]+'.htm';
        window.open(url,'_self');
      }
      else
      {
        var url='/gallery/'+'india_results-'+escape(data[3])+'.htm';
        window.open(url,'_self');
      }
    }
  });
  jQuery("#placekeyword").autocomplete("/gallery/autocomplete_search_new.php?q1=", {
    width: 380,
    selectFirst: false
    //alert('hi');
  });
  jQuery("#placekeyword").result(function(event, data, formatted) {
    if (data)
    { if(data[4] == 'l')
      {
        var url='/gallery/'+data[1]+'-'+data[2]+'-details-'+data[3]+'.htm';
        window.open(url,'_self');
      }
      else
      {
        var url='/'+data[1]+'-'+escape(data[3])+'-results/'+data[2];
        window.open(url,'_self');
      }
    }
  });
  jQuery("#txtplace").autocomplete("autocomplete_place.php", {
    width: 450,
    selectFirst: false
  });
  jQuery("#txtplace").result(function(event, data, formatted) {
    if (data)
    if(data[2] == 'd')
    {
    var url=data[3]+'-overview-'+data[1]+'.htm';
    }
  else
    {
    var url=data[3]+'-travel_nearby-'+data[4]+'&nearby_id-'+data[1]+'.htm';
    }
    window.open(url,'_self');
  });
  jQuery("#txtplacecity").autocomplete("/gallery/autocomplete_placecity.php", {
    width: 450,
    selectFirst: false
  });
  jQuery("#txtplacecity").result(function(event, data, formatted) {
    if (data)
    { if(data[4] == 'city')
      {
        var url='/gallery/'+data[3]+'-'+data[2]+'-place-'+data[1]+'.htm';
        window.open(url,'_self');
      }
      else
      {
        var url='/gallery/'+data[3]+'-'+data[2]+'-locality-'+data[1]+'.htm';
        window.open(url,'_self');
      }
    }
    
  });
  jQuery("#txtplacevideo").autocomplete("/gallery/autocomplete_placevideo.php", {
    width: 450,
    selectFirst: false
  });
  jQuery("#txtplacevideo").result(function(event, data, formatted) {
    if (data)
    var url='/gallery/'+data[3]+'-'+data[2]+'-video_view-'+data[1]+'.htm';
    window.open(url,'_self');
  });
  jQuery("#txtschool").autocomplete("autocomplete_school.php", {
    width: 400,
    selectFirst: false
  });
  jQuery("#txtschool").result(function(event, data, formatted) {
    if (data)
    var url=data[2]+'-detail-'+data[1]+'.htm';
    window.open(url,'_self');
  });
  //txtcollege
  jQuery("#txtcollege").autocomplete("autocomplete_college.php", {
    width: 400,
    selectFirst: false
  });
  jQuery("#txtcollege").result(function(event, data, formatted) {
    if (data)
    var url=data[2]+'-detail-'+data[1]+'.htm';
    window.open(url,'_self');
  });
  jQuery("#txtplacephoto").autocomplete("/gallery/autocomplete_placephoto.php", {
    width: 450,
    selectFirst: false
  });
  jQuery("#txtplacephoto").result(function(event, data, formatted) {
    if (data)
    var url='/gallery/'+data[3]+'-'+data[2]+'-photo_view-'+data[1]+'.htm';
    window.open(url,'_self');
  });
jQuery("#txtplacekey").autocomplete("autocomplete_placekey.php", {
    width: 450,
    selectFirst: false
  });
  jQuery("#txtplacekey").result(function(event, data, formatted) {
    if (data)
    var url='place_gresult-'+data[1]+'-'+escape(data[0])+'.htm';
    window.open(url,'_self');
  });
jQuery("#txtpeople").autocomplete("autocomplete_people.php", {
    width: 450,
    selectFirst: false
  });
  jQuery("#txtpeople").result(function(event, data, formatted) {
    if (data)
    var url=data[0]+'-profile-'+data[1]+'-'+data[2]+'.htm';
    window.open(url,'_self');
      //jQuery(this).parent().next().find("input").val(data[1]);
  });
  jQuery("#fromAddress").autocomplete("autocomplete_place.php", {
  width: 150,
    selectFirst: false
  });
  jQuery("#fromAddress").result(function(event, data, formatted) {
    
  });
  jQuery("#toAddress").autocomplete("autocomplete_place.php", {
    width: 150,
    selectFirst: false
  });
  jQuery("#toAddress").result(function(event, data, formatted) {
    
  });
  jQuery("#txtprocity").autocomplete("autocomplete_procity.php", {
    width: 330,
    scrollHeight: 400, 
    selectFirst: false
  });
  jQuery("#txtprocity").result(function(event, data, formatted) {
    if (data)
    {if(data[1] != 0)
      {
      var url=data[3]+'-property-'+data[1]+'.htm';
      window.open(url,'_self');
      }
      else
      {
      var url="city_result.html?txt="+data[2];
      window.open(url,'_self');
      }
    }
      
  });
  jQuery("#txtprocity1").autocomplete("autocomplete_procity.php", {
    width: 335,
    scrollHeight: 400, 
    selectFirst: false
  });
  jQuery("#txtprocity1").result(function(event, data, formatted) {
    if (data)
    {if(data[1] != 0)
      {
      var url=data[3]+'-property-'+data[1]+'.htm';
      window.open(url,'_self');
      }
      else
      {
      var url="city_result.html?txt="+data[2];
      window.open(url,'_self');
      }
    }
      
  });
  //for job city search txtjobcity
  jQuery("#txtjobcity").autocomplete("autocomplete_jobcity.php", {
    width: 330,
    scrollHeight: 400, 
    selectFirst: false
  });
  jQuery("#txtjobcity").result(function(event, data, formatted) {
    if (data)
      var url=data[2]+'-jobs-All-'+data[1]+'.htm';
      window.open(url,'_self');
      
  });
  jQuery("#txtjobcity1").autocomplete("autocomplete_jobcity.php", {
    width: 260,
    scrollHeight: 400, 
    selectFirst: false
  });
  jQuery("#txtjobcity1").result(function(event, data, formatted) {
    if (data)
      var url=data[2]+'-jobs-All-'+data[1]+'.htm';
      window.open(url,'_self');
      
  });
  jQuery("#clear").click(function() {
    jQuery(":input").unautocomplete();
  });
});
// -->
</script>
<!--change city popup scripts-->
<script type="text/javascript" language="javascript">
jQuery(function()
{
jQuery("#click_here").click(function(event) {
event.preventDefault();
  if(document.getElementById("area_select")){
    if(document.getElementById("area_select").style.visibility == "visible"){
    document.getElementById("area_select").style.visibility="hidden";
  }else{
      document.getElementById("area_select").style.visibility="visible";
    }
  }
jQuery("#changeCityPopup").slideToggle();
jQuery("#selectCityPopup").slideToggle();
});
});
</script>
<!--acordian menu script -->
<script type="text/javascript" language="javascript">
    // When the document loads do everything inside here ...
    jQuery(document).ready(function(){
    // When a link is clicked
    jQuery("a.tab").click(function () {
      // switch all tabs off
      jQuery(".active").removeClass("active");
      // switch this tab on
      jQuery(this).addClass("active");
      // slide all content up
      jQuery(".content").slideUp();
      // slide this content up
      var content_show = jQuery(this).attr("title");
      jQuery("#"+content_show).slideDown();
    });
    });
</script>
<!-- Modal dialog box script-->
<script type="text/javascript" language="javascript">
jQuery(document).ready(function() { 
  //select all the a tag with name equal to modal
  jQuery('a[name=modal]').click(function(e) {
    //Cancel the link behavior
    e.preventDefault();
    //Get the A tag
    var id = jQuery(this).attr('href');
    var title = jQuery(this).attr('title');
    if(title!=""){
      if(id=="#sponsor")
      {
    document.getElementById('sponsorImg').src=title;
    } else if(id=="#reportAbuse"){
  document.reportabuse.review_id.value=title;
    } else{
      document.imagereportabuse.image_comment_id.value=title;
      }
    }
    //Get the screen height and width
    var maskHeight = jQuery(document).height();
    var maskWidth = jQuery(window).width();
    //Set heigth and width to mask to fill up the whole screen
    jQuery('#mask').css({'width':maskWidth,'height':maskHeight});
    jQuery('#mask').fadeIn(1000); 
    jQuery('#mask').fadeTo("slow",0.8); 
  //Get the window height and width
  //code here by lina to set popup window position 
    var winH = jQuery(window).height();
    var headW=jQuery('#content_container').offset().left;
    var winW = jQuery(window).width();
  //Set the popup window to center
    
    jQuery(id).css('top',  (winH - 132)/2-jQuery(id).height()/2);
    jQuery(id).css('left', (winW-( 2 *headW))/2-jQuery(id).width()/2 );
// ended by lina
    //transition effect
    jQuery(id).fadeIn(2000); 
   jQuery('html,body').animate({scrollTop: 0}, 1000);
  });
  //if close button is clicked
  jQuery('.window .close').click(function (e) {
    //Cancel the link behavior
    e.preventDefault();
    jQuery('#mask').hide();
    jQuery('.window').hide();
  });   
  //if mask is clicked
  jQuery('#mask').click(function () {
    jQuery(this).hide();
    jQuery('.window').hide();
  });     
});
</script>
 <!--LOGO (BEGIN)-->
        <a href="http://localhost/bapudhammotihari" title="Discover the People, gallery and Businesses of India"><img src="http://localhost/bapudhammotihari/images/logo.jpg" alt="Veethi Logo" id="vtLogo_screen" width="205" height="75" />
 <!--LOGO (END)-->
<div style="float:right; padding-top:3px;"> Already have an account? <a href="http://localhost/bapudhammotihari/user_login.html" title="Log in India Local City Business Directory">Login</a> or <a href="http://localhost/bapudhammotihari/user_register.html" title="Register With India Local City Business Directory">Register</a></div><div style="margin-bottom:2px;float:right; height:90px; width:728px;  "><p><script type="text/javascript"><!--
google_ad_client = "ca-pub-7264437082901485";
/* Yellow Pages 728x90 */
google_ad_slot = "7089636723";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script> 
              </p></div> <p id="slogan"><span>       </span></p></div>
  <!--MAIN SITE NAVIGATION (BEGIN)-->
    <div id="mainNav_container">
       <div class="contenth mainNavContent">
           <ul class="mainNav clearfix">
       
            </ul>
        </div>
    </div>
    <!--MAIN SITE NAVIGATION (END)-->
</div>
<!--HEADER (END)--> 
<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=146595932057692&amp;xfbml=1"></script>
  <div id="content_container" class="contenth">
<div id="wrapperer"  >
<div class="breadCrumbPan"> <div class="breadCrumb"><a href="http://localhost/bapudhammotihari/">Home</a> &raquo; <a href="http://localhost/bapudhammotihari/gallery/">gallery</a> &raquo;  STD Code<div style='color:white;'>http://localhost/bapudhammotihari/gallery/india-std-codes.html</div></div></div><!--/div-->
    <div class="contentPan">
  <div rel="nofollow"> <center> <script type="text/javascript" src="http://www.moobo.net/showAds.js"></script> </center> </div>
  <div class="clear"></div><br />
    
<!--***********************************         Search boxes    ***************************************** -->
<img src='<?php bloginfo('template_directory'); ?>/images/loading.gif'>
<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" name="frmsearch" method="post" style=" autocomplete:off;" id="quickSearch" onsubmit="return cksearch_place();" enctype="application/x-www-form-urlencoded">
     <div id="quickSearch_Bar1"  style="width:950px;background-color:#f2f1f1; margin-bottom:5px;font-size:12px; padding-bottom:3px; margin-top:-6px; float:left; ">
  
   <table  border="0" align="left"  cellspacing="3" cellpadding="0" ><tr>
  
    <td width="230" align="right" style="font-size:14px; font-weight:bold;">  Search gallery in India   &nbsp;</td>
        <td><input id="txtplacecity" class="inputCity"  name="placecity" value=" Enter the place name"  size="60" onFocus="this.value='';this.style.color='#585959';" onBlur="if(this.value==''){this.value=' Enter the place name';this.style.color='#999999' }"  style=" width:400px; color:#999999"/></td>
      <td>

                 
                <input type="submit" class="submitSearch" value="Search" >
        </td><td><a href="../gallery/place_directory.html"  title="Browse gallery" style="text-decoration:none;"><div  style=" margin-left:5px;background:url(../images/search.png) no-repeat left top; text-align:left; padding-left:17px; font-size:0.8em">Find Your Place</div></a></td><td>
        <a  href="../user_login.html?return_url=..%2Fgallery%2Fadd_place.html" title="Add a Place">
   <div  style= "margin-left:8px;background:url(../images/add.png) no-repeat left center; text-align:left; padding-left:15px;font-size:0.8em">Add a Place</div></a>
        </td>
              </tr>
            </table>
       </div>     
  </form>
<br /><br /> <!-- *************************************** Search boxes end *************************************** --> 

       <div id="fulldiv">
      <div  class="adright" >
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7264437082901485";
/* Travel Guide Map 336x280, created 4/16/11 */
google_ad_slot = "6498699383";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>  
    <div class="list">
   <h1>India STD Codes Search</h1>
        <br />
        <div  style=" padding-bottom:15px;font:11px arial;">

        Now you can easily find a locality with a STD code (Subscriber Trunk Dialling) or find the STD code of a particular locality using our STD code search engine.
        </div> 
        <div class="catList">
        <div class="stdcode_top"><br />
         <p><strong>Enter the STD Code / City below</strong></p>
        </div>
      <div class="catListMid">
    <ul>
               
                    <form name="frmPincode" id="frmPincode" onsubmit="return false;" method="post">
                   
                    <span style=" display: inline-block; width:80px;">STD Code : </span> <input type="text"  style="width:200px;border-style:inset;" id="txtstdcode" name="txtstdcode"   value="" onkeydown="return isCharKey(event);"  />
                    <a class="submit"  href="javascript:void(0);"   onclick="stdcodeSearch(0);"><span>Find City </span></a>
                    <br /><br />
                    <b>(or)</b>
                    <br /><br />
                    <span  style="display: inline-block;  width:80px;">City : </span> <input type="text"  style="width:200px;border-style:inset;" id="txtcity" name="txtcity"   />
                    <a class="submit"  href="javascript:void(0);" onclick="stdcodeSearch(1);"><span> Find STD Code</span></a>
                   
                </form>
             
            
  </ul>
        <div class="clear"></div>
        </div>

        <div class="catListBottom"></div>

      </div>
      
</div>


        <div class="clear">&nbsp;</div>

     <div align="left" id="resultTitle"></div>

        <div align="center" id="result" >
        
    </div>

<table width="100%" border="0" align="center" class="pin_table"  >
              <tr>
                <td valign="top" colspan="4" style=" font-size:13px;  padding:7px; font-weight:bold; "> Std Code details for Major States in India
        </td></tr><tr><td width="10"></td>
        </tr><tr><td width="10"></td><td ><a href="andaman_and_nicobar_islands-state_std_codes-29.htm" class="std_city" >Andaman and Nicobar Islands Std Codes</a></td><td ><a href="andhra_pradesh-state_std_codes-1.htm" class="std_city" >Andhra Pradesh Std Codes</a></td><td ><a href="arunachal_pradesh-state_std_codes-2.htm" class="std_city" >Arunachal Pradesh Std Codes</a></td></tr><tr><td width="10"></td><td ><a href="assam-state_std_codes-3.htm" class="std_city" >Assam Std Codes</a></td><td ><a href="bihar-state_std_codes-4.htm" class="std_city" >Bihar Std Codes</a></td><td ><a href="chandigarh-state_std_codes-30.htm" class="std_city" >Chandigarh Std Codes</a></td></tr><tr><td width="10"></td><td ><a href="chhattisgarh-state_std_codes-5.htm" class="std_city" >Chhattisgarh Std Codes</a></td><td ><a href="dadra_and_nagar_haveli-state_std_codes-31.htm" class="std_city" >Dadra and Nagar Haveli Std Codes</a></td><td ><a href="daman_and_diu-state_std_codes-32.htm" class="std_city" >Daman and Diu Std Codes</a></td></tr><tr><td width="10"></td><td ><a href="delhi-state_std_codes-33.htm" class="std_city" >Delhi Std Codes</a></td><td ><a href="goa-state_std_codes-6.htm" class="std_city" >Goa Std Codes</a></td><td ><a href="gujarat-state_std_codes-7.htm" class="std_city" >Gujarat Std Codes</a></td></tr><tr><td width="10"></td><td ><a href="haryana-state_std_codes-8.htm" class="std_city" >Haryana Std Codes</a></td><td ><a href="himachal_pradesh-state_std_codes-9.htm" class="std_city" >Himachal Pradesh Std Codes</a></td><td ><a href="jammu_and_kashmir-state_std_codes-10.htm" class="std_city" >Jammu and Kashmir Std Codes</a></td></tr><tr><td width="10"></td><td ><a href="jharkhand-state_std_codes-11.htm" class="std_city" >Jharkhand Std Codes</a></td><td ><a href="karnataka-state_std_codes-12.htm" class="std_city" >Karnataka Std Codes</a></td><td ><a href="kerala-state_std_codes-13.htm" class="std_city" >Kerala Std Codes</a></td></tr><tr><td width="10"></td><td ><a href="lakshadweep-state_std_codes-34.htm" class="std_city" >Lakshadweep Std Codes</a></td><td ><a href="madhya_pradesh-state_std_codes-14.htm" class="std_city" >Madhya Pradesh Std Codes</a></td><td ><a href="maharashtra-state_std_codes-15.htm" class="std_city" >Maharashtra Std Codes</a></td></tr><tr><td width="10"></td><td ><a href="manipur-state_std_codes-16.htm" class="std_city" >Manipur Std Codes</a></td><td ><a href="meghalaya-state_std_codes-17.htm" class="std_city" >Meghalaya Std Codes</a></td><td ><a href="mizoram-state_std_codes-18.htm" class="std_city" >Mizoram Std Codes</a></td></tr><tr><td width="10"></td><td ><a href="nagaland-state_std_codes-19.htm" class="std_city" >Nagaland Std Codes</a></td><td ><a href="orissa-state_std_codes-20.htm" class="std_city" >Orissa Std Codes</a></td><td ><a href="puducherry-state_std_codes-35.htm" class="std_city" >Puducherry Std Codes</a></td></tr><tr><td width="10"></td><td ><a href="punjab-state_std_codes-21.htm" class="std_city" >Punjab Std Codes</a></td><td ><a href="rajasthan-state_std_codes-22.htm" class="std_city" >Rajasthan Std Codes</a></td><td ><a href="sikkim-state_std_codes-23.htm" class="std_city" >Sikkim Std Codes</a></td></tr><tr><td width="10"></td><td ><a href="tamil_nadu-state_std_codes-24.htm" class="std_city" >Tamil Nadu Std Codes</a></td><td ><a href="tripura-state_std_codes-25.htm" class="std_city" >Tripura Std Codes</a></td><td ><a href="uttar_pradesh-state_std_codes-26.htm" class="std_city" >Uttar Pradesh Std Codes</a></td></tr><tr><td width="10"></td><td ><a href="uttarakhand-state_std_codes-27.htm" class="std_city" >Uttarakhand Std Codes</a></td><td ><a href="west_bengal-state_std_codes-28.htm" class="std_city" >West Bengal Std Codes</a></td> </tr></table>
  

      </div>
</div>
<table align="center" cellpadding="8" >
  <tr>
<td>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7264437082901485";
/* CI List Top 728x90, created 2/12/11 */
google_ad_slot = "5098680783";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script> </td>

<td><script type="text/javascript"><!--
google_ad_client = "ca-pub-7264437082901485";
/* CI Top 200x90 */
google_ad_slot = "3270458679";
google_ad_width = 200;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></td>
  </tr>
</table>
<div class="clear"> </div><br />
</div></div>

      
<!-- <div class="footer">
  <meta name="go -->ogle-site-verification" content="qxouxd61xcC3Tduk7nzv6EnDDAUyu2Nh-qgOtLCnkts" />
<div id="footer">
<!-- <div>
  <p><a  href="http://localhost/bapudhammotihari" title="Home">Home</a> | <a  href="http://localhost/bapudhammotihari/about-india.html" title="About India">About India</a> | <a href="http://localhost/bapudhammotihari/india-people/" title="India People">People</a> | <a href="http://localhost/bapudhammotihari/gallery/" title="India gallery">gallery</a> | <a href="http://localhost/bapudhammotihari/gallery/india_yellowpages_list.html" title="India Yellow Pages">Yellow Pages</a> |  <a href="http://localhost/bapudhammotihari/gallery/india_photos.html" title="India Photos">India Photos</a> | <a href="http://localhost/bapudhammotihari/gallery/india_videos.html" title="India Videos">India Videos</a> |
        <a href="http://localhost/bapudhammotihari/travel/india_travel_guide.html" title="India Travel Guide">Travel Guide</a>  |  <a href="http://localhost/bapudhammotihari/forum_home.html" title="India Forum">Forum</a> |  <a href="http://localhost/bapudhammotihari/colleges-in-india/" title="Colleges in India">Colleges</a> | <a href="http://localhost/bapudhammotihari/schools-in-india/" title="Schools in India">Schools</a> | <a href="http://localhost/bapudhammotihari/news.html" title="India News">News</a> | <a href="http://localhost/bapudhammotihari/articles/" title="Indian Articles">Articles</a>  | <a href="http://localhost/bapudhammotihari/gallery/india-pin-codes.html" title="India PIN Codes">PIN Codes</a> | 
    <a href="http://localhost/bapudhammotihari/gallery/india-std-codes.html" title="India STD Codes">STD Codes</a> | <a href="http://localhost/bapudhammotihari/gallery/india_banks-ifsc-micr-codes.html" title="India Banks IFSC & MICR Codes">IFSC & MICR Codes</a> | <a href="http://localhost/bapudhammotihari/jobs/" title="Jobs in India">Jobs in India</a> | <a href="http://localhost/bapudhammotihari/realestate/" title="India Property">Real Estate</a> | <a href="http://localhost/bapudhammotihari/gallery/india_events.html" title="India Events">India Events</a> | <a href="http://localhost/bapudhammotihari/gallery/india_complaints.html" title="India Complaints">India Complaints</a> | <a href="http://localhost/bapudhammotihari/faq.html" title="Veethi FAQs">FAQ's</a> | 
    <a href="http://localhost/bapudhammotihari/reward_points.html" title="Veethi Reward Points">Veethi Reward Points</a> | <a href="http://localhost/bapudhammotihari/terms_of_use.html" title="Terms of Use">Terms of Use</a>  |  <a href="http://localhost/bapudhammotihari/privacy_policy.html" title="Privacy Policy">Privacy Policy</a>  |  <a href="http://localhost/bapudhammotihari/sitemap.html" title="Sitemap">Sitemap</a> | <a href="http://localhost/bapudhammotihari/aboutus.html" title="About Us">About Us</a> | <a href="http://localhost/bapudhammotihari/advertise.html" title="Advertise">Advertise</a> | <a href="http://localhost/bapudhammotihari/user_login.html" title="Login">Login</a> | <a href="http://localhost/bapudhammotihari/contactus.html" title="Contact Veethi">Contact Us</a>
          <br />
      <br />
    Disclaimer:  Veethi does not guarantee the accuracy of any information on this site.  Use at your own risk.</p>
  </div> -->
    <p id="copyright">&copy;2013 veethi.com. Discover the People, gallery and Businesses of India. A Portal from Galaxy Infomedia LLC. All Rights Reserved.</p>
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=7273836; 
var sc_invisible=1; 
var sc_security="1e7c60eb"; 
var sc_https=1; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost +
"statcounter.com/counter/counter.js'></"+"script>");</script>
<noscript><div class="statcounter"><a title="tumblr hit
tracking tool" href="http://statcounter.com/tumblr/"
target="_blank"><img class="statcounter"
src="https://c.statcounter.com/7273836/0/1e7c60eb/1/"
alt="tumblr hit tracking tool"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->

<!-- Quantcast Tag -->

<script type="text/javascript">

var _qevents = _qevents || [];



(function() {

var elem = document.createElement('script');

elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";

elem.async = true;

elem.type = "text/javascript";

var scpt = document.getElementsByTagName('script')[0];

scpt.parentNode.insertBefore(elem, scpt);

})();



_qevents.push({

qacct:"p-d17VW8cN9nCMU"

});

</script>



<noscript>

<div style="display:none;">

<img src="//pixel.quantserve.com/pixel/p-d17VW8cN9nCMU.gif" border="0" height="1" width="1" alt="Quantcast"/>

</div>

</noscript>

<!-- End Quantcast tag -->

</div>
</body>
</html>