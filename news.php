<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
	define("SUBPAGE", "News");
	include_once("templates/main-header.php");
 ?>
		 <main class="row">
			 <div class="col-md-10">

				<?php
					//getLatestNewsTitles();
				 ?>
			 	<div class="row">
					<div class="col-md-12">
						<h2>lorem Ipsum</h2>
						<img class="img-responsive" src="images/newsExample_image.jpg"/>
						<div class="col-md-12"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h2>lorem Ipsum</h2>
						<img class="img-responsive" src="images/newsExample_image.jpg"/>
						<div class="col-md-12"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h2>lorem Ipsum</h2>
						<img class="img-responsive" src="images/newsExample_image.jpg"/>
						<div class="col-md-12"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p></div>
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
