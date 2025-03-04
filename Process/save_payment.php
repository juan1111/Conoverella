<?php

header("Content-Type: application/json");

require_once '../App/dbcon.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $orderID = $_POST['orderID'] ?? null;
    $payerID = $_POST['payerID'] ?? null;
    $paymentDetails = json_decode($_POST['paymentDetails'], true);
    $billingDetails = json_decode($_POST['billingDetails'], true);

    if(!$orderID || !$payerID || !$paymentDetails){
        echo json_encode(["status" => "error", "message" => "Invalid payment Data"]);
        exit;
    }

    $amount = $paymentDetails['purchase_units'][0]['amount']['value'];
    $currency = $paymentDetails['purchase_units'][0]['amount']['currency_code'];
    $status = $paymentDetails['status'];
    $paymentTime = date('Y-m-d H:i:s', strtotime($paymentDetails['update_time']));

    // Billing Details

    $firstname = $billingDetails['firstname'];
    $lastname = $billingDetails['lastname'];
    $email = $billingDetails['email'];
    $address = $billingDetails['address'];
    $city = $billingDetails['city'];
    $state = $billingDetails['state'];
    $zip = $billingDetails['zip'];

    try{

        //Insert for Payment Table

        $queryPayment = 'insert into payments(order_id,payer_id,amount,currency,status,payment_time) values (:orderid,:payerid,:amount,:currency,:status,:paytime)';
        $stmt = $pdo->prepare($queryPayment);
        $stmt->bindParam(':orderid', $orderID);
        $stmt->bindParam(':payerid', $payerID);
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':currency', $currency);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':paytime', $paymentTime);

        if($stmt->execute()){
            echo json_encode(["status" => "success"]);

            //Insert for billing Details Table

            $queryBilling = 'insert into billing_details (order_id,payer_id,firstname,lastname,email,address,city,state,zip,amount,currency,status,billing_time)
            values (:orderid,:payerid,:fname,:lname,:email,:address,:city,:state,:zip,:amount,:currency,:status,:billtime)';
            $stmtBilling = $pdo->prepare($queryBilling);
            $stmtBilling->bindParam(':orderid',$orderID);
            $stmtBilling->bindParam(':payerid',$payerID);
            $stmtBilling->bindParam(':fname',$firstname);
            $stmtBilling->bindParam(':lname',$lastname);
            $stmtBilling->bindParam(':email',$email);
            $stmtBilling->bindParam(':address',$address);
            $stmtBilling->bindParam(':city',$city);
            $stmtBilling->bindParam(':state',$state);
            $stmtBilling->bindParam(':zip',$zip);
            $stmtBilling->bindParam(':amount',$amount);
            $stmtBilling->bindParam(':currency',$currency);
            $stmtBilling->bindParam(':status',$status);
            $stmtBilling->bindParam(':billtime',$paymentTime);
            $stmtBilling->execute();
        }
        else{
            echo json_encode(["status" => "error", "message" => "Database Error!"]);
        }

    }catch (Exception $e){
        echo json_encode(["status" => "error", "messaage" => $e->getMessage()]);
    }

}
?>