$('modal').each(function(){
    var id = $(this).attr('id');
    var header = $(this).find('mh').html();
    var body = $(this).find('mb').html();

    var html = "<div class='modal fade' id='" + id + "' role='dialog'>";
    html += "<div class='modal-dialog'><div class='modal-content'><div class='modal-header'>";
    html += "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
    html += "<h4 class='modal-title'>" + header + "</h4>";
    html += "</div><div class='modal-body'>";
    html += body;
    html += "</div><div class='modal-footer'>";
    html += "<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>";
    html += "</div></div></div></div>";
    $(this).html( html );
});