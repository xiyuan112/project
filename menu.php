 <!--responsive navigation-->
<nav class="navbar">
    <div class="content">
	<a href="Index.php">
      <img src="image/logo-01.png" class="nav-image" id="logo">
		</a>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a <?php if ($currentPage == 'home') echo 'class="active"'; ?>  href="Index.php">Home</a></li>
        <li><a <?php if ($currentPage == 'about') echo 'class="active"'; ?> href="About.php">About</a></li>
        <li><a <?php if ($currentPage == 'resources') echo 'class="active"'; ?> href="Resources.php">Resources</a></li>
        <li><a <?php if ($currentPage == 'sharing') echo 'class="active"'; ?> href="Sharing.php">Sharing</a></li>
        <li><a <?php if ($currentPage == 'experience') echo 'class="active"'; ?> href="Experience.php">Experience</a></li>
      </ul>
      <div class="icon menu-btn"> 
        <i class="fas fa-bars" ></i>
      </div>
    </div>
</nav>