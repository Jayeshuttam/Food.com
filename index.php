<?php

require_once 'webpage.php';
$op = 0;
if (isset($_GET[$op])) {
    $op = $_GET[$op];
} else {
    $op = 0;
}
switch ($op) {
    case 0:
        HomePage();
    break;
    default:
    http_response_code(400);
}

function HomePage()
{
    $page = new webpage();
    $page->title = 'HOME';
    $page->render();
}
