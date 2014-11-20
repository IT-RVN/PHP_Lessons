<?php
$dir = "EventFile/uvk"; /// Folder where exist files

echo "<form action=\"#\" method=\"post\">";
    echo "<p>Input start file: <select name=\"evnt\">";
    showEvntFile($dir);
    echo "</select></p>";
    echo "<p><input type=\"submit\" name=\"submit\" value=\"Generate File\"/>";
echo "</form>";

if(isset($_POST['submit']))
{
    //поиск файлов в папке
    $selected_val = $_POST['evnt'];
    $files = scandir($dir);

    $files = array_slice($files, 2);
    $listFile=array();

    foreach ($files as $key => $value)
    {
        $crc = file_crc($dir.'/'.$value);
        $listFile[$value] = $crc;
    }

    $settings["startFile"] = $selected_val;
    $arr = array('listFile' => $listFile, 'settings' => $settings);

    //create file list.json
    createFile($dir.'/'.'list.json', json_encode($arr));

    //create file listcrc.txt
    $crc_json = file_crc($dir.'/'.'list.json');
    createFile($dir.'/'.'listcrc.txt', $crc_json);

}

function showEvntFile($dir)
{
    if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle)))
        {
            if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'evnt')
            {
                echo '<option value="'.$file.'">'.$file.'</option>';
            }
        }
        closedir($handle);
    }
}
//convert file data to crc32 code
function file_crc($file)
{
    $file_string = file_get_contents($file);
    $crc = crc32($file_string);
    return sprintf("%u", $crc);
}

function createFile($fileName, $data)
{
    $myfile = fopen($fileName, "w");
    fwrite($myfile, $data);
    fclose($myfile);
    echo "<h3>File [".$fileName. "] created</h3>";
}