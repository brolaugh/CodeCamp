<div class="navbar navbar-warning">
  <div class="navbar-collapse collapse navbar-warning-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="news"><?php echo NAV_HOME_TEXT;?></a></li>
      <li><a href="info"><?php echo NAV_INFO_TEXT;?></a></li>
      <li><a href="tickets"><?php echo NAV_SIGNUP_TEXT;?></a></li>
      <li><a href="news"><?php echo NAV_NEWS_TEXT;?></a></li>
      <li><a href="partners"><?php echo NAV_PARTNER_TEXT;?></a></li>
    </ul>
    <?php
      if($login->isLoggedIn()){
        ?>
        <ul class="nav navbar-nav">
          <li><a href="profile"><?php echo ACCOUNT; ?></a></li>
          <li><a href="team"><?php echo TEAM; ?></a></li>
          <li><a href="feed"><?php echo FEED; ?><a/></li>
        </ul>
        <?php
      }
      else{
        ?>
        <ul class="nav navbar-nav">
          <li><a href="login"><?php echo LOGIN."/".REGISTER; ?></a></li>
        </ul>
        <?php
      }
    ?>
  </div>
</div>
