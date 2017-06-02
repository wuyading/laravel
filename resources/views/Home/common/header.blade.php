<div class="site-header">
    <div class="main-navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12 responsive-menu">
                    <a href="#" class="menu-toggle-btn">
                        <i class="fa fa-bars"></i>
                    </a>
                </div> <!-- /.col-md-12 -->
                <div class="col-md-12 main_menu">
                    <ul>
                        <li><a class="show-1 templatemo_home @if ($controller == 'index') active @endif " href="{{ URL('/') }}">风景欣赏</a></li>
                        <li><a class="show-2 templatemo_page2 @if ($controller == 'article') active @endif " href="{{ URL('article/index') }}">文章阅读</a></li>
                        <li><a class="show-3 templatemo_page3 @if ($controller == 'blog') active @endif " href="{{ URL('blog/index') }}">博客浏览</a></li>
                        <li><a class="show-4 templatemo_page4 @if ($controller == 'about') active @endif " href="{{ URL('about/index') }}">About Us</a></li>
                        <li><a class="show-5 templatemo_page5 @if ($controller == 'contact') active @endif " href="{{ URL('contact/index') }}">Contact Us</a></li>
                    </ul>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div>
        <a class="navigation-bg" href="#" title=""  target="_blank"><img src="/home/images/header.png" alt=""  /></a><!-- /.container -->
    </div> <!-- /.main-navigation -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="templatemo_logo">
                    <h1>Concept</h1>
                </a> <!-- /.logo -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.site-header -->