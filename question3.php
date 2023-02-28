<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word's counter</title>
    <link rel="stylesheet" href="css/question3.css">
    <link rel="stylesheet" href="css/header.css"></link>
</head>
<body>
    <?php include 'templates/header.php' ?>
    <div id="inputArea">
        <label for="insertString">Insert string</label>
        <textarea id=insertText type="text"></textarea>
        <button onclick="counter()">Save</button>
    </div>
    <div>
        <table id="table">
            <thead>
                <th colspan="5">Word's found</th>
            </thead>
            <tbody id="result">
            </tbody>
        </table>
    </div>
    <script src="js/question3.js"></script>
</body>
</html>