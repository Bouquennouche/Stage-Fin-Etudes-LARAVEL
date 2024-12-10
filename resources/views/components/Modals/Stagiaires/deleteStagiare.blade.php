<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Supprimer un stagiaire</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('delete-stagiaire') }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Etes-vous sure ?!
                    <input type="text" hidden name="delete_stagiare_id" id="deleting_id">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-danger">Oui</button>
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Non</button>
                </div>
            </form>
        </div>
    </div>
</div>
