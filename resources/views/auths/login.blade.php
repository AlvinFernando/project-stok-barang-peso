@extends('layouts.login')
@section('content')
      <div class="login-box">
            <div class="login-logo">
                <img src="{{ asset('admin/dist/img/logo pesoprinting2.png') }}" alt="peso" class="brand-image ml-3 mb-1 mt-1" style="opacity: .8; width: 120px; height: 100px;">
            </div>
            <!-- /.login-logo -->

            <div class="card">
                  <div class="card-body login-card-body">
                        <p class="login-box-msg">Silahkan Login terlebih Dahulu !</p>

                        <form action="/postlogin" method="POST">
                              {{ csrf_field() }}
                              <div class="input-group mb-3">
                                    <input name="email" type="email" class="form-control" placeholder="Email" id="signing-email">
                                    <div class="input-group-append">
                                          <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                          </div>
                                    </div>
                              </div>

                              <div class="input-group mb-3">
                                    <input name="password" type="password" class="form-control" placeholder="Password" id="signing-password">
                                    <div class="input-group-append">
                                          <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                          </div>
                                    </div>
                              </div>

                              <div class="row">
                                    <div class="col-8">
                                          <div class="icheck-primary">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">
                                                      Ingat Saya
                                                </label>
                                          </div>
                                    </div>
                                    <!-- /.col -->

                                    <div class="col-4">
                                          <button type="submit" class="btn bg-navy btn-block">Masuk</button>
                                    </div>
                                    <!-- /.col -->

                              </div>
                        </form>

                        <br>
                        <div class="row">
                              <div class="col-lg-12">
                                    <p class="mb-1">
                                          <a href="forgot-password.html">Lupa Password</a>
                                    </p>
                              </div>
                        </div>
                  </div>
                  <!-- /.login-card-body -->

            </div>
            <div class="row text-center">
                  <br>
                  <div class="col-md-12 ml-2">
                        <strong>Copyright &copy; 2021 <a href="/login">PESO</a></strong>.
                  </div>
            </div>
      </div>
      <!-- /.login-box -->
@endsection
