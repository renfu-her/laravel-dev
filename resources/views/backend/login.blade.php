
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
        <script src="{{ asset('admin/js/all.min.js') }}" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Admin 登入</h3></div>
                                    <div class="card-body">
                                        <form id="form_post" method="post" action="{{ asset('backend/login-validate') }}">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" type="email"
                                                        placeholder="name@example.com" required/>
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" type="password"
                                                        placeholder="Password" required />
                                                <label for="inputPassword">密碼</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit">登入</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        </div>
        <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/js/jquery-3.6.4.min.js') }}"></script>
        <script src="{{ asset('admin/js/scripts.js') }}"></script>

        <script>
            @if(Session::has('message'))
                alert('{{ Session::get('message') }}')
            @endif
        </script>
        @yield('js')

    </body>
</html>
