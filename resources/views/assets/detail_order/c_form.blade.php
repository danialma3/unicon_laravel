<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-10 mx-auto">
                <div class="custom-form ticket-form mb-5 mb-lg-0">

                    <h2 class="text-center mb-4 font-Basement-Grotesque-Roman">Order Tiket</h2>

                    <div class="row">
                        <table class="table table-borderless col">
                            <thead>
                                <tr>
                                    <th class="col-1 text-end"><strong>Pembeli</strong></th>
                                    <th class="col-5"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pt-0 pb-0 text-end">Nama</td>
                                    <td class="pt-0 pb-0 text-end">: {{ $order->nama_awal }}
                                        {{ $order->nama_belakang }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pt-0 pb-0 text-end">Email</td>
                                    <td class="pt-0 pb-0 text-end">: {{ $order->email }}</td>
                                </tr>
                                <tr>
                                    <td class="pt-0 pb-0 text-end">No HP</td>
                                    <td class="pt-0 pb-0 text-end">: {{ $order->nomor_hp }}</td>
                                </tr>
                                <tr>
                                    <td class="pt-0 pb-0 text-end">Jumlah</td>
                                    <td class="pt-0 pb-0 text-end">: {{ $order->qty }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row my-0">
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

                        {{-- <div class="col-lg-4 col-md-10 col-8 mx-auto">
                            <button type="submit" id='pay-button' class="form-control">Bayar Tiket</button>
                        </div> --}}

                        <div class="float-end">
                            <button class="btn btn-primary float-end" id='pay-button'>Bayar Boss</button>
                            @if ($order->status != 'Paid')
                                <a href='{{ url("pembayaran-baru/$order->id ") }}'
                                    class="btn btn-warning float-end me-1">Pembayaran Baru</a>
                            @else
                            @endif
                        </div>


                        <form action='{{ url("/detail-order/$order->id") }}' id="submit_form" method="post">
                            @csrf
                            <input type="hidden" name="json" id="json_callback">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
