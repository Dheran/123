<div class="modal fade" id="deleteModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">

                <form action="../server/form_function.php" method="POST">
                    <div class="modal-header">
                        <input type="hidden" name="delete_id" class="delete_id">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Do you want to delete this data?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="deletedata" class="btn btn-danger" id="delbtn" data-bs-dismiss="modal">Yes</button>
                        <button type="button" class="btn btn-success updadeBtn" data-bs-dismiss="modal">No</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>