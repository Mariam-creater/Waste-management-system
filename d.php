<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Garbage Summary</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .container {
            padding: 30px;
        }
        .garbage-boxes {
            display: flex;
            gap: 30px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .box {
            width: 250px;
            height: 300px;
            border-radius: 15px;
            background: #f8f8f8;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            padding: 20px;
        }
        .box img {
            width: 100px;
            height: 100px;
            margin-top: 10px;
        }
        .box h3 {
            margin-top: 15px;
            font-size: 20px;
            color: #333;
        }
        .box p {
            font-size: 16px;
            margin: 5px 0;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="text-align:center;">My Waste Summary</h2>
        <div class="garbage-boxes">
            <?php
            $query = "SELECT * FROM garbage_summary";
            $result = $conn->query($query);

            while ($row = $result->fetch_assoc()) {
                $type = ucfirst($row['garbage_type']);
                $img = strtolower($type) . ".png"; // e.g., plastic.png
                echo '
                <div class="box">
                    <img src="../assets/images/' . $img . '" alt="' . $type . '">
                    <h3>' . $type . '</h3>
                    <p><strong>' . $row['amount_kg'] . ' kg</strong></p>
                    <p>Reward: <strong>$' . number_format($row['reward_amount'], 2) . '</strong></p>
                </div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
