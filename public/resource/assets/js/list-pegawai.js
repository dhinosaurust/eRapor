$('#dataTable').DataTable({
    "ajax": {
        "type": "POST",
        "url": "data_pegawai.json",
        "timeout": 12000,
        "dataSrc": function (json) {
            if(json != null){
                return json
            } else {
                return "";
            }
        }
        // success: function(res){
        //     for(const key in res){
        //         console.log(res[key].nip_nik)
        //     }
        // }
    },
    "columns": [
        {
            "data": null, // For the numbering column
            "render": function (data, type, row, meta) {
                return meta.row + 1; // Incremental numbering starting from 1
            }
        },
        { "data": "nama" },
        { "data": "nip_nik" },
        { "data": "kategori" },
        { "data": "opd" },
        { "data": "unit_kerja" },
        { "data": "jabatan" },
        { "data": "jenis_kelamin" },
        { "data": "tgl_lahir" },
        { "data": "tk_pendidikan" },
        { "data": "golongan" },
        { "data": "jenisjabatan" },
        {
            "data": null,
            "render": function (data, type, row){
                return `
                    <button class="btn btn-primary btn-sm view-btn" data-id="${row.nip_nik}">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="btn btn-warning btn-sm edit-btn" data-id="${row.nip_nik}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="btn btn-danger btn-sm delete-btn" data-id="${row.nip_nik}">
                        <i class="fas fa-trash"></i>
                    </button>
                `;
            }
        }
    ]
});

// no,
// nama,
// nip,
// kategori (jenis),
// opd,
// unit kerja,
// jabatan,
// jenis kelamin,
// tgl lahir,
// tk_pendidikan,
// golongan,
// jenis jabatan
