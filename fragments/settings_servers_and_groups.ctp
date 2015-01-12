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
                        <h3>服务器和组</h3>
                        <p>
                            服务器组的概念能够满足同时部署多台服务器的要求，而且可以有效区分不同用途的服务器集群。本平台里的部署行为都只跟“组”直接关联。
                        </p>
                        <br />
                        <p>
                            <a href="#" class="btn btn-sm btn-info" role="button">添加新的服务器组</a>
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
                              <th style="width:10%">
                                名称
                              </th>
                              <th style="width:20%" class="hidden-xs">
                                主机
                              </th>
                              <th style="width:5%" class="hidden-xs">
                                协议
                              </th>
                              <th style="width:25%" class="hidden-xs">
                                服务器部署目录
                              </th>
                              <th style="width:25%" class="hidden-xs">
                                代码库目标目录
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
                              <td>
                                15 - 02 - 2013
                              </td>
                              <td>
                                15 - 02 - 2013
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
                              <td>
                                10 - 02 - 2013
                              </td>
                              <td>
                                10 - 02 - 2013
                              </td>
                              <td class="hidden-xs">
                                <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> 修改</button>
                                <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> 删除</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <br />
                        <p>
                            <a href="#" class="btn btn-info btn-success" role="button">添加新的服务器</a>
                        </p>
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