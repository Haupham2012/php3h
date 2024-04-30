<?php
function divi($a,$c){
    if(!$c){
        throw new Exception("cannot div zezo");
    }
    return $a / $c;

}
echo divi(5,5);
try{
    echo divi(10,2) ;
    
}catch(Exception $e){
    echo "Caught exception: " .$e->getMessage(). "\n";

}finally{
    echo "Finally come here";
}
?>