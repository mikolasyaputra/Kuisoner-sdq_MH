// app.js

const express = require('express');
const bodyParser = require('body-parser');
const fs = require('fs');
const path = require('path');

const app = express();
const port = 3000; // Ganti dengan port yang Anda inginkan

// Middleware
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// Menangani POST request dari formulir
app.post('/submit', (req, res) => {
    // Ambil data dari body request
    const { nama, jenis_kelamin, umur, skor, keterangan } = req.body;

    // Buat data CSV
    const csvData = `Nama,Jenis Kelamin,Umur,Skor,Keterangan\n"${nama}","${jenis_kelamin}",${umur},${skor},"${keterangan}"\n`;

    // Simpan data CSV ke file di folder proyek
    const filePath = path.join(__dirname, 'hasil_tes.csv');
    fs.writeFile(filePath, csvData, (err) => {
        if (err) {
            console.error(err);
            res.status(500).send('Gagal menyimpan data ke file CSV.');
        } else {
            console.log('Data tersimpan ke hasil_tes.csv');
            res.send('Data berhasil disimpan.');
        }
    });
});

// Serve halaman HTML atau aplikasi front-end
app.use(express.static('public')); // Ganti 'public' dengan direktori yang sesuai dengan proyek Anda

// Jalankan server
app.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
});
