           <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                    <li class="active">
                        <a href="<?php echo base_url()?>admin_controller/home">
                            <i class="material-icons">home</i>
                            <span>Ringkasan</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">Tracer Study ITS</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                RINGKASAN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>Opsi</th>
                                            <th>Bekerja</th>
                                            <th>Wirausaha</th>
                                            <th>Opsi2</th>
                                            <th>PekerjaanLama</th>
                                            <th>Kelulusan</th>
                                            <th>Opsi3</th>
                                            <th>Bidikmisi1</th>
                                            <th>Bidikmisi2</th>
                                            <th>Bidikmisi3</th>
                                            <th>Kompetensi</th>
                                            <th>Manfaat</th>
                                            <th>Keaktifan</th>
                                            <th>Kesehatan</th>
                                            <th>Pendidikan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>Opsi</th>
                                            <th>Bekerja</th>
                                            <th>Wirausaha</th>
                                            <th>Opsi2</th>
                                            <th>PekerjaanLama</th>
                                            <th>Kelulusan</th>
                                            <th>Opsi3</th>
                                            <th>Bidikmisi1</th>
                                            <th>Bidikmisi2</th>
                                            <th>Bidikmisi3</th>
                                            <th>Kompetensi</th>
                                            <th>Manfaat</th>
                                            <th>Keaktifan</th>
                                            <th>Kesehatan</th>
                                            <th>Pendidikan</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($flag as $f) { ?>
                                        <tr>
                                            <td><?php echo $f['nrp'] ?></td>
                                            <td><?php echo $f['nama'] ?></td>
                                            <td><?php if($f['opsi'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['bekerja'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['wirausaha'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['opsi2'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['pekerjaansebelum'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['kelulusan'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['opsi3'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['bidikmisi1'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['bidikmisi2'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['bidikmisi3'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['kompetensi'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['manfaat'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['keaktifan'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['kesehatan'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                            <td><?php if($f['pendidikan'] == 1){
                                                    echo "&#10004";
                                                } else{
                                                    echo "&#10006";
                                                } ?>       
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>