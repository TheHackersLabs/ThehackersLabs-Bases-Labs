<?php
session_start();

$error = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["user"];
    $password = $_POST["pass"];
    
    // Credenciales por defecto modificar para poner vuln
    $valid_users = [
        "admin" => "admin123",
        "user" => "password",
        "test" => "test"
    ];
    
    if(isset($valid_users[$username]) && $valid_users[$username] === $password){
        $_SESSION["user"] = $username;
        echo "[+] ACCESO CONCEDIDO<br>";
        exit;
    } else {
        echo "CREDENCIALES INVÁLIDAS";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - The Hackers Labs</title>
    <style>
        body {
            background: #0b0b0b;
            color: #eaeaea;
            font-family: Consolas, monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-box {
            background: #111;
            border: 1px solid #ff7a18;
            padding: 40px;
            width: 350px;
            border-radius: 5px;
            text-align: center;
        }

        .logo-container {
            margin-bottom: 30px;
        }

        .logo {
            max-width: 150px;
            height: auto;
            border-radius: 5px;
            border: 2px solid #ff7a18;
            padding: 5px;
            background: #0b0b0b;
        }

        h1 {
            color: #ff7a18;
            text-align: center;
            margin-bottom: 30px;
            font-size: 20px;
            border-bottom: 1px solid #ff7a18;
            padding-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            background: #0b0b0b;
            border: 1px solid #444;
            color: white;
            box-sizing: border-box;
            font-family: Consolas, monospace;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #ff7a18;
            box-shadow: 0 0 10px rgba(255, 122, 24, 0.3);
        }

        button {
            width: 100%;
            padding: 12px;
            background: none;
            border: 1px solid #ff7a18;
            color: #ff7a18;
            cursor: pointer;
            font-family: Consolas, monospace;
            font-size: 16px;
            transition: all 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background: #ff7a18;
            color: black;
            box-shadow: 0 0 20px rgba(255, 122, 24, 0.5);
        }

        .info {
            margin-top: 20px;
            color: #666;
            font-size: 12px;
            text-align: center;
            border-top: 1px solid #333;
            padding-top: 15px;
        }

        .error-message {
            color: #ff4444;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="logo-container">
            <img src="img/logo.jpeg" alt="Lab Logo" class="logo" onerror="this.style.display='none'">
        </div>
        
        <h1>THE HACKERS LABS LOGIN</h1>
        
        <form method="post">
            <input type="text" name="user" placeholder="USUARIO" required autocomplete="off">
            <input type="password" name="pass" placeholder="CONTRASEÑA" required autocomplete="off">
            <button type="submit">INGRESAR</button>
        </form>
        
        <div class="info">
        </div>
    </div>
</body>
</html>
