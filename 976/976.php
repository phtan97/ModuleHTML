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
    $less->compileFile('less/976.less', 'css/1140.css');
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/1140.css" rel="stylesheet" type="text/css"/>
        <link href="css/blueberry.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>


        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/css3-mediaqueries.js" type="text/javascript"></script>
        <script src="js/jquery.blueberry.js" type="text/javascript"></script>

        <script>
            $(window).load(function() {
                $('.blueberry').blueberry({
                    interval: 5000,
                    duration: 1000,
                    lineheight: 20
                });

                $("#tabber>.tabs>div").hide();
                $("#tabber>.tabs>div:first").show();
                $("#tabber>.tablist>li:first").addClass("active");
                $("#tabber>.tablist>li>a").click(function() {
                    $('#tabber>.tablist>li').removeClass("active");
                    $(this).parent().addClass("active");

                    var current = $(this).attr("href");

                    $("#tabber>.tabs>div:visible").fadeOut("fast", function() {
                        $(current).fadeIn("fast");
                        /*			$("#tabber>.tabs").animate({"height":$(current).outerHeight()}); */
                    });

                    return false;
                });
            });
        </script>


    </head>
    <body>
        <?php include $dir_block.'/976-content.php'; ?>  
    </body>
</html>
