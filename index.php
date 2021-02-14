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



echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title class="app-t">{{Title}}</title>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>


</head>
<body>
<div id="app-4">
    <ol>
        <li v-for="item in todos">
            {{ item.text }}
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