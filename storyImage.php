<!DOCTYPE html>
<html>
  
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>User Story</title>
        <link rel="stylesheet" type="text/css" href="build/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="build/css/storyImage.css">
    </head>
  
    <body>
        <article>
            <?php 
                require("api/foto.php");
                foreach($arr as $data) {
                    echo "<section>" .
                        "<div style='width: 100%'>" . 
                        "<div style='float: left'>" . 
                        "<h1 class='friend-Badge'>" . $data['nama'][0] . $data['nama'][1] . "</h1>" .
                        "<h1 style='float: left; margin: 5px 0 0 20px'>" . $data['nama'] . "</h1>" .
                        "</div>" . 
                        "<div style='float: right'>" . 
                        "<a href='story.php' class='btn btn-success' id='backButton'>Back To Homepage</a>" .
                        "</div>" .
                        "<div class='clearfix'></div>" . 
                        "</div> <br>" .
                        "<img src='api/" . $data['foto'] . "'>" . 
                        "</section>";
                }
            ?>
        </article>
    </body>
    <script src="build/js/jquery.min.js"></script>
    <script src="build/js/bootstrap.min.js"></script>
    <script src="build/js/build.js"></script>
</html>