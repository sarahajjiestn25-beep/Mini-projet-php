<?php
require 'connexion.php';

$total = $pdo->query("SELECT COUNT(*) FROM etudiant")->fetchColumn();

$classes = $pdo->query("SELECT classe, COUNT(*) as nb FROM etudiant GROUP BY classe")->fetchAll();

$dernier = $pdo->query("SELECT * FROM etudiant ORDER BY date_inscription DESC LIMIT 1")->fetch();

require 'includes/header.php';
?>

<h1>Tableau de bord</h1>

<div class="row">
  <div class="col-md-4">
    <div class="card bg-primary text-white p-3">
      Total étudiants
      <h2><?= $total ?></h2>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card bg-success text-white p-3">
      Classes
      <?php foreach($classes as $c): ?>
        <div><?= htmlspecialchars($c['classe']) ?> : <?= $c['nb'] ?></div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card bg-info text-white p-3">
      Dernier inscrit
      <div><?= htmlspecialchars($dernier['nom']) ?></div>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>