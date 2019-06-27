<?php require 'header.php'; ?>

  <div class="container design-layout">
  <a href="./" style="float:right">Back</a>
    Search input:
    <div class="search">
      <div class="form-group search-box">
        <input type="text" class="search-input form-control" placeholder="Search">
        <img src="./images/search-placeholder.png" alt="Search" class="icon-placeholder">
        <div class="sicon-hold">
          <button type="submit"><img src="./images/search.png" alt="Submit search"></button>
        </div>
      </div>
    </div>
    <div class="checkbox col-lg-8">
      <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
      <label for="styled-checkbox-1">Checkbox</label>
    </div>
    <div class="radio col-lg-8">
      <input type="radio" id="test1" name="radio-group" checked>
      <label for="test1">Radio1</label>
      <input type="radio" id="test2" name="radio-group">
      <label for="test2">Radio2</label>
    </div>
  </div>

<?php require 'footer.php'; ?>
