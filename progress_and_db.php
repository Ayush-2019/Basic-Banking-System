<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>

    <div class="progress" style="display:none;
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 15;
    background: rgba(0,0,0,0.8) center no-repeat;
    text-align:center;
    "><h1 style="color:green; margin-top:35%;"><i class="fa fa-refresh fa-circle-notch fa-spin" aria-hidden="true"></i>
</h1>
</div>

<?php 

$servername = "localhost";
    $username = "root";
    $password = "password";
    $database = "ayushbanksp";

?>


<script>
    
    $(document).ready(function () {
        $("a, :submit").click(function(){
            $(".progress").css("display","block");
            setTimeout(function() { 
                $(".progress").css("display","none");
        }, 6000);
        });
    });
</script>


    </body>
</html>
