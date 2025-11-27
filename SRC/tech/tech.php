<?php
session_start();


if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'tech') {
    header('Location: ../login.php');
    exit;
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Espace Technicien</title>
  <link rel="stylesheet" href="../style/styles.css">
</head>
<body>
  <header class="nav">
    <div class="brand">
      <a href="../index.php" class="brand-link">
        <img src="../images/logo_sae.webp" alt="Logo">
      </a>
      <span class="badge">Technicien</span>
    </div>
    <ul>
      <li><a href="../index.php">Accueil</a></li>
      <li><a class="btn secondary" href="../logout.php">Déconnexion</a></li>
    </ul>
  </header>

  <main class="container">
    <div class="card">
      <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['login']); ?> (Technicien)</h1>
      <p class="note">Ici, vous effectuerez les opérations techniques du parc (à venir).</p>
    </div>
  </main>
</body>
</html>
