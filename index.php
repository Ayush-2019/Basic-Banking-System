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

    <title>Sparks Bank-By Ayush Kiledar</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body style="background-image:url('statics/bank_bck.jpg');">

<div id="container">

    <?php include 'progress_and_db.php'; ?>


    <style>
        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            background-color: white;
            font-weight: bold;
            color: black;
        }

        .mybtn:active {
            background-color: black;
            color: white;
        }
    </style>

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



    <div class="container-large"
        style="color:white; height:500px; width: 100%; padding:8% 2% 2% 2%;">
        <div class="row">
            <div class="col" style="margin-left: 5%;">
                <br><br><p
                    style="font-size:50px; text-shadow:4px 4px 4px grey; text-align:center;"><b>Sparks Bank<br> Developed By Ayush Kiledar</b></p>
            </div>
            <div class="col" style="margin:4% 0% 0% 5%; text-align:center;">
                <img src="statics/money_img.jpg" width = "300px" height = "300px" style = "border:10px solid black";>
            </div>
        </div>
    </div>

    <div style="text-align:center">
        <div class="container"
            style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
            <h1 style="text-shadow:2px 2px 2px gray; color:white;"><b>Bank Operations</b></h1>
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        <div
                            style="background-color:#343a42; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-user-alt fa-8x"></i><br><br>
                            <a href="ourCustomers.php"><button type="button" class="btn btn-outline-light mybtn">See
                                    Customers</button></a><br>
                            
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#343a42; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fa fa-handshake fa-8x"></i><br><br>
                            <a href="send_money.php"><button type="button" class="btn btn-outline-light mybtn">Transfer
                                    Money</button></a><br>
                            
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#343a42; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fa fa-money-bill fa-8x" ></i><br><br>
                            <a href="check_blc.php"><button type="button" class="btn btn-outline-light mybtn">Check
                                    Balance</button></a><br>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</div>
</body>

</html>