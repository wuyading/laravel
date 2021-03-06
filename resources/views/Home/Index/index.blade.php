
@include('Home.Common.head')
@show

<body>
@include('Home.Common.header')
@show

<div id="menu-container">
    <div class="content homepage" id="menu-1">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-2 col-sm-6 col-md-offset-1">
                    <div class="gallery-item">
                        <div class="overlay">
                            <a href="{{ action('Home\SceneController@index',['id'=>110000]) }}">Go</a>
                        </div>
                        <img src="/home/images/gallery/gallery-item1.jpg" alt="image 1">
                        <div class="content-gallery">
                            <h3>北京市</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>120000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item2.jpg" alt="image 2">
                        </div>
                        <div class="content-gallery">
                            <h3>天津市</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>130000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item3.jpg" alt="image 3">
                        </div>
                        <div class="content-gallery">
                            <h3>河北省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>140000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item4.jpg" alt="image 4">
                        </div>
                        <div class="content-gallery">
                            <h3>山西省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>150000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item5.jpg" alt="image 5">
                        </div>
                        <div class="content-gallery">
                            <h3>内蒙古自治区</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->

                <div class="col-md-2 col-sm-6 col-md-offset-2">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>210000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item6.jpg" alt="image 6">
                        </div>
                        <div class="content-gallery">
                            <h3>辽宁省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>220000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item7.jpg" alt="image 7">
                        </div>
                        <div class="content-gallery">
                            <h3>吉林省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>230000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item8.jpg" alt="image 8">
                        </div>
                        <div class="content-gallery">
                            <h3>黑龙江省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>310000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item9.jpg" alt="image 9">
                        </div>
                        <div class="content-gallery">
                            <h3>上海市</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->

                <div class="col-md-2 col-sm-6 col-md-offset-1">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>320000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item10.jpg" alt="image 10">
                        </div>
                        <div class="content-gallery">
                            <h3>江苏省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>330000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item11.jpg" alt="image 11">
                        </div>
                        <div class="content-gallery">
                            <h3>浙江省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>340000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item12.jpg" alt="image 12">
                        </div>
                        <div class="content-gallery">
                            <h3>安徽省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>350000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item5.jpg" alt="image 5">
                        </div>
                        <div class="content-gallery">
                            <h3>福建省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>360000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item5.jpg" alt="image 5">
                        </div>
                        <div class="content-gallery">
                            <h3>江西省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->

                <div class="col-md-2 col-sm-6 col-md-offset-2">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>370000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item10.jpg" alt="image 10">
                        </div>
                        <div class="content-gallery">
                            <h3>山东省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>410000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item11.jpg" alt="image 11">
                        </div>
                        <div class="content-gallery">
                            <h3>河南省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>420000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item12.jpg" alt="image 12">
                        </div>
                        <div class="content-gallery">
                            <h3>湖北省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>430000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item5.jpg" alt="image 5">
                        </div>
                        <div class="content-gallery">
                            <h3>湖南省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->

                <div class="col-md-2 col-sm-6 col-md-offset-1">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>440000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item10.jpg" alt="image 10">
                        </div>
                        <div class="content-gallery">
                            <h3>广东省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>450000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item11.jpg" alt="image 11">
                        </div>
                        <div class="content-gallery">
                            <h3>广西壮族自治区</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>460000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item5.jpg" alt="image 5">
                        </div>
                        <div class="content-gallery">
                            <h3>海南省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>500000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item5.jpg" alt="image 5">
                        </div>
                        <div class="content-gallery">
                            <h3>重庆市</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>510000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item5.jpg" alt="image 5">
                        </div>
                        <div class="content-gallery">
                            <h3>四川省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->

                <div class="col-md-2 col-sm-6 col-md-offset-2">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>520000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item10.jpg" alt="image 10">
                        </div>
                        <div class="content-gallery">
                            <h3>贵州省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>530000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item11.jpg" alt="image 11">
                        </div>
                        <div class="content-gallery">
                            <h3>云南省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>540000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item12.jpg" alt="image 12">
                        </div>
                        <div class="content-gallery">
                            <h3>西藏自治区</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>610000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item5.jpg" alt="image 5">
                        </div>
                        <div class="content-gallery">
                            <h3>陕西省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->

                <div class="col-md-2 col-sm-6 col-md-offset-1">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>620000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item10.jpg" alt="image 10">
                        </div>
                        <div class="content-gallery">
                            <h3>甘肃省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>630000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item11.jpg" alt="image 11">
                        </div>
                        <div class="content-gallery">
                            <h3>青海省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>640000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item12.jpg" alt="image 12">
                        </div>
                        <div class="content-gallery">
                            <h3>宁夏回族自治区</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>650000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item5.jpg" alt="image 5">
                        </div>
                        <div class="content-gallery">
                            <h3>新疆维吾尔族自治区</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>710000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item11.jpg" alt="image 11">
                        </div>
                        <div class="content-gallery">
                            <h3>台湾省</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->

                <div class="col-md-2 col-sm-6 col-md-offset-4">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>810000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item10.jpg" alt="image 10">
                        </div>
                        <div class="content-gallery">
                            <h3>香港特别行政区</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-6">
                    <div class="gallery-item">
                        <div class="image">
                            <div class="overlay">
                                <a href="{{ action('Home\SceneController@index',['id'=>820000]) }}">Go</a>
                            </div>
                            <img src="/home/images/gallery/gallery-item11.jpg" alt="image 11">
                        </div>
                        <div class="content-gallery">
                            <h3>澳门特别行政区</h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div> <!-- /.col-md-2 -->
            </div> <!-- /.row -->
        </div> <!-- /.slide-item -->
    </div> <!-- /.homepage -->

</div> <!-- /#menu-container -->

@include('Home.Common.footer')
@show

</body>
</html>