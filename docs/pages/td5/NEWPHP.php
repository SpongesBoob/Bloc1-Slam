<?php
function titre(string $content,string $subTitle, int $level=1): void {
    echo "<h$level>$content</h$level>";
    if($subTitle!=null){
        echo "<p class ='sub-title'>$subTitle</p>";
    }
}

function get($key,$defaultValue=null){
    return $_GET[$key];
}