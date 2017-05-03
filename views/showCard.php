<section class="flex flexWrap">
  <article class="showCard flexColumn" ng-repeat="show in myShows | filter:myFilter | orderBy:'Title'">
    <?php if($_SESSION['admin'] == true) { ?>
    <ul class="flex justifyAround alignEnd controlsList">
      <li class="editBtn controlBtn"><a href="controllers/admin.php?update={{show.Id}}">Edit</a></li>
      <li class="deleteBtn controlBtn"><a href="controllers/admin.php?delete={{show.Id}}">Delete</a></li>
    </ul>
    <?php } ?>
    <header class=" flexWrap">
      <div class="flex justifyBetween">
        <h1 class="showTitle">{{show.Title}}</h1>
        <p class="showRating">{{show.Rating}}<span class="ten">/10</span></p>
      </div>
      <span class="showGenre">{{show.Genre}}</span>
      <span class="showYear">({{show.Year}})</span>
    </header>
    <!-- <?= '<img height="200" class="showImg selfCenter" src="data:'.utf8_encode($link['type']).';base64,'.base64_encode(stripslashes($link['content'])).'"/>';?> -->
    <img src="views/img/{{show.Image}}"  height="200" class="showImg selfCenter">
    <p class="showDescr">{{show.Description}}</p>
  </article>
</section>


