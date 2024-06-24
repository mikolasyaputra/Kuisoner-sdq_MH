const fs = require('fs');
const express = require('express');
const bodyParser = require('body-parser');
const app = express();

// Middleware untuk memproses data dari form
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// Endpoint untuk menangani POST request dari client
app.post('/submit', (req, res) => {
    const { nama, jenis_kelamin, umur, skor, keterangan } = req.body;

    // Format data untuk CSV
    const csvData = `"${nama}","${jenis_kelamin}",${umur},${skor},"${keterangan}"\n`;

    // Simpan data ke dalam file CSV di dalam proyek Anda
    fs.appendFile('hasil_tes.csv', csvData, (err) => {
        if (err) {
            console.error(err);
            res.status(500).send('Gagal menyimpan data.');
        } else {
            console.log('Data berhasil disimpan.');
            res.send('Terima kasih! Data telah disimpan di proyek Anda.');
        }
    });
});

// Port untuk server
const port = 3000;
app.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
});
