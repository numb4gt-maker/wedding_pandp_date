<?php
if (isset($_POST["data"])) {
    $line = $_POST["data"] . "\n";
    file_put_contents("responses.txt", $line, FILE_APPEND);
}
?>
