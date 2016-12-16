<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LOGICALEXICON</title>
        <meta name="description" content="a lexical taxonomy of fallacious versus valid+sound logic — exposed, clarified, and analyzed">
        <link rel="stylesheet" href="public/css/app.css">
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Andika&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" id="navbarLogo" href="#"><img alt="Socrates F∨¬F" height="50px" src="/public/images/Socrates_fallaciousORsound.png"></a>
                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                          <li class="dropdown">
                            <a href="#" id="fallacyList_dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> FALLACIES&hellip; <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#"><h4>formal fallacies</h4></a></li>
                              <li><a href="#">firstF</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#"><h4>informal fallacies</h4></a></li>
                              <li><a href="#">firstIF</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#"><h4>cognitive errors</h4></a></li>
                              <li><a href="#">firstCE</a></li>
                            </ul>
                          </li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="query">
                          </div>
                          <button id="dissect_query" type="submit" class="btn btn-default">dissect</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADDITIONAL INFO. <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">about the author</a></li>
                              <li><a href="https://github.com/BFGriffith/fallacious-logic-lexicon">GitHub repository<br>source code</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                  </nav>
                  <div class="container">
                    <div class="jumbotron">
                      <h1>example fallacy title</h1>
                      <p>fallacy description</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>
