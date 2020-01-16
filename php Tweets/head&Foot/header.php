<?php include("config_file/conn.php"); 
        // include("index.php");
$sql="SELECT MAX(id) FROM users"; 
$result=mysqli_query($conn,$sql);
$totalTwst=mysqli_fetch_assoc($result); 
// print_r($totalTwst)
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        
    <title>php practice</title>
    <style>
    .brand{
        background:#cbb09c !important;
    }
    .brand-text{
        color:#cbb09c !important;
        
    }
    #form_sec{
        padding:20px 20px;
    }
    </style>
</head>
<body class="#ad1457 pink darken-3">
    <nav class="white" >
        <div class="container">
            <a href="index.php"class="brand-logo brand-text" >pHp-Tweets</a>
            <ul id="nav-mobile" class="right hide-on-samll-and-down" >
            <li><a href="Tweet.php" class="btn brand">Tweet <?php echo $totalTwst['MAX(id)']+ 1;?> </a>< 
            </ul>
        </div>
    </nav>
