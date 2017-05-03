<form action="" method="post" class="flexColumn form" enctype="multipart/form-data">
  <label for="title">Title</label>
  <input type="text" name="title" id="title" required="">
  <label for="rating">Rating</label>
  <input type="text" name="rating" id="rating">
  <label for="descr">Description</label>
  <textarea type="textarea" rows="10" cols="45" name="descr" id="descr"></textarea>
  <label for="year">Year</label>
  <input type="text" name="year" id="year">
  <label for="genre">Genre</label>
  <input type="text" name="genre" id="genre" required="">
  <label for="image">Image</label>
  <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
  <input type="file" name="image" id="image" accept='.jpg'>
  <input type="submit" name="create" class="formBtn selfCenter" value="Create">
</form>