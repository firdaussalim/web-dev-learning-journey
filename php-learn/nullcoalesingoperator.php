<?php

#tanpa null coelesing operator

$data = [
    "action" => "create"
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "nothing";
}

echo $action . PHP_EOL;

#tanpa null coelesing operator

$action2 = $data["action"] ?? "nothing";

echo $action2 . PHP_EOL;