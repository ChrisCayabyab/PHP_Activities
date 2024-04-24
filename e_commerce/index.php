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
                <a href="/e_commerce/product.php" class="list-group-item" style="padding: 0;margin:0;">
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
                <a href="/e_commerce/product.php" class="list-group-item" style="padding: 0;margin:0;">
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
                <a href="/e_commerce/product.php" class="list-group-item" style="padding: 0;margin:0;">
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
                <a href="/e_commerce/product.php" class="list-group-item" style="padding: 0;margin:0;">
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
        <div class="carousel slide" data-ride="carousel" id="c1">
            <ol class="carousel-indicators">
                <li data-target="#c1" data-slide-to="0"></li>
                <li data-target="#c1" data-slide-to="1"></li>
                <li data-target="#c1" data-slide-to="2"></li>
                <li data-target="#c1" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="/e_commerce/image/mypic1.jpg">
                    <div class="carousel-caption">
                        <h4>My Pic 1</h4>
                        <p>My Plant 1</p>
                    </div>
                </div>

                <div class="item">
                    <img src="/e_commerce/image/mypic2.jpg">
                    <div class="carousel-caption">
                        <h4>My Pic 2</h4>
                        <p>My Plant 2</p>

                    </div>
                </div>

                <div class="item">
                    <img src="/e_commerce/image/mypic3.jpg">
                    <div class="carousel-caption">
                        <h4>My Pic 3</h4>
                        <p>My Plant 3</p>

                    </div>
                </div>

                <div class="item">
                    <img src="/e_commerce/image/mypic4.jpg">
                    <div class="carousel-caption">
                        <h4>My Pic 4</h4>
                        <p>My Plant 4</p>

                    </div>
                </div>
            </div>

            <a href="#c1" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

            <a href="#c1" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>


        </div>
    </header>

    <div class="container">
        <div class="page-header">
            <h3 class="text-center">All Products</h3>
        </div>
        <div class="col-md-4">
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

        <div class="col-md-4">
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

        <div class="col-md-4">
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

        <div class="col-md-4">
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

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/e_commerce/image/mypic5.jpg" style="width:100%">
                <div class="caption">
                    <h4 class="pull-right">Php: 15,000</h4>
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

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/e_commerce/image/mypic6.jpg" style="width:100%">
                <div class="caption">
                    <h4 class="pull-right">Php: 20,000</h4>
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
    </div>
</body>

</html>