<?php

    require_once "simple_html_dom.php";
$url = 'https://media.geeksforgeeks.org/wp-content/uploads/gfg-40.png';

// Use basename() function to return the base name of file
$file_name = basename($url);

// Use file_get_contents() function to get the file
// from url and use file_put_contents() function to
// save the file by using base name
if (file_put_contents($file_name, file_get_contents($url)))
{
    echo "File downloaded successfully";
}
else
{
    echo "File downloading failed.";
}

//
//    if (!empty($url)){
//        $html = file_get_html($url);
//        if (!empty($html)){
//            $content = $html->find('a', 0);
//            echo count($content);
//        }
//    }



//    foreach ($html->find('a') as $link){
//        echo($link->href);
//    }














