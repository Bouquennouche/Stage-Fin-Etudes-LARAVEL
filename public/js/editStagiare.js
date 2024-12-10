console.log('hello world');

$('.editBtn').on('click',function () {
    let stagiaire_id = $(this).attr('value');
    // console.log(stagiaire_id)
    $('#editModal').modal('show');

    $.ajax({
        type: "GET",
        url: "/stagiaire/"+stagiaire_id,
        success: function (response) {
            // console.log(response)
            $('#editId').val(response.stagiaire.id);
            $('#editNom').val(response.stagiaire.nom);
            $('#editCin').val(response.stagiaire.CIN);
            $('#editPrenom').val(response.stagiaire.prenom);
            $('#editGenre').val(response.stagiaire.gendre);
            $('#editVille').val(response.stagiaire.ville);
            $('#editAdresse').val(response.stagiaire.adresse);
            $('#editDateNais').val(response.stagiaire.dateNaissance);
            $('#editLieuNais').val(response.stagiaire.lieuNaissance);
            $('#editTel').val(response.stagiaire.telephone);
            $('#editEmail').val(response.stagiaire.email);
        }
    });

})


$('.viewBtn').on('click',function () {
    let stagiaire_id = $(this).attr('value');
    // console.log(stagiaire_id)
    $('#viewModal').modal('show');

    $.ajax({
        type: "GET",
        url: "/stagiaire/"+stagiaire_id,
        success: function (response) {
            // console.log(response)
            $('#editId').val(response.stagiaire.id);
            $('#editNom1').val(response.stagiaire.nom);
            $('#editCin1').val(response.stagiaire.CIN);
            $('#editPrenom1').val(response.stagiaire.prenom);
            $('#editGenre1').val(response.stagiaire.gendre);
            $('#editVille1').val(response.stagiaire.ville);
            $('#editAdresse1').val(response.stagiaire.adresse);
            $('#editDateNais1').val(response.stagiaire.dateNaissance);
            $('#editLieuNais1').val(response.stagiaire.lieuNaissance);
            $('#editTel1').val(response.stagiaire.telephone);
            $('#editEmail1').val(response.stagiaire.email);
        }
    });

})

$(document).on('click','.deleteBtn',function(){
    let stagiaire_id = $(this).attr('value');
    // console.log(stagiaire_id)
    $('#deleteModal').modal('show');
    $('#deleting_id').val(stagiaire_id);
})
