<?php 
error_reporting(1);
include("locclass.php");
$con_log = new Logging();
  $down_url = $_REQUEST['down_url'];
  $zip_down_url = $_REQUEST['zip_down_url'];
  if($down_url !=''){
 
 	
	define("CONFIG_FILE_STATUS", " Is File downloaded => ".$down_url);
    
	$config_file_data = CONFIG_FILE_STATUS;
		$config_file_seting  = '../xfimopt/imgopt.conf';
		$con_log->lfile($config_file_seting); 
		$con_log->lwrite($config_file_data,'/n');
		// close log file
		$con_log->lclose();
		$file_path = '../'.$down_url;
	echo $status = unlink($file_path);
	 }
	 else if($zip_down_url !='')
	 {
		$zip_file_url  = explode("http://dailyjokes.xyz/",$zip_down_url);
	define("CONFIG_FILE_STATUS", " Is File downloaded => ".$down_url);
    
	$config_file_data = CONFIG_FILE_STATUS;
		$config_file_seting  = '../xfimopt/imgopt.conf';
		$con_log->lfile($config_file_seting); 
		$con_log->lwrite($config_file_data,'/n');
		// close log file
		$con_log->lclose();
		$file_path = '../'.$zip_file_url[1];
	echo $status = unlink($file_path);
	 }
?>