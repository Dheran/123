<div class="modal fade mt-5" id="updateModal" tabindex="-1" data-bs-backdrop="static" tabindex="-1" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>Update Data
                    </h5>
                    <button type="button" class="btn-close close-update closeUD" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="../server/form_function.php" method="POST">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <input type="hidden" class="update_id" name="update_id">
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="username" id="unamefloat" placeholder="uname" class="form-control uname shadow-none">
                                    <label for="unamefloat">username</label>
                                </div>
                                <div class="form-floating col-md-6 ps-0 mb-3">
                                    <input type="password" name="password" class="form-control pw updatepw" id="floatingPasswordUD" placeholder="Password">
                                    <label for="floatingPasswordUD">Password</label>
                                    <i class="fa-solid fa-eye update-eye"></i>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="firstname" id="fnfloatud" placeholder="fname" class="form-control fname shadow-none">
                                    <label for="fnfloatud">First Name</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="lastname" id="lnfloatud" placeholder="lname" class="form-control lname shadow-none">
                                    <label for="lnfloatud">Last Name</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="middlename" id="mnfloatud" placeholder="mname" class="form-control mname shadow-none">
                                    <label for="mnfloatud">Middle Name</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="address" id="addrfloatud" placeholder="addr" class="form-control addr shadow-none">
                                    <label for="addrfloatud">Address</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <select name="gender_type" class="gender form-select" id="genderfloatud" placeholder="Gender">
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                        <option value="other">other</option>
                                    </select>
                                    <label for="genderfloatud">Gender</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Birthdate</label>
                                    <input type="date" class="bdate" name="birthdate" placeholder="enter your birthdate" style="width: 100%; font-size: 15px; padding: 6px; border-color: #CED4DA; border-radius: 5px;">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Age</label>
                                    <input readonly type="text" name="age" class="form-control ageget shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="email" name="email" id="emailfloatud" placeholder="email" class="form-control email shadow-none">
                                    <label for="emailfloatud">Email</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <select name="user_type" class="roleType form-select" id="rolefloatud" placeholder="roletype">
                                        <option value="member">member</option>
                                        <option value="admin">admin</option>
                                    </select>
                                    <label for="rolefloatud">Role Type</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1 mt-2 mb-2">
                            <button type="submit" name="updatedataAdmin" class="btn btn-success udBtn" data-bs-dismiss="modal">Update Data</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>