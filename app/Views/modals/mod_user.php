<div class="modal fade" id="modUser" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modify User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="modUser">
                <div class="modal-body">
                    <input type="hidden" id="modUserId" name="user_id">
                    <div class="form-group">
                        <label for="modUserName">Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-user-alt"></i></span>
                            <input type="text" class="form-control" name="username" id="modUserName" placeholder="6 characters min., 30 characters max.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="modUserEmail">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" id="modUserEmail" placeholder="10 characters min., 50 characters max. Email must be unique.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="modUserPosition">Position</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-id-badge"></i></span>
                            <select name="position_id" id="modUserPosition" class="form-select">
                                <option value="" class="text-muted" disabled selected>-- Select Position --</option>
                                <?php foreach ($position as $key) {
                                    echo '<option value=' . $key['id'] . '>' . $key['position'] . '</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-md btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>