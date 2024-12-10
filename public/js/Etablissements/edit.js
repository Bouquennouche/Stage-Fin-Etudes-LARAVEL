$(".editBtn").on("click", function () {
    let etablissement_id = $(this).attr("value");
     console.log(etablissement_id)
    $("#editModal").modal("show");

    $.ajax({
        type: "GET",
        url: "/etablissement/" + etablissement_id,
        success: function (response) {
            // console.log(response)
            $("#editId").val(response.etablissement.id);
            $("#editNom").val(response.etablissement.nomEtablissement);
            $("#editEmail").val(response.etablissement.email);
            $("#editAdresse").val(response.etablissement.adresse);
            $("#editVille").val(response.etablissement.ville);
            $("#editTelephone").val(response.etablissement.telephone);
        },
    });
});

$(document).on("click", ".deleteBtn", function () {
    let etablissement_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#deleteModal").modal("show");
    $("#deleting_id").val(etablissement_id);
});
