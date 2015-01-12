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
                        <?php include 'elements' . DIRECTORY_SEPARATOR . 'element_notification.ctp'; ?>
                        <div class="widget">
                            <div class="widget-header">
                                <div class="title">
                                    创建新项目
                                    <span class="mini-title">
                                        第 1 步，共 5 步
                                    </span>
                                </div>
                            </div>
                            <div class="widget-body">
                                <form class="form-horizontal no-margin">
                                    <div class="form-group">
                                        <label for="userName"
                                               class="col-sm-2 control-label">项目名称</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                   class="form-control"
                                                   id="userName"
                                                   placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit"
                                                    class="btn btn-warning">创建新项目
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
                <?php include 'elements' . DIRECTORY_SEPARATOR . 'project_create_sidebar_tip.ctp'; ?>
                <hr class="hr-stylish-1">
                <?php include 'elements' . DIRECTORY_SEPARATOR . 'project_common_sidebar.ctp'; ?>
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