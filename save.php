<?php
print_r('The php script is called....');
print_r('The value of $_POST["myText"] is :  ');
var_dump($_POST['myText']);
$post_data = $_POST['myText'];
    $filename ='assets/sentences.csv';
    $handle = fopen($filename, "w");      
if (empty($post_data)) {   
    // fwrite($handle, ' Hmm, I did NOT get any data from AJAX. myText is:  '. $post_data);  
}
if (!empty($post_data)) {
    // fwrite($handle, ' ... Recieved data from AJAX!   myText:   ');
    fwrite($handle, $post_data);
}
     fclose($handle);
?>