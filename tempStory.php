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
            <section data-bespoke-backdrop="emphatic" class="emphatic-text">
                <a href="story.html" class="btn btn-success" id="backButton">Back To Homepage</a>
                <br>
                <img src="build/img/jack.jpg">
            </section>
            <section data-bespoke-backdrop="emphatic" class="emphatic-text">
                <a href="story.html" class="btn btn-success" id="backButton">Back To Homepage</a>
                <br>
                <img src="build/img/luffy.jpg">
            </section>
            <section data-bespoke-backdrop="emphatic" class="emphatic-text">
                <a href="story.html" class="btn btn-success" id="backButton">Back To Homepage</a>
                <br>
                <img src="build/img/zoro.jpg">
            </section>
            <section data-bespoke-backdrop="emphatic" class="emphatic-text">
                <a href="story.html" class="btn btn-success" id="backButton">Back To Homepage</a>
                <br>
                <img src="build/img/usop.jpg">
            </section>
            <?php 
                require("api/foto.php");
                foreach($arr as $data) {
                    echo "<section data-bespoke-backdrop='emphatic' class='emphatic-text'>" .
                        "<a href='story.html' class='btn btn-success' id='backButton'>Back To Homepage</a><br>" . 
                        "<img src='api/" . $data->foto . "'>" . 
                        "</section>";
                }
            ?>
        </article>
    </body>
    <script src="build/js/jquery.min.js"></script>
    <script src="build/js/bootstrap.min.js"></script>
    <script src="build/js/build.js"></script>
</html>