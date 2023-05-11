<div class="container mt-5">
        <div class="jumbotron">
            <div class="card">
                <div class="card-body">
                    <!--add data Button trigger modal start-->
                    <button type="button" class="btn addDatabtn btn-primary" data-bs-toggle="modal" data-bs-target="#adddataModal">
                        Add Data
                    </button>
                    <!--add data Button trigger modal start-->

                    <!-- Main Table start -->
                    <div class="table-responsive mt-5" >
                        
                        <table id="DTsid" table class="table"> 
                            <caption>List of admins/users</caption>
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="text-center">ID</th>
                                    <th scope="col">USERNAME</th>
                                    <th scope="col">PASSWORD</th>
                                    <th scope="col">FIRST NAME</th>
                                    <th scope="col">LAST NAME</th>
                                    <th scope="col">MIDDLE NAME</th>
                                    <th scope="col">ADDRESS</th>
                                    <th scope="col">GENDER</th>
                                    <th scope="col">AGE</th>
                                    <th scope="col">BIRTHDATE</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">USER TYPE</th>
                                    <th scope="col" class="text-center">Operation</th>
                                </tr>
                            </thead>

                            <!--PHP mysql select table start-->
                            <?php
                            $sql = "SELECT
                                tbl_user.id_user, tbl_user.uname, tbl_user.password,
                                tbl_info.fname, tbl_info.lname, tbl_info.mname, tbl_info.address,
                                tbl_info.gender, tbl_info.age, tbl_info.birthdate,
                                tbl_info.email, tbl_user.user_type FROM tbl_user  
                                JOIN tbl_info ON tbl_user.id_user = tbl_info.id
                                WHERE tbl_user.user_type = 'admin' & 'member';";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id_user'];
                                    $uname = $row['uname']; ?>
                                    <!--PHP mysql select table end-->

                                    <!-- <tbody> -->
                                    <tr>
                                        <td class="text-center"><?php echo $id ?></td>
                                        <td><?php echo $uname ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['fname']; ?></td>
                                        <td><?php echo $row['lname']; ?></td>
                                        <td><?php echo $row['mname']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['age']; ?></td>
                                        <td><?php echo $row['birthdate']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['user_type']; ?></td>
                                        <td id="opr">
                                            <div class="d-flex gap-1 ">
                                                <!-- Update btn trigger modal start -->
                                                <button type="button" class="btn btn-success updadeBtn udBtn" data-bs-toggle="modal" data-bs-target="#updateModal">
                                                    Update
                                                </button>
                                                <!-- Update btn trigger modal end -->

                                                <!-- Delete btn trigger modal start -->
                                                <?php
                                                $show_data = '<button type="button" class="btn btn-danger deleteBtn" id="delbtn" data-bs-toggle="modal" data-bs-target="#deleteModal" aria-hidden="true">
                                                 Delete</button>';
                                                $hide_data = '<script> const link = document.querySelector("#delbt"); link.remove();</script>';
                                                if ($admnN != $uname) { //?if sesson uname != uname Delete button show
                                                    echo $show_data;
                                                } ?>
                                                <!-- Delete btn trigger modal end -->
                                            </div>
                                        </td>
                                        <!--//!PHP mysql select table if & while brackets start -->
                                <?php
                                }
                            }
                                ?>
                                <!-- </tbody> -->
                                <!--//!PHP mysql select table if & while brackets start -->
                        </table>
                    </div>
                    <!-- Main Table end -->
                </div>
            </div>
        </div>
    </div>