<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/2010.less', 'css/2010.css');
    
?>
<!DOCTYPE html>

<html style="background-color: #22202e;">

    <head>
        <title>2010</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/2010.css" rel="stylesheet" type="text/css" />  
        <script  src="js/jquery.min.js"></script>
        <script src="js/scripts.js"></script>
    </head>
    <body>
        <?php include $dir_block.'/2010-content.php'; ?>
    </body>
</html>