<?php
    require 'includes/header.php';
?>

            <div id="slider" class="row">
                <div id="carousel-id" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Example headline.</h1>
                                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Another example headline.</h1>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>         
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>

            <div id="about-us" class="row text-center" style="padding: 0 10%; padding-bottom: 2%;">
                <h3>What we do</h3>
                <hr style="border: 1px solid #FAC11C; width: 20%;">
                <p style="text-align: justify;">
                    GMC Global is a registered limited liability and fully licensed company. We are one of Ghana´s foremost small-scale gold exploration, mining, processing and marketing companies.
                    Our company own two mining concessions in a rich and high quality gold geological formation in the country. Headquartered in Tema and with operations in major gold mining belt in Ashanti region. Some of the main gold mining companies operating in this area are AngloGold Ashanti, GoldFields, Kinross Gold, and Newmont.
                    GMC Global is also licensed by PMMC Ghana. Our Gold is refined in Ghana into 24 Carats bars fine purity and traded locally and International to our clients.
                </p>
                <p class="btn"><a class="btn btn-lg btn-read-more" href="">Read More</a></p>
            </div>

            <div id="products-services" class="row text-center" style="height: 400px;">
                <h3>Products & Services</h3>
                <hr style="border: 1px solid #FAC11C; width: 20%;">
            </div>

            <div id="endorsements" class="row text-center">
                <h3>What Our Customers Say</h3>
                <hr style="border: 1px solid #22313F; width: 20%;">
                
                <!-- Customer Endorsement Slider -->
                <div class="row" style="padding: 0 20%">
                    <div class="endorsement-slider">
                        <div class="slider-item img-responsive">
                            <img src="i" width="120px" style="margin-left: 45%;" class="img-responsive img-circle">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco
                            </p>
                            <span><b>-Customer Name</b></span>
                        </div>

                        <div class="slider-item img-responsive">
                            <img src="i" width="120px" style="margin-left: 45%;" class="img-responsive img-circle">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco
                            </p>
                            <span><b>-Customer Name</b></span>
                        </div>

                        <div class="slider-item img-responsive">
                            <img src="images/beckham.jpeg" width="100px" height="150px" style="margin-left: 45%;" class="img-responsive img-circle">
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco"
                            </p>
                            <span><b>-Customer Name</b></span>
                        </div>
                    </div>
                </div> 
            </div>
<?php
    require 'includes/footer.php';
?>