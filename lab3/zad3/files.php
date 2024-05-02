<?php
function handleDirectory($path, $dir, $op){
    if(substr($path, strlen($path)-1, 1) != '/'){
        echo 'Invalid path';
        return;
    }
    if ($op == ''){
        $op = 'read';
    }
    $op($path, $dir);
}

function read($path, $dir){
    if(!is_dir($path . $dir)){
        echo 'Directory does not exist';
        return;
    }
    else {
        $contens = scandir($path . $dir);
        if (sizeof($contens) == 2) {
            echo 'Directory is empty';
        } else {
            echo 'Directory contains: <br>';
            foreach ($contens as $file) {
                echo $file . '<br>';
            }
        }
    }
}

function delete($path, $dir){
    if(is_dir($path . $dir)) {
        rmdir($path . $dir);
        echo 'Directory deleted';
    }
    else{
        echo 'Directory does not exist';
    }
}

function create($path, $dir){
    if(is_dir($path . $dir)){
    echo 'Directory already exists';
    } else {
        mkdir($path . $dir);
        echo 'Directory created';
    }
}

$op = $_GET['op'];
$dir = $_GET['dir'];
$path = $_GET['path'];

echo handleDirectory($path, $dir, $op);
