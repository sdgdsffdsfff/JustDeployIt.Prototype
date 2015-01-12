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
                        <h3>基础设置</h3>
                        <p>
                            在这里修改项目名称、SCM的基本信息。
                        </p>
                    </div>
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title">项目设置</h3>
                      </div>
                      <div class="panel-body">
                        <form class="form-horizontal no-margin">
                            <div class="form-group">
                                <label for="userName"
                                       class="col-sm-2 control-label">项目名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="userName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-warning">修改项目名称</button>
                                </div>
                            </div>
                        </form>
                      </div>
                    </div>
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title">SCM设置</h3>
                      </div>
                      <div class="panel-body">
                        <form class="form-horizontal no-margin">
                            <h5>
                                基本信息
                            </h5>
                            <hr>
                            <div class="form-group">
                                <label for="country" class="col-sm-2 control-label">SCM类型</label>
                                <div class="col-sm-10">
                                    <select id="country" class="form-control">
                                        <option value="">
                                            Git
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="userName" class="col-sm-2 control-label">代码库路径</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="userName" placeholder="Name">
                                </div>
                            </div>

                            <br />
                            <h5>
                                认证信息
                            </h5>
                            <hr>
                            <div class="form-group">
                                <label for="userName" class="col-sm-2 control-label">代码库用户名</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="userName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">代码库密码</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-warning">
                                        修改代码库配置
                                    </button>
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
              <?php include 'elements' . DIRECTORY_SEPARATOR
                  . 'project_ready_sidebar.ctp'; ?>
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