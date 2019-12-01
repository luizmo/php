<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./assets/script.js"></script>
  </head>
  <body>
    <main>
      <form method="post" action="/concessionaria/controllers/aluguel/register.php" id="default">
        <div>
          <input name="valor" type="number" placeholder="Valor" required/>
          <label>Valor</label> 
        </div>
        <div>
          <input type="date" name="data" required/> 
          <label>Data</label> 
        </div>
        <div>
          <select name="carro" required></select>
          <label>Carro</label>
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