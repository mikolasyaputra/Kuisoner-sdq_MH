<!DOCTYPE html>
<html>
<head>
    <title>Kuisoner Kekuatan dan Kesulitan Pada Anak 11-18 Tahun!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
     <div class="container">
     <form id="kuisionerForm" method="POST" action="simpan_data.php">
        <div class="form-group mb-4">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group mb-4">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group mb-4">
            <label for="umur">Umur:</label>
            <input type="number" class="form-control" id="umur" name="umur" required>
        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div id="pertanyaan">
                                    <h4>Isi Pertanyaan-pertanyaan Dibawah Ini!</h4>
                                    <div style="font-size: 14px justify-center; ">Untuk setiap pernyataan, beri tanda pada kotak Tidak Benar. Agak Benar atau Selalu Benar. Akan sangat
                                        membantu kami apabila kamu mau menjawab semua pertanyaan sebaik mungkin meskipun kamu tidak yakin
                                        benar. Berikan jawabanmu sebagaimana sesuatu telah terjadi pada dirimu selama enam bulan terakhir.  </div>
                                        <hr style="margin-top: 20px; margin-bottom: 20px;">        
                                    <form action="" style="font-size: 12px;">
        <div class="form-group mb-4">
            <label>1. Saya gelisah. Saya tidak dapat diam untuk waktu lama</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n1" id="n1_2" value="2" required>
                <label class="form-check-label" for="n1_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n1" id="n1_1" value="1" required>
                <label class="form-check-label" for="n1_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n1" id="n1_0" value="0" required>
                <label class="form-check-label" for="n1_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>2. Saya sering sakit kepala, sakit perut atau macam-macam sakit lainnya</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n2" id="n2_2" value="2" required>
                <label class="form-check-label" for="n2_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n2" id="n2_1" value="1" required>
                <label class="form-check-label" for="n2_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n2" id="n2_0" value="0" required>
                <label class="form-check-label" for="n2_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>3.Saya menjadi sangat marah dan sering tidak dapat mengendalikan kemarahan saya</label><br>
            <div class="form-check form-check-inline">
                <input clss="form-check-input" type="radio" name="n3" id="n3_2" value="2" required>
                <label class="form-check-label" for="n3_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n3" id="n3_1" value="1" required>
                <label class="form-check-label" for="n3_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n3" id="n3_0" value="0" required>
                <label class="form-check-label" for="n3_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>4. Saya lebih suka sendiri daripada bersama dengan orang yang seusiaku</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n4" id="n4_2" value="2" required>
                <label class="form-check-label" for="n4_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n4" id="n4_1" value="1" required>
                <label class="form-check-label" for="n4_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n4" id="n4_0" value="0" required>
                <label class="form-check-label" for="n4_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>5. Saya biasanya melakukan apa yang diperintahkan oleh orang lain</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n5" id="n5_2" value="0" required>
                <label class="form-check-label" for="n5_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n5" id="n5_1" value="1" required>
                <label class="form-check-label" for="n5_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n5" id="n5_0" value="2" required>
                <label class="form-check-label" for="n5_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>6.Saya banyak merasa cemas atau khawatirterhadap apapun</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n6" id="n6_2" value="2" required>
                <label class="form-check-label" for="n6_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n6" id="n6_1" value="1" required>
                <label class="form-check-label" for="n6_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n6" id="n6_0" value="0" required>
                <label class="form-check-label" for="n6_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>7. Bila sedang gelisah atau cemas badan saya sering bergerak – gerak tanpa saya sadari</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n7" id="n7_2" value="2" required>
                <label class="form-check-label" for="n7_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n7" id="n7_1" value="1" required>
                <label class="form-check-label" for="n7_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n7" id="n7_0" value="0" required>
                <label class="form-check-label" for="n7_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>8. Saya mempunyai satu orang teman baik atau lebih</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n8" id="n8_2" value="0" required>
                <label class="form-check-label" for="n8_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n8" id="n8_1" value="1" required>
                <label class="form-check-label" for="n8_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n8" id="n8_0" value="2" required>
                <label class="form-check-label" for="n8_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>9.Saya sering bertengkar dengan orang lain. Saya dapat memaksa orang lain melakukan apa yang saya inginkan</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n9" id="n9_2" value="2" required>
                <label class="form-check-label" for="n9_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n9" id="n9_1" value="1" required>
                <label class="form-check-label" for="n9_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n9" id="n9_0" value="0" required>
                <label class="form-check-label" for="n9_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>10. Saya sering merasa tidak bahagia, sedih, atau menangis</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n10" id="n10_2" value="2" required>
                <label class="form-check-label" for="n10_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n10" id="n10_1" value="1" required>
                <label class="form-check-label" for="n10_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n10" id="n10_0" value="0" required>
                <label class="form-check-label" for="n10_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>11. Orang lain seusia saya umumnya menyukai saya</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n11" id="n11_2" value="0" required>
                <label class="form-check-label" for="n11_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n11" id="n11_1" value="1" required>
                <label class="form-check-label" for="n11_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n11" id="n11_0" value="2" required>
                <label class="form-check-label" for="n11_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>12. Perhatian saya mudah teralih, saya sulit untuk memusatkan perhatian pada apapun</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n12" id="n12_2" value="2" required>
                <label class="form-check-label" for="n12_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n12" id="n12_1" value="1" required>
                <label class="form-check-label" for="n12_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n12" id="n12_0" value="0" required>
                <label class="form-check-label" for="n12_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>13. Saya merasa gugup dalam situasi baru, saya mudah kehilangan rasa percaya Diri</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n13" id="n13_2" value="2" required>
                <label class="form-check-label" for="n13_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n13" id="n13_1" value="1" required>
                <label class="form-check-label" for="n13_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n13" id="n13_0" value="0" required>
                <label class="form-check-label" for="n13_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>14. Saya sering dituduh berbohong atau berbuat curang</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n14" id="n14_2" value="2" required>
                <label class="form-check-label" for="n14_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n14" id="n14_1" value="1" required>
                <label class="form-check-label" for="n14_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n14" id="n14_0" value="0" required>
                <label class="form-check-label" for="n14_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>15. Saya sering diganggu atau dipermainkan oleh anak-anak atau remaja lainnya</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n15" id="n15_2" value="2" required>
                <label class="form-check-label" for="n15_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n15" id="n15_1" value="1" required>
                <label class="form-check-label" for="n15_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n15" id="n15_0" value="0" required>
                <label class="form-check-label" for="n15_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>16. Saya berpikir terlebih dulu akibat yang akan terjadi, sebelum berbuat atau melakukan sesuatu</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n16" id="n16_2" value="0" required>
                <label class="form-check-label" for="n16_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n16" id="n16_1" value="1" required>
                <label class="form-check-label" for="n16_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n16" id="n16_0" value="2" required>
                <label class="form-check-label" for="n16_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>17. Saya mengambil barang yang bukan milik saya dari rumah, sekolah atau dari mana saja</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n17" id="n17_2" value="2" required>
                <label class="form-check-label" for="n17_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n17" id="n17_1" value="1" required>
                <label class="form-check-label" for="n17_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n17" id="n17_0" value="0" required>
                <label class="form-check-label" for="n17_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>18. Saya lebih mudah berteman dengan orang dewasa daripada dengan orang seusia Saya</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n18" id="n18_2" value="2" required>
                <label class="form-check-label" for="n18_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n18" id="n18_1" value="1" required>
                <label class="form-check-label" for="n18_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n18" id="n18_0" value="0" required>
                <label class="form-check-label" for="n18_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>19. Banyak yang saya takuti, saya mudah menjadi takut</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n19" id="n19_2" value="2" required>
                <label class="form-check-label" for="n19_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n19" id="n19_1" value="1" required>
                <label class="form-check-label" for="n19_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n19" id="n19_0" value="0" required>
                <label class="form-check-label" for="n19_0">Tidak Benar</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label>20. Saya menyelesaikan pekerjaan yang sedang saya lakukan. Saya mempunyai perhatian yang baik terhadap apapun.</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n20" id="n20_2" value="0" required>
                <label class="form-check-label" for="n20_2">Selalu benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n20" id="n20_1" value="1" required>
                <label class="form-check-label" for="n20_1">Kadang benar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="n20" id="n20_0" value="2" required>
                <label class="form-check-label" for="n20_0">Tidak Benar</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Lihat Hasil</button>
    </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
