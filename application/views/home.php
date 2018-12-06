<!-- Banner -->
<section id="banner">
  <div class="inner">
    <h2>Himpunan Mahasiswa Teknologi Informasi</h2>
    <!-- <ul class="actions">
    <li><a href="#content" class="button big special">Sign Up</a></li>
    <li><a href="#elements" class="button big alt">Learn More</a></li>
  </ul> -->
</div>
</section>

<!-- One -->
<section id="one" class="wrapper style1">
  <header class="major">
    <h2>Program Studi</h2>
  </header>
  <div class="container">
    <div class="row">
      <div class="6u">
        <section class="special box">
          <a target="_blank" href="http://jti.polinema.ac.id/index.php/teknik-informatika/">
          <i class="icon fa-area-chart major"></i>
          <h3>D4 Teknik Informatika</h3>
</a>
        </section>
      </div>
      <div class="6u">
        <section class="special box">
          <a target="_blank" href="http://jti.polinema.ac.id/index.php/manajemen-informatika/">
          <i class="icon fa-refresh major"></i>
          <h3>D3 Manajement Informatika</h3>
          </a>
        </section>
      </div>
      <!-- <div class="4u">
      <section class="special box">
      <i class="icon fa-cog major"></i>
      <h3>Amet sed accumsan</h3>
      <p>Eu non col commodo accumsan ante mi. Commodo consectetur sed mi adipiscing accumsan ac nunc tincidunt lobortis.</p>
    </section>
  </div> -->
</div>
</div>

</section>

<!-- Two -->
<section id="two" class="wrapper style2">
  <header class="major">
    <h2>Artikel Terbaru</h2>
  </header>

  <!-- start article -->
  <div class="row-content">

    <div class="row">
      <div class="12u">
        <?php
        foreach ($article as $row) {
          $time = new DateTime($row->date);
          ?>

          <div class="artikel-stage">
          <div class="recent-posts">
            <article class="post clearfix">
              <h4 class="heading-primary">
                <a href="<?= base_url() ?>Article/view/<?= $row->id_article ?>"><?= $row->title ?></a>
              </h4>
              <div class="date">
                <span class="day"><?= $time->format('d') ?></span>
                <span class="month"><?= $time->format('H:i') ?></span>
              </div>

              <div class="image-container-post">
                <img src="<?= base_url().'assets/upload/article/'.$row->image ?>" alt="Image Article">
              </div>
              <p class="text-preview-home">
                <?= strip_tags($row->posting) ?>
              </p>
              <div class="pull-right">
                <a href="<?= base_url() ?>Article/view/<?= $row->id_article ?>" class="">
                  selengkapnya
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </article>
          </div>
          </div>
          <?php } ?>
        </div>

      </div>
    </div>
    <!-- end article -->
  </div>

</section>

<!-- Three -->
<section id="three" class="wrapper style1">
  <header class="major">
    <h2>Galeri Terbaru</h2>
  </header>
  <div class="row-content">
    <!-- start gallery -->
    <div class="row">
      <?php foreach ($gallery as $row) {
        $time = new DateTime($row->date);
        ?>
        <div class="3u">
          <div class="image-gallery-item">
            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
              <a href="<?= base_url().'Gallery/view/'.$row->id_gallery ?>"  data-whatever="@fat">
                <span class="thumb-info-wrapper">
                  <div class="image-container">
                    <img src="<?= base_url().'assets/upload/gallery/'.$row->image ?>" class="img-responsive" alt="">
                  </div>
                  <span class="thumb-info-title">
                    <span class="thumb-info-inner title"><?= $row->title ?></span>
                    <span class="thumb-info-inner date">
                      <i class="fa fa-calendar"></i>
                      <?= $time->format('d/m/Y'); ?>
                    </span>
                  </span>
                </a>
                <span class="thumb-info-action">
                  <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
              </span>
            </span>
          </div>

        </div>

        <?php } ?>
      </div>
      <!-- end gallery -->
  </div>
</section>
