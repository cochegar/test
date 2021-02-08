<?php

function func($number)
{
    $ret=5*$number;
    return $ret;
}
 function test($str)
 {
    echo '1';
     echo '2';
     echo '3';

     return $str;
 }
 //echo test('test');
//echo func(10);


echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>


</head>
<body>
<div id="app-4">
    <ol>
        <li v-for="todo2 in todos">
            {{ todo2.text }}
        </li>
    </ol>
</div>
<div id="app">
  {{ text }}
</div>
<script src="myvue.js"></script>
</body>
</html>';
?>