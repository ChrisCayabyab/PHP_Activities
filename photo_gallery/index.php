<!DOCTYPE html>
<html>

<head>
    <title>Photo Gallery</title>
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style> 
        .thumbnail img{
            width: 350px;
            height: 200px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">Photo Gallery</div>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/photo_gallery/index.php">Home</a></li>
                <li><a href="/photo_gallery/plants.php">Plants</a></li>
                <li><a href="/photo_gallery/others.php">Others</a></li>
            </ul>

    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset 1">
                <div class="carousel slide" data-ride="carousel" id="slider">
                    <ol class="carousel-indicators">
                        <li data-target="slider" data-slide-to="0" class="active"></li>
                        <li data-target="slider" data-slide-to="1"></li>
                        <li data-target="slider" data-slide-to="2"></li>
                        <li data-target="slider" data-slide-to="3"></li>
                    </ol>


                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="/photo_gallery/image/mypic1.jpg">
                        </div>
                        <div class="item">
                            <img src="/photo_gallery/image/mypic2.jpg">
                        </div>
                        <div class="item">
                            <img src="/photo_gallery/image/mypic3.jpg">
                        </div>
                        <div class="item">
                            <img src="/photo_gallery/image/mypic4.jpg">
                        </div>
                    </div>

                    <a href="#slider" data-slide="prev" class="left carousel-control">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#slider" data-slide="next" class="right carousel-control">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>

                </div>
            </div>
        </div>
        <div class="page-header">
            <h3>Photo Gallery</h3>
        </div>

        <div class="row">
            <div class="col-md-4">
                <a href="#m1" data-toggle="modal" class="thumbnail">
                    <img src="/photo_gallery/image/mypic1.jpg">
                </a>
                
                <div class="modal fade" id="m1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Plant 1</div>
                            <div class="modal-body">
                                <img src="/photo_gallery/image/mypic1.jpg" class="img-thumbnail">
                            </div>
                            <div class="modal-footer">Plant picture 1</div>
                        </div>
                    </div>
                </div>
            
            
            </div>
            <div class="col-md-4">
                <a href="#m2" data-toggle="modal" class="thumbnail"><img src="/photo_gallery/image/mypic2.jpg"></a>
                <div class="modal fade" id="m2">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Plant 2</div>
                            <div class="modal-body">
                                <img src="/photo_gallery/image/mypic2.jpg" class="img-thumbnail">
                            </div>
                            <div class="modal-footer">Plant picture 2</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m3" data-toggle="modal" class="thumbnail"><img src="/photo_gallery/image/mypic3.jpg"></a>
                <div class="modal fade" id="m3">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Plant 3</div>
                            <div class="modal-body">
                                <img src="/photo_gallery/image/mypic3.jpg" class="img-thumbnail">
                            </div>
                            <div class="modal-footer">Plant picture 3</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m4" data-toggle="modal" class="thumbnail"><img src="/photo_gallery/image/mypic4.jpg"></a>
                <div class="modal fade" id="m4">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Plant 4</div>
                            <div class="modal-body">
                                <img src="/photo_gallery/image/mypic4.jpg" class="img-thumbnail">
                            </div>
                            <div class="modal-footer">Plant picture 4</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m5" data-toggle="modal" class="thumbnail"><img src="/photo_gallery/image/mypic5.jpg"></a>
                <div class="modal fade" id="m5">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Plant 5</div>
                            <div class="modal-body">
                                <img src="/photo_gallery/image/mypic5.jpg" class="img-thumbnail">
                            </div>
                            <div class="modal-footer">Plant picture 5</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m6" data-toggle="modal" class="thumbnail"><img src="/photo_gallery/image/mypic6.jpg"></a>
                <div class="modal fade" id="m6">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Plant 6</div>
                            <div class="modal-body">
                                <img src="/photo_gallery/image/mypic6.jpg" class="img-thumbnail">
                            </div>
                            <div class="modal-footer">Plant picture 6</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <p class="text-center" style="padding: 10px">Created by Chris Daniel B. Cayabyab</p>
            </div>
        </footer>
    </div>
</body>

</html>