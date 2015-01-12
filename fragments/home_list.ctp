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
                        <div class="widget no-margin">
                            <div class="widget-body">
                                <div class="jumbotron">
                                    <h1>项目列表</h1>
                                    <p>这里列出了你所管理的所有项目，以及它们的部署活动摘要，你可以在这里直接创建部署行为，也可以对项目进行更详细的配置。 </p>
                                </div>
                                <div class="widget">
                                    <div class="widget-header">
                                        <div class="title"> 你好世界 </div>
                                        <span class="tools">
                                            <a class="btn btn-info" href="#">部署历史</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">设置 <span class="caret"></span></button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">通用设置</a></li>
                                                    <li><a href="#">服务器和组</a></li>
                                                    <li><a href="#">环境专用config文件</a></li>
                                                    <li><a href="#">排除无用的文件或目录</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                            <a class="btn btn-success" href="#">进行新的部署</a>
                                        </span>
                                    </div>
                                    <div class="widget-body">
                                        <p> 已进行10次部署，共有2台服务器，最后一次部署发生在2014年12月12日。</p>
                                    </div>
                                </div>
                                <div class="widget">
                                    <div class="widget-header">
                                        <div class="title"> 第二个项目 </div>
                                        <span class="tools">
                                            <a class="btn btn-info" href="#">部署历史</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">设置 <span class="caret"></span></button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">通用设置</a></li>
                                                    <li><a href="#">服务器和组</a></li>
                                                    <li><a href="#">环境专用config文件</a></li>
                                                    <li><a href="#">排除无用的文件或目录</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                            <a class="btn btn-success" href="#">进行新的部署</a>
                                        </span>
                                    </div>
                                    <div class="widget-body">
                                        <p> 已进行10次部署，共有2台服务器，最后一次部署发生在2014年12月12日。</p>
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