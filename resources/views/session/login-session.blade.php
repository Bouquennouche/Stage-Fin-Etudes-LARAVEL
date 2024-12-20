@extends('layouts.user_type.guest')

@section('content')

  <main class="main-content">
    <section>
      <div class="position-relative">
        <div class="position-absolute top-0 start-0">
          <h3 class="mt-3 ms-4 font-weight-bolder text-info text-gradient">ENSSUP</h3>
        </div>   
      </div>
      <div class="page-header min-vh-75" >
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-7">
                <div class="m-auto card-header pb-0 text-left bg-transparent">
                  <img  style="height: 8rem; width: 16.5rem; margin-bottom: -10px" class="responsive" src="{{ asset('assets/img/logo.png') }}" alt="">   
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="/session">
                    @csrf
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="admin@softui.com" aria-label="Email" aria-describedby="email-addon">
                      @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label>Mot de passe</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="secret" aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Mémoriser mon identifiant</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Se connecter</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/ivancik.jpg'); background-size: cover; "></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  
   

@endsection
