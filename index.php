<?php
header("refresh: 3; url=/zabbix");
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Redirecting to Zabbix...</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        img {
            max-width: 200px;
            margin-bottom: 20px;
            animation: spin 2s linear infinite;
        }
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <img src="https://www.tcloud.in.th/wp-content/uploads/2024/09/Logo-T.Cloud-Gen3-768x516.png" alt="Logo">
    <p>กำลังพาไปที่ <strong>/zabbix</strong> ภายใน 3 วินาที...</p>
</body>
</html>