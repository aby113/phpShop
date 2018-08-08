<?php

$PHP = "HTML";

$HTML = "CSS";

$CSS = "JavaScript";

$JavaScript = "Ajax";

$Ajax = "PHP";



echo $PHP;       // HTML

echo $$PHP;      // $HTML -> CSS

echo $$$PHP;     // $$HTML -> $CSS -> JavaScript

echo $$$$PHP;    // $$$HTML -> $$CSS -> $JavaScript -> Ajax

echo $$$$$PHP;   // $$$$HTML -> $$$CSS -> $$JavaScript -> $Ajax -> PHP

echo $$$$$$PHP;  // $$$$$HTML -> $$$$CSS -> $$$JavaScript -> $$Ajax -> $PHP -> HTML

echo $$$$$$$PHP; // $$$$$$HTML -> $$$$$CSS -> $$$$JavaScript -> $$$Ajax -> $$PHP -> $HTML -> CSS ...



?>