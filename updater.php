<?php
// Establishing the database connection
$conn = mysqli_connect("localhost", "root", "", "eproject");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submitBtn'])) {
    // Using prepared statements to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $query = "UPDATE users SET firstname=?,lastname=?, email=?, password=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    
    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, 'ssssi', $firstname,$lastname, $email, $password, $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
       
        echo "<script>alert('Update successful');
        window.location.href='register-admin.php'
        </script>";
        // header('location:register-admin.php');
        // window.location.href='index.php'
       
    } else {
        echo "<script>alert('Update failed')</script>";
    }
    mysqli_stmt_close($stmt);
}

// Retrieve data for the form
if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM users WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $email = $row["email"];
        $password = $row["password"];
    } else {
        echo 'No records found';
    }
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="styleregister.css">
    <style>
        <?php include "styleregister.css" ?>
    </style>

<body
    style="background-image: url(images/Untitled\ design.png);background-attachment: fixed;background-size: cover;background-position: center;color: black;">
    <div class="login-main">
        <div class="illustration">
            <img class="login-img" src="images/Library.gif" alt="">
        </div>
        <div class="login">
            <form action="updater.php" method="post">
                <div class="heading">
                    <h1>register:)</h1>
                </div>
                <p class="para-login">signup now and get full access to our website. </p>
                <div class="input-main">
                    <div class="l-2">
                    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">
                        <input type="text" placeholder="Firstname" name="firstname" id="name" value="<?php echo isset($firstname) ? $firstname : ''; ?>">
                        <input type="text" placeholder="Lastname" name="lastname" id="lname" value="<?php echo isset($lastname) ? $lastname : ''; ?>">
                    </div>
                </div><br>

                <div class="input-main">
                    <div class="l-2">
                        <input type="email" placeholder="Email" name="email" id="mail" value="<?php echo isset($email) ? $email : ''; ?>">
                    </div>
                </div><br>

                <div class="input-main">
                    <div class="l-2">
                        <input type="password" placeholder="Password" name="password" id="mail" value="<?php echo isset($password) ? $password : ''; ?>">
                    </div>
                </div><br>

                
            
                <div class="input-main">
                    <input type="submit" name="submitBtn" value="update" id="btn-REGISTER" >
                    <!-- style="width:80%; margin-left: 9%; border:1px solid #f07c29; font-size:15px; color:black; border-radius:11px;" id="" -->
                </div>

<p class="para-join">already have an account?<a href="login.php">signin</a></p>

            </form>
        </div>
    </div>
</body>
</html>
