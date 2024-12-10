console.log("hello world");

$(".editBtn").on("click", function () {
    let stage_id = $(this).attr("value");
    // console.log(stage_id)
    $("#editModal").modal("show");

    $.ajax({
        type: "GET",
        url: "/editStage/" + stage_id,
        success: function (response) {
            // console.log(response)
            $("#editId").val(response.stage.id);
            $("#editDateDebut").val(response.stage.dateDebut);
            $("#editDateFin").val(response.stage.dateFin);
            $("#editSujet").val(response.stage.sujet);
            $("#editNote").val(response.stage.note);
            $("#editConvention").val(response.stage.convention);
            $("#editRapport").val(response.stage.rapport);
        },
    });
});

$(document).on("click", ".deleteBtn", function () {
    let stage_id = $(this).attr("value");
    // console.log(stage_id)
    $("#deleteModal").modal("show");
    $("#deleting_id").val(stage_id);
});

$(".viewBtn").on("click", function () {
    let stage_id = $(this).attr("value");
    // console.log(stage_id)
    $("#viewModal").modal("show");

    $.ajax({
        url: "/editStage/"+stage_id,
        success: function (response) {
        console.log(response)
        $('#editId1').val(response.stage.id);
        $('#editDateDebut1').val(response.stage.dateDebut);
        $('#editDateFin1').val(response.stage.dateFin);
        $('#editSujet1').val(response.stage.sujet);
        $('#editNote1').val(response.stage.note);

        $('#editEncadrant1').val(response.stage.nomEncadrant);
        $('#editDomaine1').val(response.stage.nomDomaine);
        $('#editEtablissement1').val(response.stage.nomEtablissement);


        var conventionLink = $('<a>')
        .text('ouvrir')
        .attr('href',  "http://127.0.0.1:8000/"+ response.stage.convention )
        .attr('target', '_blank');

        var rapportLink = $('<a>')
        .text('ouvrir')
        .attr('href',  "http://127.0.0.1:8000/"+ response.stage.rapport )
       .attr('target', '_blank');



      // Append the link to a container element
      $('#conventionContainer').empty().append(conventionLink);
      $('#rapportContainer').empty().append(rapportLink);
        },
    });
});

