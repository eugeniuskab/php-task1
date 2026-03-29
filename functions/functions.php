<?php
function get_page_title($page_title) {
    $base_title = "Designer Template";
    return $base_title . " | " . $page_title;
}

function redirect($url) {
    header("Location: " . $url);
    exit();
}
?>