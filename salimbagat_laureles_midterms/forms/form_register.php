<?php
@include 'config.php';

if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $mname = mysqli_real_escape_string($conn, $_POST['middlename']);
    $addr = mysqli_real_escape_string($conn, $_POST['address']);
    $gender = $_POST['gender_type'];
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $bdate = $_POST['birthdate'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $pw = ($_POST['password']);
    $cpw = ($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM tbl_user 
        WHERE uname = '$uname'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
     $error[] = 'user already exists!';
    } else {
        if ($pw != $cpw) {
            $error[] = 'password is not matched!';
        } else {
            $insertUser = "INSERT INTO tbl_user(uname, password, user_type)
            VALUES('$uname','$pw','$user_type')";
            $insertInfo = "INSERT INTO tbl_info(fname, lname, mname, address,
            gender, age, birthdate, email) VALUES ('$fname','$lname','$mname',
            '$addr', '$gender', '$age','$bdate,','$email')";
            mysqli_query($conn, $insertUser);
            mysqli_query($conn, $insertInfo);
            header('location:form_login.php');
        }
    }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!--css start-->
    <link rel="stylesheet" href="../css/style.css">
    <!--css end-->

    <!--jquery start-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--jquery end-->
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Registration</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="text" name="firstname" required placeholder="enter your first name">
            <input type="text" name="lastname" required placeholder="enter your last name">
            <input type="text" name="middlename" required placeholder="enter your middle name">
            <input type="text" name="address" required placeholder="enter your address">
            <select name="gender_type" required placeholder="Gender">
                <option value="" disabled selected>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <input type="date" id="date" name="birthdate" required placeholder="enter your birthdate">
            <input readonly type="text" name="age" id="ageget" placeholder="Your age is: ">
            <input style="margin-bottom: 30px;" type="email" name="email" required placeholder="enter your email">

            <input type="text" name="username" required placeholder="enter your username">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="password" name="cpassword" required placeholder="confirm your password">
            <select name="user_type" required>
                <option value="" disabled selected>User Type</option>
                <option value="member">Member</option>
            </select>

            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Already have an account? <a href="form_login.php">Log in now</a></p>
        </form>
    </div>

    <script src = "../server/function.js"></script>
</body>
</html>