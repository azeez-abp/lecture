<?php

class Index{

    public static function echo($str){
        echo $str;
    }

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

<form action="/" method="post">
  <input type="email" name="e"  placeholder="Enter Email">
  <input type="password" name="p"  placeholder="Enter Password">

  <input type="submit" name="s" >
</form>
    
</body>
</html>