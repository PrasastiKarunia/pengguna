<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>KUISIONER KEPUASAN PENGGUNA LULUSAN ITS</h2>
        </div>
        <!-- ALERT FUNCTION -->
        <?php 
        if ($alert == "true") {
            echo 
            "<div class='alert alert-info' id='alert' style='display: none;'>
                <strong>Perhatian,</strong> email yang Anda masukkan sudah terdaftar di database kami.
            </div>";
        }
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#alert").fadeIn(1500).delay(3000).fadeOut(500);
            });
        </script>
        <!-- END ALERT FUNCTION -->
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%">

                        </div>
                    </div>

                    <!-- BREADCRUMB -->
                    <ol class="breadcrumb breadcrumb-col-cyan">
                        <li class="active" style="color: #013880;">Informasi Personal</li>
                    </ol>
                    <!-- END BREADCRUMB -->
                    <div class="header">
                        <h2>INFORMASI PERSONAL</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="POST" action="<?php echo base_url() . '2ndform' ?>">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Nama Lengkap</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Posisi/Jabatan</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="posisi" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(document).on("input", ".ipk", function() {
                                    this.value = this.value.replace(/\D/g,',');
                                });

                                $(document).on("input", ".numeric", function() {
                                    this.value = this.value.replace(/\D/g,'')
                                });
                            </script>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Nomor Telepon</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control numeric" name="no_telp" inputmode="numeric" required placeholder=" Ex: 0821xxxxxx" maxlength="13">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Alamat Email</label>
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email" required placeholder="Ex: xxx@gmail.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button style="border: 0px; background-color: white;" id="nope" ></button>
                            <button class="btn btn-primary waves-effect" style="float: right;" type="submit">NEXT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>