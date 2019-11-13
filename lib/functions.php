<?php 
   init();
   
   function init(){
       header('Cache-Control: no-cache');
       header('Content-type: text/html; charset="utf-8"', true);
       
       //Loading config file
       require_once(dirname(__FILE__).'/config/config.inc');
       
       //Start session
       session_start();
       
   }
?>