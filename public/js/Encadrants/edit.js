$(".editBtn").on("click", function () {
    let encadrant_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#editModal").modal("show");

    $.ajax({
        type: "GET",
        url: "/encadrant/" + encadrant_id,
        success: function (response) {
            // console.log(response)
            $("#editId").val(response.encadrant.id);
            $("#editNom").val(response.encadrant.nomEncadrant);
            $("#editPrenom").val(response.encadrant.prenomEncadrant);
            $("#editPoste").val(response.encadrant.poste);
        },
    });
});

$(document).on("click", ".deleteBtn", function () {
    let encadrant_id = $(this).attr("value");
    // console.log(encadrant_id)
    $("#deleteModal").modal("show");
    $("#deleting_id").val(encadrant_id);
});
