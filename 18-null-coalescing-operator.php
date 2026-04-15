<?php

$data = [];
$name = $data["name"] ?? "data tidak ada";

echo $name;

$data = [
    "name" => "jaya",
    "age" => 21
];
$name = $data["age"] ?? "data tidak ada";

echo $name;
