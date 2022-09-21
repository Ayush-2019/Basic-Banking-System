<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/money_icon.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/money_icon.jpg">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Check Balance</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-image:url('statics/bank_bck.jpg');">
    <?php include 'progress_and_db.php'; ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
        style="font-family:Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:25px;">
        
        <div class="collapse navbar-collapse">
            <b>
                <ul class="navbar-nav ">
                    <li class="nav-item nav-links" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; ">
                        <a class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="ourCustomers.php">Our Customers</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="user_feedback.php">Feedback</a>
                    </li>
                </ul>
            </b>
        </div>
    </nav>

    <style>
        .inp {
            border-radius: 20px;
            width: 380px;
            height: 50px;
            padding: 5px 5px 5px 15px;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;

            font-weight: bold;
            color: white;
        }

        .mybtn:active {
            background-color: black;
            color: white;
        }
    </style>



    <div>
        <div class="container" style="margin-top: 10%; padding:10px 80px 10px 80px; margin-left:210px;">
            <div
                style="width:80%; background-color:rgba(0,0,0,.5); padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white; margin-left:250px;">Check Account Balance</h1>
            </div>

            <div class="container"
                style="border-radius:5px solid blue; padding: 20px 20px 20px 20px; margin-top:50px; width:60%;">
                <form action="check_blc.php" method="post">
                    <input type="text" class="inp form-control" name="accno" placeholder="Account Number" value = "<?php if(isset($_GET['reads'])){echo $_GET['reads'];} ?>" style = "text-align:center"><br>
                    <br><input class="btn mybtn btn-outline-light" type="submit" value="Submit" style = "margin-left:150px;"><br><br>
                    </p>
                </form>
            </div>
        </div>


        <?php

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $accno = $_POST['accno'];
    
    $sql = "SELECT balance FROM costumers where accno='$accno'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert alert-success align-items-center text-center" style="width:25%; margin-left:500px" role="alert">
         <h2> <i class="fas fa-rupee-sign" aria-hidden="true"></i>'.mysqli_fetch_assoc($result)['balance'].'</h2></div>';
    }else{
        echo '<div class="alert alert-danger align-items-center text-center" style="width:34%; margin-left:500px" role="alert">
        <div><h2>
        <i class="fas fa-times-circle"></i>
        Something went wrong!</h2>
        </div>
      </div>';
    }
}
}


?>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>