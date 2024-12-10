$(".editBtn").on("click", function () {
    let domaine_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#editModal").modal("show");

    $.ajax({
        type: "GET",
        url: "/domaine/" + domaine_id,
        success: function (response) {
            // console.log(response)
            $("#editId").val(response.domaine.id);
            $("#editNom").val(response.domaine.nomDomaine);
            $("#editSp").val(response.domaine.specialite);
        },
    });
});

$(document).on("click", ".deleteBtn", function () {
    let stagiaire_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#deleteModal").modal("show");
    $("#deleting_id").val(stagiaire_id);
});
