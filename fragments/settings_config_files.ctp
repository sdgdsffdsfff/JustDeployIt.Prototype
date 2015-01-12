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
                        <h3>配置文件</h3>
                        <p>
                            一般来说，代码库里保存的配置文件（比如数据库连接参数、对端系统接口参数、文件和缓存参数）都是开发环境的配置，在部署的时候需要根据部署目标服务器环境的实际情况更换成合适的配置文件。这些文件将在即将部署完成时自动覆盖SCM里对应的配置文件。
                        </p>
                        <br />
                        <p>
                            <a href="#" class="btn btn-info btn-success" role="button">添加新的配置文件</a>
                        </p>
                    </div>
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title">服务器组名称1</h3>
                      </div>
                      <div class="panel-body">
                        <table class="table table-responsive table-striped table-bordered table-hover no-margin">
                          <thead>
                            <tr>
                              <th style="width:15%">
                                名称
                              </th>
                              <th style="width:60%" class="hidden-xs">
                                部署路径
                              </th>
                              <th style="width:10%" class="hidden-xs">
                                文件尺寸
                              </th>
                              <th style="width:15%" class="hidden-xs">
                                操作
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <span class="name">
                                  Mahendra Singh Dhoni
                                </span>
                              </td>
                              <td>
                                Baswa #567
                              </td>
                              <td>
                                New
                              </td>
                              <td class="hidden-xs">
                                <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> 修改</button>
                                <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> 删除</button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span class="name">
                                  Michel Clark
                                </span>
                              </td>
                              <td>
                                Baswa #224
                              </td>
                              <td>
                                New
                              </td>
                              <td class="hidden-xs">
                                <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> 修改</button>
                                <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> 删除</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
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