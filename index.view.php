<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <h1>Task for the day</h1>
    <ul>
      <?php foreach ($tasks as $task) : ?>
          <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else: ?>

            <?= $task->description; ?>

            <?php endif; ?>



          </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
