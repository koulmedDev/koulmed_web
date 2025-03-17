<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion | admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #78BA25 0%, #0056b3 100%);
            background-repeat: no-repeat;
        }

        .login-container {
            width: 80%;
            max-width: 900px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            display: flex;
            overflow: hidden;
        }

        .login-image {
            flex: 1;
        }

        .login-form {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            margin-left: 50px;
            align-items: center;
            color: white;
            font-weight: bold;
            font-size: 24px;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        p.welcome {
            margin-bottom: 30px;
            color: #666;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #78BA25;
        }

        button {
            background: linear-gradient(135deg, #78BA25 0%, #0056b3 100%);
            color: white;
            border: none;
            padding: 15px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-top: 10px;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                width: 90%;
            }

            .login-image {
                height: 200px;
            }

            .login-form {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-image"> <img src="{{asset('admintemplate/img/login-image.png')}}" alt="Femme médecin" height="500px"></div>
        <div class="login-form">
            <div class="logo"><img src="{{asset('images/logo.png')}}" alt="Logo Koulmed" height="100px"></div>
            <h1>Espace Admin</h1>
            <p class="welcome">Bienvenue sur votre espace administrateur. Veuillez vous connecter pour accéder à votre tableau de bord.</p>

            <form method="POST" action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Votre adresse email" required>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
                </div>

                <button type="submit">Connexion</button>
            </form>
        </div>
    </div>
</body>
</html>
