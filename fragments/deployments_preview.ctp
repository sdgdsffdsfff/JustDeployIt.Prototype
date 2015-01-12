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
                      <h3>部署预览</h3>
                      <p>
                          下面的信息表明本次部署完成后服务器环境将要发生的变化，确认无误后，可以直接点击“执行部署”，如果有问题，也可以点击“返回调整”回到上一页调整信息。
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
                      <label>将被上传的配置文件</label>
                      <div class="stylish-lists">
                        <ul>
                          <li class="text-success">
                            path to config file(88bytes)
                          </li>
                          <li class="text-success">
                            Consectetur adipiscing elit
                          </li>
                          <li class="text-success">
                            Nulla volutpat aliquam velit
                          </li>
                          <li class="text-success">
                            Faucibus porta lacus fringilla vel
                          </li>
                          <li class="text-success">
                            Eget porttitor lorem
                          </li>
                        </ul>
                      </div>
                      <hr>
                      <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                          <button type="button" class="btn btn-info">返回修改</button>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-success">执行部署</button>
                        </div>
                      </div>
                      <hr>
                      <div class="panel panel-info">
                        <div class="panel-heading">
                          <h3 class="panel-title">服务器信息who@host</h3>
                        </div>
                        <div class="panel-body">
                          <label>将被上传的文件</label>
                          <div class="stylish-lists">
                            <ul>
                              <li class="text-success">
                                Lorem ipsum dolor sit amet
                              </li>
                              <li class="text-success">
                                Consectetur adipiscing elit
                              </li>
                              <li class="text-success">
                                Nulla volutpat aliquam velit
                              </li>
                              <li class="text-success">
                                Faucibus porta lacus fringilla vel
                              </li>
                              <li class="text-success">
                                Eget porttitor lorem
                              </li>
                            </ul>
                          </div>
                          <label>服务器上将被删除的文件</label>
                          <div class="stylish-lists">
                            <ul>
                              <li class="text-danger">
                                Lorem ipsum dolor sit amet
                              </li>
                              <li class="text-danger">
                                Consectetur adipiscing elit
                              </li>
                              <li class="text-danger">
                                Nulla volutpat aliquam velit
                              </li>
                              <li class="text-danger">
                                Faucibus porta lacus fringilla vel
                              </li>
                              <li class="text-danger">
                                Eget porttitor lorem
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                          <button type="button" class="btn btn-info">返回修改</button>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-success">执行部署</button>
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