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
                      <h3>部署</h3>
                      <p>
                          下面的日志记录标记了部署操作的每个行为，随着部署操作的推进自动更新。
                      </p>
                  </div>
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title">项目名称</h3>
                    </div>
                    <div class="panel-body">
                      <div class="stylish-lists">
                        <dl class="no-margin">
                          <dt  class="text-info">服务器组</dt>
                          <dd>
                            A description list is perfect for defining terms.
                          </dd>
                          <dd>
                            <table class="table table-responsive table-striped table-bordered table-hover no-margin">
                              <thead>
                                <tr>
                                  <th>
                                    服务器
                                  </th>
                                  <th class="hidden-xs">
                                    当前版本
                                  </th>
                                  <th style="width:10%" class="hidden-xs">
                                    查看
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
                                  <td>
                                    <button type="button" class="btn btn-info btn-xs"><i class="fa fa-list-ul"></i> 预览变更</button>
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
                                  <td>
                                    <button type="button" class="btn btn-info btn-xs"><i class="fa fa-list-ul"></i> 预览变更</button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </dd>
                          <dt  class="text-info">代码库</dt>
                          <dd>
                            Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                          </dd>
                          <dt  class="text-info">当前版本</dt>
                          <dd>
                            Etiam porta sem malesuada magna
                          </dd>
                          <dt  class="text-info">目标版本</dt>
                          <dd>
                            Fusce dapibus, tellus ac.
                            <blockquote>
                              <span class="title">当前版本的注释</span>
                              <p>
                                谁的提交，何时提交
                              </p>
                            </blockquote>
                          </dd>
                        </dl>
                      </div>
                      <hr>
                      <div class="panel panel-info">
                        <div class="panel-heading">
                          <h3 class="panel-title">服务器信息who@host</h3>
                        </div>
                        <div class="panel-body">
                          <label>部署日志</label>
                          <div class="todo-container">
                            <ul class="todo-list">
                              <li class="new">
                                <label for="1">
                                  Send flowers to Sandy 
                                  <span class="date">Due Feb 14</span>
                                </label>
                              </li>
                              <li class="process">
                                <label for="2">
                                  Coffee with Karan
                                  <span class="date">Done Jan 28</span>
                                </label>
                              </li>
                              <li class="completed">
                                <label for="3">
                                  Be creative
                                  <span class="date">Due Feb 2</span>
                                </label>
                              </li>
                              <li class="completed">
                                <label for="4">
                                  Buy new iPad
                                  <span class="date">Due Feb 7</span>
                                </label>
                              </li>
                              <li class="process">
                                <label for="5">
                                  Pay credit card bill
                                  <span class="date">Completed Jan 29</span>
                                </label>
                              </li>
                              <li class="new">
                                <label for="6">
                                  Take a photograph 
                                  <span class="date">Due Jan 30</span>
                                </label>
                              </li>
                              <li class="process">
                                <label for="2">
                                  Have tea with the Queen
                                  <span class="date">Completed Jan 18</span>
                                </label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
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