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
                      <h3>添加新的配置文件</h3>
                      <p>
                          在这里添加适用于特定环境的配置文件，在部署行为完成时替换代码库库里用于开发测试的非正式配置文件。
                      </p>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <form class="form-horizontal row-border" action="#">
                        <div class="form-group">
                          <label class="col-md-2 control-label">路径</label>
                          <div class="col-md-10">
                            <input class="form-control" type="text" name="placeholder" placeholder="placeholder">
                            <span class="help-block">
                              输入文件在部署目标目录的相对路径，比如想要上传位于config目录下的database.inc.php文件，则应该填写
                              config/database.inc.php。如果目录不存在的话，将会自动创建。
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-2 control-label">文件内容</label>
                          <div class="col-md-10">
                            <textarea class="textarea form-control" placeholder="Go ahead ..." style="height:300px;"></textarea>
                            <span class="help-block">在这里粘贴该配置文件的完整内容。</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-2 control-label">适用服务器组</label>
                          <div class="col-sm-10">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> 组1
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> 组2
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">保存配置文件</button>
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