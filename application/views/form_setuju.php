<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>KUISIONER KEPUASAN PENGGUNA LULUSAN ITS</h2>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">

                        </div>
                    </div>
                    <!-- BREADCRUMB -->
                        <ol class="breadcrumb breadcrumb-col-cyan">
                            <li class="active">Persetujuan</li>
                        </ol>
                        <!-- END BREADCRUMB -->
                    <div class="header">
                        <h2>Persetujuan</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="POST" action="<?php echo base_url() . '5thform' ?>">
                            <div class="form-group">
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="setuju" id="bersedia" class="chk-col-blue" value="Ya" required />
                                    <label for="bersedia">Dengan ini saya menyatakan bahwa semua data yang saya isi adakah BENAR dan SAH serta dapat saya pertanggungjawabkan kedepannya.</label>
                                    <small style="display: none; color: red;" id="warning">Data masih belum lengkap!</small>
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
<script>
    $(function(){
        $("[name='4a[]']").click(function(){
            var x = $(this).val();
            if (document.getElementById("4a9").checked) {
                 $('input[name="4aket"]').prop('readonly', false);
                 $('input[name="4aket"]').prop('required', true);
            } else {
                $('input[name="4aket"]').prop('readonly', true);
                $('input[name="4aket"]').prop('required', false);
                $('input[name="4aket"]').prop('value', '');
            }
        })
    })
</script>