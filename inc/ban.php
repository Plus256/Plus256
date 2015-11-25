<header id="banner">
    <div class="wrapper">
        <div id="logo_container"><a href="./"><?php echo file_get_contents("gra/logo.svg"); ?></a></div>
          <nav id="menu">
          	<ul>
                <li><a href="./creation">CREATION</a></li>
                <li><a href="./domains">DOMAINS</a></li>
                <li><a href="./wagaba">WAGABA</a></li>
                <li><a href="./pearl">PEARL</a></li>
              </ul>
          </nav>
          <!--Begin Mobile Menu-->
          <nav id="mobile_menu">
              <div><?php echo file_get_contents("gra/ic_menu.svg"); ?></div>
              <div id="mobile_menu_container">
                <div id="menu_drawer_cancel"><?php echo file_get_contents("gra/ic_cancel.svg"); ?></div>
                  <ul>
                    <li><a href="./creation">CREATION</a></li>
                    <li><a href="./domains">DOMAINS</a></li>
                    <li><a href="./wagaba">WAGABA</a></li>
                    <li><a href="./pearl">PEARL</a></li>
                  </ul>
                  <div class="spacer"></div>
              </div>
              <div class="spacer"></div>
          </nav>
          <!--End Mobile Menu-->
        <div class="spacer"></div>
    </div>
</header>
