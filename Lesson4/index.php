<!DOCTYPE html>
<html>
<head>
    <title>HTML5 Login</title>
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/style.css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');


    echo "<div style='with:100%;height:50px;background-color: #3366CC; border: 2px solid white;border-radius: 5px;'>";
    echo "<form method='post' action='?' enctype='multipart/form-data'>";
    echo "<input type='file' name='fileName'>";
    echo "<button type='submit'>Send</button>";
    echo "</form>";
    echo "</div>";

    echo "<div style='margin: 2%; border: 2px solid white; border-radius: 5px;'>";
    $success = false;

    if(isset($_FILES['fileName']['name']))
    {
        $uploadDir = __DIR__ . '/uploaded_files';
        if(is_uploaded_file($_FILES['fileName']['tmp_name']))
        {
            $success = move_uploaded_file($_FILES['fileName']['tmp_name'],
                $uploadDir.'/'.$_FILES['fileName']['name']);
            if ($success) {
                $filename = $_FILES['fileName']['name'];
                echo 'File copied: '.$filename;
                include_once 'Zip.php';
                $ZIP = new Zip();
                $ZIP->ExtractFile($filename);
            }
            else {
                echo 'File not copied';
            }
        }
    }
    else {
        echo "NO FILE'S";
    }

    echo "</div>";
    ?>
</body>
</html>
