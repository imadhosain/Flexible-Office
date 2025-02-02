<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flexible Office Services</title>
    
    <!-- Bootstrap & FontAwesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="/main.css">
</head>
<body>

<header class="header-bar mb-3 bg-dark text-white py-3">
    <div class="container d-flex flex-column flex-md-row align-items-center">
        <h3 class="my-0 mr-md-auto"><a href="/" class="text-white font-weight-bold">Flexible Office Services</a></h3>
        
        @auth
        <div class="d-flex align-items-center">
            <a href="#" class="mr-3">
                <img title="My Profile" data-toggle="tooltip" style="width: 32px; height: 32px; border-radius: 50%;" src="/ib-avatar.jpg">
            </a>
            <form action="/logout" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-sm btn-outline-light">Log out</button>
            </form>
        </div>  
        @else
        <form action="/login" method="POST" class="d-flex align-items-center">
            @csrf
            <input name="loginusername" class="form-control form-control-sm mr-2" type="text" placeholder="Username">
            <input name="loginpassword" class="form-control form-control-sm mr-2" type="password" placeholder="Password">
            <button class="btn btn-primary btn-sm">Log in</button>
        </form>
        @endauth
    </div>
</header>

<!-- Sidebar -->
<div class="d-flex">
    <nav class="sidebar bg-light p-3">
        <ul class="list-unstyled">
            <li><a href="/admin/adminrooms" class="btn btn-success btn-lg btn-block mb-3">Rooms</a></li>
            <li><a href="/admin/adminoffices" class="btn btn-success btn-lg btn-block mb-3">Offices</a></li>
            <li><a href="/admin/admincustomers" class="btn btn-success btn-lg btn-block mb-3">Customers</a></li>
            <li><a href="/admin/admincontracts" class="btn btn-success btn-lg btn-block mb-3">Contracts</a></li>
            <li><a href="/" class="btn btn-success btn-lg btn-block mb-3">Management</a></li>
        </ul>
    </nav>
    
    <!-- Main Content -->
    <main class="flex-grow-1 p-4">
        {{ $slot }}
    </main>
</div>

<!-- Footer -->
<footer class="footer bg-dark text-center text-white py-3">
    <p class="m-0">&copy; {{ date('Y') }} <a href="/" class="text-muted">Ibram</a>. All rights reserved.</p>
</footer>

<!-- Scripts -->
<script>
    document.querySelectorAll('.sidebar a').forEach(button => {
        button.addEventListener('mouseenter', () => {
            button.style.transform = 'scale(1.05)';
            button.style.boxShadow = '0 5px 10px rgba(0, 0, 0, 0.2)';
        });
        button.addEventListener('mouseleave', () => {
            button.style.transform = 'scale(1)';
            button.style.boxShadow = 'none';
        });
    });
</script>

</body>
</html>