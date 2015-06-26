<!--<div class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="homepage.php">NOT DAĞILIMI</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <p class="navbar-text">Not Dağılımları</p>
        </div>

        <div class="navbar-collapse collapse" id="collapse-login">
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
        </div>
    </div>
</div>

-->

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-login">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../views/homepage.php">NOT DAĞILIMI</a>
        </div>
        <div class="collapse navbar-collapse" id="collapse-login">
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
        </div>
    </div>
</nav>