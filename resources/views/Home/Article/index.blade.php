@include('Home.Common.head')
@show
<style>
    .cate{z-index: 10000;width: 165px;height: 100px;float: right;text-align: center;position: fixed;right: 0;top: 180px;}
    .cate_top{width: 100%;background-color: #22201c;height: 45px;font-size: 18px;line-height: 45px;color: #ffffff;}
    #rightArrow{width: 50px;height: 45px;background: url('/home/images/jiantou.png') no-repeat;position: fixed;top: 180px;
        right: 165px;
        z-index: 10000;
        background-color: #b10021;
        background-position: center;}
    .cate_main {
        background-color: rgba(255,255,255,0.90);
        box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.25);
    }
    .cate_main ul li {
        height: 45px;
        line-height: 45px;
        font-size: 18px;
    }
</style>

<body>
@include('Home.Common.header')
@show

    <div class="content products" id="menu-2">
    <div class="container">
        <div class="row">
            @foreach( $article as $item )
                <div class="col-md-4 col-sm-6">
                    <div class="product-item">
                        <img src="{{ $item->file }}" alt="product 1">
                        <a href="/article/detail/{{ $item->id }}" class="product-title">{{ $item->title }}</a>
                        <p>{{ mb_substr(strip_tags(htmlspecialchars_decode($item->content)),0,40).'......' }}</p>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-4 -->
            @endforeach
        </div> <!-- /.row -->
        <div class="pagination">
            {{ $article->links() }}
        </div>
    </div> <!-- /.slide-item -->
</div> <!-- /.products -->


@include('Home.Common.footer')
@show

<div class="come_back" style="display:none;float: right;position: fixed;bottom: 100px;left: 97%;cursor:pointer;">
    <img src="/home/images/back.png" alt=""/>
</div>

<div id="rightArrow">
    <a href="javascript:void(0)"></a>
</div>
<div class="cate">
    <div class="cate_top">文章分类</div>
    <div class="cate_main">
        <ul class="cate_contact">
            <li>
                <a href="">
                    <span class="glyphicon glyphicon-hand-right"> 分类1 </span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="">分类2</span>
                </a>
            </li>
        </ul>

    </div>

</div>

<script type="text/javascript">
    var flag=1;
    $('#rightArrow').click(function(){
        if(flag==1){
            $(".cate").animate({right: '-170px'});
            $(this).animate({right: '-5px'});
            $(this).css('background','url(/home/images/jiantou02.png) no-repeat');
            $(this).css('background-position','center');
            $(this).css('background-color','#dc3f13');
            flag=0;
        }else{
            $(".cate").animate({right: '0'});
            $(this).animate({right: '165px'});
            $(this).css('background','url(/home/images/jiantou.png) no-repeat');
            $(this).css('background-position','center');
            $(this).css('background-color','#dc3f13');
            flag=1;
        }
    });
</script>



<script>
    var screen_height = $(window).height();
    $(window).scroll(function(){
        var scroll_height =$(window).scrollTop();
        if(scroll_height > screen_height){
            $('.come_back').fadeIn();
        }else{
            $('.come_back').fadeOut();
        }

    });
    $('.come_back').click(function(){
        $('html,body').animate({scrollTop:0},500);
    })
</script>


</body>