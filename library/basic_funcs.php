<?php 
function load_view($file,$data=''){
	$dir="views";
	if(strchr($file,'/')){
		$folder=explode("/", $file);
		$dir=$dir.'/'.$folder[0];
		$file=$folder[1];
		}
	$pages=scandir($dir,0);
    		unset ($pages['0'],$pages['1']);
    			if (in_array($file.'.php', $pages)){
        		include ($dir.'/'.$file.'.php');}
				else{
					echo"No view named ".$file;
					show404();
					}
	}
	
//loading model
function load_model($file,$data=''){
	
	$dir="models";
	$pages=scandir($dir,0);
    		unset ($pages['0'],$pages['1']);
    			if (in_array($file.'.php', $pages)){
        		include ($dir.'/'.$file.'.php');}
				else{
					echo"No model named ".$file;
					}
	}

//loading a librabry
function load_lib($file){
	
	$dir="library";
	$pages=scandir($dir,0);
    		unset ($pages['0'],$pages['1']);
    			if (in_array($file.'.php', $pages)){
        		include ($dir.'/'.$file.'.php');}
				else{
					echo"No library named ".$file;
					show404();
					}
	}


//404 error
function show404(){
	include('errors/404.php');
	}
?>