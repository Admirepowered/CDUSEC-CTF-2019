<?php
sleep(1);
$path = "./upload/";
function deldir($path){
    if(is_dir($path)){
        $p = scandir($path);
        foreach($p as $val){
            if($val !="." && $val !=".."){
                if(is_dir($path.$val)){
                    deldir($path.$val.'/');
                    @rmdir($path.$val.'/');
                }else{
                    unlink($path.$val);
                }
            }
        }
    }
}
deldir($path);