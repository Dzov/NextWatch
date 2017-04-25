<section class="flex flexWrap">
  <?php foreach ($shows as $show) { ?>
  <article class="showCard flexColumn">
    <header class=" flexWrap">
      <div class="flex justifyBetween">
        <h1 class="showTitle"><?= $show['show_title'] ?></h1>
        <p class="showRating"><?= $show['show_rating']?><span class="ten">/10</span></p>
      </div>
      <span class="showGenre"><?= $show['show_genre']?></span>
      <span class="showYear">(<?= $show['show_year']?>)</span>
    </header>
    <img src="img/<?= $show['show_img']?>"  height="200" class="showImg selfCenter">
    <p class="showDescr"><?= $show['show_descr']?> </p>
  </article>

  <?php } ?>
</section>