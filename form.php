<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Country</title>
</head>
<body>

    <form action="<?=$_SERVER["PHP_SELF"] ?>" method="post">

        <div>
            <label for="">Country Name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Country Description:</label>
            <textarea name="description"></textarea>
        </div>
        <div>
            <label for="">Country Population:</label>
            <input type="number" name="population" step="1" min="0">
        </div>
        <button type="submit">Create</button>
</form>
    
</body>
</html>