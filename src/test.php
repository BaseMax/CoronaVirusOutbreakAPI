<?php
// MAX BASE
// https://github.com/BaseMax/CoronaVirusOutbreakAPI
$regex=explode("\n", file_get_contents("regex.txt"));
print_r($regex);
$content=file_get_contents("_page.html");
preg_match($regex[0], $content, $table);
// print_r($table);
preg_match_all($regex[1], $table["content"], $matches);
// print_r($matches);
print_r($matches["name"]);
// file_put_contents("test.txt", print_r($matches, true));
// file_put_contents("test.txt", print_r($table, true));
