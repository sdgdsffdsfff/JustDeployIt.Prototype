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
                      <h3>新的部署</h3>
                      <p>
                          在下面选中要部署到的服务器组，同时设置想要部署的版本号，就可以部署了。部署之前，也可以进行预览查看部署行为可能发生的变化。
                      </p>
                  </div>
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title">项目名称</h3>
                    </div>
                    <div class="panel-body">
                      <form class="form-horizontal no-margin">
                        <div class="form-group">
                          <label for="country" class="col-sm-2 control-label">服务器组</label>
                          <div class="col-sm-10">
                            <div class="row">
                              <div class="col-md-10 col-sm-10 col-xs-10">
                                <select id="country" class="form-control">
                                  <option value=""> </option>
                                  <option value="Afganistan"> 服务器组1 </option>
                                  <option value="Afganistan"> 服务器组2 </option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="userName" class="col-sm-2 control-label">已部署版本</label>
                          <div class="col-sm-10">
                            <div class="row">
                              <div class="col-md-10 col-sm-10 col-xs-10">
                                <table class="table table-responsive table-striped table-bordered table-hover no-margin">
                                  <thead>
                                    <tr>
                                      <th style="width:40%">
                                        服务器
                                      </th>
                                      <th style="width:60%" class="hidden-xs">
                                        当前版本
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <span class="name">
                                          hostname
                                        </span>
                                      </td>
                                      <td>
                                        Baswa #567
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <span class="name">
                                          hostname
                                        </span>
                                      </td>
                                      <td>
                                        Baswa #567
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <span class="help-block">选定服务器组后，将会自动显示部署在其上的当前版本。</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="pwd" class="col-sm-2 control-label">将部署版本</label>
                          <div class="col-sm-10">
                            <div class="row">
                              <div class="col-md-10 col-sm-10 col-xs-10">
                                <input type="text" class="form-control" id="userName">
                                <span class="help-block">输入SCM里将被部署的目标版本号，也可以使用右侧按钮自动获取最新的版本号。</span>
                              </div>
                              <div class="col-md-2 col-sm-2 col-xs-2">
                                <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="加载最新的SCM版本号">
                                  <i class="fa fa-random"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" checked=""> 将<button type="button" class="btn btn-link btn-xs"> 已定义的配置文件 </button>复制到服务器
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" class="btn btn-info">部署预览</button>
                            <button type="submit" class="btn btn-success">执行部署</button>
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
              <?php include 'elements' . DIRECTORY_SEPARATOR. 'project_ready_sidebar.ctp'; ?>
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