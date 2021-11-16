<?php include "header.php"; ?>

    <script type="text/javascript">
        
        function cek_data() {
            if (guru_input.nip.value=="") {
                alert("NIP tidak boleh kosong");
                guru_input.nip.focus()
                return false
            }
        return true
        }
    </script>

    <div class="alert alert-info">Tambah Data Guru Baru</div><hr><br/>
        <form method="POST" class="form-horizontal" action="guru_simpan.php" name="guru_input" onSubmit="return cek_data()" enctype="multipart/form-data"> 
                <table class="table table-hover table-striped" border=0 align="center" width="75%">
                    <tr>
                        <td height="42" colspan="3" class="alert alert-warning" align="center"><h3><b>Input Data Guru</b></h></td>
                    </tr>
                    <tr>
                        <td><br><br></td>
                    </tr>
                    <input type="hidden" name="id_guru" id="id_guru">
                    <tr>
                        <td>Nama Guru</td>
                        <td></td>
                        <td><input name="nama_guru" type="text" id="nama_guru" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>NUPTK</td>
                        <td></td>
                        <td><input name="nuptk" type="number" id="nuptk" class="form-control"></td>
                    </tr>
                    <tr>
                        <td> Jenis Kelamin</td> 
                        <td></td>
                        <td>
                            <input type='radio' name='jenis_kelamin' value='Laki-laki' checked> Laki-laki  
                            <input type='radio' name='jenis_kelamin' value='Perempuan'> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir </td>
                        <td></td>
                        <td><input name="tempat_lahir" type="text" id="tempat_lahir" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td></td>
                        <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td></td>
                        <td><input style="background:#ffc0c0" name="nip" type="number" id="nip" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td></td>
                        <td><input style="background:#ffc0c0" name="password" type="password" id="password" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Status Pegawai</td> 
                        <td></td>
                        <td>
                            <select name="status_pegawai" id="status_pegawai" class="form-control">
                                <option value="">-Pilih Status-</option>
                                <option value="PNS">PNS</option>
                                <option value="Tenaga Honor Sekolah">Tenaga Honor Sekolah</option>
                                <option value="Guru Honor Sekolah">Guru Honor Sekolah</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis PTK</td>
                        <td></td>
                        <td>
                            <select name="jenis_ptk" id="jenis_ptk" class="form-control">
                                <option value="">-Pilih-</option>
                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                                <option value="Guru Mapel">Guru Mapel</option>
                                <option value="Guru BK">Guru BK</option>
                            </select>
                        </td>

                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td></td>
                        <td>
                            <select name="agama" class="form-control">
                                <option value="Islam">Islam</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td></td>
                        <td>
                            <textarea type="text" name="alamat_lengkap" id="alamat_lengkap" class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td></td>
                        <td><input type="text" name="kecamatan" id="kecamatan" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td></td>
                        <td><input type="number" name="kode_pos" id="kode_pos" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td></td>
                        <td><input type="number" name="telepon" id="telepon" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td></td>
                        <td><input type="text" name="email" id="email" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tugas Tambahan</td>
                        <td></td>
                        <td><input type="text" name="tugas_tambahan" id="tugas_tambahan" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>SK CPNS</td>
                        <td></td>
                        <td><input type="text" name="sk_cpns" id="sk_cpns" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tanggal CPNS</td>
                        <td></td>
                        <td><input type="date" name="tanggal_cpns" id="tanggal_cpns" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>SK Pengangkatan</td>
                        <td></td>
                        <td><input name="sk_pengangkatan" type="text" id="sk_pengangkatan" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>TMT Pengangkatan</td>
                        <td></td>
                        <td><input name="tmt_pengangkatan" type="date" id="tmt_pengangkatan" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Lembaga Pengangkat</td>
                        <td></td>
                        <td><input name="lembaga_pengangkat" type="text" id="lembaga_pengangkat" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Pangkat Golongan</td>
                        <td></td>
                        <td><input name="pangkat_golongan" type="text" id="pangkat_golongan" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Sumber Gaji</td> 
                        <td></td>
                        <td>
                            <select name="sumber_gaji" id="sumber_gaji" class="form-control">
                                <option value="">-Pilih-</option>
                                <option value="APBN">APBN</option>
                                <option value="APBD Kabupaten/Kota">APBD Kabupaten/Kota</option>
                                <option value="Sekolah">Sekolah</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Ibu Kandung</td>
                        <td></td>
                        <td><input name="nama_ibu_kandung" type="text" id="nama_ibu_kandung" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Status Perkawinan</td> 
                        <td></td>
                        <td>
                            <select name="status_perkawinan" id="status_perkawinan" class="form-control">
                                <option value="">-Pilih Status-</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Janda/Duda">Janda/Duda</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Suami/Istri</td>
                        <td></td>
                        <td><input name="nama_pasangan" type="text" id="nama_pasangan" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>NIP Suami/Istri</td>
                        <td></td>
                        <td><input name="nip_pasangan" type="number" id="nip_pasangan" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Pasangan</td>
                        <td></td>
                        <td><input name="pekerjaan_pasangan" type="text" id="pekerjaan_pasangan" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>TMT PNS</td>
                        <td></td>
                        <td><input name="tmt_pns" type="date" id="tmt_pns" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Sudah Lisensi Kepsek</td> 
                        <td></td>
                        <td>
                            <select name="lisensi_kepsek" id="lisensi_kepsek" class="form-control">
                                <option value="">-Pilih-</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Pernah Diklat Kepengawasan</td> 
                        <td></td>
                        <td>
                            <select name="diklat_kepengawasan" id="diklat_kepengawasan" class="form-control">
                                <option value="">-Pilih-</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Keahlian Braille</td> 
                        <td></td>
                        <td>
                            <select name="keahlian_braille" id="keahlian_braille" class="form-control">
                                <option value="">-Pilih-</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Keahlian Isyarat</td> 
                        <td></td>
                        <td>
                            <select name="keahlian_isyarat" id="keahlian_isyarat" class="form-control">
                                <option value="">-Pilih-</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>NPWP</td>
                        <td></td>
                        <td><input name="npwp" type="number" id="npwp" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Wajib Pajak</td>
                        <td></td>
                        <td><input name="nama_wajib_pajak" type="text" id="nama_wajib_pajak" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td></td>
                        <td><input name="kewarganegaraan" type="text" id="kewarganegaraan" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Bank</td>
                        <td></td>
                        <td><input name="bank" type="text" id="bank" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>No. Rekening</td>
                        <td></td>
                        <td><input name="nomor_rekening" type="number" id="nomor_rekening" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Rekening Atas Nama</td>
                        <td></td>
                        <td><input name="rekening_atas_nama" type="text" id="rekening_atas_nama" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td></td>
                        <td><input name="nik" type="number" id="nik" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td></td>
                        <td><input type="file" name="foto" id="foto" class="form-control"></td>
                    </tr>
                    <tr>
                        <td height="42" colspan="3" align="center">
                            <br>
                            <input type="submit" name="simpan" id="simpan" value="Simpan Data Guru baru" class="btn btn-primary"> &nbsp
                            <input type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary"> &nbsp
                            <input type="button" name="kembali" id="kembali" class="btn btn-primary" value="Kembali" onclick="window.location='guru_tampil.php';">
                        </td>
                    </tr>
                </table>
        </form>
<?php include "footer.php"; ?>