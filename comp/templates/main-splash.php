<div id="splash">
	<ul>
		<li><a href="javascript:void(0); showLoginForm()" class="btn btn-default btn-raised">Login</a></li>
		<li><a href="javascript:void(0); showRegForm()" class="btn btn-default btn-raised">Register</a></li>
	</ul>
		<?php
			require_once('templates/main-login.php');
			require_once('templates/main-register.php');
		?>
	<a href="forgot-password">forgot your password?</a>
</div>
