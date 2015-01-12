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
                        <h3>排除文件和目录</h3>
                        <p>
                            可以在这里定义一批文件或目录，它们存在于代码库里，但是在部署的时候并不想被部署到目标服务器，比如.git目录。
                        </p>
                        <br />
                        <p>
                            <a href="#" class="btn btn-info btn-success" role="button">添加新的排除文件</a>
                        </p>
                    </div>
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title">项目名称</h3>
                      </div>
                      <div class="panel-body">
                        <table class="table table-responsive table-striped table-bordered table-hover no-margin">
                          <thead>
                            <tr>
                              <th style="width:55%">
                                路径
                              </th>
                              <th style="width:30%" class="hidden-xs">
                                备注
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