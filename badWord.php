<?php 
    $paragraph = $_POST['paragraph'];
    $password = $_POST['password'];
    $censored = str_replace($password,'***', $password)
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
    <?php echo $paragraph."".$password; ?> <?php echo strlen($paragraph."".$password); ?>
    <?php echo $paragraph."".$censored; ?> <?php echo strlen($paragraph."".$censored); ?>
</body>
</html>