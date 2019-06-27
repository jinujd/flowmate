<?php require 'header.php'; ?>

  <div class="container design-layout">
  <a href="./" style="float:right">Back</a>
    <div class="tree-frame">
      <div class="frame-5 frame-prim">
        <!-- Frame header -->
        <div class="frame-header">
          <div class="bottom-bg"></div>
        </div>
        <div class="search-bar">
          <div class="container">
            <div class="row">
              <div class="col-lg-11 p-l-0">
                <div class="form-group search-box">
                  <input type="text" class="search-input form-control" placeholder="Search">
                  <img src="./images/search-placeholder.png" alt="Search" class="icon-placeholder">
                  <div class="sicon-hold">
                    <button type="submit"><img src="./images/search.png" alt="Submit search"></button>
                  </div>
                </div>
              </div>
              <div class="col-lg-1 p-lr-0">
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
    </div>
  </div>

  <div id="contextMenu" class="dropdown clearfix">
    <ul class="r-menu p-lr-0" role="menu" aria-labelledby="r-menu" style="display:block;position:static;margin-bottom:5px;">
      <li>
        <a href="#"><img src="./images/refresh.png" alt="">Rename</a>
      </li>
      <li class="has-submenu">
        <a href="#">Open</a>
        <ul class="right-sub-menu">
          <li><a href="#"><img src="./images/app.png" alt="">sub-menu1</a></li>
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
  </div>

<?php require 'footer.php'; ?>
