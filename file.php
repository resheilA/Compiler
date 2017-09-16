 <?php
 
 
 $file_html = file_get_contents("http://localhost/Compiler/samples/elements.html");
 $file_html_specialchars = htmlspecialchars($file_html);
 
 include("cleancontent.php");
 $file_comment_less = remove_comment($file_html);
 $file_noemptyline = remove_emptyline($file_comment_less); 
 $file_identitfying_links = identitfying_links($file_noemptyline); 
 $file_identitfying_imgsrc = identitfying_imgsrc($file_identitfying_links);
 
 include("placingtags.php");
 echo $file_withtags = placetags($file_identitfying_imgsrc);
 
 
 ?>