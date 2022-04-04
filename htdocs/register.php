<?php require_once("pripojenie.php"); ?>
<?php include('./parts/header.php')?>

<html>   
<head> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>

    .container{
        margin-top:8%;
        width:25%;
    }

   

    .col-12 {
        margin-left:37%;
        
    }

    .col-13{
        text-align:center;
    }
   
    </style>

</head>    
<body>    
    
<form action="reg_kod.php" method ="POST">

 
<div class="container">
<div class="mb-3 ">
  <label for="name" class="form-label">Username:</label>
  <input type="text" class="form-control" id="name" placeholder="Enter username" name="username" required>
</div>
<div class="mb-3">
  <label for="email" class="form-label">E-mail:</label>
  <input type="text" class="form-control" id="email" placeholder="Enter e-mail" name="email" required>
</div> 
<div class="mb-3">
  <label for="password" class="form-label">Password:</label>
  <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
</div> 
<div class="mb-3">
  <label for="repPassword" class="form-label">Repeat password:</label>
  <input type="password" class="form-control" id="repPassword" placeholder="Repeat password" name="repPassword" required>
</div> 
<div class="col-12">
    <button type="submit" class="btn btn-primary" position="relative">Sign up</button>
  </div>
  <div class="col-13">

already registered? <a href="login.php">login </a>
</div>

      
</form>     
    
</body>     
</html>  