$(".editBtn").on("click", function () {
    let label_id = $(this).attr("value");
    console.log(label_id);
    $("#editModal").modal("show");

    $.ajax({
        type: "GET",
        url: "/labels/" + label_id,
        success: function (response) {
            $("#editId").val(response.label.id);
            $("#editNom").val(response.label.nom);
            $("#editDate").val(response.label.date_delibration);
        },
    });
});

$(document).on("click", ".deleteBtn", function () {
    let label_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#deleteModal").modal("show");
    $("#deleting_id").val(label_id);
});
