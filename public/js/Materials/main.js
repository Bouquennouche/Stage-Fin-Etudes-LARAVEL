$(document).ready(function () {
    $("#fabricantSelect").on("change", function () {
        var fabricantId = $(this).val();
        $("#typeSelect").empty();
        $("#referenceSelect").empty();

        if (fabricantId) {
            $.ajax({
                url: "/types/" + fabricantId,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    if (data.length >= 0) {
                        $.each(data, function (key, value) {
                            $("#typeSelect").append(
                                '<option value="' +
                                    value.id +
                                    '">' +
                                    value.nom +
                                    "</option>"
                            );
                        });

                    } else {
                        $("#typeSelect").append(
                            '<option value="">No type found</option>'
                        );
                    }
                    var typeId = data[0].id;
                    $("#referenceSelect").empty();
                    if (typeId) {
                        $.ajax({
                            url: "/references/" + typeId,
                            type: "GET",
                            dataType: "json",
                            success: function (data) {
                                if (data.length >= 0) {
                                    $.each(data, function (key, value) {
                                        $("#referenceSelect").append(
                                            '<option value="' +
                                                value.id +
                                                '">' +
                                                value.nom +
                                                "</option>"
                                        );
                                    });
                                } else {
                                    $("#referenceSelect").append(
                                        '<option value="">No references found</option>'
                                    );
                                }
                            },
                        });
                    }
                },
            });

    

        }
    });

    $("#typeSelect").on("change", function () {
        var typeId = $(this).val();
        $("#referenceSelect").empty();

        if (typeId) {
            $.ajax({
                url: "/references/" + typeId,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    if (data.length >= 0) {
                        $.each(data, function (key, value) {
                            $("#referenceSelect").append(
                                '<option value="' +
                                    value.id +
                                    '">' +
                                    value.nom +
                                    "</option>"
                            );
                        });
                    } else {
                        $("#referenceSelect").append(
                            '<option value="">No references found</option>'
                        );
                    }
                },
            });
        }
    });
});


$(document).on("click", ".deleteBtn", function () {
    let label_id = $(this).attr("value");
    // console.log(stagiaire_id)
    $("#deleteModal").modal("show");
    $("#deleting_id").val(label_id);
});





$(".editBtn").on("click", function () {
    let material_id  = $(this).attr("value");
    // console.log(stagiaire_id)
    let nonRef;
    let nomType;
    let nomFabrican;


    $("#editModal").modal("show");

    $.ajax({
        type: "GET",
        url: "/material/" + material_id  ,
        success: function (response) {
            console.log(response)
            $("#editId").val(response.materiel.id);
            $("#editNumSerie").val(response.materiel.numero_serie);
            $("#editModele").val(response.materiel.modele);
            $("#editNumInventaire").val(response.materiel.numero_inventaire);
            $("#editFabricant").val(response.materiel.fabricant.nom);
            $("#editType").val(response.materiel.type.nom);
            $("#editReference").val(response.materiel.reference.nom);
            $("#editUtilisateur").val(response.materiel.utilisateur.nom);
        },
    });
});

