<?php require_once("pripojenie.php"); ?>
<html>   
<head>  
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
    <center> <h1> Register </h1> </center>   
    <form action="reg_kod.php" method ="POST">
        <div class="container">   

            <label for="name">Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  

            <label for="email">E-mail : </label>   
            <input type="text" placeholder="Enter mail" name="email" required>

            <label for="password">Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  

            <label for="repPassword">Repeat password : </label>   
            <input type="password" placeholder="Repeat Password" name="repPassword" required>

            <div id = "submitbutton"><button type="submit">Register</button></div>

            <input type="checkbox" checked="checked"> Remember me     
             <br>already registered? <a href="html.php">login </a></br>  
            
        </div>   
    </form>     
</body>     
</html>  