<nav id="navbar" class="navbar navbar-expand-md bg-body-tertiary" data-bs-theme="dark">
  <div class="ml-auto">
    <div class=" navbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-between">
              <li class="nav-item">
          <div class="profile">
          <h1><a>Delvin Jason</a></h1>
          </div>
        </li>
        <li class="nav-item">
          <div id="mySidebar" class="sidebar">
            <hr>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="#about">About</a>
            <hr>
            <a href="#cv">CV</a>
            <hr>
            <a href="#portofolio">Portofolio</a>
            <hr>
          </div>
          <button class="openbtn" onclick="openNav()">☰ </button>
        </li>
      </ul>
    </div>
  </div>
</nav>


      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <!-- .nav-menu -->


<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>


<?php /**PATH C:\xampp\htdocs\laravel9\resources\views/components/navbar.blade.php ENDPATH**/ ?>