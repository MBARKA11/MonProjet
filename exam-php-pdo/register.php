<?php
require_once __DIR__ .'/layout/header.php';?>
    <h1>Form</h1>
    <section class="container">
        <div class="form-control">
            <form method="POST" action="register_process.php">
                    <div class="mb-2 col-lg">
                        <label for="name">Nom :</label>
                        <input type="text" name="name" id="name" required />
                    </div>
                    <div class="mb-2 col-lg">
                        <label for="firstname">Prénom :</label>
                        <input type="text" name="firstname" id="firstname" required />
                    </div>
                    <div class="mb-2 col-lg">
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" required />
                    </div>
                    <div class="mb-2 col-lg">
                        <label for="password">password :</label>
                        <input type="password" name="password" id="password" required />

                    </div>
                
                    <div><input type="submit" class="btn btn-primary" value="Envoyer" /></div>
            </form>
        <div>

     <!--    <form  method="POST" action="register_process.php">
 <div class="mb-3">
    <label for="name" class="form-label">Nom :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>-->
    </section>

<?php
require_once __DIR__ .'/layout/footer.php';?>