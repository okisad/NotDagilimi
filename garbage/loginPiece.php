<form data-toggle="validator" class="navbar-form navbar-right text-right" id="signin" role="form" method="post" action="../homepageback.php">
    <div class="form-group">
        <input type="text" name="email" placeholder="Email Adresi" class="form-control" data-error="Email adres geçerli değil" required/>
    </div>
    <div class="form-group">
        <input type="password" name="password" placeholder="Şifre" class="form-control" required/>
    </div>
    <div class="form-group">
        <button type="submit" name="loginButton" class="btn btn-md btn-primary btn-block">Giriş</button>
    </div>
</form>