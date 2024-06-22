<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Connection with mysql</title>
</head>
<body>
    <h1>Laravel Connection with mysql</h1>
    <div>
        <?php
            if(DB::connection()->getPdo()){
                echo "Connected to database successfully" ;
            }
        ?>
    </div>
</body>
</html>
