           <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                    <li>
                        <a href="<?php echo base_url()?>admin_controller/home">
                            <i class="material-icons">home</i>
                            <span>Ringkasan</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Detail Pengisian</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url()?>admin_controller/adm_datapribadi">
                                    <span>Data Pribadi</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Data Pekerjaan</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo base_url()?>admin_controller/adm_bekerja">Bekerja</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo base_url()?>admin_controller/adm_wirausaha">Wirausaha</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>admin_controller/adm_bw">Bekerja dan Wirausaha</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>admin_controller/adm_tidakbekerja">Tidak Bekerja</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>admin_controller/adm_opsi2">Opsi 2</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>admin_controller/adm_pekerjaanlama">Riwayat Pekerjaan</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>admin_controller/adm_kelulusan">
                                    <span>Data Kelulusan</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>admin_controller/adm_bidikmisi">
                                    <span>Data Bidikmisi</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Data Pencarian Kerja</span>
                                </a>
                                <ul class="ml-menu">
                                    
                                    <li>
                                        <a href="<?php echo base_url()?><?php echo base_url()?>admin_controller/adm_pk1">Data PKI</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?><?php echo base_url()?>admin_controller/adm_pk2">Data PKII</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?><?php echo base_url()?>admin_controller/adm_pk3">Data PKIII</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Data Kompetensi</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo base_url()?><?php echo base_url()?>admin_controller/adm_komp1">Kompetensi-1</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?><?php echo base_url()?>admin_controller/adm_komp2">Kompetensi-2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>admin_controller/adm_keaktifan">
                                    <span>Data Keaktifan</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>admin_controller/adm_fasilitas">
                                    <span>Data Fasilitas</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>admin_controller/adm_pendidikan">
                                    <span>Data Pendidikan</span>
                                </a>
                            </li>
                            <li>
                                <a href=>
                                    <span></span>
                                </a>
                            </li>
                        </ul>
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
                                DATA WIRAUSAHA
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
                                            <th>16</th>
                                            <th>16b</th>
                                            <th>16b1</th>
                                            <th>16b1BU</th>
                                            <th>16b1SBU</th>
                                            <th>16b2</th>
                                            <th>16b3</th>
                                            <th>16b4</th>
                                            <th>16b4ket</th>
                                            <th>16b5a</th>
                                            <th>16b5b</th>
                                            <th>16b5c</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>16</th>
                                            <th>16b</th>
                                            <th>16b1</th>
                                            <th>16b1BU</th>
                                            <th>16b1SBU</th>
                                            <th>16b2</th>
                                            <th>16b3</th>
                                            <th>16b4</th>
                                            <th>16b4ket</th>
                                            <th>16b5a</th>
                                            <th>16b5b</th>
                                            <th>16b5c</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($bekerja as $b) { ?>
                                        <tr>
                                            <td><?php echo $b['nrp'] ?></td>
                                            <td><?php echo $b['nama'] ?></td>
                                            <td><?php echo $b['16']?> </td>
                                            <td><?php echo $b['16b'] ?></td>
                                            <td><?php echo $b['16b1BU'] ?></td>
                                            <td><?php echo $b['16b1SBU'] ?></td>
                                            <td><?php echo $b['16b2']?> </td>
                                            <td><?php echo $b['16b3'] ?></td>
                                            <td><?php echo $b['16b4'] ?></td>
                                            <td><?php echo $b['16b4ket'] ?></td>
                                            <td><?php echo $b['16b5a']?> </td>
                                            <td><?php echo $b['16b5b'] ?></td>
                                            <td><?php echo $b['16b5c'] ?></td>
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