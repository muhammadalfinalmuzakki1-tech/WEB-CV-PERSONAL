<?php
$menu = isset($_GET['menu']) ? $_GET['menu'] : 'data';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV - Muhammad Alfin Al Muzakki</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>

<main class="container">
  <section class="card fade-in">
    <?php
      if ($menu === 'data') {
        include 'data.php';
      } elseif ($menu === 'pendidikan') {
        include 'pendidikan.php';
      } elseif ($menu === 'skill') {
        include 'skill.php';
      } else {
        echo "<h2>Halaman tidak ditemukan</h2>";
      }
    ?>
  </section>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
