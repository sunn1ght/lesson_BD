<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СОЗДАТЬ ТАБЛИЦУ</title>
</head>
<body>
    <form action="service.php" method="POST">
        <label for="table_name">name`s table</label>
        <input type="text" name="table_name" required>
        <input type="hidden" name="service" value="create_table">
        <input type="submit" value="создать"> 
    </form>
</body>
</html>