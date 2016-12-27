<footer id="footer">
	<div class="wrapper">
        <div id="fot_soc">
            <a href="https://www.facebook.com/plus256" target="_NEW"><?php echo file_get_contents("gra/ic_facebook.svg"); ?></a>
            <a href="https://www.twitter.com/plus256" target="_NEW"><?php echo file_get_contents("gra/ic_twitter.svg"); ?></a>
            <a href="https://www.instagram.com/plus256" target="_NEW"><?php echo file_get_contents("gra/ic_instagram.svg"); ?></a>
            <div class="spacer"></div>
        </div>
    	<div id="fot_links">
			<a href="./solutions">Solutions</a>
			<a href="./creation">Creation</a>
			<a href="http://techshule.com" target="_NEW">Blog</a>
			<a href="./about">About</a>
            <a href="mailto:cool@plus256.com?subject=Creating%20Cool%20Stuff">Contact</a>
            <div class="spacer"></div>
        </div>
        <div id="copyright">Copyright &copy; <?php echo date('Y')." ".$sponsor; ?></div>
    	<div class="spacer"></div>
    </div>
    <div id="fb-root"></div>
</footer>
</body>
</html>
<?php
ob_end_flush();
?>
