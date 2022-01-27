<?php
$curr = $_SERVER['REQUEST_URI'];
$arr = array('message' => "wrong url", 'todo' => $curr . "/api");
echo json_encode($arr);
