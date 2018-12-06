
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>linkPro | Profesional employee</title>

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/theme-elements.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/compiled.min.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/usertemp/css/skel.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/usertemp/css/style.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/usertemp/css/style-xlarge.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/usertemp/css/default.css" />

  <!-- Skin CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
</head>
<body id="top">

  <!-- Header -->
  <header id="header" class="skel-layers-fixed">
    <h1>
      <div class="logo">
        <p>linkPro</p>
        <!-- <a href="#">Ion</a> -->
      </div>
    </h1>
    <nav id="nav">
      <ul>
        <li><a href="<?= base_url() ?>">Beranda</a></li>
        <li><a href="<?= base_url() ?>Contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <!-- content here -->
  <?= $content ?>
  <!-- end of content -->

</div>

<!-- Footer -->
<footer id="footer">
  <div class="container">
    <span>2018 &copy; linkPro All rights reserved.</span>
  </div>
</footer>

<!-- Vendor -->
<script src="<?= base_url() ?>assets/vendor/usertemp/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/usertemp/js/skel.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/usertemp/js/skel-layers.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/usertemp/js/init.js"></script>
<script src="<?= base_url() ?>assets/js/list.pagination.min.js"></script>
<script src="<?= base_url() ?>assets/js/list.min.js"></script>
<script src="<?= base_url() ?>assets/js/default.js"></script>
</body>
</html>
