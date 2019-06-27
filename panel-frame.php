<?php require "header.php"; ?>

  <div class="container">
  <a href="./" style="float:right">Back</a>
    <div class="panel-frame">
      <div class="p-0 frame-3 frame-prim">
        <!-- Frame header -->
        <div class="frame-header b-b-0">
          <div class="bottom-bg"></div>
        </div>
        <!-- Frame header end -->
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="design-tab">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#design" aria-expanded="true" aria-controls="collapseOne">
                  <img src="./images/dropdown.png" alt="" class="dropdown-icon">
                  <img src="./images/design.png" alt="Design Icon" class="menu-icon">Design
                </a>
              </h4>
            </div>
            <div id="design" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="design-tab">
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
        <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="flow-tab-head">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#flow-tab" aria-expanded="true" aria-controls="collapseOne">
                  <img src="./images/dropdown.png" alt="" class="dropdown-icon">
                  <img src="./images/flow.png" alt="Design Icon" class="menu-icon">Flow
                </a>
              </h4>
            </div>
            <div id="flow-tab" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="flow-tab">
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
    </div>

    <!--=============Table panel==================-->
    <div class="panel-group b-b-0 table-panel" id="architect-accordian" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
          <a role="button" data-toggle="collapse" class="p-l-15" data-parent="#architect-accordian" href="#architect-tab" aria-expanded="true" aria-controls="architect-tab">
            Architect
          </a>
        </h4>
        </div>
        <div id="architect-tab" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            <table class="tab-table ta-left b-b-0" id="datatable">
              <thead>
                  <tr>
                      <th>Key</th>
                      <th>Value</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                    <td>CreatAlias</td>
                    <td>CreatAlias
                      <a href="#" class="btn-add"><img src="./images/plus.png" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td>CreatAlias</td>
                    <td>CreatAlias
                      <a href="#" class="btn-add"><img src="./images/plus.png" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td>
                      <input class="styled-checkbox" id="process-checkbox" type="checkbox" value="value1">
                      <label for="process-checkbox"></label>
                      Process</td>
                    <td>CreatAlias
                      <a href="#" class="btn-add"><img src="./images/plus.png" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td>CreatAlias</td>
                    <td>CreatAlias
                      <a href="#" class="btn-add"><img src="./images/plus.png" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td>CreatAlias</td>
                    <td>CreatAlias
                      <a href="#" class="btn-add"><img src="./images/plus.png" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td>CreatAlias</td>
                    <td>CreatAlias
                      <a href="#" class="btn-add"><img src="./images/plus.png" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td>CreatAlias</td>
                    <td>CreatAlias
                      <a href="#" class="btn-add"><img src="./images/plus.png" alt=""></a>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>


<?php require "footer.php"; ?>
