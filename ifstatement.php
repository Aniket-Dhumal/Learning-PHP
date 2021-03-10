<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF Statement</title>
</head>
<body>
    <?php
    date_default_timezone_set("Asia/Calcutta");
    
    
    while(1){
        $today = date("dmhi");
   echo $today;
    echo "<h2>Date & Time</h2>";
    $Datetime = 1003;

    if($Datetime == $today){
        echo '<h3>YOU PASSED</h3>';
    }
    else{
        echo 'You failed';
    }
}

    ?>
</body>
</html>