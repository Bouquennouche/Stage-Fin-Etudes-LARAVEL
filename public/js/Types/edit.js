$(".editBtn").on("click", function () {
    let type_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#editModal").modal("show");

    $.ajax({
        type: "GET",
        url: "/type/" + type_id,
        success: function (response) {
            // console.log(response)
            $("#editId").val(response.type.id);
            $("#editNom").val(response.type.nom);
        },
    });
});

$(document).on("click", ".deleteBtn", function () {
    let stagiaire_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#deleteModal").modal("show");
    $("#deleting_id").val(stagiaire_id);
});
