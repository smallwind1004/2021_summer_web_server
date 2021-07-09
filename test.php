<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>報修系統</title>
</head>


<body>
    <div id="wrap">
        <div id="header">
            <div id="logo">
                <img src="img/logo.jpg" alt="">
            </div>
            <div id="title" style="margin-top: 10px;">挖喜曉風</div>
        </div>

        <div id="navBar">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="schedule_page.php">schedule</a></li>
                <li><a href="link.php">Multiplication table</a></li>
                <li><a href="template.php">template</a></li>
                <li><a href="login.php">login</a></li>
            </ul>
        </div>

        <br><br><br>
        <div id="container">
            <div id="sideBar">
            </div>
            <div id="content">
                <?php
                $num = $_GET["val"];
                echo "<table>";
                for ($j = 1; $j <= $num; $j++) {
                    echo "<tr>";
                    for ($i = 1; $i <= $num; $i++) {
                        echo "<td>" . $i . " X " . $j . " = " . $i * $j . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>
        </div>

        <div id="footer">
            <p><b>Smallwind</b> @ Asia University <br>
                Email: <a href="mailto:108021004@gm.asia.edu.tw">108021004@gm.asia.edu.tw</a>
            </p>
        </div>
    </div>
</body>

</html>