<?php include "header.php"; ?>
  <?php
    include "../config/koneksi.php";

    $query = mysql_query("SELECT * FROM tbl_guru where id_guru='$_GET[id_guru]'");
    $qry = mysql_fetch_array($query);

    echo "
        <div class='alert alert-info'>Edit Data Guru</div><hr><br>
            <form method=post action=guru_update.php>
                <input type='hidden' name='id_guru' id='id_guru' value='$qry[id_guru]'>
                <table class='table table-hover table-striped' border=0 align=center width=75%>
                    <tr>
                        <td height=42 colspan=3 class='alert alert-warning' align=center><h3><b>Data Guru ($qry[nama_guru])</b></h></td>
                    </tr>
                    <tr>
                        <td><br><br></td>
                    </tr>
                    <tr>
                        <td>Nama Guru</td>
                        <td></td>
                        <td><input name=nama_guru type=text id=nama_guru class=form-control value='$qry[nama_guru]'></td>
                    </tr>
                    <tr>
                        <td>NUPTK</td>
                        <td></td>
                        <td><input name=nuptk type=number id=nuptk class=form-control value='$qry[nuptk]'></td>
                    </tr>
                    <tr>
                        <td> Jenis Kelamin</td> 
                        <td></td>
                        <td>";
                            if ($qry[jenis_kelamin]=='Laki-laki'){
                                echo "<input type='radio' name='jenis_kelamin' class='required' value='Laki-laki' checked> Laki-laki  
                                      <input type='radio' name='jenis_kelamin' class='required' value='Perempuan'> Perempuan ";
                            }else{
                                echo "<input type='radio' name='jenis_kelamin' class='required' value='Laki-laki'> Laki-laki  
                                      <input type='radio' name='jenis_kelamin' class='required' value='Perempuan' checked> Perempuan ";
                            }
                echo "  </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir </td>
                        <td></td>
                        <td><input name=tempat_lahir type=text id=tempat_lahir class=form-control value='$qry[tempat_lahir]'></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td></td>
                        <td><input type=date name=tanggal_lahir id=tanggal_lahir class=form-control value='$qry[tanggal_lahir]'></td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td></td>
                        <td><input style=background:#ffc0c0 name=nip type=number id=nip class=form-control value='$qry[nip]'></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td></td>
                        <td><input style=background:#ffc0c0 name=password type=password id=password class=form-control value='$qry[password]'></td>
                    </tr>
                    <tr>
                        <td>Status Pegawai</td> 
                        <td></td>
                        <td>
                            <input name=status_pegawai type=status_pegawai id=status_pegawai class=form-control value='$qry[status_pegawai]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis PTK</td>
                        <td></td>
                        <td><input type=text name=jenis_ptk id=jenis_ptk class=form-control value='$qry[jenis_ptk]'></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td></td>
                        <td>
                            <input name=agama type=agama id=agama class=form-control value='$qry[agama]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td></td>
                        <td>
                            <textarea type=text name=alamat_lengkap id=alamat_lengkap class=form-control>$qry[alamat_lengkap]</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td></td>
                        <td><input type=text name=kecamatan id=kecamatan class=form-control value='$qry[kecamatan]'></td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td></td>
                        <td><input type=number name=kode_pos id=kode_pos class=form-control value='$qry[kode_pos]'></td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td></td>
                        <td><input type=number name=telepon id=telepon class=form-control value='$qry[telepon]'></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td></td>
                        <td><input type=text name=email id=email class=form-control value='$qry[email]'></td>
                    </tr>
                    <tr>
                        <td>Tugas Tambahan</td>
                        <td></td>
                        <td><input type=text name=tugas_tambahan id=tugas_tambahan class=form-control value='$qry[tugas_tambahan]'></td>
                    </tr>
                    <tr>
                        <td>SK CPNS</td>
                        <td></td>
                        <td><input type=text name=sk_cpns id=sk_cpns class=form-control value='$qry[sk_cpns]'></td>
                    </tr>
                    <tr>
                        <td>Tanggal CPNS</td>
                        <td></td>
                        <td><input type=date name=tanggal_cpns id=tanggal_cpns class=form-control value='$qry[tanggal_cpns]'></td>
                    </tr>
                    <tr>
                        <td>SK Pengangkatan</td>
                        <td></td>
                        <td><input name=sk_pengangkatan type=text id=sk_pengangkatan class=form-control value='$qry[sk_pengangkatan]'>
                        </td>
                    </tr>
                    <tr>
                        <td>TMT Pengangkatan</td>
                        <td></td>
                        <td><input name=tmt_pengangkatan type=date id=tmt_pengangkatan class=form-control value='$qry[tmt_pengangkatan]'></td>
                    </tr>
                    <tr>
                        <td>Lembaga Pengangkat</td>
                        <td></td>
                        <td><input name=lembaga_pengangkat type=text id=lembaga_pengangkat class=form-control value='$qry[lembaga_pengangkat]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Pangkat Golongan</td>
                        <td></td>
                        <td><input name=pangkat_golongan type=text id=pangkat_golongan class=form-control value='$qry[pangkat_golongan]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Sumber Gaji</td> 
                        <td></td>
                        <td>
                            <input name=sumber_gaji type=sumber_gaji id=sumber_gaji class=form-control value='$qry[sumber_gaji]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Ibu Kandung</td>
                        <td></td>
                        <td><input name=nama_ibu_kandung type=text id=nama_ibu_kandung class=form-control value='$qry[nama_ibu_kandung]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Status Perkawinan</td> 
                        <td></td>
                        <td>
                            <input name=status_perkawinan type=status_perkawinan id=status_perkawinan class=form-control value='$qry[status_perkawinan]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Suami/Istri</td>
                        <td></td>
                        <td><input name=nama_pasangan type=text id=nama_pasangan class=form-control value='$qry[nama_pasangan]'>
                        </td>
                    </tr>
                    <tr>
                        <td>NIP Suami/Istri</td>
                        <td></td>
                        <td><input name=nip_pasangan type=number id=nip_pasangan class=form-control value='$qry[nip_pasangan]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Pasangan</td>
                        <td></td>
                        <td><input name=pekerjaan_pasangan type=text id=pekerjaan_pasangan class=form-control value='$qry[pekerjaan_pasangan]'>
                        </td>
                    </tr>
                    <tr>
                        <td>TMT PNS</td>
                        <td></td>
                        <td><input name=tmt_pns type=date id=tmt_pns class=form-control value='$qry[tmt_pns]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Sudah Lisensi Kepsek</td> 
                        <td></td>
                        <td>
                            <input name=lisensi_kepsek type=lisensi_kepsek id=lisensi_kepsek class=form-control value='$qry[lisensi_kepsek]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Pernah Diklat Kepengawasan</td> 
                        <td></td>
                        <td>
                            <input name=diklat_kepengawasan type=diklat_kepengawasan id=diklat_kepengawasan class=form-control value='$qry[diklat_kepengawasan]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Keahlian Braille</td> 
                        <td></td>
                        <td>
                            <input name=keahlian_braille type=keahlian_braille id=keahlian_braille class=form-control value='$qry[keahlian_braille]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Keahlian Isyarat</td> 
                        <td></td>
                        <td>
                            <input name=keahlian_isyarat type=keahlian_isyarat id=keahlian_isyarat class=form-control value='$qry[keahlian_isyarat]'>
                        </td>
                    </tr>
                    <tr>
                        <td>NPWP</td>
                        <td></td>
                        <td><input name=npwp type=number id=npwp class=form-control value='$qry[npwp]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Wajib Pajak</td>
                        <td></td>
                        <td><input name=nama_wajib_pajak type=text id=nama_wajib_pajak class=form-control value='$qry[nama_wajib_pajak]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td></td>
                        <td><input name=kewarganegaraan type=text id=kewarganegaraan class=form-control value='$qry[kewarganegaraan]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Bank</td>
                        <td></td>
                        <td><input name=bank type=text id=bank class=form-control value='$qry[bank]'>
                        </td>
                    </tr>
                    <tr>
                        <td>No. Rekening</td>
                        <td></td>
                        <td><input name=nomor_rekening type=number id=nomor_rekening class=form-control value='$qry[nomor_rekening]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Rekening Atas Nama</td>
                        <td></td>
                        <td><input name=rekening_atas_nama type=text id=rekening_atas_nama class=form-control value='$qry[rekening_atas_nama]'>
                        </td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td></td>
                        <td><input name=nik type=number id=nik class=form-control value='$qry[nik]'>
                        </td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td></td>
                        <td>
                            <img src='../guru/foto_guru/$qry[foto]' height=150><br><br>
                            <input type=file name=foto id=foto class='form-control'>
                        </td>
                    </tr>
                </table>
            <br><br>
        <center>
          <input type=submit value=Update id=update name=update class='btn btn-primary'>
          <input type=button value=Kembali class='btn btn-primary' onclick=self.history.back()>
        </center>
      </form>
      ";
  ?>
<?php include "footer.php"; ?>