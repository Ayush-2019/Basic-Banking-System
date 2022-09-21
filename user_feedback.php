<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/money_icon.jpg">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/money_icon.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/money_icon.jpg">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>Feedback Form</title>
</head>

<body style="background-image:url('statics/bank_bck.jpg'); padding-top:8%;">
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


    <?php

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['feedback'];
    
    $sql = "INSERT INTO `userfeedback` (`name`, `email`, `feedback`) VALUES ('$name', '$email', '$msg')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert alert-success" style = "margin-left:250px">
        <div>   
        <i class="fas fa-check-circle"></i>
          Thank you '.$name.' for your feedback! It matters for us :)
        </div>
      </div>';
    }else{
        echo '<div class="alert alert-danger" style = "margin-left:250px">
        <div>
        <i class="fas fa-times-circle"></i>
        Dear '.$name.'Sorry, Something went wrong!
        </div>
      </div>';
    }
}
}

?>



    <style>
        .inp {
            border-radius:20px;
            width: 300px;
            height: 70px;
            padding: 6px 6px 7px 12px;
        }

        .mybtn {
            box-shadow: 3px 3px 9px black;
            border-radius: 20px;
            font-weight: bold;
        }

        .mybtn:active {
            background-color: black;
            color: white;
        }
    </style>

    <div style = "margin-left: 200px; align-content: center;">
        <div class="container" style="padding:10px 80px 10px 80px; margin-top:1%;">
            <div
                style="width:80%; background-color:rgb(6, 6, 74); padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 3px 3px 9px gray;">
                <h1 style=" color:white; text-align: center;">USER FEEDBACK FORM</h1>
            </div>

            <div class="container"
                style="padding: 20px 20px 20px 20px; margin-top:50px; width:50%;">
                <form action="user_feedback.php" method="post">
                    <input type="text" class="inp form-control" name="name" placeholder="Enter Name" style = "text-align: center; margin-left:40px"><br><br>
                    <input type="email" class="inp form-control" name="email" placeholder="Enter Email" style = "text-align: center; margin-left:40px"><br><br>
                    <textarea name="feedback" class="" style="border-radius:20px; padding: 6px 7px 8px 16px;"
                        placeholder="Please give your feedback here" rows="7" cols="45"></textarea>
                    <br><br><input class="btn mybtn btn-primary" type="submit" style = "margin-left:150px" value="Submit">
                </form>
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>