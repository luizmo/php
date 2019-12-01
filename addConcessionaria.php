<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./assets/script.js"></script>
  </head>
  <body>
    <main>
      <form method="post" action="/concessionaria/controllers/concessionaria/create.php" id="default">
        <div>
          <input name="nome" type="text" placeholder="Nome" required/>
          <label>Nome</label> 
        </div>
        <button type="submit" name="action">
          Entrar
        </button>
      </form>
    </main>
  </body>
</html>