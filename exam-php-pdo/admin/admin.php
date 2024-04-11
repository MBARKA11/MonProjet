<?php
require_once __DIR__ .'/../layout/header.php';?>

<div class="center">
    <h1>Admin</h1><br><br>
    <?php
    if(isset($_GET['action'])){
        //on verifie si la variable action est égale à la add-tecipe
        if($_GET['action']== 'add_recipe'){
            require_once __DIR__ . '/../functions/db.php';
            //runtimeexception
//------------------------------------------------
            if(isset($_POST['submit'])){
                extract($_POST);
              ///  $file = $_FILES['myFile'];
                var_dump($_FILES['myFile']);
                try {
                    $pdo = getConnection();
                } catch (PDOException) {
                    echo "Erreur lors de la connexion à la base de données";
                    exit;
                }
                try{
            $contenu_dir =  'upload/';
                //var_dump($destination_dir);
                //le dossier de destination tmp_file
            $tmp_file = $_FILES['myFile']['tmp_name'];
                    if(!is_uploaded_file($tmp_file)) { //si le fichier n'exite pas dans le dossier de destination on ferme la requête
                        exit('le fichier est introuvable');
                    }
            $type_file = $_FILES['myFile']['type'];
                    //on verifie sil'image est une extension jpeg ou png
                if(!strstr($type_file,'jpeg') && !strstr($type_file,'png')){ 
                        exit("ce fichier n'est pas une image"); 
                    }
            $filename = time().'.jpg';
                    if(!move_uploaded_file($tmp_file,$contenu_dir.$filename)) {
                    exit('impossible de copier le fichier');
                }
        $save_recipes = "INSERT INTO recipes (titre, `description`, images) VALUES (:recipeTitre, :recipeDescription, :recipeImage)";
            $stmt = $pdo->prepare($save_recipes);
            $stmt->execute(['recipeTitre' => $_POST['titre'],
                        'recipeDescription'=> $description,
                            'recipeImage'=>$filename]);
                        echo "Opération reussie";}
                        catch(PDOException $e) {
                            echo "dfghjk". $e->getMessage() ."dfghj";
            } 
        }
            ?>
            <h3>ajouter une recette</h3>
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="text" name="titre" placeholder="entrer le titre de la recette" required="" class="form form-control"><br>
            <textarea name="description" placeholder="entrer la description de la recette"  class="form form-control">
            </textarea><br>
            <input type="file" name="myFile"><br><br>
            <input type="submit" name="submit" class="btn btn-primary"><br>
        </form>
        <?php
    }
    }

    ?>
</div>
<?php 
require_once __DIR__ .'/../layout/footer.php';?>
