<?php
/* 
 * name:ahmedalothman 
 * date 7-04-2020
 *  name of page:for.php 
 */
//var_dump($_POST);
if (isset($_POST['name'])&&    //  get  the  value from  form 
isset($_POST['email'])&&
isset($_POST['phone'])&&
isset($_POST['date'])&&
isset($_POST['message']) ) {

    $voornaam =$_POST['name'] ;   // put the  value in  variabel 
    $email =$_POST['email'] ;  
    $phone =$_POST['phone']; 
    $message=$_POST['message'];
    $brithdate=$_POST['date']; 

}
echo " <h1> je bent ingelogt  als members </h1>" ."<br>";
echo " je voornaam is : ".$voornaam."<br>" ;  // echo  the result on  screen
echo " je email is : ".$email."<br>";
echo " je phone is : ".$phone."<br>";
echo " je message: is ".$message."<br>";
echo " je brithdate is: ".$brithdate;

  
   
 
