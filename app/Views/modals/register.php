<div class="modal fade" id="mIR" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registration Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="newUser">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><ion-icon name="person-circle-outline"></ion-icon></span>
                            <input type="text" class="form-control" name="username" id="username" placeholder="6 characters min., 30 characters max.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><ion-icon name="mail-outline"></ion-icon></span>
                            <input type="email" class="form-control" name="email" id="email" placeholder="10 characters min., 50 characters max. Email must be unique.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><ion-icon name="home-outline"></ion-icon></span>
                            <input type="text" class="form-control" name="address" id="address" placeholder="House No., Street, Province, City, ZIP Code (You can change this later).">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <div class="input-group">
                            <span class="input-group-text"><ion-icon name="call-outline"></ion-icon></span>
                            <input type="text" class="form-control" name="contact" id="contact" placeholder="You can fill this later after registering (You can change this later).">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><ion-icon name="lock-closed-outline"></ion-icon></span>
                            <input type="password" class="form-control" name="password" id="password" placeholder="6 characters min., 30 characters max.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confpass">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><ion-icon name="refresh-outline"></ion-icon></span>
                            <input type="password" class="form-control" name="confpass" id="confpass" placeholder="Re-enter password for confirmation.">
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