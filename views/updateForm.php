<form action="" method="post" class="flexColumn editForm">
  <?php while($show = $shows->fetch()) { ?>
  <label for="title">Title</label>
  <input type="text" name="title" id="title" value="<?= $show['show_title'] ?>">
  <label for="rating">Rating</label>
  <input type="text" name="rating" id="rating" value="<?= $show['show_rating'] ?>">
  <label for="descr">Description</label>
  <textarea type="textarea" rows="10" cols="45" name="descr" id="descr"><?= $show['show_descr'] ?></textarea>
  <label for="year">Year</label>
  <input type="text" name="year" id="year" value="<?= $show['show_year'] ?>">
  <label for="genre">Genre</label>
  <input type="text" name="genre" id="genre" value="<?= $show['show_genre'] ?>">
  <?php 
} 
$shows->closeCursor(); 
?>
<input type="submit" name="update" class="updateBtn button selfCenter" value="Update">
</form>