<?php

$images = scandir("images"); // escanear diretório

$data = array();
foreach ($images as $img) {

    if (!in_array($img, array(".", ".."))) { // função in_array: faz um busca dentro de um array 

        $filename = "images". DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);

        $info["size"] = filesize($filename);

        $info["modified"] = date("d.m.Y H:i:s", filemtime($filename)); // ultima modificação do arquivo

        $info["url"] = "http://localhost/cursoPHP/DIR/".str_replace("\\", "/", $filename);

        array_push($data, $info);

    }

}

echo json_encode($data);

?>