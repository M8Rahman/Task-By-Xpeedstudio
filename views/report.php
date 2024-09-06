<?php
require_once '../config/db.php';
require_once '../classes/Submission.php';

$submission = new Submission($db);

$submissions = [];
$search_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';

if ($search_id) {
    $query = "SELECT * FROM submissions WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('i', $search_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $submissions = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $query = "SELECT * FROM submissions";
    $result = $db->query($query);
    $submissions = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Page</title>
</head>
<body>
    <form method="GET" action="report.php">
        <label for="user_id">Search by User ID:</label>
        <input type="number" id="user_id" name="user_id">
        <button type="submit">Search</button>
    </form>

    <h1>Submissions Report</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>Buyer</th>
                <th>Receipt ID</th>
                <th>Items</th>
                <th>Buyer Email</th>
                <th>Buyer IP</th>
                <th>Note</th>
                <th>City</th>
                <th>Phone</th>
                <th>Entry At</th>
                <th>Entry By</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($submissions as $submission): ?>
                <tr>
                    <td><?= htmlspecialchars($submission['id']) ?></td>
                    <td><?= htmlspecialchars($submission['amount']) ?></td>
                    <td><?= htmlspecialchars($submission['buyer']) ?></td>
                    <td><?= htmlspecialchars($submission['receipt_id']) ?></td>
                    <td><?= htmlspecialchars($submission['items']) ?></td>
                    <td><?= htmlspecialchars($submission['buyer_email']) ?></td>
                    <td><?= htmlspecialchars($submission['buyer_ip']) ?></td>
                    <td><?= htmlspecialchars($submission['note']) ?></td>
                    <td><?= htmlspecialchars($submission['city']) ?></td>
                    <td><?= htmlspecialchars($submission['phone']) ?></td>
                    <td><?= htmlspecialchars($submission['entry_at']) ?></td>
                    <td><?= htmlspecialchars($submission['entry_by']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
