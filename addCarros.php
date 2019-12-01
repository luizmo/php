<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./assets/script.js"></script>
  </head>
  <body>
    <main>
      <form method="post" action="/concessionaria/controllers/carro/create.php" id="default">
        <div>
          <input name="marca" type="text" placeholder="Marca" required/>
          <label>Marca</label> 
        </div>
        <div>
          <input type="file" accept=".jpg,.png" name="foto" required/> 
          <label>Imagem do veículo</label> 
        </div>
        <div>
          <select name="concessionaria" required></select>
          <label>Concessionaria</label>
        </div>
        <button type="submit" name="action">
          Entrar
        </button>
      </form>
    </main>
  </body>
</html>