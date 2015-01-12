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
                        <h3>部署历史</h3>
                        <p>
                            下面的记录显示了本项目的部署历史，可以比较简洁快速地看到每次部署的基本情况，可以从部署日期进入任何一个记录查看部署的详情。
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
                              <th style="width:15%">
                                日期
                              </th>
                              <th style="width:20%" class="hidden-xs">
                                目标服务器组
                              </th>
                              <th style="width:25%" class="hidden-xs">
                                From
                              </th>
                              <th style="width:25%" class="hidden-xs">
                                To
                              </th>
                              <th style="width:5%" class="hidden-xs">
                                状态
                              </th>
                              <th style="width:10%" class="hidden-xs">
                                部署人
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <span class="name">
                                  2015年1月1日
                                </span>
                              </td>
                              <td>
                                Baswa #567
                              </td>
                              <td>
                                Baswa #567
                              </td>
                              <td>
                                Baswa #567
                              </td>
                              <td>
                                <span class="label label-success">成功</span>
                              </td>
                              <td class="hidden-xs">
                                某人
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span class="name">
                                  2015年1月1日
                                </span>
                              </td>
                              <td>
                                Baswa #567
                              </td>
                              <td>
                                Baswa #567
                              </td>
                              <td>
                                Baswa #567
                              </td>
                              <td>
                                <span class="label label-danger">失败</span>
                              </td>
                              <td class="hidden-xs">
                                某人
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