<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="post" role="form">
                    <h2 class="text-center mb-4">Order Tiket</h2>

                    <div class="ticket-form-body">
                        <input type="text" name="ticket-form-name" id="ticket-form-name" class="form-control" placeholder="Nama Lengkap" required>

                        <input type="number" name="ticket-form-nik" id="ticket-form-nik" class="form-control" placeholder="NIK" required>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="ticket-form-tempat-lahir" id="ticket-form-tempat-lahir" class="form-control" placeholder="Tempat Lahir" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="date" name="ticket-form-tanggal-lahir" id="ticket-form-tanggal-lahir" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <input type="email" name="ticket-form-email" id="ticket-form-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required>

                        <input type="number" class="form-control" name="ticket-form-phone" placeholder="No Telepon (eg. 082134567890)" required="No Telepon">

                        <textarea name="ticket-form-alamat" rows="3" class="form-control" id="ticket-form-alamat" placeholder="Alamat Lengkap" required="Alamat Lengkap"></textarea>

                        <div class="col-lg-4 col-md-10 col-8 mx-auto">

                            <button type="submit" class="form-control">Beli Tiket</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>