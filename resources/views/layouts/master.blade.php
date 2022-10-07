<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../.css/app.css" rel="stylesheet">
 
    
  </head>

  <body>
    
    
   

    <main role="main">
    <div>
      @if (auth()->check())
      <p>{{ auth()->user()->name }}</p>
        @endif  
          <a class="btn btn-sm btn-outline-secondary" href="/logout">Logout</a>
          
          
          <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
          <a class="btn btn-sm btn-outline-secondary" href="/register">Register</a>
          
    </div>
        <div class="album py-5 bg-muted" >
            <div class="container" style=" align-items: center">
              
              @yield('content')
             
                
        
            </div>
        </div>
    </main>

  </body>
</html>
