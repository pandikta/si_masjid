//sweet alert tombol sukses
const flashData = $('.flash-data').data('flashdata');
if (flashData) {
    Swal.fire({
        title: 'Data Berhasil ',
        text: flashData,
        icon: 'success',
        confirmButtonText:'OK',
        timer: 1700
    })
}

//sweetalert login
const flashMasuk = $('.flash-masuk').data('flashmasuk');
if(flashMasuk){
    Swal.fire({
        title: 'Anda Berhasil',
        text: flashMasuk,
        icon: 'success',
        confirmButtonText:'OK',
        timer: 2000
    })
}

//sweet alert gagal login
const gagal = $('.gagal').data('gagal');
if (gagal) {
    Swal.fire({
        title: 'Maaf ',
        text: gagal,
        icon: 'error',
        footer: '<a href>Lupa username/password?</a>',
        confirmButtonText:'OK',
        
    })
}

//sweetalert logout
const flashKeluar = $('.flash-keluar').data('flashkeluar');
if(flashKeluar){
    Swal.fire({
        title: 'Anda Berhasil',
        text: flashKeluar,
        icon: 'success',
        confirmButtonText:'OK',
        timer: 2000
    })
}

//tombol hapus
$('.tombol-hapus').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
    title: 'Apakah anda yakin',
    text: "Data ini akan di hapus ?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus Data!'
}).then((result) => {
    if (result.isConfirmed) {
    document.location.href = href;
    }
})

});

//tombol reset password
$('.tombol-reset').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
    title: 'Apakah anda yakin',
    text: "password akan di reset?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Reset Password!'
}).then((result) => {
    if (result.isConfirmed) {
    document.location.href = href;
    }
})

});
