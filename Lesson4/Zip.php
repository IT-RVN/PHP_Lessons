<?php
header('Content-Type: text/html; charset=utf-8');
class Zip {
    function ExtractFile($file)
    {
        $uploadDir = __DIR__ . '/uploaded_files';
        $resourcesDir = $uploadDir.'/Resources';
        $zip = new ZipArchive();
        $success = false;
        if(file_exists($uploadDir.'/'.$file))
        {
            if (!file_exists($resourcesDir)) {
                mkdir($resourcesDir, 0777, true);
            }
            if ($zip->open($uploadDir.'/'.$file) === true) {
                $zip->extractTo($resourcesDir.'/');
                $zip->close();
                $success = true;
            }
            else
            {
                echo "Архива не существует!";
            }

        }
        else
        {
            $success = false;
        }

        return $success;
    }

}