    <div class="wrapper">
      <button class="btn btn-block btn-primary" type="button">
        创建部署
      </button>
    </div>
    <div class="wrapper">
        <h4 class="text-info">测试连接</h4>
        <p>
            先看看你配置的项目是否能够连接到部署服务器和代码仓库。
        </p>
        <a href="#" class="btn btn-sm btn-success btn-block">
            执行测试
        </a>
        <p>
        </p>
    </div>
    <div class="wrapper">
        <h4 class="text-info">重新缓存代码</h4>
        <p>
            也许到目前为止，你想部署的代码库的代码状态又发生了改变，需要重新缓存了，可以点击这个按钮获得最新的代码。
        </p>
        <a href="#" class="btn btn-sm btn-success btn-block">
            重新缓存
        </a>
        <p>
        </p>
    </div>

    <div class="wrapper">
            <h4 class="text-info">修改设置</h4>
            <p>
                不仅仅可以修改项目和服务器设置，还可以替换特定的代码配置文件，比如数据库连接参数，以及屏蔽特定的文件或目录使其不能被部署到目标服务器。
            </p>
            <div class="btn-group btn-group-justified">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-warning btn-block dropdown-toggle" data-toggle="dropdown">
                    修改项目设置 <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">基础设置</a></li>
                    <li><a href="#">服务器和组</a></li>
                    <li><a href="#">配置文件</a></li>
                    <li><a href="#">排除目录及文件</a></li>
                  </ul>
                </div><!-- /btn-group -->
            </div>
            <p>
            </p>
    </div>
    <div class="wrapper">
        <h4 class="text-info">删除项目</h4>
        <p>
            删除项目将会删除所有跟此项目关联的项目设置、服务器配置、部署历史等信息，请三思而后行。
        </p>
        <a href="#" class="btn btn-sm btn-danger btn-block" id="confirm">
            删除本项目
        </a>
        <p>
        </p>
    </div>
