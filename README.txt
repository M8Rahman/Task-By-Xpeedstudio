# Project Instructions

PHP version 8.2.15
XAMPP version 3.3.0


## Installation

1. Import the provided SQL file (task.sql) into your MySQL database.
2. Configure the database connection in `config/db.php` with your database credentials.
3. Place the project files into the `htdocs` directory of your XAMPP setup.


## Testing

1. Run XAMPP and start Apache and MySQL services.
2. Open your web browser and navigate to `public/index.php` to run the project or directly search "http://127.0.0.1/Task/public/index.php" in your browser search bar.
2. Go to Form page (http://127.0.0.1/Task/views/form.php), fill out the form and submit it to test the form submission and validation.
3. Navigate to report page (http://127.0.0.1/Task/views/report.php) to view the submissions and use the search functionality by `user_id`.


## Project Structure

- `assets/css`: CSS files.
- `assets/js`: Javascript files.
- `config/db.php`: Database configuration file.
- `classes/Validator.php`: Validation logic.
- `classes/Submission.php`: Database interaction.
- `views/form.php`: HTML form for data submission.
- `public/submit.php`: Script to handle form submission.
- `views/report.php`: Report page to view submissions.
- `README.txt`: Instructions for installation and testing.

