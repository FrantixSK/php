<?php require_once("pripojenie.php"); ?>
<?php include('parts/header.php')?>

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
        margin-left:30%;
        
    }

    .col-13{
        text-align:center;
    }
   
    </style>

</head>    
<body>    
    
<form action="pass_change_script.php" method ="POST">

 
<div class="container">
<div class="mb-3">
  <label for="oldPassword" class="form-label">Old password:</label>
  <input type="password" class="form-control" id="oldPassword" placeholder="Enter old password" name="oldPassword" required>
</div> 
<div class="mb-3">
  <label for="password" class="form-label">New Password:</label>
  <input type="password" class="form-control" id="newPassword" placeholder="Enter new password" name="newPassword" required>
</div> 
<div class="mb-3">
  <label for="repNewPassword" class="form-label">Repeat new password:</label>
  <input type="password" class="form-control" id="repNewPassword" placeholder="Repeat new password" name="repNewPassword" required>
</div> 
<div class="col-12">
    <button type="submit" class="btn btn-primary" position="relative">Change password</button>
  </div>
  <div class="col-13">

already registered? <a href="login.php">login </a>
</div>

      
</form>     
    
</body>     
</html>  