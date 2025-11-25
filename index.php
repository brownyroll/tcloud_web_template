<?php
header("refresh: 3; url=/zabbix"); ?>
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
           .logo-container {
               border: 5px solid #a8e6a1
               padding: 20px;
               border-radius: 15px;
               display: inline-block;
               background-color: #eafbe7;
               margin-bottom: 20px;
           }
           img {
               max-width: 200px;
           }
           p {
               font-size: 18px;
           }
       </style>
</head>
<body>
    <img src="https://www.tcloud.in.th/wp-content/uploads/2024/09/Logo-T.Cloud-Gen3-768x516.png" alt="Logo">
    <p><b>Tcloud Gen 3</b></p>
    <p>กำลังพาไปที่ <strong>/zabbix</strong> ภายใน 3 วินาที...</p>
</body>
</html>
