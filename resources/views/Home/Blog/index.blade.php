@include('Home/common/head')
@show

<body>
@include('Home/common/header')
@show

<div class="content services" id="menu-3">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-10">
                <div class="inner-content">
                    <div class="toggle-content" id="tab1">
                        <h2 class="page-title">Our Services</h2>
                        <p>Proin accumsan, velit at pretium eleifend, lectus neque volutpat tortor, at placerat arcu odio vitae nisl. Curabitur dui ipsum, varius lobortis eros eget, faucibus faucibus nisl. <a href="#">Donec tincidunt</a> est a scelerisque suscipit. Vivamus sit amet purus at ante mollis mattis a at ante. Praesent purus metus, aliquet non porta sit amet, ultrices sit amet purus. Phasellus vitae orci diam. Cras sit amet gravida neque, auctor lobortis nibh.</p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li>Aliquid, beatae, ea delectus asperiores nostrum tempora nihil facere.</li>
                            <li>Consequatur nesciunt dolorem deserunt necessitatibus.</li>
                            <li>Iste laboriosam qui pariatur cum sint modi.</li>
                        </ul>
                        <p>Concept is <a href="http://www.cssmoban.com" >free responsive template</a> based on <a href="http://getbootstrap.com" >Bootstrap</a> framework. Gallery page is integrated with <a href="https://github.com/duncanmcdougall/Responsive-Lightbox" >responsive lightbox</a>. Credit goes to <a href="http://unsplash.com" >Unsplash</a> for all images featured in this template. This template can be viewed in mobile phones or tablets. Feel free to use this layout for your websites.</p>
                    </div> <!-- /.toggle-content -->
                    <div class="toggle-content" id="tab2">
                        <h2 class="page-title">Our Support</h2>
                        <p>Quisque vestibulum sed mauris vel aliquet. Etiam in purus a massa mattis bibendum. Donec dolor odio, porttitor molestie euismod dictum, ultrices vel ipsum. Phasellus id sollicitudin erat. Nullam imperdiet sed metus iaculis dapibus. <a href="#">Duis pharetra</a> feugiat metus in sollicitudin.</p>
                        <p>Proin cursus dapibus ipsum, vel congue tellus malesuada aliquam. Nullam id arcu urna. Donec at velit vel velit ultricies accumsan. Integer commodo dui libero, vitae rhoncus ante porttitor ac. Pellentesque sit amet lectus eros. <a href="h#" >Aliquam placerat</a> varius quam sed aliquam. Curabitur turpis diam, iaculis sit amet auctor ut, cursus quis velit. Mauris non risus vitae purus sodales rhoncus.</p>
                        <p>Sed feugiat a turpis vitae porttitor. Proin placerat vitae enim ac scelerisque. Cras ac lectus hendrerit, pellentesque metus ut, molestie diam. Nam vitae bibendum velit, eu fermentum dui. In sodales dolor interdum egestas consequat. Integer id dolor nulla. Donec nec ante mauris.</p>
                    </div> <!-- /.toggle-content -->
                    <div class="toggle-content" id="tab3">
                        <h2 class="page-title">Testimonials</h2>
                        <p>Duis interdum eros elit, ut semper massa imperdiet vitae. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut pretium vehicula est tristique volutpat. Duis ac felis quis augue dapibus hendrerit. Vivamus pretium, felis sed dignissim commodo, quam turpis commodo ipsum, at varius nisi risus ut dolor. Mauris quam purus, molestie ac urna eu, sagittis sagittis dui.</p>
                        <p><a href="h#" >Integer risus mauris</a>, fermentum ac risus eu, vehicula tempus augue. Morbi egestas nulla turpis, non sollicitudin justo interdum ac. Pellentesque elementum, urna bibendum semper ullamcorper, lorem justo gravida arcu, ut pellentesque nulla orci in neque. Curabitur in commodo sem, rhoncus lobortis mi. Maecenas sit amet arcu sapien.</p>
                        <p>Phasellus molestie molestie metus quis elementum. Cras dictum rutrum arcu id interdum. Vivamus suscipit suscipit mauris eget feugiat. Sed sagittis enim id tempus vulputate. Aliquam erat volutpat. In quis neque sodales, pulvinar turpis sed, lacinia sem.</p>
                    </div> <!-- /.toggle-content -->
                </div> <!-- /.inner-content -->
            </div> <!-- /.col-md-9 -->
            <div class="col-md-3 col-sm-2">
                <div id="icons">
                    <ul class="tabs">
                        <li>
                            <a href="#tab1" class="icon-item">
                                <i class="fa fa-cogs"></i>
                                <span>Services</span>
                            </a> <!-- /.icon-item -->
                        </li>
                        <li>
                            <a href="#tab2" class="icon-item">
                                <i class="fa fa-leaf"></i>
                                <span>Our Support</span>
                            </a> <!-- /.icon-item -->
                        </li>
                        <li>
                            <a href="#tab3" class="icon-item">
                                <i class="fa fa-users"></i>
                                <span>Testimonials</span>
                            </a> <!-- /.icon-item -->
                        </li>
                    </ul>
                </div> <!-- /.icons -->
            </div> <!-- /.col-md-3 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.services -->

@include('Home/common/footer')
@show

</body>