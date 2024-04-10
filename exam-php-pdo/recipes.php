<?php require_once __DIR__ .'/layout/header.php';?>
<div class="container"><br><br><br>
    <h1>Nos recettes</h1>
    <div class="recipe" style="display: flex; flex-wrap: wrap; align-content: space-around; justify-content: center;gap:2%;">
        <?php
            require_once __DIR__ . '/functions/db.php';
            try {
                $pdo = getConnection();
            } catch (PDOException) {
                echo "Erreur lors de la connexion à la base de données";
                exit;
            }
            try{
                $req=$pdo->prepare('SELECT * FROM recipes');
                $req->execute();
            }catch (PDOException $e) {
         //   $req=$db->prepare('SELECT * FROM recipes');
            //$req->execute();
            echo "dfghjk". $e->getMessage() ."dfghj";

        }
            while($reponse=$req->fetch(PDO::FETCH_OBJ)){?>
            <div class="card" style="width: 18rem;">
        <img src="admin/upload/<?php echo $reponse->images?> " class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?php echo $reponse->titre;?></h5>
        <p class="card-text"><?php echo $reponse->description;?></p>
        <a href="#" class="btn btn-primary">Plus</a>
        </div>
    </div>
            <?php }
        ?>
        
    </div>
</div>


<?php require_once __DIR__ .'/layout/footer.php';?>