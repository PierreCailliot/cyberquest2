<!DOCTYPE html>
<html>

<head>
    <title>Page acceuille</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <?php
    session_start();
    if ( $_SESSION[$mdp]== null){
        
    
        $_SESSION[$mdp = ''] = '';
        for ($i = 0; $i < 6; $i++) {

            $_SESSION[$mdp] .= strval(rand(0, 9));
        }
         
    }
  
    ?>

    <form method="post">
        <h2>Izy Secure</h2>

        <p1>
            <table>

                <tr>
                    <th> Veuillez choisir votre utilisateur et mot de passe </th>
                </tr>
                <tr>
                    <td>
                        <label for="text">Utilisateur:</label>

                        <input type="text" id="Utilisateur " name="Utilisateur" autocomplete="off" required size="15">
                    </td>


                </tr>
                <tr>
                    <td>
                        <label for="password">Mot de passe :</label>

                        <input type="password" id="motdepasse" name="motdepasse" required size="15">
                    </td>
                </tr>

                <tr>
                    <td>

                        <input type="submit" id="btnConnexion" name="btnConnexion" value="connexion">
                        <?php
                        

                        $champUtilisateur = $_POST['Utilisateur'];
                        $mdpChamp = $_POST['motdepasse'];
                        if ($champUtilisateur == 'jeanne.done@demails.com' && $mdpChamp == $_SESSION[$mdp]) {
                            if (isset($_POST['btnConnexion'])) {
                                header('location: profil.php');
                                exit();
                            }

                        } else {
                            if (isset($_POST['btnConnexion'])) {
                                $message = 'Utilisateur ou Mot de passe incorrect';
                                echo '<script type="text/javascript">window.alert("' . $message . '");</script>';
                            }

                        }
                        ?>

                    </td>
                </tr>
                <tr>
                    <td>

                        <a href="InitMdp.php" target="_blank"> Mot de passe oublié ?</a>
                    </td>
                </tr>
            </table>
        </p1>

    </form>
</body>

</html>