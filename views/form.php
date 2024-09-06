<!-- Location: public/form.php  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Form</title>
    <link rel="stylesheet" href="../assets/css/form.css">
</head>
<body>
    <form action="submit.php" method="POST" id="submissionForm">
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" required>
        </div>
        <div class="form-group">
            <label for="buyer">Buyer:</label>
            <input type="text" id="buyer" name="buyer" required maxlength="255">
        </div>
        <div class="form-group">
            <label for="receipt_id">Receipt ID:</label>
            <input type="text" id="receipt_id" name="receipt_id" required maxlength="20">
        </div>
        <div class="form-group">
            <label for="items">Items:</label>
            <input type="text" id="items" name="items" required maxlength="255">
        </div>
        <div class="form-group">
            <label for="buyer_email">Buyer Email:</label>
            <input type="email" id="buyer_email" name="buyer_email" required maxlength="50">
        </div>
        <div class="form-group">
            <label for="note">Note:</label>
            <textarea id="note" name="note" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" id="city" name="city" required maxlength="20">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required pattern="[0-9]+" maxlength="20">
        </div>
        <div class="form-group">
            <label for="entry_by">Entry By:</label>
            <input type="number" id="entry_by" name="entry_by" required>
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>

    <script src="../assets/js/frontendValidation.js"></script>
</body>
</html>
