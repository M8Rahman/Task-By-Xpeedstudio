<?php
// Location: public/submit.php

require_once '../config/db.php';
require_once '../classes/Validator.php';
require_once '../classes/Submission.php';

$submission = new Submission($db);
$validator = new Validator();

$data = [
    'amount' => $_POST['amount'],
    'buyer' => $_POST['buyer'],
    'receipt_id' => $_POST['receipt_id'],
    'items' => $_POST['items'],
    'buyer_email' => $_POST['buyer_email'],
    'buyer_ip' => $_SERVER['REMOTE_ADDR'],
    'note' => $_POST['note'],
    'city' => $_POST['city'],
    'phone' => $_POST['phone'],
    'entry_by' => $_POST['entry_by']
];

$errors = $validator->validate($data);

if (count($errors) > 0) {
    $errorMessages = implode("\n", $errors);
    echo '<script>
        alert("Submission failed!\\n' . addslashes($errorMessages) . '");
        window.location.href = "../views/form.php";
    </script>';
} else {
    if ($submission->create($data)) {
        // echo "Submission successful!";
        echo '<script>
                alert("Submission successful!");
                window.location.href = "../public/index.php";
            </script>';
    } else {
        // echo "Submission failed!";
        echo '<script>
            alert("Submission failed!");
            window.location.href = "../views/form.php";
        </script>';
    }
}
?>
