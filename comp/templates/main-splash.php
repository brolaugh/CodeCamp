<div>
	<ul>
		<li id="splash-login-tab" onclick="showLoginForm();">Login</li>
		<li id="splash-register-tab" onclick="showRegForm();">Register</li>
	</ul>
	<div id="splash-options-tabs">
		<?php
			require_once('templates/main-login.php');
			require_once('templates/main-register.php');
		?>
	</div>
	<a href="forgot-password">forgot your password?</a>
</div>