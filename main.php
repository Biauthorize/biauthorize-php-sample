<!DOCTYPE html>
<html>
<head>
  <title>User Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <div class="row">
        <div class="container">
          <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Lorembook</a>
              </div>
              <div class="navbar-collapse collapse navbar-inverse-collapse">
                <form class="navbar-form navbar-left">
                  <input type="text" class="form-control col-lg-8" placeholder="Search">
                </form>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                  <li><a href="#"><i class="fa fa-group"></i>&nbsp;Find Friends</a></li>
                  <li><a href="#">Post</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
          </div><!-- /.navbar -->
        </div>

      </div>
      <br><br><br>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-2">
                <a href="#" class="thumbnail">
                  <img data-src="holder.js/64x64" alt="...">
                </a>
              </div>

              <div class="col-md-10">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Update Status</h3>
                  </div>
                  <div class="panel-body">


                    <div class="form-group">
                      <input type="text" class="form-control" id="inputDefault" placeholder="What's on your mind?">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <a href="#" class="thumbnail">
                  <img data-src="holder.js/64x64" alt="...">
                </a>
              </div>

              <div class="col-md-10">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <a href="#" class="thumbnail">
                      <img data-src="holder.js/100%x200" alt="...">
                    </a>
                  </div>
                  <div class="panel-footer">
                    <div class="container">

                      <div class="row">
                        <div class="col-md-6" style="padding-left: 0px;">
                          <a href="#"><i class="fa fa-thumbs-up"></i>Like</a>&nbsp;&nbsp;
                          <a href="#"><i class="fa fa-comment"></i>Comment</a>&nbsp;&nbsp;
                          <a href="#"><i class="fa fa-share"></i>Share</a>
                        </div>
                        <div class="col-md-5 col-md-offset-1 text-right" style="padding-right: 0px;">
                          <a href="#">8 Like</a>&nbsp;&nbsp;
                          <a href="#">2 Comment</a>&nbsp;&nbsp;
                          <a href="#">Shares</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <a href="#" class="thumbnail">
                  <img data-src="holder.js/64x64" alt="...">
                </a>
              </div>

              <div class="col-md-10">
                <div class="panel panel-default">
                  <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac sem purus. Fusce pretium euismod tellus quis cursus. Suspendisse ut felis eleifend, porttitor neque in, faucibus nibh. 
                  </div>
                  <div class="panel-footer">
                    <a href="#"><i class="fa fa-thumbs-up"></i>Like</a>&nbsp;&nbsp;
                    <a href="#"><i class="fa fa-comment"></i>Comment</a>&nbsp;&nbsp;
                    <a href="#"><i class="fa fa-share"></i>Share</a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-md-3">
              <div class="list-group">
                <a href="#" class="list-group-item active">
                  Cras justo odio
                </a>
                <a href="#" class="list-group-item">
                <span class="badge">22+</span>Dapibus ac facilisis in
                </a>
                <a href="#" class="list-group-item">
                <span class="badge">2</span>Morbi leo risus
                </a>
              </div>
        </div>
        

      </div>


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="http://code.jquery.com/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/holder.js"></script>
    </body>
    </html>