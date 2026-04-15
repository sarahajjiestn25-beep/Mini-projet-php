<?php
require 'connexion.php';

$search = $_GET['search'] ?? '';
$classe = $_GET['classe'] ?? '';

$sql = "SELECT * FROM etudiant WHERE 1";
$params = [];

if ($search) {
    $sql .= " AND nom LIKE :search";
    $params['search'] = "%$search%";
}
if ($classe) {
    $sql .= " AND classe = :classe";
    $params['classe'] = $classe;
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$data = $stmt->fetchAll();

require 'includes/header.php';
?>

<form method="GET" class="row g-2 mb-3">
  <input name="search" class="form-control col" placeholder="Nom">
  <select name="classe" class="form-select col">
    <option value="">Classe</option>
    <option>ILCS-1A</option>
    <option>ILCS-1B</option>
  </select>
  <button class="btn btn-primary col">Rechercher</button>
</form>

<table class="table table-striped">
<tr><th>ID</th><th>Nom</th><th>Actions</th></tr>

<?php foreach($data as $e): ?>
<tr>
<td><?= $e['id'] ?></td>
<td><?= htmlspecialchars($e['nom']) ?></td>
<td>
<a href="details.php?id=<?= $e['id'] ?>">Voir</a>
<a href="modifier.php?id=<?= $e['id'] ?>">Modifier</a>
<a href="supprimer.php?id=<?= $e['id'] ?>" onclick="return confirm('Supprimer?')">Supprimer</a>
</td>
</tr>
<?php endforeach; ?>

</table>

<?php require 'includes/footer.php'; ?>