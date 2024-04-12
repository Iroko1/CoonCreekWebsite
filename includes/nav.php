</php include "/includes/cdnlinks.php" ?>

<!-- navigation  bar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php"><img src="/view/images/light-maroon.png" alt="Coon Creek Baptist Church Logo" width="60" height="54"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
        </li>

        <!-- About dropdown includes 'Pastors' and 'History' -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/view/history.php">History</a></li>
            <li><a class="dropdown-item" href="/view/pastors.php">Pastors</a></li>
          </ul>
        </li>

         <!-- Get Involved dropdown includes 'Request Info' and 'Prayer Request' -->
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Get Involved
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/view/signup_form.php">Request Info</a></li>
            <li><a class="dropdown-item" href="/view/prayer_request.php">Prayer Request</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ministries
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/view/ministries.php">TeamKID</a></li>
            <li><a class="dropdown-item" href="/view/ministries.php">Youth Group</a></li>
            <li><a class="dropdown-item" href="/view/ministries.php">TLC Women's Group</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav> 
 
