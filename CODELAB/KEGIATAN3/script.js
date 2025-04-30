function submitForm() {
    // Ambil nilai dari input
    const nama = document.getElementById('nama').value;
    const alamat = document.getElementById('alamat').value;
    const email = document.getElementById('email').value;

    // Cek apakah ada input yang kosong
    if (nama === '' || alamat === '' || email === '') {
        alert('Harap isi semua kolom!');
    } else {
        alert('Form berhasil disubmit!');
        // Di sini Anda dapat menambahkan kode untuk memproses data lebih lanjut
    }
}
