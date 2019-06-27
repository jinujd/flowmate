<?php require "header.php";?>
<?php require "page-header.php";?>


<!--============== Modals ==================-->
  <!--Create a new page modal starts here -->
  <div class="modal fade" id="create-newpage" tabindex="-1" role="dialog" aria-labelledby="create-newpageLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="create-newpageLabel">Create a Page</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group row">
              <label for="page-name" class="col-lg-4">Enter page name</label>
              <div class="col-lg-8"><input type="text" class="form-control"></div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="bt bt-primary">Select</button>
          <button type="button" class="bt bt-primary btn-cancel" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Create a new page modal ends here -->

  <!--Design modal starts here -->
  <div class="modal fade" id="design-controlModal" tabindex="-1" role="dialog" aria-labelledby="design-controlModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="design-controlModalLabel">Controls</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group row">
              <label for="" class="col-lg-2">Abcd</label>
              <div class="col-lg-7">
                <div class="select">
                  <select class="form-control">
                     <option></option>
                     <option>The second option</option>
                     <option>The thrid option</option>
                  </select>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-lg-2">Abcd</label>
              <div class="col-lg-7">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <label for="" class="col-lg-2">Abcd</label>
                <div class="radio col-lg-8">
                  <input type="radio" id="test1" name="radio-group" checked>
                  <label for="test1">Abcd</label>
                  <input type="radio" id="test2" name="radio-group">
                  <label for="test2">Abcd</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <label for="" class="col-lg-2">Abcd</label>
                <div class="checkbox col-lg-8">
                  <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
                  <label for="styled-checkbox-1">Abcd</label>
                </div>
              </div>
            </div>
            <!-- Modal form accordian start -->
            <div class="modal-accordian">
              <div class="btn-hold">
                <button type="button" class="tiny-img-btn collapsed" data-toggle="collapse" data-target="#form-panel">
                  <img src="./images/drop-up.png" alt="Accordian controls">
                </button>
                Abcd
              </div>
              <div id="form-panel" class="collapse show">
                <div class="row">
                  <label for="" class="col-lg-2">Abcd</label>
                  <div class="col-lg-10">
                    <div class="row">
                      <div class="checkbox col-lg-6">
                        <input class="styled-checkbox" id="checkbox1" type="checkbox" value="value1">
                        <label for="checkbox1">Abcd</label>
                      </div>
                      <div class="checkbox col-lg-6">
                        <input class="styled-checkbox" id="checkbox2" type="checkbox" value="value1">
                        <label for="checkbox2">Abcd</label>
                      </div>
                      <div class="checkbox col-lg-6">
                        <input class="styled-checkbox" id="checkbox3" type="checkbox" value="value1">
                        <label for="checkbox3">Abcd</label>
                      </div>
                      <div class="checkbox col-lg-6">
                        <input class="styled-checkbox" id="checkbox4" type="checkbox" value="value1">
                        <label for="checkbox4">Abcd</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal form accordian end -->
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="bt bt-primary">Select</button>
          <button type="button" class="bt bt-primary btn-cancel" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Design modal ends here -->

  <!--Create component modal starts here -->
  <div class="modal fade" id="create-component-modal" tabindex="-1" role="dialog" aria-labelledby="create-component-modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="create-component-modalLabel">Create component</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-0">
          <!-- Tab inside modal -->
          <ul class="ta-left nav nav-tabs modal-tab">
            <li>
              <a href="#tab1" class="active show" data-toggle="tab">
                First
              </a>
            </li>
            <li>
              <a href="#tab2" class="" data-toggle="tab">
                Current
              </a>
            </li>
            <li>
              <a href="#tab3" class="disabled" data-toggle="tab">
                Next
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="tab1" class="tab-pane fade show active">
              <h4>Advanced Component Settings</h4>
              <div class="form-group">
                <div class="row">
                  <label for="" class="col-lg-2">Abcd:</label>
                  <div class="checkbox col-lg-8">
                    <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value1">
                    <label for="styled-checkbox-2"></label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label for="" class="col-lg-2">Abcd:</label>
                  <div class="checkbox col-lg-8">
                    <input class="styled-checkbox" id="styled-checkbox-3" type="checkbox" value="value1">
                    <label for="styled-checkbox-3"></label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label for="" class="col-lg-2">Abcd:</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" >
                  </div>
                </div>
              </div>
              <div class="search">
                <div class="form-group search-box">
                  <div class="row">
                    <label for="" class="col-lg-2">Abcd:</label>
                    <div class="col-lg-10">
                      <input type="text" class="search-input form-control">
                      <div class="sicon-hold">
                        <button type="submit"><img src="./images/search.png" alt="Submit search"></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div id="tab2" class="tab-pane fade">
              Tab content 2
            </div>
            <div id="tab3" class="tab-pane fade">
              Tab content 3
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="bt bt-primary btn-cancel">Previous</button>
          <button type="button" class="bt bt-primary">Next</button>
          <button type="button" class="bt bt-primary btn-cancel disabled" data-dismiss="modal" disabled>ok</button>
          <button type="button" class="bt bt-primary btn-cancel" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!--Create component modal starts here -->

  <div class="tab-content">
    <div id="home" class="tab-pane fade">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>

  <!--============== Design tab start  ==================-->
    <div id="design" class="tab-pane fade in active show p-8">
      <div class="row m-0">
        <!--============== side panel start  ==================-->
          <div class="p-0 frame-2 frame-md-6 frame-prim m-r-8 md-margin">
            <!-- Frame header -->
            <div class="frame-header b-b-0">
              <div class="bottom-bg"></div>
            </div>
            <!-- Frame header end -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="design-tab">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#design-content" aria-expanded="true" aria-controls="collapseOne">
                      <img src="./images/dropdown.png" alt="" class="dropdown-icon">
                      <img src="./images/design.png" alt="Design Icon" class="menu-icon">Design
                    </a>
                  </h4>
                </div>
                <div id="design-content" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="design-tab">
                  <div class="panel-body">
                    <ul class="limenu">
                      <li>
                        <a href="#"  data-toggle="modal" data-target="#design-controlModal"><img src="./images/controls.png" alt="">Controls</a>
                      </li>
                      <li>
                        <a href="#" data-toggle="modal" data-target="#create-component-modal"><img src="./images/components.png" alt="">Components</a>
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
          </div><!--============== side panel end  ==================-->

        <!--============== Tree frame starts  ==================-->
          <div class="frame-3 frame-md-6 frame-prim tree-frame m-r-8 md-margin">
            <!-- Frame header -->
            <div class="frame-header">
              <div class="bottom-bg"></div>
            </div>
            <div class="search-bar">
              <div class="container">
                <div class="row">
                  <div class="frame-10 frame-md-10 frame-sm-10 frame-xs-10 p-l-0">
                    <div class="form-group search-box">
                      <input type="text" class="search-input form-control" placeholder="Search">
                      <img src="./images/search-placeholder.png" alt="Search" class="icon-placeholder">
                      <div class="sicon-hold">
                        <button type="submit"><img src="./images/search.png" alt="Submit search"></button>
                      </div>
                    </div>
                  </div>
                  <div class="frame-2  frame-md-2 frame-sm-2 frame-xs-2 p-lr-0 ta-center">
                    <button class="right-arrow"><img src="./images/right-dropdown-btn.png" alt=""></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Frame header end -->
            <span class="li-bg"></span>
            <ul class="treeView">
               <li><img src="./images/design.png" alt="Design icon">Design
                 <ul>
                   <li><img src="./images/project.png" alt="">Project_Manila
                     <ul>
                       <li>
                         <img src="./images/project02.png" alt="">Project_Manila
                         <ul>
                           <li>
                             <img src="./images/app.png" alt="">HEB_Manila_cms
                             <ul>
                               <li><img src="./images/android.png" alt="">Andriod
                                 <ul>
                                   <li><img src="./images/commands.png" alt="">Commands
                                     <ul>
                                       <li><a href="#"><img src="./images/page.png" alt="">Pages(0)</a></li>
                                       <li>
                                         <a href="#">
                                           <img src="./images/page.png" alt="">Create New Page
                                         </a>
                                       </li>
                                     </ul>
                                   </li>
                                 </ul>
                               </li>
                               <li><img src="./images/design.png" alt="">Database
                                 <ul><li></li></ul>
                               </li>
                             </ul>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                   </li>
                 </ul>
               </li>
             </ul>
          </div>
            <!-- Menu start -->
            <div id="contextMenu" class="dropdown clearfix">
              <ul class="r-menu p-lr-0" role="menu" aria-labelledby="r-menu" style="display:block;position:static;margin-bottom:5px;">
                <li>
                  <a href="#"><img src="./images/refresh.png" alt="">Rename</a>
                </li>
                <li class="has-submenu">
                  <a href="#">Open</a>
                  <ul class="right-sub-menu">
                    <li><a href="#" data-toggle="modal" data-target="#create-newpage"><img src="./images/app.png" alt="">create</a></li>
                    <li><a href="#"><img src="./images/app.png" alt="">sub-menu2</a></li>
                    <li><a href="#"><img src="./images/app.png" alt="">sub-menu3</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><img src="./images/app.png" alt="">Create</a>
                </li>
                <li>
                  <a href="#"><img src="./images/delete.png" alt="">Delete</a>
                </li>
                <li>
                  <a href="#"><img src="./images/copy.png" alt="">Copy</a>
                </li>
                <li class="disabled">
                  <a href="#"><img src="./images/paste.png" alt="">paste</a>
                </li>
                <li>
                  <a href="#">Move</a>
                </li>
                <li>
                  <a href="#">Insert</a>
                </li>
              </ul>
            </div><!-- Menu end -->
        <!--============== Tree frame end  ==================-->

        <!--============== Table frame start  ==================-->
        <div class="table-frame-holder frame-5 m-r-6 md-margin">
          <div class="frame-12 table-frame frame-prim vheight">
            <div class="table-header">
              <div class="container">
                <div class="row">
                  <div class="col-lg-5 col-md-6 col-sm-6 col-6">
                    <img src="./images/refresh.png" alt="Refresh table" class="table-refresh-btn">
                    <hr>
                    <h4>Test Object</h4>
                  </div>
                  <div class="col-lg-7 col-md-6 col-sm-6 col-6">
                    <div class="row">
                      <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="form-group search-box">
                          <input type="text" class="search-input form-control" placeholder="Search">
                          <img src="./images/search-placeholder.png" alt="Search" class="icon-placeholder">
                          <div class="sicon-hold">
                            <button type="submit"><img src="./images/search.png" alt="Submit search"></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-4 p-l-0">
                        <div class="row">
                          <div class="col-lg-6 col-sm-6 col-md-6 col-6 p-r-0">
                            <a href="#" class="add-btn"><img src="./images/add.png" alt="Add"></a>
                          </div>
                          <div class="col-lg-6 col-sm-6 col-md-6 col-6 p-l-0">
                            <a href="#" class="delete-btn"><img src="./images/delete.png" alt="Delete"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <table class="" id="datatable">
              <thead>
                  <tr>
                      <th></th>
                      <th>Step Name</th>
                      <th>Object Name</th>
                      <th>Action</th>
                      <th>Attribute Field</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Accountant</td>
                    <td>Garrett Winters</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>63</td>
                </tr>
                <tr>
                    <td>Accountant</td>
                    <td>Garrett Winters</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>63</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>2011/07/25</td>
                    <td>2011/07/25</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>2011/07/25</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>Accountant</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>India</td>
                    <td>Tokyo</td>
                </tr>
                <tr>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>Garrett Winters</td>
                    <td>Garrett Winters</td>
                    <td>63</td>
                </tr>
                <tr>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>Accountant</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                  <td>$170,750</td>
                    <td>Garrett Winters</td>
                    <td>Tokyo</td>
                    <td>Accountant</td>
                    <td>63</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>$170,750</td>
                </tr>
              </tbody>
            </table>
            <div class="table-footer">
              <div class="container">
                <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-12 p-l-0">
                    <div class="page-show border-right"></div>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-10 col-12">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="page-nav">
                          <div class="row">
                            <div class="col-sm-4 p-l-0 border-right">
                              <img src="./images/next.png" alt="" style="margin-right: 10px;"  class="rotate">
                              <img src="./images/next-list.png" alt="" class="rotate prev-icon1">
                            </div>
                            <div class="col-sm-4 p-tb border-right">
                              <input type="text" class="form-control" placeholder="25">
                            </div>
                            <div class="col-sm-4 p-r-0 border-right">
                              <img src="./images/next-list.png" alt="">
                              <img src="./images/next.png" alt="" class="next-icon1">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="page-info">
                          <div class="row">
                            <div class="col-sm-4 border-right ta-center"><img src="./images/refresh.png" alt=""></div>
                            <div class="col-sm-8"><p>Displaying 1 to 10 of 20 items</p></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-editor">
            <textarea rows="1"></textarea>
            <textarea rows="1"></textarea>
            <textarea rows="1"></textarea>
            <textarea rows="1"></textarea>
            <textarea rows="1"></textarea>
            <textarea rows="1"></textarea>
            <textarea rows="1"></textarea>
            <textarea rows="1"></textarea>
            <textarea rows="1"></textarea>
            <textarea rows="1"></textarea>
            <textarea rows="1"></textarea>
            <textarea rows="1"></textarea>
          </div>
        </div><!--============== Table frame end  ==================-->

        <!--============== Rightside tree menu start  ==================-->
        <div class="right-panel-frame p-0 frame-2">
          <div class="p-0 frame-12 frame-prim">
            <!-- Frame header -->
            <div class="frame-header">
              <div class="bottom-bg"></div>
            </div>
            <!-- Frame header end -->
            <ul class="treeView">
               <li><img src="./images/design.png" alt="Design icon">Design
                 <ul>
                   <li><img src="./images/project.png" alt="">Project_Manila
                     <ul>
                       <li>
                         <img src="./images/project02.png" alt="">Project_Manila
                         <ul>
                           <li>
                             <img src="./images/app.png" alt="">HEB_Manila_cms
                             <ul>
                               <li><img src="./images/android.png" alt="">Andriod
                                 <ul>
                                   <li><img src="./images/commands.png" alt="">Commands
                                     <ul>
                                       <li><a href="#"><img src="./images/page.png" alt="">Pages(0)</a></li>
                                       <li><a href="#"><img src="./images/page.png" alt="">Create New Page</a></li>
                                     </ul>
                                   </li>
                                 </ul>
                               </li>
                               <li><img src="./images/design.png" alt="">Database
                                 <ul><li></li></ul>
                               </li>
                             </ul>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                  </li>
                </ul>
               </li>
             </ul>
          </div>
          <div class="table-dropdown">
            <div class="panel-group no-image-panel" id="accordion3" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="test-object">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#test-object-tab" aria-expanded="true" aria-controls="collapseOne">
                      <img src="./images/dropdown.png" alt="" class="dropdown-icon">Test object
                    </a>
                  </h4>
                </div>
                <div id="test-object-tab" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="flow-tab">
                  <div class="panel-body">

                    <!-- panel inside panel -->
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
                </div>
              </div>
            </div>
            <div class="panel-group no-image-panel" id="accordion4" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="test-step">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion4" href="#test-step-tab" aria-expanded="true" aria-controls="#test-step-tab">
                      <img src="./images/dropdown.png" alt="" class="dropdown-icon">Test step
                    </a>
                  </h4>
                </div>
                <div id="test-step-tab" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="flow-tab">
                  <div class="panel-body">
                    demo content
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--============== Rightside tree menu end  ==================-->
      </div>
    </div><!--============== Design tab end  ==================-->

    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
</div>

<?php require "footer.php";?>
