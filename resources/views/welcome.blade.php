<x-layout>
  <div class="container py-5">
    <div class="row align-items-center">

      <!-- Left Section -->
      <div class="col-lg-7 text-lg-right py-3 py-md-5">
        <img class="schemeimg img-fluid mb-3 rounded shadow" src="/modern.jpg" alt="Modern Office">
        <h1 class="logo-text display-4 fw-bold">Flexible Office Services</h1>
        <h2 class="text-primary slogan">We take care of your OFFICE, You take care of your BUSINESS</h2>
        <p class="lead text-muted">Full Range Services</p>
      </div>

      <!-- Right Section -->
      <div class="col-lg-5 pl-lg-5 pb-3 py-lg-5">
        <div class="text-center mb-4">
          <img class="logo-img img-fluid rounded shadow-sm" src="/logo.jpg" alt="Company Logo">
        </div>

        <!-- Sign Up Form -->
        <div class="card shadow-lg p-4">
          <h3 class="text-center text-dark mb-3">Sign Up</h3>
          <form action="/register" method="POST" id="registration-form">
            @csrf
            
            <div class="form-group mb-3">
              <label class="form-label">Username</label>
              <input value="{{ old('username') }}" name="username" class="form-control" type="text" placeholder="Choose a username" autocomplete="off" />
              @error('username')
              <p class="error-message">{{ $message }}</p>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label class="form-label">E-Mail</label>
              <input value="{{ old('email') }}" name="email" class="form-control" type="email" placeholder="you@example.com" autocomplete="off" />
              @error('email')
              <p class="error-message">{{ $message }}</p>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label class="form-label">Password</label>
              <input name="password" class="form-control" type="password" placeholder="Enter Password" />
              @error('password')
              <p class="error-message">{{ $message }}</p>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label class="form-label">Confirm Password</label>
              <input name="password_confirmation" class="form-control" type="password" placeholder="Confirm Password" />
              @error('password_confirmation')
              <p class="error-message">{{ $message }}</p>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layout>