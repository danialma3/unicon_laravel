@extends('layouts.template')

@section('content')   
            <div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="file"></i></div>
                                            Scan Tiket Peserta
                                        </h1>
                                             </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10 col-md-8">
                        <div class="card">
                            <div class="card-header text-center">Scan Disini</div>
                            <div class="card-body">
                               
                                <!-- KAMERA -->
                                <div id="reader" width="600px"></div>

                            </div>
                        </div>
                    </div>
                </main>
                <footer class="footer-admin mt-auto footer-light">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>



        <!-- Modal -->

        <!-- Modal -->
<div class="modal fade" id="detailscan" tabindex="-1" aria-labelledby="detailscanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailscanLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <tr>
            <td ><span id="nama"></span></td>
        </tr>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="ambil_tiket">Ambil Tiket</button>
      </div>
    </div>
  </div>
</div>

@endsection


@section('script2')
<script>
    function onScanSuccess(decodedText, decodedResult) {
  // handle the scanned code as you like, for example:
            $(document).ready(function(){

                let id = '49';
                $.ajax({
                    url:`{{url('cek-data/${id}')}}`,
                    type:"GET",
                    dataType:"json",
                    success: (hasil) =>{
                        $('#detailscan').modal('show');

                        $('#nama').text(hasil.nama_awal);


                        $('#ambil_tiket').on('click',function(){
                            Swal.fire({
                                title: 'Berikan Tiket?',
                                showCancelButton: true,
                                confirmButtonText: 'Berikan',
                                }).then((result) => {
                                /* Read more about isConfirmed, isDenied below */
                                if (result.isConfirmed) {

                                } else if (result.isDenied) {
                                    Swal.fire('Changes are not saved', '', 'info')
                                }
                                })
                        })
                    },
                    error: (error)=>{
                        alert("Data Tidak Ada")
                    } 
            });
});
    // console.log(`Code matched = ${decodedText}`, decodedResult);
    
}

function onScanFailure(error) {
    // handle scan failure, usually better to ignore and keep scanning.
    // for example:
        // console.warn(`Code scan error = ${error}`);
}

let html5QrcodeScanner = new Html5QrcodeScanner(
  "reader",
  { fps: 60, qrbox: {width: 250, height: 250} },
  /* verbose= */ false);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);


</script>

@endsection