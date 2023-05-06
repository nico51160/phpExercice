<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modeleMVC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">
    <h1><?= $data['nom']; ?></h1>
    <p><img src="img/<?= $data['photo']; ?>"/><?= $data['histoire']; ?></p>
    <p><strong>-Autre roi : </strong> <a href="?roiID=3">Charles IX</a>, <a href="?roiID=2">Louis XIV</a>, <a href="?roiID=1">Louis XV</a></p>
    

</div>
    
</body>
</html>