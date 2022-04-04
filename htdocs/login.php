<?php require_once('connection.php')?>

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
};
.btn btn-primary{
    float:center;
}

</style>
</head>    
<body>   
<form method="POST" class="formular" action="login_kod.php" method="POST">

<div class ="container">
<div class="mb-3">
  <label for="name" class="form-label">Username:</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter username" name="username" required>
</div>
<div class="mb-3">
  <label for="password" class="form-label">Password:</label>
  <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter password" name="password" required>
</div> 
<div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
  <div class="col-12">

        Not registered? <a href = "register.php">register</a>
</container>
</form>     
    
</body>     
</html>  