<div id="footer">
<ul id="footer_menu">

	<!-- Home Button -->
	<li class="homeButton"><a href="ridd.html"></a></li>
	
	<!-- Account Button --> 
	<li><a href="#">Account</a>
		<div class="one_column_layout">
			<div class="col_1">
				<a class="headerLinks">Statistics</a>
					
				<a class="headerLinks">Messages</a>
					<div class="clear"></div>
				<a class="listLinks" style="font-weight: bold; color: white;">Inbox (3)</a>
				<a class="listLinks">Sent</a>
				<a class="listLinks">Trash</a>
				<a class="listLinks">Compose</a>
			</div>
		</div>
	</li>
	
	<!-- Profile Button -->
	<li><a href="#">Profile</a>
		<div class="three_column_layout">
			<div class="col_3">
			<h2>About the Batman</h2>
			</div>
			<div class="clear"></div>
			
			<div  class="col_1">
				<p>First and foremost is Batman's keen intellect. 
				Batman is considered by many to be the greatest detective in the world. 
				With his mind, and supercomputer in the Batcave, he has been able to 
				solve many problems, from seemingly random attacks by 
				the Joker to the toughest riddles of The Riddler.</p>
			</div>
			<div  class="col_1">
				<p>He is also an excellent tactician and strategist. 
				Always thinking many steps ahead of his opponent. 
				One would say that this is the reason he has been able to beat Superman, 
				using his mind instead of his brawn to outwit the Man of Steel into his traps.</p>
			</div>
			<div  class="col_1">
				<p>Others might say that this can be seen as paranoia on Batmans part, 
				like when he built a satellite system to spy on super humans to keep tabs on them 
				or when he had his secret files with ways to take down the Justice League.</p>
			</div>
			
			<div class="clear"></div>
			
			<div  class="col_1">
				<p class="black_box">Batman is also a master of many martial arts, 
				hand to hand weapons, and close quarters combat. His body is in the 
				pinnacle of human ability and has been honed by many years of training. </p>
			</div>
			<div  class="col_2">
				<p>Finally, with his vast wealth, Batman has amassed an arsenal 
				of technological gadgets, vehicles, and weapons. From his ever 
				trusty Batarang to the Batmobile, and utility belt, Batman is always
				ready for anything, using the powers of his company, to further research 
				and development as his tool to acquiring whatever he needs to avenge his family
				and to protect Gotham City.</p>
			</div>
			
			<div class="clear"></div>
			
			<div  class="col_3">
				<h2>My Profile</h2>
			</div>
			
			<div class="clear"></div>
			
			<div  class="col_3">
				<p><!-- add to classes in same element with just space bar in between -->
					<?php				
						if(empty($user_data['profile']) === false) {
							echo '<img src="', $user_data['profile'], '" alt="', $user_data['first_name'] , '\'s Profile Image" class="img_left whiteBorder" />';
						}
					?>
					<a style="display: inline; font-weight:bold; color: white;">Dragos Stoian</a>
					<a href="https://www.facebook.com/brruce.wayne.1">Read more...</a>
				</p>
			</div>
		</div>
	</li>
	
	<!-- Program Button -->
	<li><a href="#">Programs</a>
		<ul class="dropup">
			<li><a href="../public/forum.php">Justice League Forum</a></li>
			<li><a href="#">Batcave Utilities</a></li>
			<li><a href="#">Arkham Asylium Cams</a></li>
			<li><a href="#">Gotham City Surveillance</a></li>
			<li><a href="../public/downloads.php">Downloads BatApps</a></li>
		</ul>
	</li>
	
	
	<!-- Log Out Button -->
	<li class="right"><a href="../public/logout.php">Log Out</a></li>
</ul>

<ul id="notifications">
	<li><a href="http://en.wikipedia.org/wiki/The_Joker_(The_Dark_Knight)" class="notificationIcons">
	<img src="images/joker.png">
		<span>
			<img src="images/jokerPic.jpeg" style="float:left; width:50px; margin-right:5px;" /> 
			<div style="display: inline; color: #CC0000; font-weight:bold;"> The Joker</div>
			sent you a joke: "If I weren't crazy, I'd be insane!"
			<hr style="border:none; border-bottom: 1px solid #777777" />
			<img src="images/harleyPic.jpg" style="float:left; width:50px; margin-right:5px;" /> 
			<div style="display: inline; color: #CC0000; font-weight:bold;"> Harley Queen</div>
			commented on Catwomans pic: "Oooh listen to little Miss Can't Take a Joke!"
		</span>
	</a></li>
	<li><a href="http://en.wikipedia.org/wiki/Scarecrow_(DC_Comics)" class="notificationIcons">
	<img src="images/scareCrow.png">
		<span>
			<img src="images/scarecrowPic.jpg" style="float:left; width:50px; margin-right:5px;" />
			<div style="display: inline; color: #CC0000; font-weight:bold;"> Scarecrow</div>
			liked your post: "I'm Batman!!!"
		</span>	
	</a></li>
	<li><a href="http://en.wikipedia.org/wiki/Riddler" class="notificationIcons">
	<img src="images/nigma.png">
		<span>
			<img src="images/enigmaPic.jpg" style="float:left; width:40px; margin-right:5px;" />
			<div style="display: inline; color: #CC0000; font-weight:bold;"> Edward Nigma</div>
			Posted on your page: "What belongs to you, but is used by others?"
		</span>	
	</a></li>
</ul>

</div>
</body>
</html>