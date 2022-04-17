<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Basic Bank Management System</title>

    <style type="text/css">
    body {
        background-color: darkorange;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        overflow: hidden;
        font-weight: 600;
        text-align: center;
    }

    button {
        padding: 15px 25px;
        border: unset;
        border-radius: 15px;
        color: white;
        z-index: 1;
        background: #465fc2;
        position: relative;
        font-weight: 1000;
        font-size: 17px;
        -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
        box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
        transition: all 250ms;
        overflow: hidden;
    }

    button::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0;
        border-radius: 15px;
        background-color: #212121;
        z-index: -1;
        -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
        box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
        transition: all 250ms
    }

    button:hover {
        color: #e8e8e8;
    }

    button:hover::before {
        width: 100%;
    }

    .one {

        text-align: center;
        margin: 10px;
        padding: 20px;
    }

    .two {

        margin: 10px;
        padding: 20px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        font-size: 20px;

    }

    .done {

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 10px;
        padding-right: 80px;
    }

    .dtwo {

        padding: 10px;

    }

    .dthree {

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 10px;
        padding-left: 80px;
    }

    img {
        width: 100%;
        height: 500px;
    }
    </style>

</head>

<body>
    <?php
      include 'name.php';
    ?>

    <section class="one">
        <h1><b><i>Basic Banking System</i></b></h1>
    </section>


    <section class="two">
        <div class="done">
            <a href="history.php"><button>Transaction Details</button></a> <br>
            <p>Records of all Transaction History</p>
        </div>

        <div class=dtwo>
            <img src="Bank.png" alt="bank image">
        </div>

        <div class="dthree">
            <a href="transfermoney.php"><button> Customer Details</button></a> <br>
            <p>Details of each and every Customer</p>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>