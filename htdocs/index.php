<?php include('./parts/header.php');
include("getAllUsers.php");
?>


<main class = "container">
 <h1 class="m-4 text-uppercase">Zoznam uživateľov</h1>

<ul class="list-group">
  <li class="list-group-item list-group-item-action active d-flex row">
      <span class ="col-1">  ID.</span>
      <span class ="col-2">  Avatar</span>
      <span class ="col-2">  Username</span>
      <span class ="col-2"> Email</span>
      <span class ="col-3">  Registered at</span>
      <span class ="col-2 text-center">  Akcie</span>
  </li>
  <?php foreach($users as $username) : ?>
    <a href="profile.php?id=<?php echo $username["id"]?>" class="text-decoration-none">

<li class="list-group-item list-group-item-action d-flex row align-items-center">
  <span class="text-danger col-1"> <?php echo $username["id"]?></span>
  <div class="col-2">
    <img src="/images/<?php echo $username["avatar"]?>" alt ="<?php echo $username["username"]?>"  style="width: 50px;height: auto"> 
  </div>
  <span class="col-2"> <?php echo $username["username"] ?></span>
  <span class="col-2"> <?php echo $username["email"] ?></span>
  <span class="col-3"> <?php echo $username["created_at"] ?></span>
  <div class="col-2 d-flex justify-content-center">
     <button class="btn btn-danger"> Zmazať</button>
  </div>
  
</li>
  </a>
<?php endforeach; ?>
</ul>
</main>


<html>

<head>

<style>

#wrapper{
    width:20%;
    margin-left: auto;
  margin-right: auto;
}

img{
  width:5%;
}


</style>

</head>

<body>
    <div id= "wrapper">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="/images/image1.png" class="d-block w-100" alt="obr1">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="/images/image2.png" class="d-block w-100" alt="obr2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/image3.png" class="d-block w-100" alt="obr3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</body>

</html>