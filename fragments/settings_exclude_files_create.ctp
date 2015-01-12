<!DOCTYPE html>
<html>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
<body>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<!-- Main Container start -->
<div class="dashboard-container">
  <div class="container">
      <!-- Dashboard Wrapper Start -->
      <div class="dashboard-wrapper">
          <!-- Left Sidebar Start -->
          <div class="left-sidebar">
              <!-- Row Start -->
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div class="jumbotron">
                      <h3>添加新的被排除文件</h3>
                      <p>
                          在这里添加不参与部署的文件，任何能够匹配上的文件都不会被部署到服务器。
                      </p>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <form class="form-horizontal row-border" action="#">
                        <div class="form-group">
                          <label class="col-md-2 control-label">路径</label>
                          <div class="col-md-10">
                            <input class="form-control" type="text" name="placeholder" placeholder="placeholder">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">保存被排除的文件</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Row End -->
          </div>
          <!-- Left Sidebar End -->

          <!-- Right Sidebar Start -->
          <div class="right-sidebar">
            <div class="wrapper">
              <h4 class="text-info">通配符</h4>
              <p>
                  支持如下形式的通配符：
              </p>
              <p>
                *：匹配任意文件
              </p>
              <p>
                **：递归匹配目录
              </p>
              <p>
                ?：匹配任意字符
              </p>
              <p>
                [set]：匹配在set里出现的任意一个字符，例如[a-z]
              </p>
            </div>
          </div>
          <!-- Right Sidebar End -->
      </div>
      <!-- Dashboard Wrapper End -->
      <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
  </div>
</div>
<!-- Main Container end -->
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>