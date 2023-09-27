<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
            <div class="row justify-content-center my-3">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <?= $title; ?>
                        </div>
                        <div class="card-body">
                            
                            
                            <form role="form" action="<?php echo base_url(); ?>/feedback/insert" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <div class="row">   
                                    <div class="col">       
                                    <select class="form-control" name="nik" required="required">
                                        <option disabled selected><-- Pilih NIK Anda --></option>
                                        <?php 
                                            foreach ($dataku->result() as $tabel) {
                                                echo "<option value='.$tabel->nik.'>".$tabel->nik." || ".$tabel->nama_karyawan." || ".$tabel->jenis_kelamin." || ".$tabel->alamat." || ".$tabel->no_telepon. "</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Untuk / To</label>
                                    <select name="untuk" class="form-control" required="required">
                                        <option disabled selected><-- Ditujukan Untuk Siapa ? --></option>
                                        <option>ARD</option>
                                        <option>GA</option>
                                        <option>IT</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kritik/Saran</label>
                                    <textarea required="required" placeholder="Silahkan Berkritik/Saran" name="kritik_saran" rows="3" class="form-control"></textarea>
                                </div>
                                <button onclick="return confirm('Apakah Anda Ingin Save Data Ini ?');" type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>