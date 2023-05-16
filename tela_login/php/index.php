<!DOCTYPE html>
<html>
<head>
  
  <title>Tela de Login - Pinterest</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      margin-top: 100px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
      text-align: center;
      margin-bottom: 30px;
    }
    
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }
    
    input[type="text"],
    input[type="password"] {
      width: 94%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 20px;
    }
    
    button {
      background-color: #bd081c;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
    
    button:hover {
      background-color: #8e0617;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Tela de Login - Pinterest</h1>
    <form action="log.php" method="post">
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Digite seu Email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" placeholder="Digite sua Senha" required>
        <br>
    
      <button type="submit">Entrar</button>
    </form>
  </div>
</body>
</html>
