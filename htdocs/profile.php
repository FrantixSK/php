<?php
require_once("pripojenie.php");
include('parts/header.php');
include('php_scripts/profile_script.php');
?>



<main class="container">
    <h1 class="m-4 text-uppercase">Profil</h1>

    <style>

.col-4.list-group-item { 
    border: black solid 1px;
    width:300px;
}
    </style>

    <?php foreach ($users as $username) : ?>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-4"><img src="../images/<?php echo $username["avatar"] ?>" alt="<?php echo $user["username"] ?>" style="width: 300px"></div>
                <div class="col-6">
                <p>
                    
                <div class="row">    
                <div class="col-4 list-group-item active">ID:</div>
                <div class="col-4 border-top list-group-item"><?php echo $username["id"] ?></div>
   
                <div class="w-100"></div>

                <div class="col-4 list-group-item active">Meno:</div>
                <div class="col-4 list-group-item"><?php echo $username["username"] ?></div>

                
                <div class="w-100"></div>
                
                <div class="col-4 list-group-item active">Email:</div>
                <div class="col-4 list-group-item"><?php echo $username["email"] ?></div>
               <p> <div class="col-4 row align-items-center">
        <a href="../pages/password_change.php" class="btn btn-danger "style ="width:150px;padding-left:50%;padding-right:50% ">Zmenit heslo</a>
    </div>
                </div></p>
                
                </div>
                
            </div>
            
        </div>
    <?php endforeach ?>
    
</main>
