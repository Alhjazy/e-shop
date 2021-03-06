@extends('layouts.management')

@section('main-content')

    <ul class="breadcrumb">
        <li>You are here</li>
        <li><a href="index.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons dashboard"><i></i>{{ config('app.name', 'Laravel') }}</a></li>
        <li class="divider"></li>
        <li>Dashboard</li>
        <li class="pull-right hidden-phone"><a href="" class="glyphicons shield">Get Help<i></i></a></li>
        <li class="pull-right hidden-phone divider"></li>
        <li class="pull-right hidden-phone"><a href="" class="glyphicons adjust_alt">Filter<i></i></a></li>
    </ul>

    <h2>Dashboard <span>for your next cool web APP</span></h2>
    <div class="innerLR">

        <div class="row-fluid">
            <div class="span9 tablet-column-reset">

                <!-- Website Traffic Chart -->
                <div class="widget widget-heading-simple widget-body-white" data-toggle="collapse-widget">
                    <div class="widget-head">
                        <h4 class="heading glyphicons cardio"><i></i>Website Traffic</h4>
                    </div>
                    <div class="widget-body">
                        <div id="chart_simple" style="height: 250px;"></div>
                    </div>
                </div>
                <!-- // Website Traffic Chart END -->

                <!-- Widget -->
                <div class="widget widget-heading-simple widget-body-simple">

                    <!-- Widget Heading -->
                    <div class="widget-head">
                        <h4 class="heading glyphicons warning_sign"><i></i>Alerts</h4>
                    </div>
                    <!-- // Widget Heading END -->

                    <div class="widget-body">

                        <!-- Stats Widgets -->
                        <div class="row-fluid">

                            <div class="span3">

                                <!-- Stats Widget -->
                                <a href="" class="widget-stats widget-stats-gray widget-stats-1">
                                    <span class="glyphicons cart_in"><i></i><span class="txt">Sales</span></span>
                                    <div class="clearfix"></div>
                                    <span class="count">20</span>
                                </a>
                                <!-- // Stats Widget END -->

                            </div>
                            <div class="span3">

                                <!-- Stats Widget -->
                                <a href="" class="widget-stats widget-stats-1">
                                    <span class="glyphicons shield"><i></i><span class="txt">Alerts</span></span>
                                    <div class="clearfix"></div>
                                    <span class="count">125</span>
                                </a>
                                <!-- // Stats Widget END -->

                            </div>
                            <div class="span3">

                                <!-- Stats Widget -->
                                <a href="" class="widget-stats widget-stats-gray widget-stats-2">
                                    <span class="count">2</span>
                                    <span class="txt">Orders</span>
                                </a>
                                <!-- // Stats Widget END -->

                            </div>
                            <div class="span3">

                                <!-- Stats Widget -->
                                <a href="" class="widget-stats widget-stats-2">
                                    <span class="count">30</span>
                                    <span class="txt">Bookings</span>
                                </a>
                                <!-- // Stats Widget END -->

                            </div>

                        </div>
                        <!-- // Stats Widgets END -->

                    </div>
                </div>
                <!-- // Widget END -->

                <div class="row-fluid">
                    <div class="span6">

                        <!-- Widget -->
                        <div class="widget widget-heading-simple widget-body-simple">

                            <!-- Widget Heading -->
                            <div class="widget-head">
                                <h4 class="heading glyphicons cardio"><i></i>Recent Activity</h4>
                            </div>
                            <!-- // Widget Heading END -->

                            <div class="widget-body">

                                <div class="widget widget-tabs widget-tabs-icons-only-2 widget-activity margin-none">

                                    <!-- Tabs Heading -->
                                    <div class="widget-head">
                                        <ul>
                                            <li><a class="glyphicons user_add" data-toggle="tab" href="#filterUsersTab"><i></i>Users</a></li>
                                            <li><a class="glyphicons shopping_cart" data-toggle="tab" href="#filterOrdersTab"><i></i>Orders</a></li>
                                            <li class="active"><a class="glyphicons envelope" data-toggle="tab" href="#filterMessagesTab"><i></i></a></li>
                                            <li><a class="glyphicons link" data-toggle="tab" href="#filterLinksTab"><i></i></a></li>
                                            <li><a class="glyphicons camera" data-toggle="tab" href="#filterPhotosTab"><i></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- // Tabs Heading END -->

                                    <div class="widget-body">
                                        <div class="tab-content">


                                            <!-- Filter Users Tab -->
                                            <div class="tab-pane" id="filterUsersTab">
                                                <ul class="list">

                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon user_add"><i></i></span>
                                                        <span class="ellipsis"><a href="">Martin Glades</a> registered at <a href="">Melisa Ragae's</a> suggestion.</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon user_add"><i></i></span>
                                                        <span class="ellipsis"><a href="">Melisa Ragae</a> registered at <a href="">Jane Doe's</a> suggestion.</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon user_add"><i></i></span>
                                                        <span class="ellipsis"><a href="">Jane Doe</a> registered at <a href="">John Doe's</a> suggestion.</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon user_add"><i></i></span>
                                                        <span class="ellipsis"><a href="">John Doe</a> registered at <a href="">John Doe's</a> suggestion.</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon user_add"><i></i></span>
                                                        <span class="ellipsis"><a href="">Darius Jackson</a> registered at <a href="">Darius Jackson's</a> suggestion.</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->

                                                </ul>
                                            </div>
                                            <!-- // Filter Users Tab END -->

                                            <!-- Filter Orders Tab -->
                                            <div class="tab-pane" id="filterOrdersTab">
                                                <ul class="list">

                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon shopping_cart"><i></i></span>
                                                        <span class="ellipsis"><a href="">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="">order #2301</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon shopping_cart"><i></i></span>
                                                        <span class="ellipsis"><a href="">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="">order #2302</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon shopping_cart"><i></i></span>
                                                        <span class="ellipsis"><a href="">Darius Jackson</a> bought 10 items worth of &euro;50 (<a href="">order #2303</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon shopping_cart"><i></i></span>
                                                        <span class="ellipsis"><a href="">John Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2304</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon shopping_cart"><i></i></span>
                                                        <span class="ellipsis"><a href="">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2305</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->

                                                </ul>
                                            </div>
                                            <!-- // Filter Orders Tab END -->

                                            <!-- Filter Messages Tab -->
                                            <div class="tab-pane active" id="filterMessagesTab">
                                                <ul class="list">

                                                    <!-- Activity item -->
                                                    <li class="double">
                                                        <span class="glyphicons activity-icon envelope"><i></i></span>
                                                        <span class="ellipsis">
														You have received an email from <a href="">Melisa Ragae</a> (melisa.ragae@grr-email.net)
														<span class="meta">on 29 March, 2013 <span>1 hour ago</span></span>
													</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li class="double highlight">
                                                        <span class="glyphicons activity-icon envelope"><i></i></span>
                                                        <span class="ellipsis">
														You have received an email from <a href="">John Doe</a> (john.doe@fake-email.net)
														<span class="meta">on 29 March, 2013 <span>1 hour ago</span></span>
													</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li class="double">
                                                        <span class="glyphicons activity-icon envelope"><i></i></span>
                                                        <span class="ellipsis">
														You have received an email from <a href="">Jane Doe</a> (jane.doe@lovely-email.net)
														<span class="meta">on 29 March, 2013 <span>1 hour ago</span></span>
													</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li class="double">
                                                        <span class="glyphicons activity-icon envelope"><i></i></span>
                                                        <span class="ellipsis">
														You have received an email from <a href="">Martin Glades</a> (martin.glades@wee-email.com)
														<span class="meta">on 29 March, 2013 <span>1 hour ago</span></span>
													</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li class="double">
                                                        <span class="glyphicons activity-icon envelope"><i></i></span>
                                                        <span class="ellipsis">
														You have received an email from <a href="">John Doe</a> (john.doe@fake-email.net)
														<span class="meta">on 29 March, 2013 <span>1 hour ago</span></span>
													</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->

                                                </ul>
                                            </div>
                                            <!-- // Filter Messages Tab END -->

                                            <!-- Filter Links Tab -->
                                            <div class="tab-pane" id="filterLinksTab">
                                                <ul class="list">

                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon link"><i></i></span>
                                                        <span class="ellipsis"><a href="">Darius Jackson</a> bought 10 items worth of &euro;50 (<a href="">order #2301</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon link"><i></i></span>
                                                        <span class="ellipsis"><a href="">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="">order #2302</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon link"><i></i></span>
                                                        <span class="ellipsis"><a href="">Melisa Ragae</a> bought 10 items worth of &euro;50 (<a href="">order #2303</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon link"><i></i></span>
                                                        <span class="ellipsis"><a href="">Darius Jackson</a> bought 10 items worth of &euro;50 (<a href="">order #2304</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon link"><i></i></span>
                                                        <span class="ellipsis"><a href="">Darius Jackson</a> bought 10 items worth of &euro;50 (<a href="">order #2305</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->

                                                </ul>
                                            </div>
                                            <!-- // Filter Links Tab END -->

                                            <!-- Filter Photos Tab -->
                                            <div class="tab-pane" id="filterPhotosTab">
                                                <ul class="list">

                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon camera"><i></i></span>
                                                        <span class="ellipsis"><a href="">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="">order #2301</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon camera"><i></i></span>
                                                        <span class="ellipsis"><a href="">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2302</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon camera"><i></i></span>
                                                        <span class="ellipsis"><a href="">Melisa Ragae</a> bought 10 items worth of &euro;50 (<a href="">order #2303</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->
                                                    <!-- Activity item -->
                                                    <li>
                                                        <span class="date">21/03</span>
                                                        <span class="glyphicons activity-icon camera"><i></i></span>
                                                        <span class="ellipsis"><a href="">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2304</a>)</span>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <!-- // Activity item END -->

                                                </ul>
                                            </div>
                                            <!-- // Filter Photos Tab END -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="span6">

                        <!-- Chat -->
                        <div class="widget widget-heading-simple widget-body-white widget-chat">

                            <div class="widget-head">
                                <h4 class="heading glyphicons chat"><i></i>Chat</h4>
                            </div>
                            <div class="widget-body">

                                <!-- Slim Scroll -->
                                <div class="slim-scroll chat-items" data-scroll-height="190px" data-scroll-size="0">

                                    <!-- Media item -->
                                    <div class="media">
                                        <small class="author"><a href="#" title="" class="strong">Martin</a></small>
                                        <div class="media-object pull-left thumb"><img data-src="holder.js/51x51/dark" alt="Image" /></div>
                                        <div class="media-body">
                                            <blockquote>
                                                <small class="date"><cite>just now</cite></small>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien.</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <!-- // Media item END -->

                                    <!-- Media item -->
                                    <div class="media right">
                                        <small class="author"><a href="#" title="" class="strong">John Doe</a></small>
                                        <div class="media-object pull-right thumb"><img data-src="holder.js/51x51/dark" alt="Image" /></div>
                                        <div class="media-body">
                                            <blockquote class="pull-right">
                                                <small class="date"><cite>15 seconds ago</cite></small>
                                                <p>In ultricies ante eget tortor euismod vitae molestie eros hendrerit. Cras tristique, orci ac lacinia aliquet, velit risus laoreet lectus, eget sollicitudin metus orci non nulla.</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <!-- // Media item END -->

                                    <!-- Media item -->
                                    <div class="media">
                                        <small class="author"><a href="#" title="" class="strong">Ricky</a></small>
                                        <div class="media-object pull-left thumb"><img data-src="holder.js/51x51/dark" alt="Image" /></div>
                                        <div class="media-body">
                                            <blockquote>
                                                <small class="date"><cite>5 minutes ago</cite></small>
                                                <p>Pellentesque ac turpis turpis. Aliquam erat volutpat. Proin semper auctor mauris vel tempor. Ut eget turpis neque. Nam ultricies tortor eu odio ultricies euismod.</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <!-- // Media item END -->

                                </div>
                                <!-- // Slim Scroll END -->

                            </div>

                            <div class="chat-controls">
                                <div class="innerLR">
                                    <form class="margin-none">
                                        <div class="row-fluid">
                                            <div class="span10">
                                                <input type="text" name="message" class="input-block-level margin-none" placeholder="Type your message .." />
                                            </div>
                                            <div class="span2">
                                                <button type="submit" class="btn btn-block btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- // Chat END -->

                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span6">

                        <!-- Activity/List Widget -->
                        <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

                            <!-- Widget Heading -->
                            <div class="widget-head">
                                <h4 class="heading glyphicons history"><i></i>Activity</h4>
                                <a href="" class="details pull-right">view all</a>
                            </div>
                            <!-- // Widget Heading END -->

                            <div class="widget-body list">
                                <ul>

                                    <!-- List item -->
                                    <li>
                                        <span>Sales today</span>
                                        <span class="count">&euro;5,900</span>
                                    </li>
                                    <!-- // List item END -->

                                    <!-- List item -->
                                    <li>
                                        <span>Some other stats</span>
                                        <span class="count">36,900</span>
                                    </li>
                                    <!-- // List item END -->

                                    <!-- List item -->
                                    <li>
                                        <span>Some stunning stats</span>
                                        <span class="count">26,999</span>
                                    </li>
                                    <!-- // List item END -->

                                    <!-- List item -->
                                    <li>
                                        <span>Awesome stats</span>
                                        <span class="count">4,900</span>
                                    </li>
                                    <!-- // List item END -->

                                </ul>
                            </div>
                        </div>
                        <!-- // Activity/List Widget END -->

                        <!-- Carousel -->
                        <div class="widget widget-heading-simple widget-body-simple">
                            <div class="widget-head"><h4 class="heading glyphicons picture"><i></i>Awesome Carousel</h4></div>
                            <div class="widget-body">
                                <div class="carousel carousel-1 slide" id="myCarousel">
                                    <div class="carousel-inner">
                                        <!-- Item -->
                                        <div class="item active">
                                            <div class="row-fluid">
                                                <div class="span5 relativeWrap">
                                                    <div class="carousel-caption">
                                                        <h4>Get this item now!</h4>
                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut.<br/> <a href="" class="separator top" target="_blank">Buy QuickAdmin</a></p>
                                                    </div>
                                                </div>
                                                <div class="span7">
                                                    <img src="/common/theme/images/gallery-2/8.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- // Item END -->
                                        <!-- Item -->
                                        <div class="item">
                                            <div class="row-fluid">
                                                <div class="span5 relativeWrap">
                                                    <div class="carousel-caption">
                                                        <h4>Get this item now!</h4>
                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut.<br/> <a href="" class="separator top" target="_blank">Buy QuickAdmin</a></p>
                                                    </div>
                                                </div>
                                                <div class="span7">
                                                    <img src="/common/theme/images/gallery-2/9.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- // Item END -->
                                        <!-- Item -->
                                        <div class="item">
                                            <div class="row-fluid">
                                                <div class="span5 relativeWrap">
                                                    <div class="carousel-caption">
                                                        <h4>Get this item now!</h4>
                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut.<br/> <a href="" class="separator top" target="_blank">Buy QuickAdmin</a></p>
                                                    </div>
                                                </div>
                                                <div class="span7">
                                                    <img src="/common/theme/images/gallery-2/10.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- // Item END -->
                                    </div>
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- // Carousel END -->

                    </div>
                    <div class="span6">
                        <!-- Comments Widget -->
                        <div class="widget widget-heading-simple widget-body-gray widget-body-multiple widget-offers">

                            <!-- Widget Heading -->
                            <div class="widget-head">
                                <h4 class="heading glyphicons gift"><i></i>Special Offers</h4>
                            </div>
                            <!-- // Widget Heading END -->

                            <div class="widget-body">

                                <!-- Media item -->
                                <div class="media">
                                    <img class="media-object pull-left thumb hidden-tablet hidden-phone" data-src="holder.js/100x100/white" alt="Image" />
                                    <div class="media-body">
                                        <h5><a href="">Product or Service Name</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh</p>
                                        <div class="row-fluid">
                                            <div class="span6 tablet-column-reset">
                                                <span class="price">Price: <strong>&dollar;29.90</strong></span>
                                            </div>
                                            <div class="span6 text-right tablet-column-reset">
                                                <button type="button" class="btn btn-inverse btn-icon glyphicons shopping_cart btn-small"><i></i>Purchase</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- // Media item END -->

                            </div>
                            <div class="widget-body">

                                <!-- Media item -->
                                <div class="media">
                                    <img class="media-object pull-left thumb hidden-tablet hidden-phone" data-src="holder.js/100x100/white" alt="Image" />
                                    <div class="media-body">
                                        <h5><a href="">Product or Service Name</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh</p>
                                        <div class="row-fluid">
                                            <div class="span6 tablet-column-reset">
                                                <span class="price">Price: <strong>&dollar;29.90</strong></span>
                                            </div>
                                            <div class="span6 text-right tablet-column-reset">
                                                <button type="button" class="btn btn-inverse btn-icon glyphicons shopping_cart btn-small"><i></i>Purchase</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- // Media item END -->

                            </div>
                            <div class="widget-body">

                                <!-- Media item -->
                                <div class="media">
                                    <img class="media-object pull-left thumb hidden-tablet hidden-phone" data-src="holder.js/100x100/white" alt="Image" />
                                    <div class="media-body">
                                        <h5><a href="">Product or Service Name</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh</p>
                                        <div class="row-fluid">
                                            <div class="span6 tablet-column-reset">
                                                <span class="price">Price: <strong>&dollar;29.90</strong></span>
                                            </div>
                                            <div class="span6 text-right tablet-column-reset">
                                                <button type="button" class="btn btn-inverse btn-icon glyphicons shopping_cart btn-small"><i></i>Purchase</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- // Media item END -->

                            </div>

                        </div>
                        <!-- // Comments Widget END -->
                    </div>
                </div>

            </div>
            <div class="span3 tablet-column-reset">

                <!-- Widget -->
                <div class="widget widget-heading-simple widget-body-gray">

                    <!-- Widget Heading -->
                    <div class="widget-head">
                        <h4 class="heading glyphicons list"><i></i>Categories</h4>
                    </div>
                    <!-- // Widget Heading END -->

                    <div class="widget-body list">

                        <!-- List -->
                        <ul>
                            <li>
                                <a href="">Make Up</a>
                                <span class="badge">35</span>
                            </li>
                            <li>
                                <a href="">Fragrances</a>
                                <span class="badge">30</span>
                            </li>
                            <li>
                                <a href="">Nails</a>
                                <span class="badge">19</span>
                            </li>
                            <li>
                                <a href="">Hair Products</a>
                                <span class="badge">33</span>
                            </li>
                            <li>
                                <a href="">Accessories</a>
                                <span class="badge">17</span>
                            </li>
                        </ul>
                        <!-- // List END -->

                    </div>
                </div>
                <!-- // Widget END -->

                <!-- Widget -->
                <div class="widget widget-heading-simple widget-body-gray">

                    <!-- Widget Heading -->
                    <div class="widget-head">
                        <h4 class="heading glyphicons calendar"><i></i>Calendar</h4>
                    </div>
                    <!-- // Widget Heading END -->

                    <div class="widget-body">
                        <div id="datepicker-inline"></div>
                    </div>
                </div>
                <!-- // Widget END -->

                <!-- Widget -->
                <div class="widget widget-heading-simple widget-body-gray">

                    <!-- Widget Heading -->
                    <div class="widget-head">
                        <h4 class="heading glyphicons notes"><i></i>Notes</h4>
                    </div>
                    <!-- // Widget Heading END -->

                    <div class="widget-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu diam eros. Etiam consequat, quam eu molestie tempus, dui elit volutpat massa, at consectetur ligula nunc ac massa. Phasellus quis ante libero, quis accumsan purus. Pellentesque rhoncus accumsan interdu
                    </div>
                </div>
                <!-- // Widget END -->

                <div class="alert alert-primary">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <p>Integer quis tempor mi. Donec venenatis dui in neque fringilla at iaculis libero ullamcorper. In velit sem, sodales id hendrerit ac, fringilla et est.</p>
                </div>

                <!-- Latest Orders/List Widget -->
                <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

                    <!-- Widget Heading -->
                    <div class="widget-head">
                        <h4 class="heading glyphicons shopping_cart"><i></i>Last orders</h4>
                        <a href="" class="details pull-right">view all</a>
                    </div>
                    <!-- // Widget Heading -->

                    <div class="widget-body list products">
                        <ul>

                            <!-- List item -->
                            <li>
                                <span class="img">photo</span>
                                <span class="title">10 items<br/><strong>&euro;5,900.00</strong></span>
                                <span class="count"></span>
                            </li>
                            <!-- // List item END -->

                            <!-- List item -->
                            <li>
                                <span class="img">photo</span>
                                <span class="title">Product name<br/><strong>&euro;2,900</strong></span>
                                <span class="count"></span>
                            </li>
                            <!-- // List item END -->

                        </ul>
                    </div>
                </div>
                <!-- // Latest Orders/List Widget END -->

                <!-- Widget -->
                <div class="widget widget-heading-simple widget-body-white">

                    <!-- Widget Heading -->
                    <div class="widget-head">
                        <h4 class="heading glyphicons twitter"><i></i>Twitter feed</h4>
                    </div>
                    <!-- // Widget Heading END -->

                    <div class="widget-body">
                        <div class="jstwitter" data-gridalicious="false" data-type="slide" data-images="false"><span class="label">Loading .. </span></div>
                    </div>
                </div>
                <!-- // Widget END -->

            </div>
        </div>

    </div>



    <div class="row-fluid row-merge border-bottom border-top layout-timeline">
        <div class="span4">
            <div class="innerAll">

                <div class="row-fluid">
                    <div class="span8">
                        <ul class="nav nav-pills nav-stacked nav-timeline">
                            <li class="active"><a href="">Now</a></li>
                            <li><a href="">Yesterday</a></li>
                            <li><a href="">2 Weeks Ago</a></li>
                            <li><a href="" class="glyphicons calendar">Custom<i></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="span8">
            <div class="innerAll">

                <ul class="timeline">
                    <li class="active">
                        <div class="separator bottom">
                            <span class="date box-generic">Now</span>
                            <span class="type glyphicons suitcase">Task <i></i><span class="time">08:00</span></span>
                            <button type="button" class="glyphicons circle_plus btn btn-primary btn-icon btn-small"><i></i>Add event</button>
                        </div>
                        <div class="widget widget-heading-simple widget-body-white margin-none">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="media-object pull-left thumb"><img data-src="holder.js/51x51/dark" alt="Image" /></div>
                                    <div class="media-body">
                                        <a class="author">Adrian Demian</a><br/>
                                        <span class="muted">adrian@ennovation.ie</span>
                                    </div>
                                </div>
                                <div class="alert alert-gray">
                                    <p class="glyphicons circle_info margin-none"><i></i> Added a new milestone named <a href="">MosaicPro</a></p>
                                </div>
                                <a class="glyphicons single pencil"><i></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="active">
                        <span class="type glyphicons comments">Comment <i></i><span class="time">11:00</span></span>
                        <div class="widget widget-heading-simple widget-body-gray margin-none">
                            <div class="widget-body">
                                <p class="glyphicons user margin-none"><i></i> <strong><a href="">MosaicPro</a> said</strong>: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an ...</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="separator">
                            <span class="date box-generic"><strong>27</strong>may</span>
                            <span class="type glyphicons picture">Photo <i></i><span class="time">08:00</span></span>
                        </div>
                        <div class="widget widget-heading-simple widget-body-white margin-none">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="media-object pull-left thumb"><img data-src="holder.js/51x51/dark" alt="Image" /></div>
                                    <div class="media-body">
                                        <a class="author">Adrian Demian</a><br/>
                                        <span class="muted">adrian@ennovation.ie</span>
                                    </div>
                                </div>
                                <div class="alert alert-gray">
                                    <p class="glyphicons circle_info"><i></i> Added photos to the album <a href="">MosaicPro</a></p>

                                    <!-- Gallery Layout -->
                                    <div class="gallery gallery-2">
                                        <ul class="row-fluid" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-4" data-delegate="#gallery-4">
                                            <li class="span2 hidden-phone"><a class="thumb" href="/common/theme/images/gallery-2/6.jpg" data-gallery="gallery"><img src="/common/theme/images/gallery-2/6.jpg" alt="photo" /></a></li>
                                            <li class="span2 hidden-phone"><a class="thumb" href="/common/theme/images/gallery-2/5.jpg" data-gallery="gallery"><img src="/common/theme/images/gallery-2/5.jpg" alt="photo" /></a></li>
                                            <li class="span2 hidden-phone"><a class="thumb" href="/common/theme/images/gallery-2/4.jpg" data-gallery="gallery"><img src="/common/theme/images/gallery-2/4.jpg" alt="photo" /></a></li>
                                            <li class="span2"><a class="thumb" href="/common/theme/images/gallery-2/3.jpg" data-gallery="gallery"><img src="/common/theme/images/gallery-2/3.jpg" alt="photo" /></a></li>
                                            <li class="span2"><a class="thumb" href="/common/theme/images/gallery-2/2.jpg" data-gallery="gallery"><img src="/common/theme/images/gallery-2/2.jpg" alt="photo" /></a></li>
                                            <li class="span2"><a class="thumb" href="/common/theme/images/gallery-2/1.jpg" data-gallery="gallery"><img src="/common/theme/images/gallery-2/1.jpg" alt="photo" /></a></li>
                                        </ul>
                                    </div>
                                    <!-- // Gallery Layout END -->

                                </div>
                                <a class="glyphicons single pencil"><i></i></a>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    @endsection