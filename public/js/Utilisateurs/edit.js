$(".editBtn").on("click", function () {
    let utilisateur_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#editModal").modal("show");

    $.ajax({
        type: "GET",
        url: "/ut/" + utilisateur_id,
        success: function (response) {
            // console.log(response)
            $("#editId").val(response.utilisateur.id);
            $("#editNom").val(response.utilisateur.nom);
            $("#editPrenom").val(response.utilisateur.prenom);
        },
    });
});

$(document).on("click", ".deleteBtn", function () {
    let stagiaire_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#deleteModal").modal("show");
    $("#deleting_id").val(stagiaire_id);
});
