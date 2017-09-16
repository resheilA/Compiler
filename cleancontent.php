<?php
 
 function remove_comment($file)
 {
  $filtered_content = preg_replace( '/<!--(.|\s)*?-->/' , '' , $file);
  
  //Check for changes 
  if($filtered_content != $file)
  {
  echo "<br>Successfully removed comments in the file.";  
  return $filtered_content;
  }
  else
  {
  return "<br>Preg Replace didn't find any comment. ";
  }

}
 
 function remove_emptyline($file)
 {
  $filtered_content = preg_replace('/^[ \t]*[\r\n]+/m', '', $file); 
  
  //Check for changes
  if($filtered_content != $file)
  {
  echo "<br>Successfully removed empty lines in the file.";  
  return $filtered_content;
  }
  else
  {
  return "<br>Preg Replace didn't find any empty line. ";
  }
 }
 
 function identitfying_links($file)
 {
  $filtered_content = preg_replace("/<a[^>]*href=(\"[^\"]*\")/", "<a href ='#link#'", $file);
    
  //Check for changes
  if($filtered_content != $file)
  {
	
	include_once("testing.php");
	$testing_result = test_links($filtered_content);
	if($testing_result)
	{
	  echo "<br>Successfully replaced the links from the text.";  
	  echo "<br>Testing for links successful.";  	 
	  return $filtered_content;
	}
    else{
      echo "<br>Some links are still found which are not removed.";
	  return $filtered_content;
    }	
  }
  else
  {
  return "<br>Preg Replace didn't find any links. ";
  }  
 }
 
 
 function identitfying_imgsrc($file)
 {    
  
  $filtered_content = preg_replace('/img.*?src=[\'\"](.*?)[\'\"]/', "img src='#imagesource#'", $file);
 
 //Check for changes
  if($filtered_content != $file)
  {
	include_once("testing.php");
	$testing_result = test_imgsrc($filtered_content);
		if($testing_result)
		{
		  echo "<br>Successfully replaced the image source from the text.";  
		  echo "<br>Testing for image source successful.";  
		  return $filtered_content;
		}
		else{
		  echo "<br>Some image source are still found which are not removed.";
		  return $filtered_content;
		}	
  }		
  else
  {
  return "<br>Preg Replace didn't find any image source. ";
  }  
 }
 
 
 
?>