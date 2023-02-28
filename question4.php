<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open parentesis</title>
    <link rel="stylesheet" href="css/question4.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <?php include 'templates/header.php' ?>
    <div id="inputArea">
        <label for="insertString">Insert string with the simbols</label>
        <textarea id=insertText type="text"></textarea>
        <button onclick="counter()">Save</button>
    </div>
    <script src="js/question4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>