<x-app-layout>
    <!-- Jumbotron !-->

    <div class="p-5 text-center bg-image" style="
      background-image: url('https://i.pinimg.com/564x/fa/12/13/fa1213725fc0f1d94c6e378b28eae4ab.jpg');
      height: 400px;
    ">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Jalanmulus.id</h1>
                    <h4 class="mb-4">Adukan Keluah Anda Kepada Kami</h4>
                    <a class="btn bg-primary text-white btn-lg" href="#form-report" role="button">Buat Laporan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron !-->

    
    <!-- Cara Membuat Laporan!-->
    <div class="container how-make__report d-flex justify-content-around">
        <div class="step-1 rounded-circle">
            <img src="https://i.pinimg.com/564x/53/79/9d/53799d51a62bd28cb04c8a4c57f054c9.jpg" alt="">
        </div>
        <div class="step-2 rounded-circle">
            <img src="https://i.pinimg.com/564x/1c/d1/02/1cd10259d5f82fa903a769798e94d0bb.jpg" alt="">
        </div>
        <div class="step-3 ">
            <img src="https://i.pinimg.com/564x/1c/98/9e/1c989e9510285f3b39a62f5419cd3a9b.jpg" alt="">
        </div>
        <div class="step-4 rounded-circle">
            <img src="https://cdn-icons-png.flaticon.com/512/85/85871.png?w=740&t=st=1687061795~exp=1687062395~hmac=bbff45167d132f88fa79cb5dce7c3545969d4f50519c4f791f76dc23e58171c1" alt="">
        </div>
        <div class="step-5 rounded-circle">
            <img src="https://cdn-icons-png.flaticon.com/512/4558/4558240.png" alt="">
        </div>
    </div>

    <div class="container how-make__report__caption d-flex justify-content-around">
        <div class="step-1__caption text-center">
            <p>Laporkan jalan disekitar anda yang tidak layak untuk dilewati</p>
        </div>
        <div class="step-2__caption text-center">
            <p>Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada instansi berwenang</p>
        </div>
        <div class="step-3__caption text-justify text-center">
            <p>Laporan Anda telah terverifikasi dan akan dilanjutkan pada proses berikutnya</p>
        </div>
        <div class="step-4__caption text-justify text-center">
            <p>Peninjauan ulang laporan Anda dalam proses kerja 10 hari</p>
        </div>
        <div class="step-5__caption text-justify text-center">
            <p>Laporan Anda telah diterima dan akan ditindak lanjuti hingga selesai</p>
        </div>
    </div>
    <!-- Cara Membuat Laporan!-->


    <!-- Buat Laporan !-->
    <span class="d-block p-3 text-bg-primary text-center font-weight-bold fs-5 shadow p-3 mb-5">Buat Laporan</span>
    <form class="form-report mx-auto rounded shadow-lg">
        <div class="col">
            <label for="name" class="label-form">Nama</label>
            <input type="text" class="form-control py-2" placeholder="Nama Lengkap">
        </div>
        <div class="col ">
            <label for="name" class="label-form">Judul Laporan</label>

            <input type="text" class="form-control py-2" placeholder="Judul Laporan">
        </div>
        <div class="col ">
            <label for="name" class="label-form">Isi Laporan Pengaduan</label>

            <textarea type="textarea" rows="8" class="form-control" placeholder="Isi Laporan"></textarea>
        </div>
        <div class="col ">
            <label for="name" class="label-form">Tanggal Laporan</label>

            <input type="date" class="form-control py-2" placeholder="Tanggal Laporan">
        </div>
        <div class="col ">
            <label for="name" class="label-form">Lokasi Laporan</label>

            <input type="text" class="form-control py-2" placeholder="Lokasi Laporan">
        </div>
        <div class="col ">
            <label for="name" class="label-form">Upload Bukti Laporan</label>
            <input type="file" class="form-control py-2">
        </div>

        <div class="choose-radio d-flex">
            <div class="form-check me-4">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Anonim
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Rahasia
                </label>
            </div>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto mt-5">
            <button class="btn btn-primary" type="button">Submit</button>
        </div>
    </form>
    <!-- Buat Laporan !-->

    <!-- Informasi Laporan !-->
    <div class="report-information w-100 d-block text-bg-primary text-center fs-5">
        <h1 class="">Laporan Pengaduan</h1>
        <span>234243242342423</span>
    </div>
</x-app-layout>
