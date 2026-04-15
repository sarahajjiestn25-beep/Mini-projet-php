<?php
require 'connexion.php';

$id = $_GET['id'];

if ($_POST) {
    $nom = $_POST['nom'];
    $stmt = $pdo->prepare("UPDATE etudiant SET nom=? WHERE id=?");
    $stmt->execute([$nom, $id]);
    header("Location: liste.php");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM etudiant WHERE id=?");
$stmt->execute([$id]);
$e = $stmt->fetch();

require 'includes/header.php';
?>

<form method="POST">
<input name="nom" value="<?= htmlspecialchars($e['nom']) ?>">
<button>Modifier</button>
</form>

<?php require 'includes/footer.php'; ?>