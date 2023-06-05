<x-LoginLayout title="Login">
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
    <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="index.html" class="app-brand-link gap-2">
              <img src="{{ asset('admin-assets/img/icons/mpj.png') }}" style="width:120px !important;" alt="">
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Welcome to {{ config('app.name') }} 👋</h4>
          <p class="mb-4">Please sign-in to your account and start the adventure</p>

          <form id="formAuthentication" class="mb-3" action="/validate-login" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email"
              class="form-control form-control-lg @error('email') is-invalid @enderror"
              id="email" placeholder="Email" required autofocus
              value="{{ old('email') }}">
              @error('email')
              <div class="invalid-feedback">
                  <small>{{ $message }}</small>
              </div>
          @enderror
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
                <a href="auth-forgot-password-basic.html">
                  <small>Forgot Password?</small>
                </a>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" name="password"
                class="form-control form-control-lg @error('password') is-invalid @enderror"
                    id="password" placeholder="Password" required autofocus
                    value="{{ old('password') }}">
                @error('password')
                <div class="invalid-feedback">
                        <small>{{ $message }}</small>
                    </div>
                @enderror
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
              </div>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </div>
          </form>

          <p class="text-center">
            <span>Cuih, Anak Baru?</span>
            <a href="auth-register-basic.html">
              <span>Buat Akun Dulu Gih!!!</span>
            </a>
          </p>
        </div>
        </div>
        </div>
        </div>
      </div>
</x-LoginLayout>