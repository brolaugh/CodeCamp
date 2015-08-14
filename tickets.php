<?php
	include_once("templates/main-header.php");
  include_once("functions/signup.php");
 ?>
		 <main class="row">
			 <div class="col-md-10">
			 	<div class="row">
					<div class="col-md-8">
						<h2><?php echo TICKETS_HEADER; ?></h2>
            <p>It's accually free to atend Codecamp! But in order to join the competition you need to sign up before the start of the event.</p>
            <form action="tickets.php" method="post">
              <div class="form-group">
              <label for="fname" class="col-lg-3 control-label"><?php echo FORM_LABEL_FIRSTNAME; ?></label>
              <input class="form-control empty" name="fname" type="text" placeholder="<?php echo FORM_FIRST_NAME_EXAMPLE; ?>"/>
            </div>

            <div class="form-group">
              <label for="sname" class="col-lg-3 control-label"><?php echo FORM_LABEL_SURNAME; ?></label>
              <input class="form-control empty" name="sname" type="text" placeholder="<?php echo FORM_SUR_NAME_EXAMPLE; ?>"/>
            </div>

            <div class="form-group">
              <label for="email" class="col-lg-3 control-label"><?php echo FORM_LABEL_EMAIL; ?></label>
              <input class="form-control empty" name="email" type="email" placeholder="<?php echo FORM_EMAIL_EXAMPLE;?>"/>
            </div>

            <div class="form-group">
              <label for="online_nick" class="col-lg-3 control-label"><?php echo FORM_LABEL_ONLINE_NICK; ?></label>
              <input class="form-control empty" name="online_nick" data-hint="<?php echo TICKET_FORM_NICK_TOOLTIP ?>" type="text" placeholder="<?php echo FORM_ONLINE_NICK_EXAMPLE; ?>"/>
            </div>

            <div class="form-group">
              <label for="team_name" class="col-lg-3 control-label"><?php echo FORM_LABEL_TEAM_NAME; ?></label>
              <input class="form-control empty" name="team_name" data-hint="<?php echo TICKET_FORM_TEAM_TOOLTIP ?>" type="text" placeholder="<?php echo FORM_TEAMNAME_EXAMPLE; ?>"/>
            </div>
              <input type="hidden" name="isNewSignup" value="7331"/>
              <button type="submit" class="btn btn-primary">Submit<div class="ripple-wrapper"></div></button>
            </form>
					</div>
          <div class="col-md-4"></div>
				</div>
			 </div>

			 <!-- sponsor part -->
			 <div class="col-md-2">
			 		<?php include("templates/main-partners.php"); ?>
			 </div>



		 </main>
		 <footer>
	 		<p><?php echo COPYRIGHT;?></p>
	 	</footer>
	</div>


</body>
</html>
