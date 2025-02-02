<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>FLEXIBLE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/main.css" />
  </head>
  <body>
    <header class="header-bar mb-3">
      <div class="container d-flex flex-column flex-md-row align-items-center p-3">
        <h3 class="my-0 mr-md-auto"><a href="/" class="text-white font-weight-bold">Flexible Office Services</a></h3>
        @auth
        <div class="flex-row my-3 my-md-0">
          <a href="#" class="mr-2"><img title="My Profile" data-toggle="tooltip" data-placement="bottom" style="width: 32px; height: 32px; border-radius: 16px" src="/avatar.jpg" /></a>
          <form action="/logout" method="POST" class="d-inline">
            <button class="btn btn-sm btn-secondary font-weight-bold">Log out</button>
            @csrf
          </form>
        </div>  
        @else
        <form action="/login" method="POST" class="mb-0 pt-2 pt-md-0">
          @csrf
          <div class="row align-items-center">
            <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
              <input name="loginusername" class="form-control form-control-sm input-dark" type="text" placeholder="username" autocomplete="off" />
            </div>
            <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
              <input name="loginpassword" class="form-control form-control-sm input-dark" type="password" placeholder="password" />
            </div>
            <div class="col-md-auto">
              <button class="btn btn-primary btn-sm"> Log in</button>
            </div>
          </div>
        </form>
        @endauth
        
      </div>
    </header>
    <!-- header ends here -->
    
    <div class="d-flex flex-md-row justify-content-start">
      <div class="d-flex flex-column align-items-center pt-2 pt-md-2 side-bar text-blue font-weight-bold">
        <div><button class="py-3 mt-4 mb-4 btn btn-lg btn-success btn-block">
          <h4><a href="/accountant/accaddcustp" class="text-white font-weight-bold">Customers</a></h4></button>
        </div>
        <div><button class="py-3 mt-4 mb-4 btn btn-lg btn-success btn-block">
          <h4><a href="/accountant/accaddcontp" class="text-white font-weight-bold">Contracts</a></h4></button>
        </div>
      </div>
        {{ $slot }}
    </div>
    <!-- footer begins -->
    <footer class="footer border-top text-center container-fluid">
      <p class="m-0">Copyright &copy; {{ date('Y') }} <a href="/" class="text-muted">Ibram</a>. All rights reserved</p>
    </footer>
    @stack('script')
  </body>
</html>


