$(".editBtn").on("click", function () {
    let fabricant_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#editModal").modal("show");

    $.ajax({
        type: "GET",
        url: "/fabricant/" + fabricant_id,
        success: function (response) {
            // console.log(response)
            $("#editId").val(response.fabricant.id);
            $("#editNom").val(response.fabricant.nom);
        },
    });
});

$(document).on("click", ".deleteBtn", function () {
    let stagiaire_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#deleteModal").modal("show");
    $("#deleting_id").val(stagiaire_id);
});
