<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-blue.css">
    <body style="max-width:400px">

        <header class="w3-container w3-card-4 w3-theme">
            <h1>类别列表</h1>
        </header>

        <div class="w3-container">
            
                    <?php
//获取某目录下所有文件、目录名（不包括子目录下文件、目录名）  
        $handler = opendir("./");
        while (($filename = readdir($handler)) !== false) {//务必使用!==，防止目录下出现类似文件名“0”等情况  
            if ($filename != "." && $filename != "..") {
                $files[] = $filename;
            }
        }

        closedir($handler);
//        echo "类别列表" . "<br />";
//        echo "<br />";

        foreach ($files as $value) {
            //<td><a href="Abstract_factory_pattern.html">Abstract_factory_pattern.html</a></td>
            if (substr_count($value, ".php") == 0) {
//            <hr>
//            <div class="w3-row">
//                <div class="w3-col s3">
//                    <img src="img_avatar.jpg" style="width:100%">
//                </div>
//                <div class="w3-col s9 w3-container">
//                    <h3>Frozen</h3>
//                </div>
//            </div>
                $title = $value;
                echo '<hr>
            <div class="w3-row">
                <div class="w3-col s9 w3-container">
                    <h3>' . '<a style=\"text-decoration:none\" href=\"' . $value . '/index.php\">' . '<font size=\"5\" color=\"red\">'. $title .'</font>'. '</a>' . '</h3>
                </div>
            </div>';
            
//                echo "<tr><td><a style=\"text-decoration:none\" href=\"" . $value . "/index.php\">" . "<font size=\"5\" color=\"red\">" . $title . "</font>" . "</a></td></tr>";
//                echo "<br />";
            }
        }
        ?>
 
        </div>

<!--        <footer class="w3-container w3-theme">
            <h3>Footer</h3>
        </footer>-->

    </body>
</html>