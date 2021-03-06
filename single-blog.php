<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Karma Shop</title>
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Trang ch???</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="category.php">Danh m???c</a></li>
									<li class="nav-item"><a class="nav-link" href="single-product.php">Chi ti???t s???n ph???m</a></li>
									<li class="nav-item"><a class="nav-link" href="checkout.php">Ki???m tra s???n ph???m</a></li>
									<li class="nav-item"><a class="nav-link" href="cart.php">Gi??? h??ng</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation.php">X??c nh???n</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.php">Chi ti???t blog</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login.php">????ng nh???p</a></li>
									<li class="nav-item"><a class="nav-link" href="tracking.php">Theo d??i ????n h??ng</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.php">Y???u t???</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Li??n h???</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Blog Page</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.php">Blog</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a class="active" href ="#">Th???c ph???m,</a>
                                    <a href="#" >C??ng ngh???,</a>
                                    <a href="#">Ch??nh tr???,</a>
                                    <a href="#">?????i s???ng</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Ho??ng<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">12/6/2019<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">1.2M L?????t xem<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">6874 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>L???i ??ch c???a vi???c u???ng c?? ph??</h2>
                            <p class="excert">
                            1. Cung c???p n??ng l?????ng v?? c???i thi???n kh??? n??ng t?? duy

                                Cafe c?? th??? gi??p m???i ng?????i c???m th???y b???t m???t m???i v?? t??ng m???c n??ng l?????ng. ???? l?? do trong cafe c?? ch???a m???t ch???t k??ch th??ch g???i l?? caffeine 
                                ??? m???t lo???i ch???t k??ch th??ch ???????c s??? d???ng ph??? bi???n nh???t tr??n th??? gi???i. Caffeine ???????c h???p th??? tr???c ti???p v??o m??u sau khi u???ng r???i di
                                chuy???n l??n n??o. T???i n??o, caffeine ng??n ch???n s??? xu???t hi???n c???a m???t lo???i ch???t ???c ch??? d???n truy???n th???n kinh c?? t??n l?? adenosine. Khi adenosine b??? 
                                ng??n ch???n, n???ng ????? c??c ch???t h??? tr??? d???n truy???n th???n kinh l?? norepinephrine v?? 
                                dopamine t??ng l??n khi???n cho c??c t??? b??o th???n kinh t??ng c?????ng kh??? n??ng d???n truy???n xung th???n kinh ??i kh???p c?? th???.
                            </p>
                            <p>
                            2. H??? tr??? ?????t ch??y ch???t b??o

                                Caffeine c?? m???t trong h???u h???t c??c s???n ph???m h??? tr??? gi???m c??n th??ng qua ?????t ch??y l?????ng m??? th???a b???i n?? th???c s??? c
                                ?? kh??? n??ng l??m ???????c ??i???u ????. Caffeine l?? m???t trong s??? ??t c??c ch???t t??? nhi??n ???????c ch???ng minh c?? kh??? n??ng ?????t ch??y
                                ch???t b??o hi???u qu???. M???t s??? nghi??n c???u cho th???y r???ng caffeine c?? th??? gi??p t??ng t???c ????? trao ?????i ch???t c???a c?? th??? l??n t??? 3
                                ?????n 11%. C??c nghi??n c???u kh??c c??ng ch??? ra r???ng caffeine l??m t??ng hi???u qu??? qu?? tr??nh ?????t ch??y ch???t b??o l??n 10% ??? nh???ng ng?????i b??o ph?? v?? 29% ??? nh???ng ng?????i g???y.
                                Tuy nhi??n t??c d???ng n??y c???a cafe c?? th??? gi???m ??i ??? nh???ng ng?????i s??? d???ng ch??ng l??u d??i.
                            </p>
                            <p>
                            3. C???i thi???n hi???u su???t th??? ch???t

                                Caffeine k??ch th??ch h??? th???n kinh ra l???nh cho c??c enzyme th???y ph??n ch???t b??o trong c?? th??? m???t c??ch m???nh m???. Caffeine c??ng l??m t??ng n???ng ?????
                                adrenaline trong m??u, m???t lo???i hormone c?? t??c d???ng n??ng cao hi???u su???t ho???t ?????ng c???a c??c qu?? tr??nh chuy???n h??a c??ng nh?? c??c b??? ph???n trong c?? th???.
                                C??c ch???t b??o ???????c th???y ph??n s??? t???o th??nh c??c acid b??o t??? do l??m nhi??n li???u cho c?? th???.    
                                V???i t???t c??? nh???ng ??i???u tr??n, kh??ng ng???c nhi??n khi caffeine c?? th??? c???i thi???n hi???u su???t c???a c?? th??? l??n ?????n 12%.
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="quotes">
                            Cafe ???????c ch???ng minh ch???a nhi???u ch???t ch???ng oxy h??a, c??c nghi??n c???u ???? cho th???y r???ng nhi???u ng?????i th???m ch?? nh???n ???????c nhi???u ch???t ch???ng oxy h??a t??? cafe 
                            h??n l?? tr??i c??y v?? rau qu???.
                             Tr??n th???c t???, cafe c??ng cho th???y m??nh l?? m???t trong nh???ng ????? u???ng t???t nh???t cho s???c kh???e tr??n th??? gi???i.
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                                </div>
                                <div class="col-lg-12 mt-25">
                                    <p>
                                    Tr???m c???m l?? m???t lo???i r???i lo???n t??m th???n nghi??m tr???ng l??m gi???m ch???t l?????ng cu???c s???ng c???a ng?????i b???nh. Hi???n nay, b???nh tr???m c???m 
                                    ??ang ng??y c??ng tr??? n??n ph??? bi???n. Th???t may m???n, cafe ???????c ph??t hi???n c?? kh??? n??ng ph??ng ch???ng tr???m c???m v?? c???i thi???n t??m tr???ng theo h?????ng 
                                    t??ch c???c. Trong m???t nghi??n c???u c???a Harvard v??o n??m 2011, 
                                    nh???ng ng?????i ph??? n??? u???ng 4 t??ch cafe m???i ng??y c?? nguy c?? m???c tr???m c???m th???p h??n 20% so v???i nh???ng ng?????i kh??c.
                                    </p>
                                    <p>
                                    U???ng cafe gi??p gi???m nguy c?? m???c m???t s??? b???nh trong ???? c?? nh???ng b???nh nghi??m tr???ng, qua ???? n??ng cao tu???i th???.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                </div>
                                <div class="detials">
                                    <p>B??i vi???t tr?????c</p>
                                    <a href="#">
                                        <h4>Nh???ng m???o nh??? trong cu???c s???ng</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>B??i vi???t ti???p theo</p>
                                    <a href="#">
                                        <h4>Gi?? x??ng d???u t??ng </h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>6874 Comments</h4>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a></h5>
                                        <p class="date">13/6/2019 at 3:12 pm </p>
                                        <p class="comment">
                                            B??i vi???t r???t b??? ??ch !
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">Tr??? l???i</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c2.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Elsie Cunningham</a></h5>
                                        <p class="date">20/6/2019 at 6:32 pm </p>
                                        <p class="comment">
                                            R???t hay !
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">Tr??? l???i</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c3.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Annie Stephens</a></h5>
                                        <p class="date">19/9/2019 at 7:12 pm </p>
                                        <p class="comment">
                                            C???m ??n b???n v?? b??i blog b??? ??ch !
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">Tr??? l???i</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c4.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Maria Luna</a></h5>
                                        <p class="date">16/10/2019 at 12:12 am </p>
                                        <p class="comment">
                                            R???t hay
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">Tr??? l???i</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c5.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Ina Hayes</a></h5>
                                        <p class="date">12/12/2019 at 10:12 am </p>
                                        <p class="comment">
                                            Tuy???t v???i !
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">Tr??? l???i</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h4>????? l???i l???i b??nh lu???n</h4>
                        <form>
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" placeholder="H??? t??n" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Name'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email" placeholder="Email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Ch??? ?????" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Subject'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Tin nh???n"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                            <a href="#" class="primary-btn submit_btn">B??nh lu???n</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                            <h4>Tr???ng Ho??ng</h4>
                            <p>Ng?????i vi???t Blog</p>
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p>T??i L?? Nguy???n Tr???ng Ho??ng, sinh ng??y 19/11/2001, hi???n t???i ??ang h???c t???i tr?????ng ?????i H???c Th???y L???i ??? khoa CNTT ng??nh HTTT</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div class="media post_item">
                                <img src="img/blog/popular-post/post1.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.php">
                                        <h3>10 c??ch gi??p b???n ti???p thu t???t h??n</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/blog/popular-post/post2.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.php">
                                        <h3>C??c m???o ch???p ???nh hay b???n c???n bi???t</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/blog/popular-post/post3.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.php">
                                        <h3>K???t n???i v???i nhau qua trang web h???n h??</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/blog/popular-post/post4.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.php">
                                        <h3>C??n ?????i th???i gian sao cho hi???u qu??? nh???t</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Danh m???c</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>C??ng ngh???</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>?????i s???ng</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Th???i trang</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Ngh??? thu???t</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Th???c ph???m</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Ki???n tr??c</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Phi??u l??u</p>
                                        <p>44</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="br"></div>
                        </aside>
                        
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag </h4>
                            <ul class="list">
                                <li><a href="#">C??ng ngh???</a></li>
                                <li><a href="#">Th???i trang</a></li>
                                <li><a href="#">Ki???n tr??c</a></li>
                                <li><a href="#">Th???c Ph???m</a></li>
                                <li><a href="#">Gi???i tr??</a></li>
                                <li><a href="#">?????i s???ng</a></li>
                                <li><a href="#">Ngh??? thu???t</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">M???o v???t</a></li>
                                <li><a href="#">C??ng th???c</a></li>
                                <li><a href="#">Review s???n ph???m</a></li>
                                <li><a href="#">Gi??y</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>V??? ch??ng t??i</h6>
						<p>
							Th??nh l???p v??o nh???ng n??m 2016, ?????n hi???n t???i ch??ng t??i ???? c?? 2 chi nh??nh t???i H?? N???i v?? TPHCM. Karma Shop ch??ng t??i lu??n mu???n kh??ch h??ng c?? tr???i nghi???m t???t nh???t !
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>????ng k??</h6>
						<p>?????ng b??? l??? c??c s???n ph???m m???i nh???t c???a ch??ng t??i. Nh???n th??ng b??o m???i khi s???n ph???m m???i ???????c l??n k???</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instagram</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Theo d??i ch??ng t??i</h6>
						<p>C??c n???n t???ng m???ng x?? h???i ch??ng t??i s??? d???ng</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>