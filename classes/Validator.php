<?php
// Location: classes/Validator.php

class Validator
{
    private $errors = [];

    public function validate($data)
    {
        if (!filter_var($data['amount'], FILTER_VALIDATE_INT) || $data['amount'] <= 0) {
            $this->errors[] = 'Amount must be a positive number.';
        }
        if (strlen($data['buyer']) > 20 || !preg_match('/^[\p{L}0-9\s]+$/u', $data['buyer'])) {
            $this->errors[] = 'Buyer name must be max 20 characters and only contain letters, numbers, and spaces.';
        }
        if (!is_string($data['receipt_id']) || empty($data['receipt_id'])) {
            $this->errors[] = 'Receipt ID must be valid text.';
        }
        if (!is_string($data['items']) || empty($data['items'])) {
            $this->errors[] = 'Items must be valid text.';
        }
        if (!filter_var($data['buyer_email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = 'Invalid email address.';
        }
        if (str_word_count($data['note']) > 30) {
            $this->errors[] = 'Note cannot exceed 30 words.';
        }
        if (!preg_match('/^[\p{L}\s]+$/u', $data['city'])) {
            $this->errors[] = 'City must contain only letters and spaces.';
        }
        if (!preg_match('/^\d{10,15}$/', $data['phone'])) {
            $this->errors[] = 'Phone must contain only numbers and be 10 to 15 digits long.';
        }
        if (!filter_var($data['entry_by'], FILTER_VALIDATE_INT)) {
            $this->errors[] = 'Entry by must be a valid number.';
        }

        return $this->errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
?>
