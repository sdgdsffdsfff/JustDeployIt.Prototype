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
                        <div class="widget">
                            <div class="widget-body">
                                <div class="jumbotron">
                                    <h1>
                                        恭喜！
                                    </h1>
                                    <p>
                                        配置工作基本完成，现在你可以进行部署工作了。当然，你可能想要进行更高级的设置，比如替换符合服务器环境要求的
                                        数据库配置、缓存配置等，或者排除一些你不想部署到该服务器的临时文件等。
                                    </p>
                                    <p>
                                        你也可以再次检查一下整个配置是否能够满足要求。
                                    </p>
                                    <br />
                                    <p>
                                        <a href="#" class="btn btn-lg btn-info" role="button">立即执行部署</a>
                                    </p>
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