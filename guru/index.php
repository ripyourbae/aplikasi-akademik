<?php include "header.php"; ?>

    <div style='padding:1% 6% 0 5%;' class='row-fluid'>
        <div class='col-lg-12 text-left'>
            <div class='panel panel-default'>
                <div class='panel-body'>

                <?php 
                    include "../config/koneksi.php";

                    $sql=mysql_query("SELECT * FROM tbl_halaman WHERE id_halaman='1'");
                    $r=mysql_fetch_array($sql);
                        echo "<div class='alert alert-info'>$r[judul]</div><hr>
                        <p>$r[detail]</p>";
                ?>

                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>