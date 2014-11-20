<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Added Content to Blog</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div id="">
    <?php
    if(isset($_POST['submit']))
    {
        echo "<h1>Hello : ".$_POST['name']."</h1>";
        echo "<h4>Passw : ".$_POST['password']."</h4>";
        //get from DB login
//        $str = crc32("Hello world!");
    }
    ?>
</div>
</body>
</html>

