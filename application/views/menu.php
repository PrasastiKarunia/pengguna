<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <!-- <h2>KUISIONER ALUMNI ITS</h2> -->
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Survei Kepuasan Pengguna Lulusan ITS 
                            <small>Petunjuk pengisian kuisioner</small>
                        </h2>
                    </div>
                    <div class="body">
                        <p>Berikut ini adalah petunjuk pengisian<strong> Survei <i>Kepuasan Pengguna Lulusan</i>&nbsp;ITS</strong></p>
                        <ol>
                            <li>Disarankan pengisian <strong>Kuisioner</strong> menggunakan <strong>Komputer / Laptop</strong>.</li>
                            <li>Jika Anda menggunakan Handphone pastikan browser anda mendukung <i><strong>Javascript</strong></i> &nbsp;(Disarankan menggunakan <i><strong>Mozilla Firefox / Chrome Mobile</strong></i>)</li>
                            <li>Pastikan koneksi internet yang Anda gunakan <strong>stabil</strong>.</li>
                            <li>Isilah semua kolom dan pertanyaan dengan lengkap dan jelas.</li>
                            <li>Pastikan data yang Anda input adalah data yang <strong>sebenarnya</strong>.</li>
                        </ol>
                        <br>
                        <hr>
                            <div class="demo-checkbox">
                                <input type="checkbox" required name="yes" id="ya" class="chk-col-blue" value="1" />
                                <label for="ya">Saya telah membaca semua petunjuk dan siap untuk mengisi kuisioner</label><br>
                            </div>
                        <hr>
                        <small style="float: right;">*Jika tombol tidak keluar, ganti browser Anda, atau pastikan <i>Javascript</i> pada browser Anda telah aktif</small>
                        <br>
                        <div class="footer" style="color: white;">.</div>
                        <button style="border: 0px; background-color: white; display: none;" id="nope" ></button>
                        <a href="<?php echo base_url().'1stform' ?>"><button style="float: right; display: none;" id="siap" name="siapisi" class="btn bg-blue waves-effect">START</button></a>
                    </div>
                    <script type="text/javascript">
                        $(function(){
                            $("[name=yes]").click(function(){
                                if (document.getElementById("ya").checked) {
                                    $('#siap').show();
                                    $('#nope').show();
                                } else {
                                    $('#siap').hide();
                                    $('#nope').hide();
                                }
                            })
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>