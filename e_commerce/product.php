<html>

<head>
    <title>E-Commerce</title>
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">E-Commerce</a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/e_commerce/index.php">Home</a></li>
                    <li><a href="/e_commerce/software.php">Software</a></li>
                    <li><a href="/e_commerce/music.php">Music</a></li>
                    <li><a href="/e_commerce/contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <aside class="col-md-4">
        <div class="col-md-10 col-md-offset-1">
            <div class="list-group">
                <a href="product.php" class="list-group-item" style="padding: 0;margin:0;">
                    <div class="col-md-3" style="padding:0; margin:0;">
                        <img src="/e_commerce/image/mypic1.jpg" style="width: 80px; height:100px;">
                    </div>

                    <div class="col-md-9">
                        <div class="list-group-item-heading">
                            <h4>Php: 5,000</h4>
                            <h4>Plant</h4>
                            <div class="clearfix"></div>
                        </div>
                        <p class="list-group-item-text">An elegant birde plant</p>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="list-group">
                <a href="product.php" class="list-group-item" style="padding: 0;margin:0;">
                    <div class="col-md-3" style="padding:0; margin:0;">
                        <img src="/e_commerce/image/mypic2.jpg" style="width: 80px; height:100px;">
                    </div>

                    <div class="col-md-9">
                        <div class="list-group-item-heading">
                            <h4>Php: 5,000</h4>
                            <h4>Plant</h4>
                            <div class="clearfix"></div>
                        </div>
                        <p class="list-group-item-text">An elegant barigated plant</p>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="list-group">
                <a href="product.php" class="list-group-item" style="padding: 0;margin:0;">
                    <div class="col-md-3" style="padding:0; margin:0;">
                        <img src="/e_commerce/image/mypic3.jpg" style="width: 80px; height:100px;">
                    </div>

                    <div class="col-md-9">
                        <div class="list-group-item-heading">
                            <h4>Php: 5,000</h4>
                            <h4>Plant</h4>
                            <div class="clearfix"></div>
                        </div>
                        <p class="list-group-item-text">An elegant lush plant</p>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="list-group">
                <a href="product.php" class="list-group-item" style="padding: 0;margin:0;">
                    <div class="col-md-3" style="padding:0; margin:0;">
                        <img src="/e_commerce/image/mypic4.jpg" style="width: 80px; height:100px;">
                    </div>

                    <div class="col-md-9">
                        <div class="list-group-item-heading">
                            <h4>Php: 5,000</h4>
                            <h4>Plant</h4>
                            <div class="clearfix"></div>
                        </div>
                        <p class="list-group-item-text">An elegant indow plant</p>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </div>
        </div>
    </aside>

    <header class="col-md-8">
        <div class="col-md-12">
            <div class="thumbnail">
                <img src="/e_commerce/image/mypic1.jpg" style="width:100%">
                <div class="caption">
                    <h4 class="pull-right">Php: 5,000</h4>
                    <h4><a href="product.php">Plant</a></h4>
                    <div><button class="btn btn-primary" data-target="#buy_me" data-toggle="modal" style="margin-left: 10px; margin-bottom:10px;">Buy This Plant</button></div>

                    <div class="modal fade" id="buy_me">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="modal-title">Buy Plant</h2>
                                </div>

                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Enter Your Name">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg" placeholder="Enter Your Email">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Enter Your Contact No.">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address...</textarea>
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Submit order</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>In the dappled sunlight of the forest floor,
                        emerald ferns unfurl their delicate fronds,
                        reaching towards the canopy above.
                        Each leaf whispers a tale of resilience,
                        thriving amidst the earthy scent of moss
                        and the gentle rustle of the breeze.

                        In a sunlit corner of the conservatory,
                        a lush philodendron stretches its glossy
                        leaves towards the warmth,
                        painting the room with vibrant hues of green.
                        Its tendrils gracefully cascade,
                        dancing in the soft currents of air,
                        a verdant symphony of life in motion.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <div class="col-md-8 col-md-offset-4">
        <div class="col-md-12">
            <div class="well">
                <div class="text-right">
                    <button class="btn btn-danger">Leave Comments</button>
                </div>
            </div>


            <div class="well">
                <span class="lead">Chris</span>
                <span class="pull-right">3 day ago</span>
                <hr />
                <p>This Plant helps me relax</p>
            </div>

            <div class="well">
                <span class="lead">Daniel</span>
                <span class="pull-right">3 day ago</span>
                <hr />
                <p>This Plant Made me a millionaire</p>
            </div>

            <div class="well">
                <span class="lead">Cayabyab</span>
                <span class="pull-right">3 day ago</span>
                <hr />
                <p>This Plant helped me float</p>
            </div>

            <div class="well">
                <span class="lead">Dandan</span>
                <span class="pull-right">3 day ago</span>
                <hr />
                <p>This Plant thought me to travel through space and time</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="page-header">
            <h3 class="text-center">Related Products</h3>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="/e_commerce/image/mypic1.jpg" style="width:100%">
                <div class="caption">
                    <h4 class="pull-right">Php: 5,000</h4>
                    <h4><a href="product.php">Plant</h4>
                    <p>In the dappled sunlight of the forest floor,
                        emerald ferns unfurl their delicate fronds,
                        reaching towards the canopy above.
                        Each leaf whispers a tale of resilience,
                        thriving amidst the earthy scent of moss
                        and the gentle rustle of the breeze.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="thumbnail">
                <img src="/e_commerce/image/mypic2.jpg" style="width:100%">
                <div class="caption">
                    <h4 class="pull-right">Php: 3,000</h4>
                    <h4><a href="product.php">Plant</h4>
                    <p>In a sunlit corner of the conservatory,
                        a lush philodendron stretches its glossy
                        leaves towards the warmth,
                        painting the room with vibrant hues of green.
                        Its tendrils gracefully cascade,
                        dancing in the soft currents of air,
                        a verdant symphony of life in motion.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="thumbnail">
                <img src="/e_commerce/image/mypic3.jpg" style="width:100%">
                <div class="caption">
                    <h4 class="pull-right">Php: 7,000</h4>
                    <h4><a href="product.php">Plant</h4>
                    <p>In the tranquil garden,
                        a cluster of jade succulents basks in the golden rays of dawn,
                        their plump leaves storing the essence of the morning dew.
                        Against the backdrop of earthy terracotta pots,
                        they stand as resilient guardians of green,
                        thriving in the harmony of sunlight and soil.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="thumbnail">
                <img src="/e_commerce/image/mypic4.jpg" style="width:100%">
                <div class="caption">
                    <h4 class="pull-right">Php: 10,000</h4>
                    <h4><a href="product.php">Plant</h4>
                    <p>In the dappled sunlight of the forest floor,
                        emerald ferns unfurl their delicate fronds,
                        reaching towards the canopy above.
                        Each leaf whispers a tale of resilience,
                        thriving amidst the earthy scent of moss
                        and the gentle rustle of the breeze.</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>