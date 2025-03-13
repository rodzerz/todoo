<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<x-navigation></x-navigation>
    <h1>Diaries</h1>
    <ul>
  <?php foreach ($diaries as $diarie) { ?>
    <li><a href="/diaries/{{ $diarie->id }}">{{ $diarie->title }}</a></li>
  <?php } ?>
</ul>
</body>
</html>