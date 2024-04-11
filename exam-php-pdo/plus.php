<?php require_once __DIR__ .'/layout/header.php';?>
<div class="container"><br><br><br>
    
    <div class="recipe" style="display: flex; flex-wrap: wrap; align-content: space-around; justify-content: center;gap:2%;">
    <h1>Recette</h1><br><br>    
    <div class="card mb-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="admin/upload/<?php echo $_GET['images'] ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $_GET['titre']; ?></h5>
        <p class="card-text"><?php echo $_GET['description']; ?></p>
      </div>
    </div>
  </div>
</div>  
    </div>
</div>

<?php require_once __DIR__ .'/layout/footer.php';?>