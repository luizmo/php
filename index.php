<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./assets/script.js"></script>
  </head>
  <body>
    <main>
      <form method="post" action="/concessionaria/controllers/usuario/login.php" id="login">
        <div>
          <input name="email" type="email" placeholder="E-mail">
          <label>Email</label> 
        </div>
        <div>
          <input name="senha" type="password" placeholder="Senha">
          <label>Senha</label> 
        </div>
        <button type="submit" name="action">
          Entrar
        </button>
      </form>
    </main>
  </body>
</html>