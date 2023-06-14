<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pemodelan Sistem </title>
  </head>
  <body>
    <nav >
      <div >
        <center><h4>Penerapan Logika Fuzzy Tsukamoto </h4></center>
      </div>
    </nav>

      <div >
      <center><h4>Permodelan dan Simulasi</h4>
        <h4>" Sistem Penunjang Keputusan Pemberian Bonus Kerja Untuk Karyawan "</h4> 
        <h4>" Nama Mahasiswa - NIM - Kelas "</h4> </center>
        <hr>
      </div>
      <div">
        <center><h4>Terdapat  6 (Enam) Rule yang digunakan</h4></center>
        <hr>
        <center><div >
          <div >
            <b>Rule 1 (R1)</b> => Jika Masa Kerja <b>Baru</b>  Dan Gaji <b>Sedikit</b> Maka Bonus <b>Sedikit</b>
          </div>
          <div >
            <b>Rule 2 (R2)</b> => Jika Masa Kerja <b>Baru</b>  Dan Gaji <b>Banyak</b> Maka Bonus <b>Sedikit</b>
          </div>
          <div >
            <b>Rule 3 (R3)</b> =>  Jika Masa Kerja <b>Sedang</b>  Dan Gaji <b>Sedikit</b>  Maka Bonus <b>Sedikit</b>
          </div>
          <div >
            <b>Rule 4 (R4)</b> =>  Jika Masa Kerja <b>Sedang</b>  Dan Gaji <b>Banyak</b>  Maka Bonus <b>Banyak</b>
          </div>
          <div >
            <b>Rule 5 (R5)</b> =>  Jika Masa Kerja <b>Lama</b>  Dan Gaji <b>Sedikit</b>  Maka Bonus <b>Banyak</b>
          </div>
          <div >
            <b>Rule 6 (R6)</b> =>  Jika Masa Kerja <b>Lama</b>  Dan Gaji <b>Banyak</b>  Maka Bonus <b>Banyak</b>
          </div>
        </div>
      </div></center>
      <hr>
<!-- Modal -->
            <div >
                <center><h4 >Uji Coba Logika Fuzzy Menentukan Bonus Karyawan</h4></center>
            </div>
            <div >
                  <div > <center>
                  <table >
                    <tr>
                        <td>Masa Kerja</td>
                        <td><input id="masakerja" required type="number" placeholder="Tahunan" name="masakerja" value="" > <label>Tahun</label></td>
                    </tr>
                    <tr>
                        <td><label>Gaji Karyawan </label></td>
                        <td><input id="gaji"  type="text" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" required data-type="currency" name="gaji" value="" placeholder="Jutaan" > <label>Juta</label></td>
                    </tr>
                  </table>
                     <br/>
                      <center>
                          <button class="btn btn-primary" id="hitung">Hitung Bonus</button>
                      </center>
                      </center>
                  </div>
              </div>
            <div >
            <center><h4 >Hasil Perhitungan Bonus Karyawan</h4></center>
            </div>
            <div  id="hasil-detail"> 
            </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(function(){
            $("#hitung").on('click', function(){
              if($("#masakerja").val() && $("#gaji").val()){
                  $.post('hitung.php', {masakerja:$("#masakerja").val(), gaji:$("#gaji").val()}, function(respon){
                      $("#modal-hitung").modal('hide');
                      $("#hasil-detail").html(respon);
                      $("#modal-hasil").modal('show');
                  })
              }
            })

            $("#modal-hitung").on("shown.bs.modal", function(){
                $("#masakerja").val('');
                $("#gaji").val('');
            })
        })
    </script>
  </body>
</html>
