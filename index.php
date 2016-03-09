<?php
if (!isset($_SESSION["lang"]) || ($_SESSION["lang"] == "ar")) {
    require_once 'private/lang/ar.php';
    $_SESSION["lang"] = "ar";
} else {
    require_once 'private/lang/ar' . $_SESSION["lang"] . '.php';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/myStyle.css" rel="stylesheet">

        <title><?php echo LANG_PageTitle_index; ?></title>
    </head>
    <body>
        <div class="container">





            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><?php echo LANG_index_navbarBrand ?></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Link</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><?php echo LANG_index_share ?></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div class="panel panel-default" style="text-align: center;">
                <div class="panel-body">
                    <h1><?php echo LANG_index_SiteTitle ?></h1>
                    <p><?php echo LANG_index_mainMessage ?></p><br><br>
                    <p><a class="btn btn-success btn-lg"><?php echo LANG_index_JoinUs ?></a></p>
                </div>
                <div class="row" style="padding: 25px;">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p><?php echo LANG_index_PathFinderMessage; ?></p>
                                <a href="pathfinder.php"><?php echo LANG_index_PathFinderLink ?></a><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p><?php echo LANG_index_SearchTrafficMessage; ?></p>
                                <a href="searchtraffic.php"><?php echo LANG_index_SearchTrafficLink ?></a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
    </body>
</html>
