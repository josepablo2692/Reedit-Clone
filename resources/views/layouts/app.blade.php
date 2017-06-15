<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reedit Clone</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  </head>
  <body>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Reedit Clone</h1>
            </div>
          </div>

          <hr>
          @include('layouts._errors')
          @yield('content')
        </div>

  </body>
</html>
