<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="{{route('tiket')}}" method="post" role="form">
                    @csrf

                    <h2 class="text-center mb-4">Order Tiket</h2>

                    <div class="ticket-form-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="nama_awal" class="form-control @error('nama_awal')
                                  is-invalid
                                @enderror" placeholder="Nama Depan" value="{{old('nama_awal',$order->nama_awal)}}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="nama_belakang" class="form-control" placeholder="Nama Belakang" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="tmpt_lahir" id="tmpt_lahir" class="form-control" placeholder="Tempat Lahir" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required>

                        <input type="number" class="form-control" name="nomor_hp" placeholder="No Telepon (eg. 082134567890)" required="No Telepon">

                        <input type="number" class="form-control" name="qty" placeholder="qty" min="1" max="10">

                        <textarea name="alamat" rows="3" class="form-control" id="alamat" placeholder="Alamat Lengkap" required="Alamat Lengkap"></textarea>

                        <div class="col-lg-4 col-md-10 col-8 mx-auto">

                            <button type="submit" class="form-control">Beli Tiket</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>