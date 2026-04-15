<?php
require 'connexion.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM etudiant WHERE id=?");
$stmt->execute([$id]);
$e = $stmt->fetch();

require 'includes/header.php';
?>

<h3><?= htmlspecialchars($e['nom']) ?></h3>
<p>Email: <?= htmlspecialchars($e['email']) ?></p>

<a href="liste.php">Retour</a>

<?php require 'includes/footer.php'; ?>