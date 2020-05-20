<!DOCTYPE HTML>
<HTML>
<body>
<?php

//$arr = file('test.txt');
//foreach($arr as $v)
//{
//    echo($v);
//    echo("<br>");
//}

$path = "./";
$files = array();
$dirs = dir($path);

while(false !== ($filename = $dirs->read()))
{
    $ext = end(explode('.',$filename));
    if($ext == "txt" || $ext == "csv")
        $files[] = $filename;
}

$dirs->close();

sort($files);
foreach($files as $f)
{
    echo $f;
    echo "<br>-----------<br>";
    $fp = file($f);
    foreach($fp as $line)
    {
        echo($line);
        echo("<br>");
    }

    echo("<br>");
}

?>
</body>
</HTML>
