<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link <?php echo $active == 'index' ? 'active' : ''; ?>" href="index.php">Registration</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php echo $active == 'display' ? 'active' : ''; ?>" href="index.php?action=display">View Data</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>