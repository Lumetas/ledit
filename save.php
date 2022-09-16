<?php
$path = $_POST['path'];
$code = $_POST['code'];
$code = str_replace('&lt;', '<', $code);
$code = str_replace('&gt;', '>', $code);
file_put_contents($path, $code);
