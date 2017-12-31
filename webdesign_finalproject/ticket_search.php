<?php
include_once("mysql_connect.php");
session_start();
// order by s_id desc
$output='';
    $search=$_POST['search'];
    $search=preg_replace("#[^0-9a-z]#i","",$search);

if(isset($search)){  //有輸入search
    $sql="select * from sort where s_name like '%$search%';"; 
    $result=mysqli_query($link,$sql) ;
    // or die("could not search!")
    if(mysqli_num_rows($result)==0){
        $output='查無此結果';

    }
    else{
        while($row=mysqli_fetch_array($result)){
            $s_id=$row['s_id'];
            $s_name=$row['s_name'];
            $s_period=$row['s_period'];
            $s_site=$row['s_site'];
            $s_intro=$row['s_intro'];
            $output .='<div>'.$s_id." ".$s_name.'<br>'
                             .$s_period.'<br>'
                             .$s_site.'<br>'
                             .$s_intro.
                      '</div>';

      }  
   
    }print("$output");

  


} 
else{
    die("could not search!");
}







?>
