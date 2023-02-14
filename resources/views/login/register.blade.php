<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - Dishut</title>
    <link href="{{ asset('assets/admin/dist/css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
    <link href="{{asset('assets/tema')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets/tema')}}/css/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('assets/tema')}}/css/templatemo-festava-live.css?07022023.001" rel="stylesheet">
    <link href="{{asset('assets/tema')}}/images/unicontab.png" rel="shortcut icon">

</head>

<body style="background-image: url('img/pasar2.jpg');background-repeat: no-repeat;background-size: cover">

    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-10 mx-auto">



                    <form class="custom-form ticket-form mb-5 mb-lg-0" method="POST" action="{{ route('user-manajemen') }}" enctype="multipart/form-data">
                        <h3 class="text-center mb-4">Buat Akun</h3>
                        @csrf
                        <!-- Form Group (email address)-->
                        <div class="row gx-3">
                            <div class="col-md-6">
                                <!-- Form Group (Nama User)-->
                                <div class="mb-3">
                                    <label class="mb-1" for="name">Nama Lengkap</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukkan Nama Lengkap">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Form Group (email address) -->
                                <div class="mb-3">
                                    <label class="small mb-1" for="email">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan Alamat Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div><!-- Form Row    -->
                        <div class="row gx-3">
                            <div class="col-md-6">
                                <!-- Form Group (password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukkan password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Form Group (confirm password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Masukkan Konfirmasi Password">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="small mb-1">Level User</label>
                            <input class="form-control" type="text" name="role" id="role" value="admin" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="small mb-1">Foto</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror" value="{{ old('foto') }}" placeholder="Harap isikan nama lapas" required onchange="previewImage()">
                            @error('foto')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <!-- Form Group (create account submit)-->
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                        <div class="card-footer text-center">
                            <div class="small"><a href="{{ route('login') }}">Sudah Punya Akun? Kembali ke login</a></div>
                        </div>
                    </form>
                </div>
            </div>
    </section>

    <div style="background-color: black;"></div>
    <div id="layoutAuthentication_footer" style="background-color: black;">
        <footer class="footer-admin mt-auto footer-dark">
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-md-6 small">Copyright &copy; KALSEL UNITE
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                    </div>
                    <div class="col-md-6 text-md-end small">
                        <a href="https://www.termsfeed.com/live/fd4ec0c4-9a85-4696-b217-5d61b7104847">Privacy Policy</a>
                        &middot;
                        <a href="#!">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // bikin preview foto
        function previewImage() {
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>