$.ajax({
    url: "api/foto.php", 
    success: function(result) {
        // console.log(JSON.parse(result));
        // var data = ;
        // var i = 0;
        // $.each($('#story a h1'),function(){
        //     $(this).html(data[i][0] + data[i++][1]);
        // });
        $html = "";
        $html = "" +
            "<div class='bespoke-theme-cube-slide-parent'><section data-bespoke-backdrop='emphatic' class='emphatic-text bespoke-slide bespoke-active' style='zoom: 0.7875;'>" +
                "<a href='story.php' class='btn btn-success' id='backButton'>Back To Homepage</a>" +
                "<br>" +
                "<img src='build/img/jack.jpg'>" +
            "</section></div>" +
            "<div class='emphatic bespoke-backdrop bespoke-backdrop-active'></div>" + 
            "<div class='bespoke-progress-parent'><div class='bespoke-progress-bar' style='width: 0%;'></div></div>";
            {/*<div class="bespoke-theme-cube-slide-parent"><section data-bespoke-backdrop="emphatic" class="emphatic-text bespoke-slide bespoke-inactive bespoke-before bespoke-before-1" style="zoom: 0.7875;">
                <a href="story.html" class="btn btn-success" id="backButton">Back To Homepage</a>
                <br>
                <img src="build/img/luffy.jpg">
            </section></div>
            <div class="bespoke-theme-cube-slide-parent"><section data-bespoke-backdrop="emphatic" class="emphatic-text bespoke-slide bespoke-active" style="zoom: 0.7875;">
                <a href="story.html" class="btn btn-success" id="backButton">Back To Homepage</a>
                <br>
                <img src="build/img/zoro.jpg">
            </section></div>
            <div class="bespoke-theme-cube-slide-parent"><section data-bespoke-backdrop="emphatic" class="emphatic-text bespoke-slide bespoke-inactive bespoke-after bespoke-after-1" style="zoom: 0.7875;">
                <a href="story.html" class="btn btn-success" id="backButton">Back To Homepage</a>
                <br>
                <img src="build/img/usop.jpg">
            </section></div>
        <div class="emphatic bespoke-backdrop bespoke-backdrop-inactive bespoke-backdrop-before"></div><div class="emphatic bespoke-backdrop bespoke-backdrop-active"></div><div class="emphatic bespoke-backdrop bespoke-backdrop-inactive bespoke-backdrop-after"></div><div class="bespoke-progress-parent"><div class="bespoke-progress-bar" style="width: 66.6667%;"></div></div></article>*/}
        $('article').html($html);
    }
});