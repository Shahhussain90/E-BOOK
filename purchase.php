<?php
session_start();
$con=mysqli_connect("localhost","root","","eproject");

    if(mysqli_connect_error()){
        echo "<script>
            alert('cannot connect to database')
           window.location.href='AddToCart.php'
           </script>";
           exit();
    }




    if($_SERVER["REQUEST_METHOD"]=="POST")
{

    if(isset($_POST['purchase'])){
        
        $query1="INSERT INTO `order_manager`( `Full_name`, `Phone_no`, `Address`, `pay_mod`) VALUES ('$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
     if(mysqli_query($con,$query1)){

        $order_id = mysqli_insert_id($con);
        $query2 = "INSERT INTO `user_orders`(`order_id`, `Item_name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
        $stmt = mysqli_prepare($con,$query2);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt,'isii',$order_id,$Item_name,$Price,$Quantity);
            foreach($_SESSION['cart'] as $key => $values){
                $Item_name=$values['item_name'];
                $Price=$values['price'];
                $Quantity=$values['Quantity'];
                mysqli_stmt_execute($stmt);
            };

            unset($_SESSION['cart']);
            echo "<script>
                        alert('Order placed,it will be delivered to your door as soon as possible');
                        window.location.href='index.php';
                    </script>";



            
        }
        else{
            echo "<script>
                        alert('SQL query prep error')
                        window.location.href='AddToCart.php'
                    </script>";
        }
       

        }
     else{
        echo "<script>
                    alert('SQL error')
                    window.location.href='AddToCart.php'
            </script>";
     }


    }

}










?>