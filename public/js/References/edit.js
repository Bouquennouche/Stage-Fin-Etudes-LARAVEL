$(".editBtn").on("click", function () {
    let reference_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#editModal").modal("show");

    $.ajax({
        type: "GET",
        url: "/reference/" + reference_id,
        success: function (response) {
            // console.log(response)
            $("#editId").val(response.reference.id);
            $("#editNom").val(response.reference.nom);
        },
    });
});

$(document).on("click", ".deleteBtn", function () {
    let reference_id = $(this).attr("value");
    // console.log(reference_id)
    $("#deleteModal").modal("show");
    $("#deleting_id").val(reference_id);
});
