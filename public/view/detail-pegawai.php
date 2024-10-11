<div class="container-fluid">
    <div class="card shadow mb-4 p-4">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="text-gray-900 font-weight-bold mb-0">Detail Pegawai</h3>
                <button class="btn btn-outline-primary">Edit data</button>
            </div>
            <div class="wrapper my-5">
                <h4 class="text-gray-900 font-weight-bold" id="nama"> <!-- isian dari javascript --> </h4>
                <p class="text-gray-900" id="posisi"> <!-- isian dari javascript --> </p>
            </div>
            <table class="table table-bordered mt-3">
                <tr>
                    <td class="col-4 col-md-2 text-gray-500 font-weight-bold">OPD</td>
                    <td class="text-gray-800" id="opd"></td>
                </tr>
                <tr>
                    <td class="col-4 col-md-2 text-gray-500 font-weight-bold text-capitalize">kategori</td>
                    <td class="text-gray-800" id="kategori"></td>
                </tr>
            </table>
            <table class="table table-bordered">
                <tr>
                    <td class="col-4 col-md-2 text-gray-500 font-weight-bold text-uppercase">nip</td>
                    <td class="text-gray-800" id="nip_nik"></td>
                </tr>
                <tr>
                    <td class="col-4 col-md-2 text-gray-500 font-weight-bold text-capitalize">nama</td>
                    <td class="text-gray-800" id="nama"></td>
                </tr>
                <tr>
                    <td class="col-4 col-md-2 text-gray-500 font-weight-bold text-capitalize">tanggal lahir</td>
                    <td class="text-gray-800 align-middle" id="tgl_lahir"></td>
                </tr>
                <tr>
                    <td class="col-4 col-md-2 text-gray-500 font-weight-bold text-capitalize">jenis kelamin</td>
                    <td class="text-gray-800" id="jenis_kelamin"></td>
                </tr>
                <tr>
                    <td class="col-4 col-md-2 text-gray-500 font-weight-bold text-capitalize">pendidikan terakhir</td>
                    <td class="text-gray-800 align-middle" id="tk_pendidikan"></td>
                </tr>
            </table>
            <table class="table table-bordered">
                <tr>
                    <td class="col-4 col-md-2 text-gray-500 font-weight-bold text-capitalize">unit kerja</td>
                    <td class="text-gray-800" id="unit_kerja"></td>
                </tr>
                <tr>
                    <td class="col-4 col-md-2 text-gray-500 font-weight-bold text-capitalize">posisi</td>
                    <td class="text-gray-800" id="posisi"></td>
                </tr>
                <tr>
                    <td class="col-4 col-md-2 text-gray-500 font-weight-bold text-capitalize">golongan</td>
                    <td class="text-gray-800" id="golongan"></td>
                </tr>
                <tr>
                    <td class="col-4 col-md-2 text-gray-500 font-weight-bold text-capitalize">jenis jabatan</td>
                    <td class="text-gray-800 align-middle" id="jenis_jabatan"></td>
                </tr>
            </table>
        </div>
    </div>

</div>



<script>
    async function getData(){
        const res = await fetch('../data_pegawai.json');
        const data = await res.json();

        return data;
    }

    async function showData(){
        const data = await getData();

        const opd = document.getElementById('opd');
        const kategori = document.getElementById('kategori');
        
        const nip = document.getElementById('nip_nik');
        const nama_pegawai = document.querySelectorAll('#nama');
        const jenis_kelamin = document.getElementById('jenis_kelamin');
        const tgl_lahir = document.getElementById('tgl_lahir');
        const tk_pendidikan = document.getElementById('tk_pendidikan');
        
        const unit_kerja = document.getElementById('unit_kerja');
        const posisi = document.querySelectorAll('#posisi');
        const golongan = document.getElementById('golongan');
        const jenis_jabatan = document.getElementById('jenis_jabatan');


        
        opd.innerHTML = data[0].opd;
        kategori.innerHTML = data[0].kategori;

        nip.innerHTML = data[0].nip_nik;
        // nama_pegawai.innerHTML = data[0].nama;
        jenis_kelamin.innerHTML = data[0].jenis_kelamin;
        tgl_lahir.innerHTML = data[0].tgl_lahir;
        tk_pendidikan.innerHTML = data[0].tk_pendidikan;

        unit_kerja.innerHTML = data[0].unit_kerja;
        // posisi.innerHTML = data[0].jabatan;
        golongan.innerHTML = data[0].golongan;
        jenis_jabatan.innerHTML = data[0].jenisjabatan;

        nama_pegawai.forEach(element => {
            element.innerHTML = data[0].nama;
        });

        posisi.forEach(element => {
            element.innerHTML = data[0].jabatan;
        });


        console.log(data[0])
    }

    showData();
</script>