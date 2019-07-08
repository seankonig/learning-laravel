<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
        <style>
            .isComplete {
                text-decoration: line-through;
            }
            .card-header-title {
              background-color: hsl(0, 0%, 21%);
            }
            .card-header-title {
              color: hsl(0, 0%, 96%)
            }
            .card {
              width: 100%;
              display: flex;
              flex-direction: column;
            }
            .card-footer {
              padding: 10px;
              margin-top: auto;
            }
            .add-task-button {
              padding-top: 20px;
            }
        </style>

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
		<nav class="navbar is-light" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                  <img src="http://acmelogos.com/images/logo-7.svg" width="112" height="28">
                </a>
            </div>
        
            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                  <a class="navbar-item" href="/projects">
                    Projects
                  </a>
                </div>
            </div>
        </nav>

        <div class="section">
            @yield('content')
        </div>    
    </body>
</html>
