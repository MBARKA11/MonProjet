<?php require_once __DIR__ .'/layout/header.php';?>
<?php $title = "Page recettes";?>
<div class="container"><br><br><br>
    <h1>Nos recettes</h1>
    <div class="recipe" style="display: flex; flex-wrap: wrap; align-content: space-around; justify-content: center;gap:2%;">
        <?php
            require_once __DIR__ . '/functions/db.php';
            $pdo = getConnection();
            
            try{
                $req=$pdo->prepare('SELECT * FROM recipes');
                $req->execute();
            }catch (PDOException $e) {
            echo "dfghjk". $e->getMessage() ."dfghj";
        }
        // Récupère la prochaine ligne et la retourne en tant qu'objet
            while($reponse=$req->fetch(PDO::FETCH_OBJ)){?>
            <div class="card" style="width: 18rem;">
        <img src="admin/upload/<?php echo $reponse->images?> " class="card-img-top" alt="">
        <div class="card-body">
        <h5 class="card-title"><?php echo $reponse->titre;?></h5>
        <p class="card-text"><?php echo substr($reponse->description,0,100);?></p>
        <a href="Plus.php?id=<?php echo $reponse->id;?>&titre=<?php echo $reponse->titre; ?>&description=<?php echo $reponse->description;?>&images=<?php echo $reponse->images?>" class="btn btn-primary">Plus</a>
        </div>
    </div>
            <?php }
        ?>
    </div>
</div>


<?php require_once __DIR__ .'/layout/footer.php';?>