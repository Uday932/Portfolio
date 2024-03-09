<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un colis</title>
    <style>
        /* CSS pour la mise en page de la page d'ajout de colis */
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
        
        .container label {
            display: block;
            color: #333333;
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .container input[type="text"],
        .container input[type="date"],
        .container input[type="email"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #CCCCCC;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 20px;
        }
        
        .container input[type="submit"] {
            display: inline-block;
            color: #FFFFFF;
            background-color: #ff4800;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .container input[type="submit"]:hover {
            background-color: #e63b00;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Ajouter un colis</h1>

        <form method="POST" action="ajouter_colis.php">
            <label for="num_colis">Numéro de colis:</label>
            <input type="text" name="num_colis" id="num_colis" required><br><br>

            <label for="date_envoi">Date d'envoi:</label>
            <input type="date" name="date_envoi" id="date_envoi" required><br><br>

            <label for="date_livraison">Date de livraison:</label>
            <input type="date" name="date_livraison" id="date_livraison" required><br><br>

            <label for="statut">Statut:</label>
            <input type="text" name="statut" id="statut" required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>

            <input type="submit" value="Ajouter le colis">
        </form>
    </div>

</body>
</html>
