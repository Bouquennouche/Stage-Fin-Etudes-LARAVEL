$(".editBtn").on("click", function () {
    let entite_id = $(this).attr("value");
     console.log(entite_id)
    $("#editModal").modal("show");

    $.ajax({
        type: "GET",
        url: "/entite/" + entite_id,
        success: function (response) {
            // console.log(response)
            $("#editId").val(response.entite.id);
            $("#editNom").val(response.entite.nom);
            $("#editAdresse").val(response.entite.adresse);
            $("#editTelephone").val(response.entite.telephone);
        },
    });
});

$(document).on("click", ".deleteBtn", function () {
    let entite_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#deleteModal").modal("show");
    $("#deleting_id").val(entite_id);
});
