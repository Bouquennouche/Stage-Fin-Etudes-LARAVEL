$(document).ready(function () {
    $("#entiteSelect").on("change", function () {
        var entiteId = $(this).val();
        $("#utilisateurSelect").empty();

        if (entiteId) {
            $.ajax({
                url: "/utilisateurs/" + entiteId,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    if (data.length > 0) {
                        $.each(data, function (key, value) {
                            $("#utilisateurSelect").append(
                                '<option value="' +
                                    value.id +
                                    '">' +
                                    value.nom+"_"+value.prenom+"_"+value.id +
                                    "</option>"
                            );
                        });
                    } else {
                        $("#utilisateurSelect").append(
                            '<option value="">No utilisateur found</option>'
                        );
                    }
                },
            });
        }
    });

});