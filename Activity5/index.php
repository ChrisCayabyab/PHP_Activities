<html>

<head>
  <title>Activity 5</title>
  <!-- Latest compiled and minified CSS -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
  <h1>Activity 5</h1>

  <div class="container">

    <ul class="list-inline">
      <li><a href="#" data-toggle="popover" data-placement="top" title="Top popover" data-content="Some Content Here in popover">Top</a></li>
      <li><a href="#" data-toggle="popover" data-placement="bottom" title="Bottom popover" data-trigger="focus" data-content="Some Content Here in popover">Bottom</a></li>
      <li><a href="#" data-toggle="popover" data-placement="left" title="Left popover" data-trigger="hover" data-content="Some Content Here in popover">Left</a></li>
      <li><a href="#" data-toggle="popover" data-placement="Right" title="Right popover">Right</a></li>
    </ul>

    <ul class="list-inline">
      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Top Tool Tip">Top</a></li>
      <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Bottom Tool Tip">Bottom</a></li>
      <li><a href="#" data-toggle="tooltip" data-placement="left" title="Left Tool Tip">Left</a></li>
      <li><a href="#" data-toggle="tooltip" data-placement="Right" title="Right Tool Tip">Right</a></li>
    </ul>
  </div>
  <script>
    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
      $('[data-toggle="popover"]').popover();
    });
  </script>

  <br />
  <br />
  <hr />

  <div class="container">
    <div id="mycarousel" class="carousel slide" data-ride="carousel" style="width: 1000px;">
      <ol class="carousel-indicators">
        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="/3BSCS-2/Activity5/pic/cat.jpg" width="1000px">
          <div class="carousel-caption">
            <h3>A pretty cat</h3>
            <p>A picture of a cat taken from Google</p>
          </div>
        </div>

        <div class="item">
          <img src="/3BSCS-2/Activity5/pic/dog.jpg" width="1000px">
          <div class="carousel-caption">
            <h3>A Cute dog</h3>
            <p>A picture of a dog taken from Google</p>
          </div>
        </div>

        <div class="item">
          <img src="/3BSCS-2/Activity5/pic/lion.jpg" width="1000px">
          <div class="carousel-caption">
            <h3>A proud lion</h3>
            <p>A picture of a lion taken from Google</p>
          </div>
        </div>

        <a class="left carousel-control" href="#mycarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#mycarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

      </div>
    </div>
  </div>

  <br />
  <br />
  <hr />

  <div class="container">

    <button class="btn btn-success" data-toggle="modal" data-target="#myModal"> Modal Box</button>

    <div class="modal fade" id="myModal">

      <div class="modal-dialog">
        <div class="modal-content">
          <div>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-header">
            <h4>This is my Modal Header</h4>
          </div>

          <div class="modal-body">
            <p>This is my modal content</p>
          </div>

          <div class="modal-footer">
            <button class="btn btn-info" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>