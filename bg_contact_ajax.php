<?php
echo '
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">後臺管理系統</a>
          </div>

          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" id="logout" style="cursor:pointer">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-blue">
                  <h4 class="card-title ">聯絡信件</h4>
                  <!-- <p class="card-category"></p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <form action="api.php?do=contact_save" method="post" enctype="multipart/form-data">
                    <table class="table">
                      <thead class=" text-san-blue">
                        <th width="10%">#</th>
                        <th width="20%">姓名</th>
                        <th width="15%">email</th>
                        <th width="15%">地址</th>
                        <th width="15%">內容</th>
                        <th width="15%">時間</th>
                        <th width="10%">操作</th>
                      </thead>
                      <tbody id="data">

                      </tbody>
                    </table>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
              <a href="bg_background.php">
              <img src="images/home_logo_top/LOGO_延伸圖案_DM.png" width=64px>
            </a>
              </li>
  
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>

            </script> Copyright 謝文硯
          </div>
        </div>
      </footer>
    </div>

    <script src="js/myjs/bg_contact_ajax.js"></script>
  ';