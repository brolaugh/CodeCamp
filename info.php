  <?php
    include_once("templates/main-header.php");
   ?>
		 <main class="row">
			 <div class="col-md-10">
        <div class="col-md-12">
          Insert some kind of menu here!
        </div>
			 	<div class="row staff">
          <h2>Vi på Codecamp</h2>
					<div class="col-md-6">
                <ul class="list-group">
                  <h4>Hannes Kindströmmer</h4>
                  <!--
                   <img class="img-responsive img-circle" src="images/staff/hannes.png"/>
                  -->
                  <li class="list-group-item"><?php echo EMAIL; ?>: <a href="me@brolaugh.com">me@brolaugh.com</a></li>
                  <li class="list-group-item"><?php echo PHONE_NR; ?>: +46734487197</li>
                  <li class="list-group-item"><?php echo ROLE; ?>: <?php echo CEO."/".FOUNDER ?></li>
                </ul>
                <ul class="list-group">
                  <h4>Morgan Augustsson</h4>
                  <li class="list-group-item"><?php echo EMAIL; ?>: <a href="morgan.augustsson@it-gymnasiet.se">morgan.augustsson@it-gymnasiet.se</a></li>
                  <li class="list-group-item"><?php echo PHONE_NR; ?>: to be filled in</li>
                  <li class="list-group-item"><?php echo ROLE; ?>: <?php echo TEACHER."/".JUDGE."/".FOUNDER ?></li>
                </ul>

					</div>
          <div class="col-md-6">
            <ul class="list-group">
              <h4>Johannes Mattson</h4>
              <li class="list-group-item"><?php echo EMAIL; ?>: <a href="johannes.mattson@example.com">johannes.mattson@example.com</a></li>
              <li class="list-group-item"><?php echo PHONE_NR; ?>: to be filled in</li>
              <li class="list-group-item"><?php echo ROLE; ?>: <?php echo TEACHER."/".JUDGE ?></li>
            </ul>
          </div>
				</div>
        
        <div class="row">
					<div class="col-md-12">
                <h2>Lorem ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
					</div>
				</div>
        <div class="row">
					<div class="col-md-12">
                <h2>Lorem ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
					</div>
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
