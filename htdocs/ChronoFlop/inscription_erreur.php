<!DOCTYPE html>
<html>
<head>
    <title>Erreur - Email déjà existant</title>
    <style>
        /* CSS pour la mise en page de la page d'erreur */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f8f8f8;
            font-family: Arial, sans-serif;
        }
        
        .container {
            max-width: 400px;
            background-color: #FFFFFF;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
        }
        
        .container h1 {
            color: #ff4800;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .container p {
            color: #333333;
            font-size: 18px;
            margin-bottom: 30px;
        }
        
        .container a {
            display: inline-block;
            color: #FFFFFF;
            text-decoration: none;
            font-size: 16px;
            padding: 10px 20px;
            background-color: #ff4800;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .container a:hover {
            background-color: #e63b00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Erreur - Email déjà existant</h1>
        <p>L'adresse email que vous avez entrée existe déjà dans notre base de données.</p>
        <p>Vous allez être rediriger vers la page d'inscription.</p>
        
    </div>
</body>
</html>


<?php
header('refresh:3;url=signin.html');