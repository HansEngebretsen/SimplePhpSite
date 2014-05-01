<header>
	<nav>
		<ul>
			<li <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'id="currentpage"'; ?>><a href="index" >Home</a> </li>
			<li <?php if (strpos($_SERVER['PHP_SELF'], 'page2.php')) echo 'id="currentpage"'; ?>><a href="page2">page2</a> </li>
			<li <?php if (strpos($_SERVER['PHP_SELF'], 'page3.php')) echo 'id="currentpage"'; ?>><a href="page3">page3</a> </li>
			<li <?php if (strpos($_SERVER['PHP_SELF'], 'page4.php')) echo 'id="currentpage"'; ?>><a href="page4">page4</a> </li>
			<li <?php if (strpos($_SERVER['PHP_SELF'], 'page5.php')) echo 'id="currentpage"'; ?>><a href="page5">page5</a> </li>
		</ul>
	</nav>
</header>