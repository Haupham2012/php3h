<?php
setcookie('name','Hau' ,time()+ 24*3600);
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}
setcookie('name', '', time() - 24*3600);

?>