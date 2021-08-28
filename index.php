<?php

class Index{

    public function login($str){

        if(isset($_POST['s'])) {
          $map  = ['e'=>'Emal', 'p'=>'Password']; 
            $err= [];
          foreach($map as $post => $value){
           
              if(empty($_POST[$post])){
                  array_push($err, $value.' is required<br>');
              
              }
          }

          if(empty($err)){
              echo "Login policies pass";
          }else{
               foreach($err as $er){
                   echo $er;
               }
          }
          
          
            
         

        }
    }

      

}  

if (!empty($_POST['e']) ){
$loger = new Index();
$loger->login("YOU will login ");    

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style type="text/css">

input{

    width:100%;
    height:42px;
    border-radius:1px solid #ddd;
    margin: 3px;
   
}

body{
    margin:0;
    padding:0;
    background:#eee;
  

}
form > div{
    width: 40%;
    border-radius: 7px;
    margin: 0 auto;
    margin-top: 86px;
    border: 2px solid;
    height: auto;
    padding: 27px;
}
</style>

<form action="." method="post">
<div>
  <input type="email" name="e"  placeholder="Enter Email" require="true">
  <input type="password" name="p"  placeholder="Enter Password">

  <input type="submit" name="s" value="Test Login" >
</div>
</form>
    
</body>
</html>