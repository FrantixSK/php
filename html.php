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
    <form method="POST" action="stavPrihlasenia.php">  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">Login</button>   
            <input type="checkbox" checked="checked"> Remember me     
             <a href="register.html"> register </a>   
        </div>   
    </form>     
</body>     
</html>  