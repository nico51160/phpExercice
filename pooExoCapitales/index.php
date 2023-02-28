<?php
include('classes/Capitale.php');
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <form action="" method="post">
            <select name="pays">
                <option value="allemagne">Allemagne</option>
                <option value="belgique">Belgique</option>
                <option value="france">France</option>
                <option value="espagne">Espagne</option>
                <option value="italie">Italie</option>
                <option value="portugal">Portugal</option>
            </select>
            <input type="submit" name="voir" value="voir">
        </form>

<?php
    if(isset($_POST['voir'])) {
        $pays = $_POST['pays'];

        switch ($pays) {
            case 'allemagne':
                $capitale = 'Berlin';
                break;

                case 'belgique':
                    $capitale = 'Bruxelles';
                    break;

                    case 'france':
                        $capitale = 'Paris';
                        break;

                        case 'espagne':
                            $capitale = 'Madrid';
                            break;
                            
                            case 'italie':
                                $capitale = 'Rome';
                                break;

                                case 'portugal':
                                    $capitale = 'Lisbone';
                                    break;


     

        }

        $capitale = new Capitale($pays, $capitale);
        echo $capitale;
    }
?>

    </section>
</body>
</html>