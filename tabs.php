<nav>
	<ul><h4>
    	<li><a id="tab_home" href="index.html">HOME</a></li>
	<li><a id="tab_stories" href="Stories">STORIES</a>
	<ul class="sub-menu">
	<li><a href="Stories/general"><strong>General</strong></a></li>
	<li><a href="Stories/love"><strong>Love and Romance</strong></a></li>
	<li><a href="Stories/suspense"><strong>Suspense and Thriller</strong></a></li>
	<li><a href="Stories/drama"><strong>Drama and Tragedy</strong></a></li>
	<li><a href="Stories/scifi"><strong>Science Fiction</strong></a></li>
	<li><a href="Stories/nonfiction"><strong>Non Fiction</strong></a></li>
	<li><a href="Stories/tamil"><strong>Tamil</strong></a></li>
	</ul>
	</li>
	<li><a id="tab_poems" href="Poems">POEMS</a>
	<ul class="sub-menu">
	<li><a href="Poems"><strong>English</strong></a></li>
	<li><a href="Poems/tamil"><strong>Tamil</strong></a></li>
	</ul>
	</li>
	<li><a id="tab_reviews" href="Reviews">REVIEWS</a>
	<ul class="sub-menu">
	<li><a href="Reviews/books"><strong>Books</strong></a></li>
	<li><a href="Reviews/movies"><strong>Movies</strong></a></li>
	<li><a href="Reviews/television"><strong>Television</strong></a></li>
	<li><a href="Reviews/music"><strong>Music</strong></a></li>
	</ul>
	</li>
	<li><a id="tab_travel" href="Travel">TRAVEL</a></li>
	<li><a id="tab_food" href="Food">FOOD</a></li>
	<li><a id="tab_others" href="Others">OTHERS</a></li>
	<li><a id="tab_store" href="Store">STORE</a></li>
	<li><a id="tab_account" style="cursor:hand">ACCOUNT</a>
	<ul class="sub-menu">

<?php
if( isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']==true)
{
	
	echo "<li><a href=\"viewprofile.html\"><strong>View Profile</strong></a></li>";
	echo "<li><a href=\"submitentry.html\"><strong>Submit Entry</strong></a></li>";
	echo "<li><a href=\"myentries.html\"><strong>My Entries</strong></a></li>";
	echo "<li><a id=\"signout\" style=\"cursor:hand;\"><strong>Sign Out</strong></a></li>";
}
else
{
	echo "<li><a href=\"login.html\"><strong>Sign In</strong></a></li>";
	echo "<li><a href=\"register.html\"><strong>Sign Up</strong></a></li>";
}
?>

</ul>
</li>
</h4></ul>
</nav>