<?php
require 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $classe = $_POST['classe'];
    $date = $_POST['date_naissance'];

    if (!empty($nom) && !empty($prenom) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = "INSERT INTO etudiant(nom,prenom,email,classe,date_naissance)
                VALUES(:nom,:prenom,:email,:classe,:date)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(compact('nom','prenom','email','classe','date'));

        header("Location: liste.php?msg=ajout_ok");
        exit;
    }
}

require 'includes/header.php';
?>

<form method="POST">
  <input name="nom" class="form-control mb-2" placeholder="Nom">
  <input name="prenom" class="form-control mb-2" placeholder="Prénom">
  <input name="email" class="form-control mb-2" placeholder="Email">
  
  <select name="classe" class="form-select mb-2">
    <option>ILCS-1A</option>
    <option>ILCS-1B</option>
  </select>

  <input type="date" name="date_naissance" class="form-control mb-2">

  <button class="btn btn-primary">Ajouter</button>
</form>

<?php require 'includes/footer.php'; ?>