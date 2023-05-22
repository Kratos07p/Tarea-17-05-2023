<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesión</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .container {
      width: 300px;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .container h2 {
      text-align: center;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    
    .form-group input {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      border: none;
      text-align: center;
      text-decoration: none;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Iniciar sesión</h2>
    <form id="login-form">
      <div class="form-group">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="btn">Iniciar sesión</button>
    </form>
  </div>

  <script>
    class Authenticator {
      constructor(username, password) {
        this.username = username;
        this.password = password;
      }
      authenticate() {
        return this.username === "adminpoo" && this.password === "admin";
      }
    }

    function login(event) {
      event.preventDefault();

      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

      var authenticator = new Authenticator(username, password);
      var isAuthenticated = authenticator.authenticate();

      if (isAuthenticated) {

        window.location.href = "Verificar 3.php";
      } else {
        alert("Usuario o contraseña incorrectos");
      }
    }

    document.getElementById("login-form").addEventListener("submit", login);
  </script>
</body>
</html>
