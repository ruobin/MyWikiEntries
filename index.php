
<!DOCTYPE html>
<html>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php

//获取某目录下所有文件、目录名（不包括子目录下文件、目录名）  
$handler = opendir("./");
while (($filename = readdir($handler)) !== false) {//务必使用!==，防止目录下出现类似文件名“0”等情况  
    if ($filename != "." && $filename != "..") {
        $files[] = $filename;
    }
}

closedir($handler);
echo "类别列表"."<br />";
echo "<br />";

//打印所有文件名  
foreach ($files as $value) {
    //<td><a href="Abstract_factory_pattern.html">Abstract_factory_pattern.html</a></td>
    if(substr_count($value, ".php") == 0 and substr_count($value, ".git") == 0)
    {
//        $value = iconv("UTF-8","gb2312",$value);
        $title = $value;
        echo "<tr><td><a style=\"text-decoration:none\" href=\"". $value. "/index.php\">". "<font size=\"6\" color=\"red\">" .$title. "</font>" . "</a></td></tr>";
        echo "<br />"; 
    }
    
}


?>

</body>
</html>
