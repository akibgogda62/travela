<?php
/* Template Name: stripe */

$id = $_GET['package_id'];
$price = $_GET['package_price'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        #payment-form {
            max-width: 400px;
            margin: auto;
        }

        .form-row {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #card-element {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 15px;
        }

        #card-errors {
            color: #dc3545;
            /* Bootstrap's red color for error messages */
            margin-top: 10px;
        }

        button {
            background-color: #69d167;
            /* Bootstrap's primary blue color */
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
            /* Darker shade for hover effect */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="my-4 text-center">Make Payment</h2>
        <form action="<?php echo get_stylesheet_directory_uri(); ?>/charge.php" method="post" id="payment-form">
            <div class="form-row">
                <label for="">First Name :</label>
                <input type="hidden" value='<?php echo $id; ?>' name='id'>
                <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
                <label for="">Last Name :</label>
                <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
                <label for="">Email :</label>
                <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
                <label for="">Amount :</label>
                <input type="text" name="price" class="form-control mb-3 StripeElement StripeElement--empty" value='<?php echo $price; ?>' readonly>
                <label for="">Card Details :</label>
                <div id="card-element" class="form-control">
                    <!-- a Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors -->
                <div id="card-errors" role="alert"></div>
            </div>

            <button type="submit" style='background-color: #4caf50 ; color: #fff;'>Submit Payment</button>
        </form>
    </div>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="https://js.stripe.com/v3/"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/charge.js"></script>
</body>

</html>