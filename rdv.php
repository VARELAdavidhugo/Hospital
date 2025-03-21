<?php
require_once 'db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date'];

    $stmt = $pdo->prepare("INSERT INTO rdv (nom, prenom, date_rdv) VALUES (?, ?, ?)");
    if ($stmt->execute([$nom, $prenom, $date])) {
        $message = "<div class='alert alert-success'>✅ Rendez-vous enregistré avec succès !</div>";
    } else {
        $message = "<div class='alert alert-danger'>❌ Erreur lors de l’enregistrement du rendez-vous.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Prendre un rendez-vous</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<?php include 'header.php'; ?>
  <h1>📅 Prendre un rendez-vous</h1>

  <?= $message ?>

  <form method="post" action="">
    <div class="mb-3">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom" required>
    </div>
    <div class="mb-3">
      <label for="prenom" class="form-label">Prénom</label>
      <input type="text" class="form-control" id="prenom" name="prenom" required>
    </div>
    <div class="mb-3">
      <label for="date" class="form-label">Date du rendez-vous</label>
      <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
    <a href="index.php" class="btn btn-secondary">⬅️ Retour</a>
  </form>
</body>
</html>
