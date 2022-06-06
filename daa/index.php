<?php include('header.php');
include("getArticle.php");

  
?>




<html>

<head>

<style>
  .linky{
    display:inline-block;
  }
</style>

</head>

<body>

<div class = "container">
    <div class="row align-items-center">
 <h1 class="m-4 text-uppercase">ARTICLES:</h1>



  
<?php 
  //database connection  
  //define total number of results you want per page  
  $results_per_page = 5;  

  //find the total number of results stored in the database  
  $query = "select *from articles";  
  $result = mysqli_query($conn, $query);  
  $number_of_result = mysqli_num_rows($result);  

  //determine the total number of pages available  
  $number_of_page = ceil ($number_of_result / $results_per_page);  

  //determine which page number visitor is currently on  
  if (!isset ($_GET['page']) ) {  
      $page = 1;  
  } else {  
      $page = $_GET['page'];  
  }  

  //determine the sql LIMIT starting number for the results on the displaying page  
  $page_first_result = ($page-1) * $results_per_page;  

  //retrieve the selected results from database   
  $query = "SELECT *FROM articles LIMIT " . $page_first_result . ',' . $results_per_page;  
  $result = mysqli_query($conn, $query);  
    



  //display the link of the pages in URL  
  
?>


<?php  
while ($row = mysqli_fetch_array($result)) {  
?>  
<div class ="col-md-4 col sm-5 col-xs-7" style="text-align:center">
            <tr>     
				<td><img src="<?php echo $row["cover_image"]?>" alt ="<?php echo $row["cover_image"]?>"  style=" width: 25%;height: auto">
				<td><p><span class="row-1"><?php echo $row["autor"]; ?></span></p></td>
				<td><p><span class="row-1"><?php echo $row["title"]; ?></span></p></td>
				<td><p><span class="row-1"><?php echo $row["text"]; ?></span></p></td>	
            </tr>  
</div>
<?php  
};  
?>  
<?php
for($page = 1; $page<= $number_of_page; $page++) {  
      echo '<div class ="row-1"><a href = "index.php?page=' . $page . '">' . $page . ' </a></div> ';  
  }  
   ?>
</body>

</html>