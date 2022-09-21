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

    <title>Send money</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

        td {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        select:invalid{
            color:gray;
        }

        option[value=""][disabled] {
        display: none;
        }
        option {
        color: black;
        }
    </style>

    <div style = "margin-left:250px">

        <div class="container" style="margin-top:2%;">
            <div
                style="width:80%; background-color:rgba(0,0,0,.5); padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray; text-align:200px;">
                <h1 style=" color:white; margin-left:350px;">Make Transaction</h1>
            </div>
            <br><br>
            <div style="border-radius:10px;">
                <form action="send_money.php" method="post">
                    <table>
                        <tr>
                            <td><input type="text" class="inp form-control" name="accno1" required
                                    placeholder="Sender's Account Number"
                                    value="<?php if(isset($_GET['reads'])){echo $_GET['reads'];} ?>" style = " margin-left:350px;"></td>
                        <tr>
                        <tr>
                            <td><input type="number" class="inp form-control" name="amount" required
                                    placeholder="Amount to Transfer" style = " margin-left:350px;"></td>
                        </tr>
                        <tr>
                            <td>
                            <select name="accno2" placeholder = "Select Receiver's account number" class = "inp" required style = " margin-left:350px;">
                            <option value="" disabled selected>Select Receiver's account number</option>
                                <option value="7368789875">7368789875</option>
                                <option value="3896115532">3896115532</option>
                                <option value="4567886978">4567886978</option>
                                <option value="5353112532">5353112532</option>
                                <option value="8659722625">8659722625</option>
                                <option value="8824438190">8824438190</option>
                                <option value="8754807219">8754807219</option>
                                <option value="1974625511">1974625511</option>
                                <option value="4987416858">4987416858</option>
                                <option value="6112694541">6112694541</option>
                            </select>


                            </td>
                        </tr>
                    </table>
                    <br><input class="btn mybtn btn-primary" type="submit" value="Transfer" style = " margin-left:500px;"><br><br>
                    
                    <a href="check_blc.php?reads=<?php if(isset($_GET['reads'])){echo $_GET['reads'];} ?>" style = " margin-left:470px;"><b>Check Your Balance</b></a>
                </form>
            </div>
        </div>


        <?php 

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){

    
    $sender = $_POST['accno1'];
    $amount = $_POST['amount'];
    $reciever = $_POST['accno2'];
    
    
    $checkblcquery = "SELECT balance FROM costumers where accno='$sender'";
    $checkblc = mysqli_query($conn, $checkblcquery);
    $ava_blc = mysqli_fetch_assoc($checkblc)['balance'];

    if($ava_blc >= $amount){
    $sql1 = "UPDATE costumers SET balance= balance-$amount WHERE accno='$sender'";
    $sql2 = "UPDATE costumers SET balance= balance+$amount WHERE accno='$reciever'";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    if($result1 && $result2){
        echo '<div class="alert alert-success align-items-center text-center" style="width:50%; margin-left:250px" role="alert">
        <div>   
        <h2><i class="fas fa-check-circle"></i>
          Amount Transfered Successfully!</h2></div>
        </div>
      </div>';

      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'succeed')";
      $sqltransact = mysqli_query($conn, $sqltran);
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops! Something went wrong!
        </div>
      </div>';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
      $sqltransact = mysqli_query($conn, $sqltran);
    }
}else{
    echo '<div class="alert alert-danger align-items-center text-center" style="width:50%; margin-left:250px" role="alert">
        <div>   
        <h2><i class="fas fa-times-circle"></i>
        Not Sufficient Balance in Account!</h2></div>
        </div>
      </div>
      ';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
      $sqltransact = mysqli_query($conn, $sqltran);
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