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
                        <?php include 'elements' . DIRECTORY_SEPARATOR
                            . 'element_notification.ctp'; ?>
                        <div class="widget">
                            <div class="widget-header">
                                <div class="title">
                                    创建服务器组
                                    <span class="mini-title">
                                        第 3 步，共 5 步
                                    </span>
                                </div>
                            </div>
                            <div class="widget-body">
                                <form class="form-horizontal no-margin">
                                    <div class="form-group">
                                        <label for="userName" class="col-sm-2 control-label">组名称</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="userName" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="country" class="col-sm-2 control-label">环境类型</label>
                                        <div class="col-sm-10">
                                            <select id="country" class="form-control">
                                                <option value=""></option>
                                                <option value="">Development</option>
                                                <option value="">Testing</option>
                                                <option value="">Staging</option>
                                                <option value="">Production</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userName" class="col-sm-2 control-label">代码库路径</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="userName" placeholder="Name" readonly="">
                                            <span class="help-block">创建项目时选定的代码库地址，供参考。</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userName" class="col-sm-2 control-label">目标分支</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="userName" placeholder="master">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-warning">
                                                检查并创建服务器组
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
                <?php include 'elements' . DIRECTORY_SEPARATOR . 'server_group_sidebar_tip.ctp'; ?>
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