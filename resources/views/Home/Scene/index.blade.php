
@include('Home/common/head')
@show

<body>
@include('Home/common/header')
@show

<div id="menu-container">
    <div class="content homepage" id="menu-1">
        <div class="container-fluid">
            <div class="row">
                @foreach( $list as $key=>$item )
                <div class="col-md-2 col-sm-6 @if($key%5 == 0) col-md-offset-1 @endif">
                    <div class="gallery-item">
                        <img src={{ $item->image }}>
                        <div class="overlay">
                            <a href="{{ $item->image }}" data-rel="lightbox" class="">Go</a>
                        </div>
                        <div class="content-gallery">
                            <h3></h3>
                        </div>
                    </div> <!-- /.gallery-item -->
                </div>
                @endforeach
            </div> <!-- /.row -->
        </div> <!-- /.slide-item -->
    </div> <!-- /.homepage -->

</div> <!-- /#menu-container -->

@include('Home/common/footer')
@show

</body>
</html>