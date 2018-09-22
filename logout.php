<?php

foreach($_COOKIE as $key => $value){
    setCookie($key, $value, time() - 3600);
}
header("Location: {$_SERVER['HTTP_REFERER']}");
exit();

?>
