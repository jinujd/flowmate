<?php require 'header.php'; ?>

<div class="button">
  <div class="container">
  <a href="./" style="float:right">Back</a>
    <ul>
      <li>
        <a href="#" class="bt img-btn">
          <img src="./images/dashboard.png" alt="Dashboard button"><br>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#" class="bt img-btn active">
          <img src="./images/design.png" alt="Design button"><br>
          <span>Design</span>
        </a>
      </li>
      <li>
        <a href="#" class="bt img-btn">
          <img src="./images/flow.png" alt="Design button"><br>
          <span>Flow</span>
        </a>
      </li>
      <li>
        <a href="#" class="bt img-btn">
          <img src="./images/execute.png" alt="Design button"><br>
          <span>Execute</span>
        </a>
      </li>
    </ul>
  </div>
</div>
  <div class="container" style="margin-top: 50px">
    Add button
    ---------
    <a href="#" class="add-btn" style="display:inline-block;"><img src="./images/add.png" alt="Add"></a><br/>
    Delete button
    -------------
    <a href="#" class="delete-btn" style="display:inline-block;"><img src="./images/delete.png" alt="Delete"></a>
    <br/>
    Dropdown Right
    --------------
    <button class="tiny-img-btn right-arrow-btn"><img src="./images/right-dropdown-btn.png" alt=""></button><br/>
    Create button
    -------------
    <button class="bt bt-primary">Create</button><br>
    Cancel button -------------<button class="bt bt-primary btn-cancel">Cancel</button><br>
    Disabled button -------------<button class="bt bt-primary btn-cancel disabled">ok</button>
  </div>

<?php require 'footer.php'; ?>
