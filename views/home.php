{{ include('layouts/header.php', {title: 'Membres'})}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?= ASSET; ?>css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="#">Accueil</a>
                </li>
                <li>
                    <a href="#">Recettes</a>
                </li>
                <li>
                    <a href="#">Mission </a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <h1><?= $data ?></h1>
        <table>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3<th>
                <th>4</th>
                <td>Hello</td>
                <td>Allo</td>
                <td>Asta</td>
                <td>Tourlou</td>

            </tr>
        </table>

    </main>
    <footer>
    abc
    </footer>
</body>
</html>