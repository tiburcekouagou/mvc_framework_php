<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
</head>
<body>
  <h1>Welcome to posts page</h1>
  <p>Here is a list of posts:</p>
  <ul>
    <?php foreach($posts as $post): ?>
      <li>
        <h2><?php echo htmlspecialchars($post['title']); ?></h2>
        <p><?php echo htmlspecialchars($post['content']); ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>