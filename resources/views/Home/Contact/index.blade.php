@include('Home/common/head')
@show

<body>
@include('Home/common/header')
@show

<div class="content contact" id="menu-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="widget-content">
                    <div class="page-title">Contact Us</div>
                    <div class="contact-form">
                        <fieldset>
                            <input id="name" type="text" name="name" placeholder="Name" maxlength="40">
                        </fieldset>
                        <fieldset>
                            <input type="email" name="email" id="email" placeholder="Email" maxlength="30">
                        </fieldset>
                        <fieldset>
                            <input type="text" name="subject" id="subject" placeholder="Subject" maxlength="60">
                        </fieldset>
                        <fieldset>
                            <textarea name="comments" id="comments" placeholder="Message"></textarea>
                        </fieldset>
                        <fieldset>
                            <input type="submit" name="send" value="Send Message" id="submit" class="button">
                        </fieldset>
                    </div> <!-- /.contact-form -->
                </div> <!-- /.inner-content -->
            </div> <!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="widget-content">
                    <div class="page-title">Our Location</div>

                    <div id="templatemo_map"></div>

                    <div class="contact-information">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <p>120 Digital Studio, Inya Lake, Yangon 10620, Myanmar</p>
                            </div> <!-- /.col-md-6 -->
                            <div class="col-md-6 col-sm-6 text-right">
                                <ul>
                                    <li>Tel: 010-020-0340</li>
                                    <li>Email: info@company.com</li>
                                </ul>
                            </div> <!-- /.col-md-6 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.contact-information -->
                </div> <!-- /.inner-content -->
            </div> <!-- /.col-md-6 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.contact -->

@include('Home/common/footer')
@show

</body>