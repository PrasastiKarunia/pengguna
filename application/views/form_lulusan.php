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
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%">

                        </div>
                    </div>
                    <!-- BREADCRUMB -->
                    <ol class="breadcrumb breadcrumb-col-cyan">
                        <li class="active">Informasi Personal</li>
                        <li class="active">Informasi Perusahaan</li>
                        <li class="active">Informasi Alumni</li>
                        <li class="active">Evaluasi Kerjasama Industri</li>
                        <li class="active">Evaluasi Magang Industri</li>
                        <li class="active" style="color: #013880;">Evaluasi Lulusan</li>
                    </ol>
                    <!-- END BREADCRUMB -->
                    <div class="header">
                        <h2>EVALUASI INDUSTRI (DUDI) TERHADAP LULUSAN ITS</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="POST" onsubmit="return fvalid(this)" action="<?php echo base_url() . '7thform' ?>">
                            <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label class="form-label">Tingkat kepentingan dan kepuasan perusahaan Anda berdasarkan kriteria kompetensi alumni ITS yang bekerja di perusahaan/institusi Anda</label>
                                        <br>
                                        <small>*Berikan penilaian tingkat kepentingan kriteria kompetensi dengan nilai 1-4, dimana 1=Tidak Penting , 2=Cukup , 3= Penting , 4=Sangat Penting</small><br>
                                        <small>*Berikan penilaian tingkat kepuasan kriteria kompetensi dengan nilai 1-4, dimana 1=Tidak Puas , 2=Cukup , 3= Puas , 4=Sangat Puas</small><br>
                                        <div class="body table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center;">NO</th>
                                                        <th style="text-align: center;">KRITERIA</th>
                                                        <th style="text-align: center;">KEPENTINGAN (A)</th>
                                                        <th style="text-align: center;">KEPUASAN (B)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th style="text-align: center;">1</th>
                                                        <th scope="row">Bahasa asing</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a1" type="radio" id="a11a" class="radio-col-blue" value="1" />
                                                            <label for="a11a">1</label>&nbsp;
                                                            <input name="a1" type="radio" id="a12a" class="radio-col-blue" value="2" />
                                                            <label for="a12a">2</label>&nbsp;
                                                            <input name="a1" type="radio" id="a13a" class="radio-col-blue" value="3" />
                                                            <label for="a13a">3</label>&nbsp;
                                                            <input name="a1" type="radio" id="a14a" class="radio-col-blue" value="4" />
                                                            <label for="a14a">4</label>&nbsp;
                                                            <input name="a1" type="radio" id="a15a" class="radio-col-blue" value="5" />
                                                            <label for="a15a">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b1" type="radio" id="b11b" class="radio-col-blue" value="1" />
                                                            <label for="b11b">1</label>&nbsp;
                                                            <input name="b1" type="radio" id="b12b" class="radio-col-blue" value="2" />
                                                            <label for="b12b">2</label>&nbsp;
                                                            <input name="b1" type="radio" id="b13b" class="radio-col-blue" value="3" />
                                                            <label for="b13b">3</label>&nbsp;
                                                            <input name="b1" type="radio" id="b14b" class="radio-col-blue" value="4" />
                                                            <label for="b14b">4</label>&nbsp;
                                                            <input name="b1" type="radio" id="b15b" class="radio-col-blue" value="5" />
                                                            <label for="b15b">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">2</th>
                                                        <th scope="row">Kemampuan teknis</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a2" type="radio" id="a21a" class="radio-col-blue" value="1" />
                                                            <label for="a21a">1</label>&nbsp;
                                                            <input name="a2" type="radio" id="a22a" class="radio-col-blue" value="2" />
                                                            <label for="a22a">2</label>&nbsp;
                                                            <input name="a2" type="radio" id="a23a" class="radio-col-blue" value="3" />
                                                            <label for="a23a">3</label>&nbsp;
                                                            <input name="a2" type="radio" id="a24a" class="radio-col-blue" value="4" />
                                                            <label for="a24a">4</label>&nbsp;
                                                            <input name="a2" type="radio" id="a25a" class="radio-col-blue" value="5" />
                                                            <label for="a25a">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b2" type="radio" id="b21b" class="radio-col-blue" value="1" />
                                                            <label for="b21b">1</label>&nbsp;
                                                            <input name="b2" type="radio" id="b22b" class="radio-col-blue" value="2" />
                                                            <label for="b22b">2</label>&nbsp;
                                                            <input name="b2" type="radio" id="b23b" class="radio-col-blue" value="3" />
                                                            <label for="b23b">3</label>&nbsp;
                                                            <input name="b2" type="radio" id="b24b" class="radio-col-blue" value="4" />
                                                            <label for="b24b">4</label>&nbsp;
                                                            <input name="b2" type="radio" id="b25b" class="radio-col-blue" value="5" />
                                                            <label for="b25b">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">3</th>
                                                        <th scope="row">Etika</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a3" type="radio" id="a31" class="radio-col-blue" value="1" />
                                                            <label for="a31">1</label>&nbsp;
                                                            <input name="a3" type="radio" id="a32" class="radio-col-blue" value="2" />
                                                            <label for="a32">2</label>&nbsp;
                                                            <input name="a3" type="radio" id="a33" class="radio-col-blue" value="3" />
                                                            <label for="a33">3</label>&nbsp;
                                                            <input name="a3" type="radio" id="a34" class="radio-col-blue" value="4" />
                                                            <label for="a34">4</label>&nbsp;
                                                            <input name="a3" type="radio" id="a35" class="radio-col-blue" value="5" />
                                                            <label for="a35">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b3" type="radio" id="b31" class="radio-col-blue" value="1" />
                                                            <label for="b31">1</label>&nbsp;
                                                            <input name="b3" type="radio" id="b32" class="radio-col-blue" value="2" />
                                                            <label for="b32">2</label>&nbsp;
                                                            <input name="b3" type="radio" id="b33" class="radio-col-blue" value="3" />
                                                            <label for="b33">3</label>&nbsp;
                                                            <input name="b3" type="radio" id="b34" class="radio-col-blue" value="4" />
                                                            <label for="b34">4</label>&nbsp;
                                                            <input name="b3" type="radio" id="b35" class="radio-col-blue" value="5" />
                                                            <label for="b35">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">4</th>
                                                        <th scope="row">Kompetensi</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a4" type="radio" id="a41" class="radio-col-blue" value="1" />
                                                            <label for="a41">1</label>&nbsp;
                                                            <input name="a4" type="radio" id="a42" class="radio-col-blue" value="2" />
                                                            <label for="a42">2</label>&nbsp;
                                                            <input name="a4" type="radio" id="a43" class="radio-col-blue" value="3" />
                                                            <label for="a43">3</label>&nbsp;
                                                            <input name="a4" type="radio" id="a44" class="radio-col-blue" value="4" />
                                                            <label for="a44">4</label>&nbsp;
                                                            <input name="a4" type="radio" id="a45" class="radio-col-blue" value="5" />
                                                            <label for="a45">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b4" type="radio" id="b41" class="radio-col-blue" value="1" />
                                                            <label for="b41">1</label>&nbsp;
                                                            <input name="b4" type="radio" id="b42" class="radio-col-blue" value="2" />
                                                            <label for="b42">2</label>&nbsp;
                                                            <input name="b4" type="radio" id="b43" class="radio-col-blue" value="3" />
                                                            <label for="b43">3</label>&nbsp;
                                                            <input name="b4" type="radio" id="b44" class="radio-col-blue" value="4" />
                                                            <label for="b44">4</label>&nbsp;
                                                            <input name="b4" type="radio" id="b45" class="radio-col-blue" value="5" />
                                                            <label for="b45">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">5</th>
                                                        <th scope="row">Penggunaan IT/Teknologi Informasi</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a5" type="radio" id="a51" class="radio-col-blue" value="1" />
                                                            <label for="a51">1</label>&nbsp;
                                                            <input name="a5" type="radio" id="a52" class="radio-col-blue" value="2" />
                                                            <label for="a52">2</label>&nbsp;
                                                            <input name="a5" type="radio" id="a53" class="radio-col-blue" value="3" />
                                                            <label for="a53">3</label>&nbsp;
                                                            <input name="a5" type="radio" id="a54" class="radio-col-blue" value="4" />
                                                            <label for="a54">4</label>&nbsp;
                                                            <input name="a5" type="radio" id="a55" class="radio-col-blue" value="5" />
                                                            <label for="a55">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b5" type="radio" id="b51" class="radio-col-blue" value="1" />
                                                            <label for="b51">1</label>&nbsp;
                                                            <input name="b5" type="radio" id="b52" class="radio-col-blue" value="2" />
                                                            <label for="b52">2</label>&nbsp;
                                                            <input name="b5" type="radio" id="b53" class="radio-col-blue" value="3" />
                                                            <label for="b53">3</label>&nbsp;
                                                            <input name="b5" type="radio" id="b54" class="radio-col-blue" value="4" />
                                                            <label for="b54">4</label>&nbsp;
                                                            <input name="b5" type="radio" id="b55" class="radio-col-blue" value="5" />
                                                            <label for="b55">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">6</th>
                                                        <th scope="row">Kemampuan komunikasi dan negosiasi</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a6" type="radio" id="a61" class="radio-col-blue" value="1" />
                                                            <label for="a61">1</label>&nbsp;
                                                            <input name="a6" type="radio" id="a62" class="radio-col-blue" value="2" />
                                                            <label for="a62">2</label>&nbsp;
                                                            <input name="a6" type="radio" id="a63" class="radio-col-blue" value="3" />
                                                            <label for="a63">3</label>&nbsp;
                                                            <input name="a6" type="radio" id="a64" class="radio-col-blue" value="4" />
                                                            <label for="a64">4</label>&nbsp;
                                                            <input name="a6" type="radio" id="a65" class="radio-col-blue" value="5" />
                                                            <label for="a65">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b6" type="radio" id="b61" class="radio-col-blue" value="1" />
                                                            <label for="b61">1</label>&nbsp;
                                                            <input name="b6" type="radio" id="b62" class="radio-col-blue" value="2" />
                                                            <label for="b62">2</label>&nbsp;
                                                            <input name="b6" type="radio" id="b63" class="radio-col-blue" value="3" />
                                                            <label for="b63">3</label>&nbsp;
                                                            <input name="b6" type="radio" id="b64" class="radio-col-blue" value="4" />
                                                            <label for="b64">4</label>&nbsp;
                                                            <input name="b6" type="radio" id="b65" class="radio-col-blue" value="5" />
                                                            <label for="b65">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">7</th>
                                                        <th scope="row">Kerjasama tim</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a7" type="radio" id="a71" class="radio-col-blue" value="1" />
                                                            <label for="a71">1</label>&nbsp;
                                                            <input name="a7" type="radio" id="a72" class="radio-col-blue" value="2" />
                                                            <label for="a72">2</label>&nbsp;
                                                            <input name="a7" type="radio" id="a73" class="radio-col-blue" value="3" />
                                                            <label for="a73">3</label>&nbsp;
                                                            <input name="a7" type="radio" id="a74" class="radio-col-blue" value="4" />
                                                            <label for="a74">4</label>&nbsp;
                                                            <input name="a7" type="radio" id="a75" class="radio-col-blue" value="5" />
                                                            <label for="a75">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b7" type="radio" id="b71" class="radio-col-blue" value="1" />
                                                            <label for="b71">1</label>&nbsp;
                                                            <input name="b7" type="radio" id="b72" class="radio-col-blue" value="2" />
                                                            <label for="b72">2</label>&nbsp;
                                                            <input name="b7" type="radio" id="b73" class="radio-col-blue" value="3" />
                                                            <label for="b73">3</label>&nbsp;
                                                            <input name="b7" type="radio" id="b74" class="radio-col-blue" value="4" />
                                                            <label for="b74">4</label>&nbsp;
                                                            <input name="b7" type="radio" id="b75" class="radio-col-blue" value="5" />
                                                            <label for="b75">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">8</th>
                                                        <th scope="row">Pengembangan diri(Kemampuan belajar hal baru)</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a8" type="radio" id="a81" class="radio-col-blue" value="1" />
                                                            <label for="a81">1</label>&nbsp;
                                                            <input name="a8" type="radio" id="a82" class="radio-col-blue" value="2" />
                                                            <label for="a82">2</label>&nbsp;
                                                            <input name="a8" type="radio" id="a83" class="radio-col-blue" value="3" />
                                                            <label for="a83">3</label>&nbsp;
                                                            <input name="a8" type="radio" id="a84" class="radio-col-blue" value="4" />
                                                            <label for="a84">4</label>&nbsp;
                                                            <input name="a8" type="radio" id="a85" class="radio-col-blue" value="5" />
                                                            <label for="a85">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b8" type="radio" id="b81" class="radio-col-blue" value="1" />
                                                            <label for="b81">1</label>&nbsp;
                                                            <input name="b8" type="radio" id="b82" class="radio-col-blue" value="2" />
                                                            <label for="b82">2</label>&nbsp;
                                                            <input name="b8" type="radio" id="b83" class="radio-col-blue" value="3" />
                                                            <label for="b83">3</label>&nbsp;
                                                            <input name="b8" type="radio" id="b84" class="radio-col-blue" value="4" />
                                                            <label for="b84">4</label>&nbsp;
                                                            <input name="b8" type="radio" id="b85" class="radio-col-blue" value="5" />
                                                            <label for="b85">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">9</th>
                                                        <th scope="row">Kecerdasan</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a9" type="radio" id="a91" class="radio-col-blue" value="1" />
                                                            <label for="a91">1</label>&nbsp;
                                                            <input name="a9" type="radio" id="a92" class="radio-col-blue" value="2" />
                                                            <label for="a92">2</label>&nbsp;
                                                            <input name="a9" type="radio" id="a93" class="radio-col-blue" value="3" />
                                                            <label for="a93">3</label>&nbsp;
                                                            <input name="a9" type="radio" id="a94" class="radio-col-blue" value="4" />
                                                            <label for="a94">4</label>&nbsp;
                                                            <input name="a9" type="radio" id="a95" class="radio-col-blue" value="5" />
                                                            <label for="a95">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b9" type="radio" id="b91" class="radio-col-blue" value="1" />
                                                            <label for="b91">1</label>&nbsp;
                                                            <input name="b9" type="radio" id="b92" class="radio-col-blue" value="2" />
                                                            <label for="b92">2</label>&nbsp;
                                                            <input name="b9" type="radio" id="b93" class="radio-col-blue" value="3" />
                                                            <label for="b93">3</label>&nbsp;
                                                            <input name="b9" type="radio" id="b94" class="radio-col-blue" value="4" />
                                                            <label for="b94">4</label>&nbsp;
                                                            <input name="b9" type="radio" id="b95" class="radio-col-blue" value="5" />
                                                            <label for="b95">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">10</th>
                                                        <th scope="row">Amanah/Integritas</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a10" type="radio" id="a101" class="radio-col-blue" value="1" />
                                                            <label for="a101">1</label>&nbsp;
                                                            <input name="a10" type="radio" id="a102" class="radio-col-blue" value="2" />
                                                            <label for="a102">2</label>&nbsp;
                                                            <input name="a10" type="radio" id="a103" class="radio-col-blue" value="3" />
                                                            <label for="a103">3</label>&nbsp;
                                                            <input name="a10" type="radio" id="a104" class="radio-col-blue" value="4" />
                                                            <label for="a104">4</label>&nbsp;
                                                            <input name="a10" type="radio" id="a105" class="radio-col-blue" value="5" />
                                                            <label for="a105">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b10" type="radio" id="b101" class="radio-col-blue" value="1" />
                                                            <label for="b101">1</label>&nbsp;
                                                            <input name="b10" type="radio" id="b102" class="radio-col-blue" value="2" />
                                                            <label for="b102">2</label>&nbsp;
                                                            <input name="b10" type="radio" id="b103" class="radio-col-blue" value="3" />
                                                            <label for="b103">3</label>&nbsp;
                                                            <input name="b10" type="radio" id="b104" class="radio-col-blue" value="4" />
                                                            <label for="b104">4</label>&nbsp;
                                                            <input name="b10" type="radio" id="b105" class="radio-col-blue" value="5" />
                                                            <label for="b105">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">11</th>
                                                        <th scope="row">Kreativitas</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a11" type="radio" id="a111" class="radio-col-blue" value="1" />
                                                            <label for="a111">1</label>&nbsp;
                                                            <input name="a11" type="radio" id="a112" class="radio-col-blue" value="2" />
                                                            <label for="a112">2</label>&nbsp;
                                                            <input name="a11" type="radio" id="a113" class="radio-col-blue" value="3" />
                                                            <label for="a113">3</label>&nbsp;
                                                            <input name="a11" type="radio" id="a114" class="radio-col-blue" value="4" />
                                                            <label for="a114">4</label>&nbsp;
                                                            <input name="a11" type="radio" id="a115" class="radio-col-blue" value="5" />
                                                            <label for="a115">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b11" type="radio" id="b111" class="radio-col-blue" value="1" />
                                                            <label for="b111">1</label>&nbsp;
                                                            <input name="b11" type="radio" id="b112" class="radio-col-blue" value="2" />
                                                            <label for="b112">2</label>&nbsp;
                                                            <input name="b11" type="radio" id="b113" class="radio-col-blue" value="3" />
                                                            <label for="b113">3</label>&nbsp;
                                                            <input name="b11" type="radio" id="b114" class="radio-col-blue" value="4" />
                                                            <label for="b114">4</label>&nbsp;
                                                            <input name="b11" type="radio" id="b115" class="radio-col-blue" value="5" />
                                                            <label for="b115">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">12</th>
                                                        <th scope="row">Loyalitas</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a12" type="radio" id="a121" class="radio-col-blue" value="1" />
                                                            <label for="a121">1</label>&nbsp;
                                                            <input name="a12" type="radio" id="a122" class="radio-col-blue" value="2" />
                                                            <label for="a122">2</label>&nbsp;
                                                            <input name="a12" type="radio" id="a123" class="radio-col-blue" value="3" />
                                                            <label for="a123">3</label>&nbsp;
                                                            <input name="a12" type="radio" id="a124" class="radio-col-blue" value="4" />
                                                            <label for="a124">4</label>&nbsp;
                                                            <input name="a12" type="radio" id="a125" class="radio-col-blue" value="5" />
                                                            <label for="a125">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b12" type="radio" id="b121" class="radio-col-blue" value="1" />
                                                            <label for="b121">1</label>&nbsp;
                                                            <input name="b12" type="radio" id="b122" class="radio-col-blue" value="2" />
                                                            <label for="b122">2</label>&nbsp;
                                                            <input name="b12" type="radio" id="b123" class="radio-col-blue" value="3" />
                                                            <label for="b123">3</label>&nbsp;
                                                            <input name="b12" type="radio" id="b124" class="radio-col-blue" value="4" />
                                                            <label for="b124">4</label>&nbsp;
                                                            <input name="b12" type="radio" id="b125" class="radio-col-blue" value="5" />
                                                            <label for="b125">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">13</th>
                                                        <th scope="row">Kepemimpinan</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a13" type="radio" id="a131" class="radio-col-blue" value="1" />
                                                            <label for="a131">1</label>&nbsp;
                                                            <input name="a13" type="radio" id="a132" class="radio-col-blue" value="2" />
                                                            <label for="a132">2</label>&nbsp;
                                                            <input name="a13" type="radio" id="a133" class="radio-col-blue" value="3" />
                                                            <label for="a133">3</label>&nbsp;
                                                            <input name="a13" type="radio" id="a134" class="radio-col-blue" value="4" />
                                                            <label for="a134">4</label>&nbsp;
                                                            <input name="a13" type="radio" id="a135" class="radio-col-blue" value="5" />
                                                            <label for="a135">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b13" type="radio" id="b131" class="radio-col-blue" value="1" />
                                                            <label for="b131">1</label>&nbsp;
                                                            <input name="b13" type="radio" id="b132" class="radio-col-blue" value="2" />
                                                            <label for="b132">2</label>&nbsp;
                                                            <input name="b13" type="radio" id="b133" class="radio-col-blue" value="3" />
                                                            <label for="b133">3</label>&nbsp;
                                                            <input name="b13" type="radio" id="b134" class="radio-col-blue" value="4" />
                                                            <label for="b134">4</label>&nbsp;
                                                            <input name="b13" type="radio" id="b135" class="radio-col-blue" value="5" />
                                                            <label for="b135">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">14</th>
                                                        <th scope="row">Ketahanan kerja/Keuletan</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a14" type="radio" id="a141" class="radio-col-blue" value="1" />
                                                            <label for="a141">1</label>&nbsp;
                                                            <input name="a14" type="radio" id="a142" class="radio-col-blue" value="2" />
                                                            <label for="a142">2</label>&nbsp;
                                                            <input name="a14" type="radio" id="a143" class="radio-col-blue" value="3" />
                                                            <label for="a143">3</label>&nbsp;
                                                            <input name="a14" type="radio" id="a144" class="radio-col-blue" value="4" />
                                                            <label for="a144">4</label>&nbsp;
                                                            <input name="a14" type="radio" id="a145" class="radio-col-blue" value="5" />
                                                            <label for="a145">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b14" type="radio" id="b141" class="radio-col-blue" value="1" />
                                                            <label for="b141">1</label>&nbsp;
                                                            <input name="b14" type="radio" id="b142" class="radio-col-blue" value="2" />
                                                            <label for="b142">2</label>&nbsp;
                                                            <input name="b14" type="radio" id="b143" class="radio-col-blue" value="3" />
                                                            <label for="b143">3</label>&nbsp;
                                                            <input name="b14" type="radio" id="b144" class="radio-col-blue" value="4" />
                                                            <label for="b144">4</label>&nbsp;
                                                            <input name="b14" type="radio" id="b145" class="radio-col-blue" value="5" />
                                                            <label for="b145">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">15</th>
                                                        <th scope="row">Berpikir kritis dan problem solving</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a15" type="radio" id="a151" class="radio-col-blue" value="1" />
                                                            <label for="a151">1</label>&nbsp;
                                                            <input name="a15" type="radio" id="a152" class="radio-col-blue" value="2" />
                                                            <label for="a152">2</label>&nbsp;
                                                            <input name="a15" type="radio" id="a153" class="radio-col-blue" value="3" />
                                                            <label for="a153">3</label>&nbsp;
                                                            <input name="a15" type="radio" id="a154" class="radio-col-blue" value="4" />
                                                            <label for="a154">4</label>&nbsp;
                                                            <input name="a15" type="radio" id="a155" class="radio-col-blue" value="5" />
                                                            <label for="a155">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b15" type="radio" id="b151" class="radio-col-blue" value="1" />
                                                            <label for="b151">1</label>&nbsp;
                                                            <input name="b15" type="radio" id="b152" class="radio-col-blue" value="2" />
                                                            <label for="b152">2</label>&nbsp;
                                                            <input name="b15" type="radio" id="b153" class="radio-col-blue" value="3" />
                                                            <label for="b153">3</label>&nbsp;
                                                            <input name="b15" type="radio" id="b154" class="radio-col-blue" value="4" />
                                                            <label for="b154">4</label>&nbsp;
                                                            <input name="b15" type="radio" id="b155" class="radio-col-blue" value="5" />
                                                            <label for="b155">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">16</th>
                                                        <th scope="row">Stabilitas emosi</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a16" type="radio" id="a161" class="radio-col-blue" value="1" />
                                                            <label for="a161">1</label>&nbsp;
                                                            <input name="a16" type="radio" id="a162" class="radio-col-blue" value="2" />
                                                            <label for="a162">2</label>&nbsp;
                                                            <input name="a16" type="radio" id="a163" class="radio-col-blue" value="3" />
                                                            <label for="a163">3</label>&nbsp;
                                                            <input name="a16" type="radio" id="a164" class="radio-col-blue" value="4" />
                                                            <label for="a164">4</label>&nbsp;
                                                            <input name="a16" type="radio" id="a165" class="radio-col-blue" value="5" />
                                                            <label for="a165">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b16" type="radio" id="b161" class="radio-col-blue" value="1" />
                                                            <label for="b161">1</label>&nbsp;
                                                            <input name="b16" type="radio" id="b162" class="radio-col-blue" value="2" />
                                                            <label for="b162">2</label>&nbsp;
                                                            <input name="b16" type="radio" id="b163" class="radio-col-blue" value="3" />
                                                            <label for="b163">3</label>&nbsp;
                                                            <input name="b16" type="radio" id="b164" class="radio-col-blue" value="4" />
                                                            <label for="b164">4</label>&nbsp;
                                                            <input name="b16" type="radio" id="b165" class="radio-col-blue" value="5" />
                                                            <label for="b165">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">17</th>
                                                        <th scope="row">Kesehatan fisik</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a17" type="radio" id="a171" class="radio-col-blue" value="1" />
                                                            <label for="a171">1</label>&nbsp;
                                                            <input name="a17" type="radio" id="a172" class="radio-col-blue" value="2" />
                                                            <label for="a172">2</label>&nbsp;
                                                            <input name="a17" type="radio" id="a173" class="radio-col-blue" value="3" />
                                                            <label for="a173">3</label>&nbsp;
                                                            <input name="a17" type="radio" id="a174" class="radio-col-blue" value="4" />
                                                            <label for="a174">4</label>&nbsp;
                                                            <input name="a17" type="radio" id="a175" class="radio-col-blue" value="5" />
                                                            <label for="a175">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b17" type="radio" id="b171" class="radio-col-blue" value="1" />
                                                            <label for="b171">1</label>&nbsp;
                                                            <input name="b17" type="radio" id="b172" class="radio-col-blue" value="2" />
                                                            <label for="b172">2</label>&nbsp;
                                                            <input name="b17" type="radio" id="b173" class="radio-col-blue" value="3" />
                                                            <label for="b173">3</label>&nbsp;
                                                            <input name="b17" type="radio" id="b174" class="radio-col-blue" value="4" />
                                                            <label for="b174">4</label>&nbsp;
                                                            <input name="b17" type="radio" id="b175" class="radio-col-blue" value="5" />
                                                            <label for="b175">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">18</th>
                                                        <th scope="row">Inisiatif</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a18" type="radio" id="a181" class="radio-col-blue" value="1" />
                                                            <label for="a181">1</label>&nbsp;
                                                            <input name="a18" type="radio" id="a182" class="radio-col-blue" value="2" />
                                                            <label for="a182">2</label>&nbsp;
                                                            <input name="a18" type="radio" id="a183" class="radio-col-blue" value="3" />
                                                            <label for="a183">3</label>&nbsp;
                                                            <input name="a18" type="radio" id="a184" class="radio-col-blue" value="4" />
                                                            <label for="a184">4</label>&nbsp;
                                                            <input name="a18" type="radio" id="a185" class="radio-col-blue" value="5" />
                                                            <label for="a185">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b18" type="radio" id="b181" class="radio-col-blue" value="1" />
                                                            <label for="b181">1</label>&nbsp;
                                                            <input name="b18" type="radio" id="b182" class="radio-col-blue" value="2" />
                                                            <label for="b182">2</label>&nbsp;
                                                            <input name="b18" type="radio" id="b183" class="radio-col-blue" value="3" />
                                                            <label for="b183">3</label>&nbsp;
                                                            <input name="b18" type="radio" id="b184" class="radio-col-blue" value="4" />
                                                            <label for="b184">4</label>&nbsp;
                                                            <input name="b18" type="radio" id="b185" class="radio-col-blue" value="5" />
                                                            <label for="b185">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">19</th>
                                                        <th scope="row">Tanggung jawab</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a19" type="radio" id="a191" class="radio-col-blue" value="1" />
                                                            <label for="a191">1</label>&nbsp;
                                                            <input name="a19" type="radio" id="a192" class="radio-col-blue" value="2" />
                                                            <label for="a192">2</label>&nbsp;
                                                            <input name="a19" type="radio" id="a193" class="radio-col-blue" value="3" />
                                                            <label for="a193">3</label>&nbsp;
                                                            <input name="a19" type="radio" id="a194" class="radio-col-blue" value="4" />
                                                            <label for="a194">4</label>&nbsp;
                                                            <input name="a19" type="radio" id="a195" class="radio-col-blue" value="5" />
                                                            <label for="a195">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b19" type="radio" id="b191" class="radio-col-blue" value="1" />
                                                            <label for="b191">1</label>&nbsp;
                                                            <input name="b19" type="radio" id="b192" class="radio-col-blue" value="2" />
                                                            <label for="b192">2</label>&nbsp;
                                                            <input name="b19" type="radio" id="b193" class="radio-col-blue" value="3" />
                                                            <label for="b193">3</label>&nbsp;
                                                            <input name="b19" type="radio" id="b194" class="radio-col-blue" value="4" />
                                                            <label for="b194">4</label>&nbsp;
                                                            <input name="b19" type="radio" id="b195" class="radio-col-blue" value="5" />
                                                            <label for="b195">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">20</th>
                                                        <th scope="row">Kemampuan adaptasi</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a20" type="radio" id="a201" class="radio-col-blue" value="1" />
                                                            <label for="a201">1</label>&nbsp;
                                                            <input name="a20" type="radio" id="a202" class="radio-col-blue" value="2" />
                                                            <label for="a202">2</label>&nbsp;
                                                            <input name="a20" type="radio" id="a203" class="radio-col-blue" value="3" />
                                                            <label for="a203">3</label>&nbsp;
                                                            <input name="a20" type="radio" id="a204" class="radio-col-blue" value="4" />
                                                            <label for="a204">4</label>&nbsp;
                                                            <input name="a20" type="radio" id="a205" class="radio-col-blue" value="5" />
                                                            <label for="a205">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b20" type="radio" id="b201" class="radio-col-blue" value="1" />
                                                            <label for="b201">1</label>&nbsp;
                                                            <input name="b20" type="radio" id="b202" class="radio-col-blue" value="2" />
                                                            <label for="b202">2</label>&nbsp;
                                                            <input name="b20" type="radio" id="b203" class="radio-col-blue" value="3" />
                                                            <label for="b203">3</label>&nbsp;
                                                            <input name="b20" type="radio" id="b204" class="radio-col-blue" value="4" />
                                                            <label for="b204">4</label>&nbsp;
                                                            <input name="b20" type="radio" id="b205" class="radio-col-blue" value="5" />
                                                            <label for="b205">5</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center;">21</th>
                                                        <th scope="row">Kesiapan bekerja dimana saja</th>
                                                        <td style="text-align: center;">
                                                            <input required name="a21" type="radio" id="a211" class="radio-col-blue" value="1" />
                                                            <label for="a211">1</label>&nbsp;
                                                            <input name="a21" type="radio" id="a212" class="radio-col-blue" value="2" />
                                                            <label for="a212">2</label>&nbsp;
                                                            <input name="a21" type="radio" id="a213" class="radio-col-blue" value="3" />
                                                            <label for="a213">3</label>&nbsp;
                                                            <input name="a21" type="radio" id="a214" class="radio-col-blue" value="4" />
                                                            <label for="a214">4</label>&nbsp;
                                                            <input name="a21" type="radio" id="a215" class="radio-col-blue" value="5" />
                                                            <label for="a215">5</label>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <input required name="b21" type="radio" id="b211" class="radio-col-blue" value="1" />
                                                            <label for="b211">1</label>&nbsp;
                                                            <input name="b21" type="radio" id="b212" class="radio-col-blue" value="2" />
                                                            <label for="b212">2</label>&nbsp;
                                                            <input name="b21" type="radio" id="b213" class="radio-col-blue" value="3" />
                                                            <label for="b213">3</label>&nbsp;
                                                            <input name="b21" type="radio" id="b214" class="radio-col-blue" value="4" />
                                                            <label for="b214">4</label>&nbsp;
                                                            <input name="b21" type="radio" id="b215" class="radio-col-blue" value="5" />
                                                            <label for="b215">5</label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                            <button style="border: 0px; background-color: white;" id="nope" ></button>
                            <button class="btn btn-primary waves-effect" style="float: right;" type="submit">NEXT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
        function fvalid(form)
        {
            var a1 = check_radio(form.a1);
            var b1 = check_radio(form.b1);
            var a2 = check_radio(form.a2);
            var b2 = check_radio(form.b2);
            var a3 = check_radio(form.a3);
            var b3 = check_radio(form.b3);
            var a4 = check_radio(form.a4);
            var b4 = check_radio(form.b4);
            var a5 = check_radio(form.a5);
            var b5 = check_radio(form.b5);
            var a6 = check_radio(form.a6);
            var b6 = check_radio(form.b6);
            var a7 = check_radio(form.a7);
            var b7 = check_radio(form.b7);
            var a8 = check_radio(form.a8);
            var b8 = check_radio(form.b8);
            var a9 = check_radio(form.a9);
            var b9 = check_radio(form.b9);
            var a10 = check_radio(form.a10);
            var b10 = check_radio(form.b10);
            var a11 = check_radio(form.a11);
            var b11 = check_radio(form.b11);
            var a12 = check_radio(form.a12);
            var b12 = check_radio(form.b12);
            var a13 = check_radio(form.a13);
            var b13 = check_radio(form.b13);
            var a14 = check_radio(form.a14);
            var b14 = check_radio(form.b14);
            var a15 = check_radio(form.a15);
            var b15 = check_radio(form.b15);
            var a16 = check_radio(form.a16);
            var b16 = check_radio(form.b16);
            var a17 = check_radio(form.a17);
            var b17 = check_radio(form.b17);
            var a18 = check_radio(form.a18);
            var b18 = check_radio(form.b18);
            var a19 = check_radio(form.a19);
            var b19 = check_radio(form.b19);
            var a20 = check_radio(form.a20);
            var b20 = check_radio(form.b20);
            var a21 = check_radio(form.a21);
            var b21 = check_radio(form.b21);

            if (a1 === false){
                alert("A1 belum diisi");
                return false;
            }
            if (b1 === false){
                alert("B1 belum diisi");
                return false;
            }
            if (a2 === false){
                alert("A2 belum diisi");
                return false;
            }
            if (b2 === false){
                alert("B2 belum diisi");
                return false;
            }
            if (a3 === false){
                alert("A3 belum diisi");
                return false;
            }
            if (b3 === false){
                alert("B3 belum diisi");
                return false;
            }
            if (a4 === false){
                alert("A4 belum diisi");
                return false;
            }
            if (b4 === false){
                alert("B4 belum diisi");
                return false;
            }
            if (a5 === false){
                alert("A5 belum diisi");
                return false;
            }
            if (b5 === false){
                alert("B5 belum diisi");
                return false;
            }
            if (a6 === false){
                alert("A6 belum diisi");
                return false;
            }
            if (b6 === false){
                alert("B6 belum diisi");
                return false;
            }
            if (a7 === false){
                alert("A7 belum diisi");
                return false;
            }
            if (b7 === false){
                alert("B7 belum diisi");
                return false;
            }
            if (a8 === false){
                alert("A8 belum diisi");
                return false;
            }
            if (b8 === false){
                alert("B8 belum diisi");
                return false;
            }
            if (a9 === false){
                alert("A9 belum diisi");
                return false;
            }
            if (b9 === false){
                alert("B9 belum diisi");
                return false;
            }
            if (a10 === false){
                alert("A10 belum diisi");
                return false;
            }
            if (b10 === false){
                alert("B10 belum diisi");
                return false;
            }
            if (a11 === false){
                alert("A11 belum diisi");
                return false;
            }
            if (b11 === false){
                alert("B11 belum diisi");
                return false;
            }
            if (a12 === false){
                alert("A12 belum diisi");
                return false;
            }
            if (b12 === false){
                alert("B12 belum diisi");
                return false;
            }
            if (a13 === false){
                alert("A13 belum diisi");
                return false;
            }
            if (b13 === false){
                alert("B13 belum diisi");
                return false;
            }
            if (a14 === false){
                alert("A14 belum diisi");
                return false;
            }
            if (b14 === false){
                alert("B14 belum diisi");
                return false;
            }
            if (a15 === false){
                alert("A15 belum diisi");
                return false;
            }
            if (b15 === false){
                alert("B15 belum diisi");
                return false;
            }
            if (a16 === false){
                alert("A16 belum diisi");
                return false;
            }
            if (b16 === false){
                alert("B16 belum diisi");
                return false;
            }
            if (a17 === false){
                alert("A17 belum diisi");
                return false;
            }
            if (b17 === false){
                alert("B17 belum diisi");
                return false;
            }
            if (a18 === false){
                alert("A18 belum diisi");
                return false;
            }
            if (b18 === false){
                alert("B18 belum diisi");
                return false;
            }
            if (a19 === false){
                alert("A19 belum diisi");
                return false;
            }
            if (b19 === false){
                alert("B19 belum diisi");
                return false;
            }
            if (a20 === false){
                alert("A20 belum diisi");
                return false;
            }
            if (b20 === false){
                alert("B20 belum diisi");
                return false;
            }
            if (a21 === false){
                alert("A21 belum diisi");
                return false;
            }
            if (b21 === false){
                alert("B21 belum diisi");
                return false;
            }
            
            function check_radio(radio)
            {
            // memeriksa apakah radio button sudah ada yang dipilih
                for (i = 0; i < radio.length; i++)
                {
                    if (radio[i].checked === true)
                    {
                     return radio[i].value;
                    }
                }
                return false;
            }
        }
    </script>