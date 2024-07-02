const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        titile: 'Data Mahsiswa',
        text: 'Behasil ' + flashData,
        icon: 'success'
    });
}

//hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    swal.fire({
        tittle: "apakah anda yakin?",
        text: "data akan dihapus",
        icon: "warning",
        showCancelButton: true,
        confirmBUttonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Hapus data!"
    }).then((result) => {
        if (result.value){
            document.location.href = href;
        }
    })
})