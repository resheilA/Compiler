<?php
	 
	function placetags($html)
	{
	//$content = preg_replace('/<h2[^>]*>.*?<\/h2>/i', '<h2>#h2content#</h2>', $html);
	$content = preg_replace('/(<h1[^>]*>).*?<\/h1>/i', '$1#h1content#</h1>', $html);
	$content = preg_replace('/(<h2[^>]*>).*?<\/h2>/i', '$1#h2content#</h2>', $content);
	$content = preg_replace('/(<h3[^>]*>).*?<\/h3>/i', '$1#h3content#</h3>', $content);
	$content = preg_replace('/(<h4[^>]*>).*?<\/h4>/i', '$1#h4content#</h4>', $content);
	$content = preg_replace('/(<h5[^>]*>).*?<\/h5>/i', '$1#h5content#</h5>', $content);
    $content = preg_replace('/(<h6[^>]*>).*?<\/h6>/i', '$1#h6content#</h6>', $content);
	
	$content = preg_replace('/(<p[^>]*>).*?<\/p>/i', '$1#paracontent#</p>', $content);
	
	$content = preg_replace('/(<blockquote[^>]*>).*?<\/blockquote>/i', '$1#blockquotecontent#</blockquote>', $content);
	
    $content = cut_li($content, 'li');
	
	$content = cut_pre($content, 'pre');
	
	$content = cut_general($content, 'form');
	
	//$content = preg_replace('/(<pre[^>]*>).*?<\/pre>/i', '$1#precontent#</pre>', $content);
	//$content = preg_replace('/(<form[^>]*>).*?<\/form>/i', '$1#formcontent#</form>', $content);
	
	
	$content = preg_replace('/(<th[^>]*>).*?<\/th>/i', '$1#thcontent#</th>', $content);
    $content = preg_replace('/(<td[^>]*>).*?<\/td>/i', '$1#tdcontent#</td>', $content);
	
	
	
	$content = preg_replace('/(<option[^>]*>).*?<\/option>/i', '$1#optioncontent#</option>', $content);
	
    $content = preg_replace('/(<label[^>]*>).*?<\/label>/i', '$1#labelcontent#</label>', $content);

	include_once("testing.php");
	$content_result = test_heading($content,"h1");
	if($content_result == false)
	{
	echo "<br>Testing : H1 tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for h1";
	}
	
	$content_result = test_heading($content,"h2");
	if($content_result == false)
	{
	echo "<br>Testing : H2 tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for h2";
	}

	
	$content_result = test_heading($content,"h3");
	if($content_result == false)
	{
	echo "<br>Testing : H3 tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for h3";
	}
	
	
	$content_result = test_heading($content,"h4");
	if($content_result == false)
	{
	echo "<br>Testing : H4 tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for h4";
	}
	
	
	$content_result = test_heading($content,"h5");
	if($content_result == false)
	{
	echo "<br>Testing : H5 tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for h5";
	}
	
	$content_result = test_heading($content,"h6");
	if($content_result == false)
	{
	echo "<br>Testing : H6 tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for h6";
	}

	$content_result = test_paragraph($content,"p");
	if($content_result == false)
	{
	echo "<br>Testing : P tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for P";
	}
	
	$content_result = test_general($content,"blockquote");
	if($content_result == false)
	{
	echo "<br>Testing : Blockquote tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for Blockquote";
	}
	
	/* As of now we are not testing for LI 
	
	$content_result = test_general($content,"li");
	if($content_result == false)
	{
	echo "<br>Testing : Li tag found without replacement<br>";
	}
	else
	{	
	echo "<br>Testing Successful for Li";
	} 
	
	  //END */
	
	$content_result = test_general($content,"td");
	if($content_result == false)
	{
	echo "<br>Testing : td tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for td";
	} 
	
	$content_result = test_general($content,"th");
	if($content_result == false)
	{
	echo "<br>Testing : TH tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for TH";
	} 
	
	$content_result = test_general($content,"option");
	if($content_result == false)
	{
	echo "<br>Testing : Option tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for Option";
	}
	
	$content_result = test_general($content,"label");
	if($content_result == false)
	{
	echo "<br>Testing : Label tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for label";
	} 
	
	
	$content_result = test_general($content,"form");
	if($content_result == false)
	{
	echo "<br>Testing : Form tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for form";
	}
	
	$content_result = test_general($content,"pre");
	if($content_result == false)
	{
	echo "<br>Testing : Pre tag found without replacement<br>";
	}
	else
	{
	echo "<br>Testing Successful for pre";
	}
     
	 
	 echo $content;
	}
	
	
?>