<?php require 'header.php'; ?>

<a href="./" style="float:right">Back</a>
  <div class="container col-lg-2" style="padding: 30px 0;">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading active" role="tab" id="design-tab">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <img src="./images/dropdown.png" alt="" class="dropdown-icon">
              <img src="./images/design.png" alt="" class="menu-icon">Design
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="design-tab">
          <div class="panel-body">
            <ul class="limenu">
              <li class="active">
                <a href="#"><img src="./images/controls.png" alt="">Controls</a>
              </li>
              <li>
                <a href="#"><img src="./images/components.png" alt="">Components</a>
              </li>
              <li>
                <a href="#"><img src="./images/events.png" alt="">Events</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require 'footer.php'; ?>
