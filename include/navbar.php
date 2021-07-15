<?php $page = basename($_SERVER['PHP_SELF']); ?>

<header>
	<nav class="navbaar">
		<ul class="menunav">
			<li class="navli <?php if ($page == 'index.php') : echo 'current';
						endif; ?>"><a href="index.php" data-hover="Home">Home</a></li>
			<li class="navli <?php if ($page == 'about.php') : echo 'current';
						endif; ?>"><a href="about.php" data-hover="About US">About Us</a></li>
			<li class="navli <?php if ($page == 'blog.php') : echo 'current';
						endif; ?>"><a href="blog.php" data-hover="Our Blog">Our Blog</a></li>
			<li class="navli <?php if ($page == 'trips.php') : echo 'current';
						endif; ?>"><a href="trips.php" data-hover="Packages">Packages</a></li>
			<li class="navli <?php if ($page == 'gallery.php') : echo 'current';
						endif; ?>"><a href="guide.php" data-hover="Guide">Hirement</a></li>
			<li class="navli <?php if ($page == 'contact.php') : echo 'current';
						endif; ?>"><a href="contact.php" data-hover="Contact Us">Contact Us</a></li>

			<li class="navli2">
				
			          <div><a class="signbtn" id="signin" href="#">SignIn<i class='ml-1 bx bx-user'></i></a></div>
					  <hr class="orgline">
			          <div><a class="upbtn" id="signup" href="#">SignUp<i class='ml-1 bx bx-user-plus' ></i></a></div>
			</li>
		</ul>
	</nav>

</header>