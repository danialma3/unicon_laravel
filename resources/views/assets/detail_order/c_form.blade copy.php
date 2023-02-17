<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-10 mx-auto">
                <div class="custom-form ticket-form mb-5 mb-lg-0">
                    <div class="row">
                        <div class="col-md">

                            <p><strong>Diterbitkan Atas nama</strong></p>
                            <div class="row">
                                <div class="col-md-2">
                                    <p><strong>Penjual</strong></p>
                                </div>
                                <div class="col-md-1">
                                    <span>:</span>
                                </div>
                                <div class="col-md"><strong>UNICON KALSEL</strong></div>
                            </div>

                        </div>
                        <div class="col-md">
                            <p><strong>UNTUK</strong></p>

                            <div class="row">
                                <div class="col-md-5">
                                    <p><strong>Pembeli</strong>
                                    </p>
                                </div>
                                <div class="col-md-1"><span>:</span></div>
                                <div class="col-md me-1"><strong>{{ $order->nama_awal }}
                                        {{ $order->nama_belakang }}</strong></div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <p><strong>Tanggal Pembelian</strong>
                                    </p>
                                </div>
                                <div class="col-md-1">
                                    <span>:</span>
                                </div>
                                <div class="col-md"><strong>{{ date('d-M-Y') }}</strong></div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <p><strong>Alamat</strong></p>
                                </div>
                                <div class="col-md-1"><span>:</span></div>
                                <div class="col-md"><strong>{{ $order->alamat }}</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <table class="table">
                            <tr>
                                <thead>
                                    <th>Info</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>Total </th>
                                </thead>
                            </tr>
                            <tr>
                                <tbody>
                                    <td>TIKET KALSEL UNITE</td>
                                    <td>{{ $order->qty }}</td>
                                    <td>35.000</td>
                                    <td>35.000</td>
                                </tbody>
                            </tr>
                            <tr>
                                <thead>
                                    <th colspan="2">Total Keseluruhan</th>
                                    <th></th>
                                    <th>35.000</th>
                                </thead>
                            </tr>
                        </table>
                        <button type="submit" id='pay-button'>Bayar Boss</button>
                    </div>
                </div>
            </div>
        </div>
</section>
