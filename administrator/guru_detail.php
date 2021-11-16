<?php include "header.php"; ?>
  <?php
    include "../config/koneksi.php";

    $query = mysql_query("SELECT * FROM tbl_guru WHERE
      id_guru = '$_GET[id_guru]'");
    $qry = mysql_fetch_array($query);

    echo "
      <div class=table-responsive>
            <h4 class='alert alert-warning'>Data Guru <u>$qry[nama_guru]</u></h4><hr><br>
                <center>
                    <img src='../guru/foto_guru/$qry[foto]' height=150><br><br>
                </center>
                <table class='table table-hover table-striped' align=center>
                    <tr>
                        <td>Nama Guru</td>
                        <td>:</td>
                        <td>$qry[nama_guru]</td>
                    </tr>
                    <tr>
                        <td>NUPTK</td>
                        <td>:</td>
                        <td>$qry[nuptk]</td>
                    </tr>
                    <tr>
                        <td> Jenis Kelamin</td> 
                        <td>:</td>
                        <td>$qry[jenis_kelamin]</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>$qry[tempat_lahir]</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>$qry[tanggal_lahir]</td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td>$qry[nip]</td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>$qry[password]</td>
                    </tr>
                    <tr>
                        <td>Status Pegawai</td> 
                        <td>:</td>
                        <td>$qry[status_pegawai]</td>
                    </tr>
                    <tr>
                        <td>Jenis PTK</td>
                        <td>:</td>
                        <td>$qry[jenis_ptk]</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>$qry[agama]</td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>$qry[alamat_lengkap]</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td>$qry[kecamatan]</td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td>:</td>
                        <td>$qry[kode_pos]</td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td>:</td>
                        <td>$qry[telepon]</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>$qry[email]</td>
                    </tr>
                    <tr>
                        <td>Tugas Tambahan</td>
                        <td>:</td>
                        <td>$qry[tugas_tambahan]</td>
                    </tr>
                    <tr>
                        <td>SK CPNS</td>
                        <td>:</td>
                        <td>$qry[sk_cpns]</td>
                    </tr>
                    <tr>
                        <td>Tanggal CPNS</td>
                        <td>:</td>
                        <td>$qry[tanggal_cpns]</td>
                    </tr>
                    <tr>
                        <td>SK Pengangkatan</td>
                        <td>:</td>
                        <td>$qry[sk_pengangkatan]</td>
                    </tr>
                    <tr>
                        <td>TMT Pengangkatan</td>
                        <td>:</td>
                        <td>$qry[tmt_pengangkatan]</td>
                    </tr>
                    <tr>
                        <td>Lembaga Pengangkat</td>
                        <td>:</td>
                        <td>$qry[lembaga_pengangkat]</td>
                    </tr>
                    <tr>
                        <td>Pangkat Golongan</td>
                        <td>:</td>
                        <td>$qry[pangkat_golongan]</td>
                    </tr>
                    <tr>
                        <td>Sumber Gaji</td> 
                        <td>:</td>
                        <td>$qry[sumber_gaji]</td>
                    </tr>
                    <tr>
                        <td>Nama Ibu Kandung</td>
                        <td>:</td>
                        <td>$qry[nama_ibu_kandung]</td>
                    </tr>
                    <tr>
                        <td>Status Perkawinan</td> 
                        <td>:</td>
                        <td>$qry[status_perkawinan]</td>
                    </tr>
                    <tr>
                        <td>Nama Suami/Istri</td>
                        <td>:</td>
                        <td>$qry[nama_pasangan]</td>
                    </tr>
                    <tr>
                        <td>NIP Suami/Istri</td>
                        <td>:</td>
                        <td>$qry[nip_pasangan]</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Pasangan</td>
                        <td>:</td>
                        <td>$qry[pekerjaan_pasangan]</td>
                    </tr>
                    <tr>
                        <td>TMT PNS</td>
                        <td>:</td>
                        <td>$qry[tmt_pns]</td>
                    </tr>
                    <tr>
                        <td>Sudah Lisensi Kepsek</td> 
                        <td>:</td>
                        <td>$qry[lisensi_kepsek]</td>
                    </tr>
                    <tr>
                        <td>Pernah Diklat Kepengawasan</td> 
                        <td>:</td>
                        <td>$qry[diklat_kepengawasan]</td>
                    </tr>
                    <tr>
                        <td>Keahlian Braille</td> 
                        <td>:</td>
                        <td>$qry[keahlian_braille]</td>
                    </tr>
                    <tr>
                        <td>Keahlian Isyarat</td> 
                        <td>:</td>
                        <td>$qry[keahlian_isyarat]</td>
                    </tr>
                    <tr>
                        <td>NPWP</td>
                        <td>:</td>
                        <td>$qry[npwp]</td>
                    </tr>
                    <tr>
                        <td>Nama Wajib Pajak</td>
                        <td>:</td>
                        <td>$qry[nama_wajib_pajak]</td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>:</td>
                        <td>$qry[kewarganegaraan]</td>
                    </tr>
                    <tr>
                        <td>Bank</td>
                        <td>:</td>
                        <td>$qry[bank]</td>
                    </tr>
                    <tr>
                        <td>No. Rekening</td>
                        <td>:</td>
                        <td>$qry[nomor_rekening]</td>
                    </tr>
                    <tr>
                        <td>Rekening Atas Nama</td>
                        <td>:</td>
                        <td>$qry[rekening_atas_nama]</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>$qry[nik]</td>
                    </tr>
                    <tr>
                        <td colspan=3 align=center>
                        <br>
                            <input type=button value='Kembali' onclick=self.history.back() class='btn btn-primary'>
                        </td>
                    </tr>
                </table>
            </div>";
    ?>
<?php include "footer.php"; ?>