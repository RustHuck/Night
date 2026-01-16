<?php
// Проверка наличия admin.txt
if (!file_exists(__DIR__ . '/admin.txt')) {
    header('Location: https://rusthuck.github.io/texrabot2/');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NightStudio</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        .header {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .update-gif {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 5px;
            margin: 20px 0;
        }
        .section {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .section:last-child {
            border-bottom: none;
        }
        .section-title {
            color: #6e8efb;
            font-size: 1.3em;
            margin-bottom: 10px;
        }
        ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Обновление (1.0)</h1>
    <p>Подробная информация об обновлении Guns (1.0)</p>
</div>

<div class="container">

    <div class="section">
        <h2 class="section-title">🆕 Кастомное оружие</h2>
        <ul>
            <li>ТТ-33</li>
            <img src="gif/ТТ-33.gif" class="update-gif">

            <li>Акс-74у</li>
            <img src="gif/aks-74u.gif" class="update-gif">

            <li>Ах-94</li>
            <img src="gif/AH-94.gif" class="update-gif">

            <li>СВД</li>
            <img src="gif/svd.gif" class="update-gif">
        </ul>
    </div>

    <div class="section">
        <h2 class="section-title">🆕 Урон</h2>
        <ul>
            <li>ТТ-33</li>
            <img src="gif/TT-33ATAK.gif" class="update-gif">

            <li>Акс-74у</li>
            <img src="gif/aks-74uATAK.gif" class="update-gif">

            <li>Ах-94</li>
            <img src="gif/ah-94ATAK.gif" class="update-gif">

            <li>СВД</li>
            <img src="gif/svdATAK.gif" class="update-gif">
        </ul>
    </div>

</div>

</body>
</html>
