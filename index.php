<form method="get">

    <p> Spieler1</p>
    <input name="player1" required>
    <br>
    <p> Spieler2</p>
    <input name="player2" required>
    <br>
    <p> SymbolSpieler1</p>
    <input name="symbolPlayer1" required>
    <br>
    <p> SymbolSpieler2</p>
    <input name="symbolPlayer2" required>
    <br>
    <p> Datum</p>
    <input name="date" type="date" required>
    <br>
    <p> Zeit</p>
    <input name="time" type="time" required>

    <button type="submit">Speichern</button>

</form>

<hr>

<form method="get">

    <input name="round" type="number">

    <button type="submit">Töten</button>

</form>

<?php

require_once 'vendor/autoload.php';
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\ParameterType;
use Doctrine\DBAL\Query\QueryBuilder;

$name = 'USRPS';
$date = new DateTime("5/10/2022");

$db = new PDO("mysql:host=127.0.0.1:3306;dbname=USRPS", 'root', '');
$stmt = $db->prepare('select * from game');
if ($stmt->execute()) {
    while ($row = $stmt->fetch()) {
        $games[] = [$row['round'], $row['player1'], $row['player2'], $row['symbolPlayer1'], $row['symbolPlayer2'], $row['gameDate'], $row['gameTime']];
    }
}

foreach ($games as $game) {
    echo "<br> <span> Game Nr." . $game[0] . ": " . $game[1] . " hat mit " . $game[3] . " gegen " . $game[2] . " gewonnen " . " welcher " . $game[4] . " genommen hat." . $game[5] . $game[6];
}
$connectionParams = [
    'dbname' => 'USRPS',
    'user' => 'root',
    'password' => '',
    'host' => '127.0.0.1:3306',
    'driver' => 'pdo_mysql',
];
$conn = DriverManager::getConnection($connectionParams);
$queryBuilder = $conn->createQueryBuilder();
if (isset($_GET['player1']) && isset($_GET['player2']) && isset($_GET['symbolPlayer1']) && isset($_GET['symbolPlayer2']) && isset($_GET['date']) && isset($_GET['time'])) {
    $queryBuilder->insert('game')
        ->values([
            'player1' => '?',
            'player2' => '?',
            'symbolPlayer1' => '?',
            'symbolPlayer2' => '?',
            'gameDate' => '?',
            'gameTime' => '?'
        ])
        ->setParameter(0, $_GET['player1'])
        ->setParameter(1, $_GET['player2'])
        ->setParameter(2, $_GET['symbolPlayer1'])
        ->setParameter(3, $_GET['symbolPlayer2'])
        ->setParameter(4, $_GET['date'])
        ->setParameter(5, $_GET['time'])
        ->executeQuery();
    header('Location: index.php');
} elseif (isset($_GET['round'])) {
    $queryBuilder->delete('game')->where("round=?")->setParameter(0, $_GET['round'])->executeQuery();
    header('Location: index.php');
}


?>

