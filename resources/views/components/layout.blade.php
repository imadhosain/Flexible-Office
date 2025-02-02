<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FLEXIBLE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="/main.css" />
  </head>
  <body>
    <header class="header-bar mb-3">
      <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center p-3">
        <h4 class="my-0"><a href="/" class="text-white font-weight-bold">Flexible Office Services</a></h4>
        @auth
        <div class="d-flex align-items-center">
          <a href="#" class="mr-2"><img title="My Profile" data-toggle="tooltip" data-placement="bottom" style="width: 32px; height: 32px; border-radius: 16px" src="/avatar.jpg" alt="User Profile" /></a>
          <form action="/logout" method="POST" class="d-inline">
            <button class="btn btn-sm btn-secondary font-weight-bold">Log out</button>
            @csrf
          </form>
        </div>  
        @else
        <form action="/login" method="POST" class="mb-0 pt-2 pt-md-0">
          @csrf
          <div class="row align-items-center">
            <div class="col-md mb-3 mb-md-0">
              <input name="loginusername" class="form-control form-control-sm input-dark" type="text" placeholder="username" autocomplete="off" />
            </div>
            <div class="col-md mb-3 mb-md-0">
              <input name="loginpassword" class="form-control form-control-sm input-dark" type="password" placeholder="password" />
            </div>
            <div class="col-md-auto">
              <button class="btn btn-primary btn-sm font-weight-bold"> Log in</button>
            </div>
          </div>
        </form>
        @endauth
      </div>
    </header>
    <!-- header ends here -->
    
    <main>
      {{ $slot }}
    </main>

    <!-- footer begins -->
    <footer class="main-footer text-center container-fluid py-4 border-top">
      <div>
        <p>IBRAM Company</p>
        <p>Al-Assi Square, Hama, Syria</p>
        <p>Telephone: +963 988 899 999</p>
        <p class="m-0">Copyright &copy; {{ date('Y') }} <a href="/" class="text-muted">Ibram</a>. All rights reserved</p>
      </div>
    </footer>
    <!-- footer ends here -->
  </body>
</html>