<?php
function active($key, $menu) {
  return $key === $menu ? 'active' : '';
}
?>
<header class="site-header">
  <div class="container header-inner">
    <div class="brand">
      <img src="img/fotoku.jpg" alt="Foto Profil" class="foto-profil">
      <a href="index.php?menu=data">Muhammad Alfin Al Muzakki</a>
    </div>
    <!-- Menu -->
    <nav class="nav">
      <a class="<?php echo active('data', $menu); ?>" href="index.php?menu=data">Data Diri</a>
      <a class="<?php echo active('pendidikan', $menu); ?>" href="index.php?menu=pendidikan">Riwayat Pendidikan</a>
      <a class="<?php echo active('skill', $menu); ?>" href="index.php?menu=skill">Skill</a>
    </nav>
    <!-- Menu -->
  </div>
</header>
