<?php 
namespace Alddesign\EzMvc;
use Alddesign\EzMvc\System\Config;
use Alddesign\EzMvc\System\View;
use Alddesign\EzMvc\System\Helper;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title><?php echo Config::system("app-name") ?></title>
        <link rel="stylesheet" href="<?php Helper::echoUrl("/assets/bootstrap.min.css") ?>">
        <link rel="stylesheet" href="<?php Helper::echoUrl("/assets/bootstrap-theme.min.css") ?>">
        <link rel="stylesheet" href="<?php Helper::echoUrl("/assets/css.css") ?>">
        <script src="<?php Helper::echoUrl("/assets/bootstrap.min.js") ?>"></script>
    </head>
    <body>
    <?php View::createChild("title-bar", $this)->render(); ?> 