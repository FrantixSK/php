<?php include('header.php');
?>
<?php require_once("connection.php"); ?>

<html>   
<head> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title>Create Article</title>  
</head>    
<body>    
    
<form action="createArticleScript.php" method ="POST">

 
<div class="container">
<div class="mb-1" style = "width: 15%; margin-left:40%;">
  <label for="title" class="form-label">TITLE:</label>
  <input type="text" class="form-control"  id="title" placeholder="Enter title" name="title" required>
</div>
<div class="mb-1" style = "width: 15%; margin-left:40%;">
  <label for="autor" class="form-label">AUTOR:</label>
  <input type="text" class="form-control" id="autor" placeholder="Enter author name" name="autor" required>
</div> 

<div class="mb-1">
  <label for="text" class="form-label">TEXT:</label>
  <textarea class="form-control" placeholder="Enter text" id="text" style="height: 200px" name="text"> </textarea>
</div> 

<div class="col-12" style = " margin-left:42.5%;">
    <button type="submit" class="btn btn-primary" position="center">Submit article</button>
  </div>

      
</form>     
    
</body>     
</html>  