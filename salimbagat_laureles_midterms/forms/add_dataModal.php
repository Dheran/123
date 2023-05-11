<div class="modal fade mt-5" id="adddataModal" tabindex="-1" data-bs-backdrop="static" tabindex="-1" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="fa-solid fa-user-plus fs-4 me-2"></i>Add Data
                    </h5>
                    <button type="button" class="btn-close close-update addclose" id="ADclose" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="../server/form_function.php" id="ADform" method="POST">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" placeholder="username" name="username" id="floatinguname" required class="form-control ADuname shadow-none">
                                    <label for="floatinguname">Username</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="password" name="password" class="form-control ADpw addpw" id="floatingPassword" required placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                    <i class="fa-solid fa-eye addeye"></i>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="firstname" id="floatingfn" required placeholder="first name" class="form-control ADfname shadow-none">
                                    <label for="floatingfn">First Name</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="lastname" id="floatingln" required placeholder="last name" class="form-control ADlname shadow-none">
                                    <label for="floatingln">Last Name</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="middlename" id="mnfloatud" required placeholder="middle name" class="form-control mname shadow-none">
                                    <label for="mnfloatud">Middle Name</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="address" id="floatingaddr" placeholder="address" required class="form-control ADaddr shadow-none">
                                    <label for="floatingaddr">Address</label>

                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <select name="gender_type" id="floatingSelect" class="form-select" required placeholder="Gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <label for="floatingSelect">Gender</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Birthdate</label>
                                    <input type="date" id="ADbdate" name="birthdate" required placeholder="enter your birthdate" style="width: 100%; font-size: 15px; padding: 6px; border-color: #CED4DA; border-radius: 5px;">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Age</label>
                                    <input readonly type="text" name="age" id="ADageget" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="email" id="floatemail" name="email" placeholder="email@email.com" required class="form-control ADemail shadow-none">
                                    <label for="floatemail">Email</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <select name="user_type" id="floatRole" placeholder="Role" class="form-select" required>
                                        <option value="member">Member</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                    <label for="floatRole">User Type</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1 mt-2 mb-2">
                            <button type="submit" name="addDataAdmin" class="btn btn-primary addDatabtn">Add Data</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>