<?php
/*
 Plugin Name: CricInfo
 Plugin URI: http://wordpress.org/extend/plugins/cricinfo-score
 Description: Cricket is the second most popular game in the world! And, it is the top most popular game in India. More than 65% of cricket fans/viewers are from India. This plug in is developed for them who loves to be updated when working. Enjoy and feel free to copy and share this with others.
 Author: Jay Mehta, http://www.solutionanalysts.com
 Email: jay.mehta@solutionanalysts.com
 Version: 1
 */

function widget_cricinfo($args) {
  require_once("lib.xml.php");
  $xml_d=file_get_contents('http://static.espncricinfo.com/rss/livescores.xml');
  $out = cricinfo_xml2array($xml_d);
  // echo "<img src='".WP_PLUGIN_URL."/cricinfo-score/cricinfo.gif' border='0' style='width:219px;height:71px;'/>";
  $details = array();
  $details=$out['rss']['channel']['item'];
  echo count($details);
  if(count($details)==1)
  {
    echo "<a href='".$v['guid']."'><h6>".$v['description']."</h6></a>";
  }
  else if(count($details)>1)
  {
    foreach($details as $k=>$v)
    {
      for ($i=0; $i < 6; $i++) { 
        # code...
      
      // echo "<pre>";
      //   print_r($details);
      //   echo "</pre>";
      echo "<a href='".$v['guid']."'><h6>".$v['description']."</h6></a>";
      }
    }
  }
  else
  {
    echo "No ongoing match";
  }

}
function widget_cricinfo_init()
{
  wp_register_sidebar_widget("cricinfo-score","CricInfo", 'widget_cricinfo');
}
add_action("plugins_loaded", "widget_cricinfo_init");

?>