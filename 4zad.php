<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
    for($i=0;$i<120;$i++){

    $redni=$i+1;

     if($redni%3==0){
    echo($i+1).'<a href="https://www.yahoo.com">google</a><br>';
    }

   else{
    echo($i+1).'<a href="https://www.google.hr">google</a><br>';
   }


    }

?>
</body>
</html>