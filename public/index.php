<!-- Location: public/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>
    <div id="particles-js">
    <h1 class="heading">THANK YOU FOR THE TASK</h1>
        <div class="content">
            <div class="btn_container">
                <button id="form" class="btn">FORM</button><br><br>
                <button id="report" class="btn">REPORT</button>
            </div> 
        </div>
    </div>

   
    <script src="../assets/js/particleBackground.js"></script>
    <script type="text/javascript">
        document.getElementById("form").onclick = function () {
            location.href = "../views/form.php";
        };
        document.getElementById("report").onclick = function () {
            location.href = "../views/report.php";
        };
    </script>
</body>
</html>
