<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veicamie uzdevumi</title>
</head>
<body>
<x-navigation></x-navigation>
<h1>veicamie uzdevumi</h1>
<ul>
  <?php foreach ($todos as $todo) { ?>
    <li><a href="/todos/{{ $todo->id }}">{{ $todo->title }}</a></li>
  <?php } ?>
</ul>
</body>
</html>