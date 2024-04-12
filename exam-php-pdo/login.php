<?php require_once __DIR__ .'/layout/header.php';?>
<?php $title = "Page Login";?>
    <h1>Login</h1>
<section class="container">
        <div class="form-control">
            <form method="POST" action="login_process.php">
                    <div class="mb-2 col-lg">
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" required />
                    </div>
                    <div class="mb-2 col-lg">
                        <label for="password">password :</label>
                        <input type="password" name="password" id="password" required />

                    </div>
                
                    <div><input type="submit" class="btn btn-primary" value="Se connecter" /></div>
            </form>
        <div>
</section>
<?php require_once __DIR__ .'/layout/footer.php';?>