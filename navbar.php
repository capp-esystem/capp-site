<?php
function navHeader($page)
{
    ?>
 <nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="index.php">CAPP2</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php echo $page == 'tutor_guide' ? 'active' : '' ?>" href="tutor-guides.php">Guidance to Tutors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $page == 'download' ? 'active' : '' ?>" href="download.php">CAPP2 e-system</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $page == 'about' ? 'active' : '' ?>" href="about.php">About CAPP2</a>
      </li>
    </ul>
  </div>
</nav>
<?php }?>
