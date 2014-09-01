<header>
	<hgroup id="logo">
		<h1><img src="sites/all/themes/techne/assets/images/techne_logo_320.gif"><a href="http://techneblog.com"></a></h1>
		<h2>{ <em>a tech blog for non-techies</em> }</h2>
	</hgroup>
	<h1 id="menu"><a href="#firstlink">menu</a></h1>
</header>
<section id="banner">
	<div id="bannertext">
		<p id="first"><strong><em>Technê</em></strong> is an ancient Greek word meaning “craft” or “art,” a method by which something is created.</e</p>
		
		<p>Technêblog is a site by Thomas Dodson devoted to technology, web development, media production, and graphic design.</p>
		
		<p>The purpose of the site is to share tips and techniques with people who are interested in technology, but aren't necessarily techies or web developers.</p>
</div>
</section>
<section id="latest">
	<?php print render($page['latest']); ?>
</section>
<aside class="sidebar">
	<?php print render($page['sidebar']); ?>
</aside>
<nav id="mainmenu">
	<ul>
		<li><a id="firstlink" href="blog"><i class="fa fa-paragraph"></i>Blog<span class="navtag">byte-sized tips</span></a> </li>
		<li><a href="articles"><i class="fa fa-newspaper-o"></i>Articles<span class="navtag">in-depth explanations</span></a></li>
		<li><a href="portfolio"><i class="fa fa-briefcase"></i>Portfolio<span class="navtag">samples of my work</span></a></li>
		<li><a href="about"><i class="fa fa-meh-o"></i>About<span class="navtag">info about me</span></a></li>
	</ul>
</nav>
<footer>
	<i class="fa fa-search"></i><input type="search" name="searchbox"><input type="submit" name="submit" value="search"></button>
	<ul class="social-bookmarks">
		<li class="linkedin"><a href="http://www.linkedin.com/pub/thomas-dodson/b/183/733"><i class="fa fa-linkedin"></i></a></li>
		<li class="github"><a href="https://github.com/tdodson"><i class="fa fa-github-alt"></i></a></li>
		<li class="twitter"><a href="http://twitter.com/techneblog"><i class="fa fa-twitter"></i></a></li>
		<li class="facebook"><a href="http://www.facebook.com/dodson.t"><i class="fa fa-facebook"></i></a></li>
		<li class="rss"><a href="feed.xml"><i class="fa fa-rss"></i></a></li>
	</ul>
</footer>