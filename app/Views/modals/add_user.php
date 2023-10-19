<div class="modal fade" id="addUser" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="newUser">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="newUserName">Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-user-alt"></i></span>
                            <input type="text" class="form-control" name="username" id="newUserName" placeholder="5 characters min., 30 characters max.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="newUserEmail">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" id="newUserEmail" placeholder="10 characters min., 50 characters max. Email must be unique.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="newUserPosition">Position</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-id-badge"></i></span>
                            <select name="position_id" id="newUserPosition" class="form-select">
                                <option value="" disabled selected>-- Select Position --</option>
                                <?php foreach ($position as $key) {
                                    echo '<option value="' . $key['id'] . '">' . $key['position'] . '</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="newUserPassword">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" id="newUserPassword" placeholder="5 characters min., 30 characters max.">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-md btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>