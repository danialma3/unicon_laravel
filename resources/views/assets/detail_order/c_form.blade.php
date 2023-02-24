<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-10 mx-auto">
                <div class="custom-form ticket-form mb-5 mb-lg-0">

                    <h4 class="font-Basement-Grotesque-Roman text-center "> Detail Order</h4>

                    <div class="row">
                        <table class="table table-borderless col">
                            <thead>
                                <tr>
                                    <th class="col-1">Penjual</th>
                                    <th class="col-5"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pt-0 pb-0">Nama</td>
                                    <td class="pt-0 pb-0">: UNICON KALSEL 2023
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pt-0 pb-0">Email</td>
                                    <td class="pt-0 pb-0">: kalselunite@gmail.com</td>
                                </tr>
                                <tr>
                                    <td class="pt-0 pb-0">CP</td>
                                    <td class="pt-0 pb-0">: 0895-3405-15933</td>
                                </tr>
                                <tr class="blank-row">
                                    <td class="pt-0 pb-0"> </td>
                                    <td class="pt-0 pb-0"> <br></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-borderless col">
                            <thead>
                                <tr>
                                    <th class="col-5"> </th>
                                    <th class="col-1 text-end">Pembeli</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pt-0 pb-0 text-end">{{ $order->nama_awal }}
                                        {{ $order->nama_belakang }} :
                                    </td>
                                    <td class="pt-0 pb-0 text-end">Nama</td>
                                </tr>
                                <tr>
                                    <td class="pt-0 pb-0 text-end">{{ $order->email }} :</td>
                                    <td class="pt-0 pb-0 text-end">Email</td>
                                </tr>
                                <tr>
                                    <td class="pt-0 pb-0 text-end">{{ $order->nomor_hp }} :</td>
                                    <td class="pt-0 pb-0 text-end">No HP</td>
                                </tr>
                                <tr>
                                    <td class="pt-0 pb-0 text-end">{{ $order->qty }} :</td>
                                    <td class="pt-0 pb-0 text-end">Jumlah</td>
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

                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                            <button type="submit" id='pay-button' class="form-control">Bayar Tiket</button>
                        </div>

                        <form action='{{url("/detail-order/$order->id")}}' id="submit_form" method="post">
                            @csrf
                            <input type="hidden" name="json" id="json_callback">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>