# MonProjet
- Pour se connecter à ma base de données:
- exam_php_pdo
- R].QNsTvhZ(/-xL1

### Mes recettes 

Dossier [admin](admin/admin.php?action=add_recipe/).

Ajout d'une recette + description + upload de fichier puis j'ai utilisée la boucle `while` pour l'affichage des recettes dans la page `recipes.php`.

Pour accéder à admin, il faut s'inscrire ou se connecter à son compte pour pouvoir ajouter une recette.

### Fonctions

- [`getConnection`](functions/db.php) Charge la configuration de la base de données (config/db.ini) pour créer une connexion à la BDD @throws PDOException si la connexion échoue
- [`isSpam`](functions/emails.php) pour vérifier si l'email est un spam et elle doit renvoyer true s'il est un spam et false s'il n'est pas un spam
-[`getErrorMessage`](functions/error.php) elle nous permet de vérifier les différents cas d'erreur possible et nous renvoie un message en cas d'erreur