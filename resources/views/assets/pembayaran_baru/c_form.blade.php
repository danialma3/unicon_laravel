<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="{{ route('tiket') }}" method="post"
                    role="form">
                    @csrf

                    <h2 class="text-center mb-4 font-Basement-Grotesque-Roman">Order Tiket</h2>

                    <div class="ticket-form-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <input type="text" name="nama_awal"
                                    class="form-control
                                @error('nama_awal')
                                  is-invalid
                                @enderror"
                                    placeholder="Nama Depan" value="{{ old('nama_awal', $order->nama_awal) }}">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="tempat_lahir" id="tempat_lahir"
                                    class="form-control @error('tempat_lahir')
                                  is-invalid
                                @enderror"
                                    placeholder="Tempat Lahir" value="{{ old('tempat_lahir', $order->tempat_lahir) }}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                    class="form-control  @error('tanggal_lahir')
                                  is-invalid
                                @enderror"
                                    placeholder="" value="{{ old('tanggal_lahir', $order->tanggal_lahir) }}">
                            </div>
                            {{--
                            <div class="col-lg-6 col-md-6 col-12 date" id="datepicker" data-date-format="dd/mm/yyyy">
                                <input name="tgl_lahir" id="tgl_lahir"
                                    class="form-control  @error('tgl_lahir')
                                  is-invalid
                                @enderror"
                                    class="form-control" type="text" placeholder="Tanggal Lahir"
                                    value="{{ old('tgl_lahir') }}" readonly />
                                <span class="input-group-addon"></span>
                            </div> --}}

                        </div>
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                            class="form-control @error('email')
                                  is-invalid
                                @enderror"
                            placeholder="Email" value="{{ old('email', $order->email) }}">

                        <input type="number"
                            class="input-phone form-control @error('nomor_hp')
                                  is-invalid
                                @enderror"
                            name="nomor_hp" placeholder="No Telepon (eg. 082134567890)"
                            value="{{ old('nomor_hp', $order->nomor_hp) }}">

                        <input type="number"
                            class="form-control @error('qty')
                                  is-invalid
                                @enderror"
                            name="qty" placeholder="Jumlah tiket" min="1" max="10"
                            value="{{ old('qty', $order->qty) }}">

                        <textarea name="alamat" rows="3"
                            class="form-control @error('alamat')
                                  is-invalid
                                @enderror"
                            id="alamat" placeholder="Alamat Lengkap">{{ old('alamat', $order->alamat) }}</textarea>

                        <div class="col-lg-4 col-md-10 col-8 mx-auto">

                            <button type="submit" class="form-control">Beli Tiket</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>
