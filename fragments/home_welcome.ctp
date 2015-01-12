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
                            <h1>
                                欢迎！
                            </h1>

                            <p>
                                部署工作其实没有想象的那么难，只不过过程比较繁琐，但首先要有一个项目来组织。
                            </p>
                            <br />
                            <p>
                                <a href="#"
                                   class="btn btn-lg btn-primary"
                                   role="button">创建你的第一个项目</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Row End -->

            </div>
            <!-- Left Sidebar End -->

            <!-- Right Sidebar Start -->
            <div class="right-sidebar">
                <?php include 'elements' . DIRECTORY_SEPARATOR
                    . 'common_sidebar_system_summary.ctp'; ?>
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