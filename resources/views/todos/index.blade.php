<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veicamie uzdevumi</title>
</head>
<body>
<h1>veicamie uzdevumi</h1>
<ul>
  <?php foreach ($todos as $todo) { ?>
    <li><?= $todo["content"] ?></li>
  <?php } ?>
</ul>
</body>
</html>