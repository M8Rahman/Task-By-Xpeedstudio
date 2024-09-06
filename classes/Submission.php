<?php
// Location: classes/Submission.php

class Submission {
    private $conn;
    private $table = 'submissions';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($data) {
        $query = "INSERT INTO " . $this->table . " 
                  (amount, buyer, receipt_id, items, buyer_email, buyer_ip, note, city, phone, entry_at, entry_by)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?)";

        $stmt = mysqli_prepare($this->conn, $query);

        // Bind parameters: s = string, i = integer
        mysqli_stmt_bind_param($stmt, 'issssssssi', 
                               $data['amount'], 
                               $data['buyer'], 
                               $data['receipt_id'], 
                               $data['items'], 
                               $data['buyer_email'], 
                               $data['buyer_ip'], 
                               $data['note'], 
                               $data['city'], 
                               $data['phone'], 
                               $data['entry_by']);
        
        if (mysqli_stmt_execute($stmt)) {
            return true;
        }

        return false;
    }
}
?>
