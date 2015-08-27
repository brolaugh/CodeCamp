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
      if(false){
        ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="profile"><?php echo NAV_ACCOUNT_TEXT; ?></a></li>
          <li><a href="team"><?php echo NAV_TEAM_TEXT; ?></a></li>
          <li><a href="feed"><?php echo NAV_FEED_TEXT; ?><a/></li>
        </ul>
        <?php
      }
      else{
        ?>
        <ul class="nav navbar-nav navbar-right">
          <li class="disabled"><a href=""><?php echo NAV_LOGIN_TEXT."/".NAV_REGISTER_TEXT; ?></a></li>
        </ul>
        <?php
      }
    ?>
  </div>
</div>
