<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('assets/tema')}}/fonts/icomoon/style.css">
  <link rel="stylesheet" href="{{asset('assets/tema')}}/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('assets/tema')}}/css/bootstrap.v4.3.1.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="{{asset('assets/tema')}}/css/style.css">

  <title>Pesan TIket</title>
</head>

<body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2 bg-beli-tiket" >
    </div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Pesan Tiket</h3>
            <p class="mb-4">Lengkapi form dibawah ini untuk melakukan pemesanan tiket.</p>
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="nik">NIK</label>
                    <input type="number" class="form-control" placeholder="6372...." id="nik">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="John Doe...." id="nama">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="tlahir">Tempat Lahir</label>
                    <input type="text" class="form-control" placeholder="Banjarbaru...." id="tlahir">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="tlahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tlahir">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="telpon">Nomor Telepon</label>
                    <input type="number" class="form-control" placeholder="0821...." id="telpon">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="alamat">Alamat Lengkap</label>
                    <input type="text" class="form-control" placeholder="Jalan A. Yani ..." id="alamat">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="John@mail.com...." id="email">
                  </div>
                </div>
              </div>

              <div class="d-flex mb-5 mt-4 align-items-center">
                <div class="d-flex align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Klik untuk menyetujui <a
                        href="#">Terms and Conditions</a> dan <a href="#">Privacy Policy</a> Kami.</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>
                </div>
              </div>

              <input type="submit" value="Kirim" class="btn px-5 btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{asset('assets/tema')}}/js/jquery.min.js"></script>
  <script src="{{asset('assets/tema')}}/js/popper.min.js"></script>
  <script src="{{asset('assets/tema')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('assets/tema')}}/js/main.js"></script>
</body>

</html>