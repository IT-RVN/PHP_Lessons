<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Added Content to Blog</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div id="menu">
    <a href="?select=newCategory">Create new Category</a> <br>
    <a href="?select=newPost">Create new Post</a> <br>
    <a href="?select=changePost">Change Post</a> <br>
</div>
<div id="">
    <?php
    if(isset($_POST['submit']))
    {
        echo "<h1>Hello : ".$_POST['name']."</h1>";
        echo "<h4>Passw : ".$_POST['password']."</h4>";
        //get from DB login
//        $str = crc32("Hello world!");
    }

    if(isset($_GET['select']))
        $choise = $_GET['select'];
    else
        $choise = '';

    switch($choise)
    {
        case 'newCategory':
            newCategory();
            break;
        case 'newPost':
            newPost();
            break;
        case 'changePost':
            changePost();
            break;
        default:
            echo "Please select menu...";
    }
    ?>
</div>
</body>
</html>

