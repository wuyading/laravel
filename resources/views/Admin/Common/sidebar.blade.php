<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler"> </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
            </li>
            <li class="nav-item start @if ($controller == 'index') active open @endif ">
                <a href="{{ action('Admin\IndexController@index') }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">首页</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
            </li>
            <li class="nav-item  @if ($controller == 'album') active open @endif  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">相册管理</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ action('Admin\AlbumController@index') }}" class="nav-link ">
                            <i class="icon-layers"></i>
                            <span class="title">相册列表</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item    @if ($controller == 'article') active open @endif  ">
                <a href="" class="nav-link nav-toggle">
                    <i class="icon-layers"></i>
                    <span class="title">文章管理</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if ($controller == 'article') active open @endif  ">
                        <a href="{{ action('Admin\ArticleController@index') }}" class="nav-link ">
                            <span class="title">文章列表</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-layers"></i>
                    <span class="title">博客管理</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ action('Admin\BlogController@index') }}" class="nav-link ">
                            <span class="title">博客列表</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="layout_light_page_head.html" class="nav-link ">
                            <span class="title">2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  @if ($controller == 'system') active open @endif ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">系统设置</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ action('Admin\UserController@index') }}" class="nav-link nav-toggle">
                            <i class="icon-user"></i> 用户管理
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ action('Admin\CategoryController@index') }}" class="nav-link nav-toggle">
                            <i class="icon-folder"></i> 分类管理
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ action('Admin\SettingController@index') }}" class="nav-link nav-toggle">
                            <i class="icon-folder"></i> 站点配置
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->