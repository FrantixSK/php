<?php require_once('connection.php')?>

<?php include('./parts/header.php')?>

<html>   
<head>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: 	  #ccffff;  
}  
button {   
       background-color: lightgreen;   
       width: 100%;  
        color: black;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
        border: 2px solid black; 
         }   

#submitbutton{
    width:50%;
    margin-left: auto;
    margin-right: auto;
}
 form {   
        border: 3px solid black;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px; 
        margin-bottom: 20px  ;
        display: inline-block;   
        border: 2px solid black;   
        box-sizing: border-box;  
        background-color: orange;  
    }  
 button:hover {   
        opacity: 0.7;   
    }   
 .container {   
        padding: 25px;   
        background-color: white;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> Prihlasenie </h1> </center>   
    <form method="POST" class="formular" action="login_kod.php" method="POST">
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <div id = "submitbutton"><button type="submit">Login</button></div>
            <input type="checkbox" checked="checked"> Remember me     
             <br><a href="register.php"> register </a></br>   
        </div>   
    </form>     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>     
</html>  