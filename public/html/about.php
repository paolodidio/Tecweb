<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

echo 'sodhoasdoahsohaodhashdoasd';

if (strpos($url,'car') !== false) {
    echo 'Car exists.';
} else {
    echo 'No cars.';
}

?>