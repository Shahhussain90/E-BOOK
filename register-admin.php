<?php
    session_start();
    session_regenerate_id(true);
    if(!isset($_SESSION['Adminlogid'])){
        header("Location:ADMIN/AdminLogin.php");
    }

?>
<?php
$conn  = mysqli_connect("localhost","root","","eproject");
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from users where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header ('location:register-admin.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTERED USERS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styler.css">
    <style>
        <?php include "styler.css" ?>
    </style>
  </head>

<body>
<div class="nav-bar-AdminPanel">
        <div class="heading-div">
            <h4 class="h4">welcome to admin panel - <?php echo $_SESSION['Adminlogid'] ?></h4>
        </div>
        <div class="links-logout-btn">
            <div class="links-div">
                <a class="anchor-a" href="ADMIN/Admin Panel.php">Orders</a>
                <a class="anchor-a" href="register-admin.php">Users</a>
                <a class="anchor-a" href="ADMIN/addbooks.php">books</a>
                <a class="anchor-a" href="contact-admin.php">contact</a>
            </div>
                <form method="POST"> 
                    <button type="submit" class="log-out-btn" name="LogOut">log out</button>
                </form>
        </div>
    </div>


        <div class="input-div">
             <input type="text" id="myinput" placeholder="Search orders..." onkeyup="searchTable()">
        </div>














    <div class="container" style="margin-left:-0%;">
<a href="register.php" ><button class="btn btn-primary"style="margin-left:0px"> Add User</button></a>
    </div>
<table class="table text-center table-dark table-striped" id="myTable">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">firstname</th>
      <th scope="col">lastname</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">action</th>
     
    </tr>
  </thead>
  <?php
  $conn  = mysqli_connect("localhost","root","","eproject");
  $sql = "select * from users";
  $result = mysqli_query($conn,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $firstName = $row['firstname'];
        $lastName = $row['lastname'];
        $email = $row['email'];
        $password = $row['password'];
        

        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$firstName.'</td>
        <td>'.$lastName.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        
<td>
        <button class="btn btn-primary"><a href="updater.php?updateid='.$id.'" class="text-light">update</a></button>
        <button class="btn btn-danger"><a href="register-admin.php?deleteid='.$id.'" class="text-light">delete</a></button>
        </td>
        </tr>';
    }
  }
  ?>
 
</table> 



















<?php  
        if(isset($_POST['LogOut'])){
            session_destroy();
            error_reporting(0);
            header("location:AdminLogin.php");
        }
      
    ?>
    <script>
        function searchTable(){
            var input,filter,table,tr,td,i,txtvalue;

            input = document.getElementById("myinput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");


            for(a=0;a<tr.length;a++){
                td = tr[a].getElementsByTagName("td");

                for(b=0;b<td.length;b++){
                    txtvalue = td[b].textContent || td[b].innerText
                    if(txtvalue.toUpperCase().indexOf(filter)>-1){
                        tr[a].style.display="";
                        break;
                    }else{
                        tr[a].style.display="none"
                    }
                }
            }



        }
    </script>
</body>
</html>