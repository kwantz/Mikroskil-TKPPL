<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="build/css/userPage.css">
        <link rel="stylesheet" type="text/css" href="build/css/bootstrap.min.css">
    </head>
    <body>
        <article>
        	<section>
                <div class="container-fluid">
                    <div class="col-md-12" align="center">
                        <div class="usr-header">
                            <a href="index.html" class="usr-img">
                                <p class="text-center"><b>GO TO<br/>HOMEPAGE</b></p>
                                <img src="./build/img/Vinyl_record.svg.png" class="" alt="usrpic">
                            </a>
                            <div class="usr-info">
                                <h1>TKPPL Friends Story</h1>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-8" align="center">
                                <form action="api/upload.php" method="post" enctype="multipart/form-data">
                                    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                                    <br>
                                    <input class="btn btn-success" type="submit" value="Upload Image" name="submit">
                                </form>
                            </div>
                        </div>
                        <br>
                        <div class="list-group friend-list">
                            <?php 
                                require("api/recentUser.php");
                                foreach($arr as $data) {
                                    echo "<a href='storyImage.php#" . ($data['idx']+1) . "' class='list-group-item friend-story'>" . 
                                        "<h1 class='friend-Badge'>" . $data['nama'][0] . $data['nama'][1] . "</h1>" .
                                        "<div class='info pull-left'>" . 
                                        "<h1>" . $data['nama'] . "</h1>" .
                                        "<h5>Last post " . $data['tgl'] . " minutes ago </h5>" . 
                                        "</div>" .
                                        "</a>";
                                }
                            ?>
                        </div>
                    </div>    
                </div>
        	</section>
            <section>
                <h1 style="color: white">add more stories ?</h1>
                <a href="#1" class="btn btn-success">YES</a>
                <br>
                <a href="storyImage.php" class="btn btn-warning">NO</a>
            </section>
        </article>
    </body>

    <script src="build/js/build.js"></script>
    <script src="build/js/jquery.min.js"></script>
    <script src="build/js/bootstrap.min.js"></script>
</html>