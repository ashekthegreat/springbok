<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-migrate-1.4.1.min.js"></script>

    <script type="text/javascript">

        $(function(){
            $("a").click(function(){
                $("iframe").attr("src", $(this).attr("href"));
                $(".selected").removeClass("selected");
                $(this).addClass("selected");
                return false;
            })
        })
    </script>

    <style>
        body{
            margin: 0;
            padding: 0;
            background: #eaeaea;
            overflow: hidden;
        }
        iframe{
            padding: 0;
            width: 80vw;
            /*width: 400px;*/
            height: 100vh;
            border: 0;
            vertical-align: top;
            float: right;

        }
        a{
            display: block;
            width: 18vw;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 3px 1vw 3px 1vw;
        }
        .selected{
            background: #ffef00;
        }
        .links{
            float: left;
            height: 90vh;
            width: 20vw;
            overflow-y: scroll;
            overflow-x: hidden;
            padding: 6vh 0 4vh;
        }
    </style>
</head>
<body>
    <iframe src="index.php"></iframe>
    <div class="links">
        <a href="index.php" class="selected">index.php</a>
        <?php
        $dir    = __DIR__;
        $files = scandir($dir);
        foreach($files as $file){
            if(strpos($file, ".php") !== false && $file !== "frames.php" && $file !== "section-footer.php" && $file !== "section-header.php" && $file !== "index.php"){
                echo "<a href='" . $file ."'>" . $file . "</a>";
            }
        }
        ?>
    </div>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: ashek.elahi
 * Date: 1/22/2018
 * Time: 2:30 PM
 */