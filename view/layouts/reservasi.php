<div class="booking" style="height: 100vh;">
    <div id="Reserve" class="card" style="margin: 50px; background-image: url('<?= $main_url ?>assets/gambar/bgReserve.jpg'); height: 80% !important; background-size: cover; background-position: center; box-shadow: 7px 10px rgba(0, 0, 0, .25);">
        <div class="content" style="margin: 0; padding: 0; background-color: rgba(0, 201, 172, .5); height: 100%;">
            <div class="formReserve m-5 card shadow w-50 mx-auto text-white" style="background-color: rgba(0, 0, 0, .6);">
                <h1 class="text-center" style="font-size: 36px !important;">Reservasi</h1>
                <div class="m-2">
                    <div class="form input-group flex-nowrap p-3">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap" aria-describedly="addon-wrapping">
                    </div>
                    <div class="form input-group flex-nowrap p-3">
                        <input type="text" class="form-control" placeholder="No Telp" aria-label="No Telp" aria-describedly="addon-wrapping">
                    </div>
                    <div class="form input-group flex-nowrap p-3">
                        <select name="jumlahOrang" id="jumlahOrang" class="form-select">
                            <option value="-">-- Jumlah Orang --</option>
                            <option value="1">1 Orang</option>
                            <option value="2">2 Orang</option>
                            <option value="3">3 Orang</option>
                            <option value="4">4 Orang</option>
                            <option value="5">5 Orang</option>
                            <option value="6">6 Orang</option>
                        </select>
                    </div>
                    <div class="form input-group flex-nowrap p-3">
                        <input type="date" class="form-control" placeholder="Tanggal Booking" aria-label="Tanggal Booking" aria-describedly="addon-wrapping">
                    </div>
                    <div class="mx-auto" style="width: 200px;">
                        <button class="btn w-100 fw-bold text-white" style="border-radius: 20px; font-size: 20px; background-color: #00C9AC;">Reserve</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>