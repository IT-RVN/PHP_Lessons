<?php
header('Content-Type: text/html; charset=utf-8');
echo "<form method='post' action='handler_upload_file.php' enctype='multipart/form-data'>";
echo "<input type='file' name='fileName'>";
echo "<button type='submit'>Send</button>";
echo "</form>";