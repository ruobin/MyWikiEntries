
<!DOCTYPE html>
<html>
<body>

<?php

//获取某目录下所有文件、目录名（不包括子目录下文件、目录名）  
$handler = opendir("./");
while (($filename = readdir($handler)) !== false) {//务必使用!==，防止目录下出现类似文件名“0”等情况  
    if ($filename != "." && $filename != "..") {
        $files[] = $filename;
    }
}

closedir($handler);
echo "条目列表"."<br />";
echo "<br />";

//打印所有文件名  
foreach ($files as $value) {
    //<td><a href="Abstract_factory_pattern.html">Abstract_factory_pattern.html</a></td>
    if(strcmp($value,"index.php") != 0)
    {
        $title = str_replace("_", " ", substr($value, 0,strlen($value) - 5));
        
        echo "<tr><td><a style=\"text-decoration:none\" href=\"". $value. "\">". $title."</a></td></tr>";
        echo "<br />"; 
    }
    
}


?>

</body>
</html>
