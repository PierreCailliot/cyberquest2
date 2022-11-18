<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">

    <title>Page oublie de mot de passe</title>
    <meta charset="utf-8" />
</head>

<body>
    <form method="post">
        <h2>Reinitialisation mdp </h2>

        <p1>
            <table>
                <tr>
                    <th> Veuillez choisir votre utilisateur </th>
                </tr>
                <tr>


                    <td>
                        <label for="Utilisateur">Utilisateur:</label>

                        <input type="text" id="Utilisateur" name="Utilisateur" autocomplete="off" required size="15">
                    </td>


                </tr>
                <tr>
                    <th>Question secrète </th>



                </tr>
                <tr>
                    <td>Quel est le nom de votre premiere animal ? </td>

                </tr>
                <tr>
                    <td>
                        <label for="text">Réponse :</label>

                        <input type="text" id="reponse1" name="reponse1" autocomplete="off" required size="15">
                    </td>
                </tr>
                <tr>
                    <td>Quel est le nom de votre ecole ? </td>

                </tr>
                <tr>
                    <td>
                        <label for="text">Réponse :</label>

                        <input type="text" id="reponse2" name="reponse2" autocomplete="off" required size="15">
                    </td>
                </tr>
                <tr>
                    <td>Quel est le pren de votre compagnon? </td>

                </tr>
                <tr>
                    <td>
                        <label for="text">Réponse :</label>

                        <input type="text" id="reponse3" name="reponse3" autocomplete="off" required size="15">
                    </td>
                </tr>
            </table>

        </p1>
        <p1>
            <input type="submit" name="btn1" value="Valider">
            <?php

            $champUtilisateur = $_POST['Utilisateur'];
            $champReponse1 = $_POST['reponse1'];
            $champReponse2 = $_POST['reponse2'];
            $champReponse3 = $_POST['reponse3'];
            if ($champUtilisateur == 'jeanne.done@demails.com' && $champReponse1 == 'Ramette'&& $champReponse2 == 'Polytech'&& $champReponse3 == 'Thomas') {
                if (isset($_POST['btn1'])) {
                    session_start();               
                    $message = "Le nouveau mot de passe est: ". $_SESSION[$mdp];        
                    echo '<script type="text/javascript">window.alert("' . $message . '");</script>';
                
                }
                
            } else {
                if (isset($_POST['btn1'])) {
                    $message = 'Utilisateur ou réponse incorrect';
                    echo '<script type="text/javascript">window.alert("' . $message . '");</script>';
                }
            }

            ?>
        </p1>
    </form>
</body>

</html>
