<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemodelan Sistem</title>
</head>
<body>
    <nav>
        <div>
            <center><h4>Penerapan Logika Fuzzy Tsukamoto</h4></center>
        </div>
    </nav>

    <div>
        <center>
            <h4>Permodelan dan Simulasi</h4>
            <h4>"Sistem Penunjang Keputusan Pemberian Bonus Kerja Untuk karyawan"</h4>
            <h4>"Nama Mahasiswa - NIM - Kelas"</h4>
            <hr>
        </center>
    </div>
    <div>
        <center><h4>Terdapat 6 (Enam) Rule yang digunakan </h4></center>
        <hr>
        <center>
            <div>
                <div>
                    <b>Rule (R1)</b>=> Jika Masa Kerja <b>Baru</b> Dan Gaji <b>Sedikit</b> Maka Bonus <b>Sedikit</b>
                </div>
                <div>
                    <b>Rule (R2)</b>=> Jika Masa Kerja <b>Baru</b> Dan Gaji <b>Banyak</b> Maka Bonus <b>Sedikit</b>
                </div>
                <div>
                    <b>Rule (R3)</b>=> Jika Masa Kerja <b>Sedang</b> Dan Gaji <b>Sedikit</b> Maka Bonus <b>Sedikit</b>
                </div>
                <div>
                    <b>Rule (R4)</b>=> Jika Masa Kerja <b>Sedang</b> Dan Gaji <b>Banyak</b> Maka Bonus <b>Banyak</b>
                </div>
                <div>
                    <b>Rule (R5)</b>=> Jika Masa Kerja <b>Lama</b> Dan Gaji <b>Sedikit</b> Maka Bonus <b>Banyak</b>
                </div>
                <div>
                    <b>Rule (R6)</b>=> Jika Masa Kerja <b>Lama</b> Dan Gaji <b>Banyak</b> Maka Bonus <b>Banyak</b>
                </div>
            </div>
        </center><hr>
    </div>
    <!-- Modal -->
    <div>
        <center><h4>Uji Coba Logika Fuzzy Menentukan Bonus Karyawan</h4></center>
    </div>
    <div>
        <div>
            <center>
                <table>
                    <tr>
                        <td>Masa Kerja</td>
                        <td><input type="number" id="masakerja" name="masakerja" value="" placeholder="Tahunan" required><label>Tahun</label></td>
                    </tr>
                    <tr>
                        <td>Gaji Karyawan</td>
                        <td><input data-type="currency" id="gaji" name="gaji" value="" placeholder="Jutaan" required><label>Juta</label></td>
                    </tr>
                </table>
                <br>
                <center><button class="btn btn-primary" id="hitung">Hitung Bonus</button></center>
            </center>
        </div>
    </div>
    <div>
        <center><h4>Hasil Perhitungan Bonus karyawan</h4></center>
    </div>
    <div id="hasil-detail"></div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(function(){
            $("#hitung").('click',function(){
                if($("#masakerja").val() && $("#gaji").val()){
                    $.post('hitung.php', {masakerja:$("#masakerja").val(),gaji:$("#gaji").val()},function(respon){
                        $("#modal-hitung").modal('hide');
                        $("#modal-detail").html(respon);
                        $("#modal-hasil").modal('show');
                    })
                }
            })

            $("#moda-hitung").on("shown.bs.modal",function(){
                $("#masakerja").val('');
                $("#gaji").val('');
            })
        })
    </script>
</body>
</html>