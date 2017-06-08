$.ajax({
    url: "api/recentUser.php", 
    success: function(result) {
        var data = JSON.parse(result);
        var i = 0;
        $.each($('#story a h1'),function(){
            $(this).html(data[i][0] + data[i++][1]);
        });
    }
});