<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php

    require('../../../../travela/wp-load.php');

    $id =  $_POST['packages_id'];
    $first =  $_POST['first_name'];
    $last = $_POST['last_name'];
    $email =  $_POST['email'];
    $price =  $_POST['price'];
    $stripeToken = $_POST['stripeToken'];

    $api_key = "sk_test_51OWvghJmrzL8izdHRsmnERC3aEvLVnc018MNVbGUUXQhPlCais67J55XftsD3vp4caJwCxENMDwgxuEDTPPx75Z600iLBJUDQh"; // Replace with an invalid or incorrect key

    // API endpoint URL for creating a charge
    $api_url = "https://api.stripe.com/v1/charges";

    // Data to send to the API
    $data = [
        'amount' => $price * 100,
        'currency' => 'usd',
        'source' => $stripeToken,
        'description' => 'Example Charge Description',
    ];

    // Initialize cURL session
    $ch = curl_init($api_url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $api_key,
        'Content-Type: application/x-www-form-urlencoded',
    ]);

    // Set the request method to POST
    curl_setopt($ch, CURLOPT_POST, 1);

    // Encode the data as URL-encoded form data
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    // Execute cURL session and get the response
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
        // Handle the cURL error accordingly (e.g., display an error message to the user)
    } else {
        // Process the API response
        $decoded_response = json_decode($response, true);

        // Check for Stripe API errors
        if (isset($decoded_response['error'])) {
            echo 'Stripe API error: ' . $decoded_response['error']['message'];
            // Handle the Stripe API error accordingly (e.g., display an error message to the user)
        } else {
            // Check the payment status
            $payment_status = $decoded_response['status'];

            if ($payment_status === 'succeeded') {
                //update_post_meta($room_id, '_is_booked', 'on');
                //wp_redirect(home_url('/'));
                wp_redirect(home_url('/packagesss') . '?saved=1');
                exit();
            } else {
                // Payment failed, handle accordingly (e.g., display an error message to the user)
                echo 'Payment failed: ' . $decoded_response['failure_message'];
            }
        }
    }

    // Close cURL session
    curl_close($ch);
    ?>
</body>

</html>