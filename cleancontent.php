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
  echo "<br>Successfully replaced the links from the text.";  
  return $filtered_content;
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
  echo "<br>Successfully replaced the image source from the text.";  
  return $filtered_content;
  }
  else
  {
  return "<br>Preg Replace didn't find any image source. ";
  }  
 }
 
 
 
?>