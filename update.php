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
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    $query = "UPDATE contact SET name=?, email=?, message=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    
    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, 'sssi', $name, $email, $message, $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "<script>alert('Update successful')</script>";
        
    } else {
        echo "<script>alert('Update failed')</script>";
    }
    mysqli_stmt_close($stmt);
}

// Retrieve data for the form
if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM contact WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $email = $row["email"];
        $message = $row["message"];
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
    <title>Update Student</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="stylec.css">
<body>
    
    <div class="parent">
        <div class="c-1">
            <div class="cf">
                <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 50px; color:#f07c29;"></i><br>
                <p><a href="https://www.google.com/maps/place/NEXTAG/@24.9061647,67.0328208,17z/data=!3m1!4b1!4m6!3m5!1s0x3eb33f82a9070e7d:0xf11011dfa442d9d0!8m2!3d24.9061599!4d67.0353957!16s%2Fg%2F11r5t2n0l3?hl=en"
                        style="color:black; text-decoration: none;"><span style="font-weight: bolder;">Address</span>
                        <br> <span style="color:grey;">North
                            Karachi</span></a></p>
            </div><br><br>
            <div class="cf1">

                <i class="fa fa-envelope-open" aria-hidden="true" style="font-size: 50px; color: #f07c29;"></i><br>
                <p><a href="" style="color:black; text-decoration: none;"><span
                            style="font-weight: bolder;">email</span>
                        <br> <span style="color:grey;">info@gmail.com</span></a></p>
                <!-- <p style="color: black;"><span style="font-weight: bolder;">Email</span> <br> <span
                        style="color:grey; ">sazan1351@gmail.com</span></p> -->
            </div><br><br>
            <div class="cf2">



                <i class="fa fa-phone" aria-hidden="true" style="font-size: 50px; color: #f07c29;"></i><br>
                <p style="color:black;"><span style="font-weight: bolder;">Phone</span> <br> <span
                        style="color:grey;">+123 345678 99</span></p>
            </div>
        </div>
        <div class="c-2">

        </div>
        <div class="c-3">
            <form id="form" action="" method="post">
                <h1 class="h">send us a message</h1><br>
                <p class="pc">if you have any work from me or any types of quries related to my tutorial,you can send me message from here.it's my pleasure to help you.</p>
                    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">

                <input type="text" name="name" placeholder="Enter your name" value="<?php echo isset($name) ? $name : ''; ?>"><br><br>

                <input type="email" name="email" placeholder="Enter your email" value="<?php echo isset($email) ? $email : ''; ?>"><br><br>

                <textarea rows="5" name="message" placeholder="Type your Message"> <?php echo isset($message) ? $message : ''; ?></textarea><br><br>
                <input type="submit" name="submitBtn" value="update">
            </form>
        </div>
    </div>
    
    <div class="map">
        <div class="mapholder">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d115836.45288146895!2d67.0302208!3d24.8676352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1679763247957!5m2!1sen!2s"
                 style="border:0;" class="actual-map" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</body>
</html>
