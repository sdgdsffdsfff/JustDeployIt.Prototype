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
                                    添加服务器
                                    <span class="mini-title">
                                        第 4 步，共 5 步
                                    </span>
                                </div>
                            </div>
                            <div class="widget-body">
                                <form class="form-horizontal no-margin">
                                    <h5>
                                        基本信息
                                    </h5>
                                    <hr>
                                    <div class="form-group">
                                        <label for="userName" class="col-sm-2 control-label">所属服务器组</label>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="userName" placeholder="Name" readonly="">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" placeholder="环境类型" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userName" class="col-sm-2 control-label">服务器名称</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="userName" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userName" class="col-sm-2 control-label">主机名/IP</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="userName" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="country" class="col-sm-2 control-label">协议类型</label>
                                        <div class="col-sm-10">
                                            <select id="country" class="form-control">
                                                <option value="">FTP</option>
                                                <option value="">SSH/SFTP</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userName" class="col-sm-2 control-label">端口</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="userName" placeholder="Name">
                                            <span class="help-block">不填写则使用默认值，FTP(21)、SSH/SFTP(22)</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> PASV模式（仅针对FTP）
                                                    <span class="help-block">用于应对服务器有防火墙的情况。</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 强制服务器列出隐藏文件（仅针对FTP）
                                                    <span class="help-block">有些FTP服务器默认不报告隐藏文件，使用此选项强制要求。</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userName" class="col-sm-2 control-label">用户名</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="userName" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-sm-2 control-label">密码</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userName" class="col-sm-2 control-label">部署目录路径</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="userName" placeholder="Name">
                                            <span class="help-block">代码文件被部署到的服务器目录路径，绝对路径或相对路径。</span>
                                        </div>
                                    </div>

                                    <br />
                                    <h5>
                                        代码库信息
                                    </h5>
                                    <hr>
                                    <div class="form-group">
                                        <label for="userName" class="col-sm-2 control-label">代码库</label>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="userName" placeholder="Name" readonly="">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" placeholder="master" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userName" class="col-sm-2 control-label">代码子目录</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="userName" placeholder="Name">
                                            <span class="help-block">指定代码库的某个子目录被部署到此服务器，不指定则部署整个代码库目录。</span>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-warning">
                                                检查并保存服务器配置
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
                <?php include 'elements' . DIRECTORY_SEPARATOR
                    . 'project_common_sidebar.ctp'; ?>
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