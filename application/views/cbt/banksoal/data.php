<div class="content-wrapper bg-white pt-4">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $judul ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-default my-shadow mb-4">
                <div class="card-header">
                    <h6 class="card-title"><?= $subjudul ?></h6>
                    <div class="card-tools">
                        <a href="<?= base_url('cbtbanksoal?id=' . $id_guru) ?>" type="button" onclick=""
                           class="btn btn-sm btn-default">
                            <i class="fa fa-sync"></i> <span class="d-none d-sm-inline-block ml-1">Reload</span>
                        </a>
                        <a href="<?= base_url('cbtbanksoal/addBank') ?>" type="button"
                           class="btn btn-primary btn-sm ml-1">
                            <i class="fas fa-plus-circle"></i> Tambah Bank Soal
                        </a>
                        <button type="button" data-toggle="modal" data-target="#openAllBankSoal"
                                class="btn btn-sm btn-success"><i class="fa fa-copy"></i> Copy Bank Soal
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <?php
                    $dnone = $this->ion_auth->is_admin() ? '' : 'd-none';
                    ?>
                    <div class="row" id="row-filter">
                        <span class="mt-2 col-md-1">Filter: </span>
                        <div class="col-6 col-md-3 mb-4">
                            <?php echo form_dropdown(
                                'f',
                                $filters,
                                $id_filter,
                                'id="filter" class="form-control"'
                            ); ?>
                        </div>
                        <div id="select-guru" class="col-6 col-md-3 mb-4 d-none">
                            <?php echo form_dropdown(
                                'guru',
                                $gurus,
                                $id_guru,
                                'id="guru" class="sel form-control"'
                            ); ?>
                        </div>
                        <div id="select-mapel" class="col-6 col-md-3 mb-4 d-none">
                            <?php echo form_dropdown(
                                'mapel',
                                $mapels,
                                $id_mapel,
                                'id="mapel" class="sel form-control"'
                            ); ?>
                        </div>
                        <div id="select-level" class="col-6 col-md-3 mb-4 d-none">
                            <?php echo form_dropdown(
                                'level',
                                $levels,
                                $id_level,
                                'id="level" class="sel form-control"'
                            ); ?>
                        </div>
                    </div>
                    <!--
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="flex:0;">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input type="text" id="filter-by" class="form-control" onkeyup="filterBy()" placeholder="Cari soal berdasarkan nama Guru/Mapel/Level kelas">
                    </div>
                    -->
                    <div class="row" id="konten">
                        <?php
                        if (isset($banks[$tp_active->id_tp]) && isset($banks[$tp_active->id_tp][$smt_active->id_smt]) && count($banks[$tp_active->id_tp][$smt_active->id_smt]) > 0) :
                            foreach ($banks[$tp_active->id_tp][$smt_active->id_smt] as $bank) : ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card border mb-4">
                                        <div class="card-header border-bottom-0 bg-gradient-blue">
                                            <h3 class="card-title mt-1"><b><?= $bank->bank_kode ?></b></h3>
                                            <div class="card-tools">
									<span data-toggle="tooltip" title="Edit Bank Soal">
										<a type="button"
                                           href="<?= base_url('cbtbanksoal/editBank?id_bank=' . $bank->id_bank . '&id_guru=' . $bank->id_guru) ?>"
                                           class="btn btn-warning btn-sm mr-1">
											<i class="fa fa-pencil-alt"></i>
										</a>
									</span>
                                                <button onclick="hapus(<?= $bank->id_bank ?>)" type="button"
                                                        class="btn-sm btn btn-danger" data-toggle="tooltip"
                                                        title="Hapus Bank Soal">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <?php
                                            $jk = json_decode(json_encode($bank->bank_kelas));
                                            $jumlahKelas = json_decode(json_encode(unserialize($jk)));
                                            $jks = [];

                                            $kelasbank = '';
                                            $no = 1;
                                            foreach ($jumlahKelas as $j) {
                                                foreach ($kelas as $k) {
                                                    if ((isset($j->kelas_id) && isset($k->id_kelas)) && $j->kelas_id === $k->id_kelas) {
                                                        if ($no > 1) {
                                                            $kelasbank .= ', ';
                                                        }
                                                        $kelasbank .= $k->nama_kelas;
                                                        $no++;
                                                    }
                                                }
                                            }
                                            ?>
                                            <ul class="list-group list-group-unbordered">
                                                <li class="list-group-item p-1"> Guru
                                                    <span class="float-right"><b><?= $bank->nama_guru ?></b></span>
                                                </li>
                                                <li class="list-group-item p-1"> Mapel
                                                    <span class="float-right"><b><?= $bank->kode ?></b></span>
                                                </li>
                                                <li class="list-group-item p-1"> Kelas
                                                    <span class="float-right"><b><?= $kelasbank ?></b></span>
                                                </li>
                                                <li class="list-group-item p-1"> Jumlah Soal
                                                    <span class="float-right">
											<b><?= $bank->total_soal == 0 ? 'Belum dibuat' : ($bank->total_soal < ($bank->tampil_pg + $bank->tampil_esai) ? 'Belum selesai' : $bank->tampil_pg + $bank->tampil_kompleks + $bank->tampil_jodohkan + $bank->tampil_isian + $bank->tampil_esai) ?></b>
										</span>
                                                </li>
                                                <li class="list-group-item p-1"> Dibuat
                                                    <span class="float-right"><b><?= singkat_tanggal(date('d M Y - H:i', strtotime($bank->date))) ?></b></span>
                                                </li>
                                                <li class="list-group-item p-1"> Status
                                                    <span class="float-right">
											<b><?= ($bank->status === '0') ? 'Non Aktif' : 'Aktif' ?></b>
										</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row mb-2">
                                        <span class="col-6 text-left" data-toggle="tooltip" title="Buat Soal">
											<a href="javascript:void(0)" data-total="<?= $bank->total_soal ?>"
                                               data-id="<?= $bank->id_bank ?>" onclick="importSoal(this)"
                                               type="button" class="btn btn-warning">
												<i class="fas fa-upload"></i> Import Soal
											</a>
										</span>

                                                <span class="col-6 text-right" data-toggle="tooltip" title="Buat Soal">
                                        <a href="<?= base_url('cbtbanksoal/detail/' . $bank->id_bank) ?>"
                                           type="button" class="btn btn-success">
                                            <?php if ($bank->total_soal == 0) : ?>
                                                <i class="fas fa-plus"></i> Buat Soal
                                            <?php else: ?>
                                                <i class="fas fa-eye"></i> Detail Soal
                                            <?php endif; ?>
                                        </a>
                                    </span>
                                            </div>
                                            <div class="row">
                                                <button data-id="<?= $bank->id_bank ?>"
                                                        data-mapel="<?= $bank->nama_mapel ?>"
                                                        data-level="<?= $bank->bank_level ?>"
                                                        data-essai="<?= $bank->tampil_esai ?>"
                                                        onclick="getSoal(this)" type="button"
                                                        class="btn btn-primary w-100">
                                                    <i class="fas fa-download mr-1"></i> Download Soal Untuk Siswa<br>
                                                    <small><i>untuk keperluan ujian kertas</i></small>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;
                        elseif (isset($banks[0]) && isset($banks[0][0]) && count($banks[0][0]) > 0) :
                            foreach ($banks[0][0] as $bank) : ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card border mb-4">
                                        <div class="card-header border-bottom-0 bg-gradient-blue">
                                            <h3 class="card-title mt-1"><b><?= $bank->bank_kode ?></b></h3>
                                            <div class="card-tools">
									<span data-toggle="tooltip" title="Edit Bank Soal">
										<a type="button"
                                           href="<?= base_url('cbtbanksoal/editBank?id_bank=' . $bank->id_bank . '&id_guru=' . $bank->id_guru) ?>"
                                           class="btn btn-warning btn-sm mr-1">
											<i class="fa fa-pencil-alt"></i>
										</a>
									</span>
                                                <button onclick="hapus(<?= $bank->id_bank ?>)" type="button"
                                                        class="btn-sm btn btn-danger" data-toggle="tooltip"
                                                        title="Hapus Bank Soal">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <?php
                                            $jk = json_decode(json_encode($bank->bank_kelas));
                                            $jumlahKelas = json_decode(json_encode(unserialize($jk)));
                                            $jks = [];

                                            $kelasbank = '';
                                            $no = 1;
                                            foreach ($jumlahKelas as $j) {
                                                foreach ($kelas as $k) {
                                                    if ((isset($j->kelas_id) && isset($k->id_kelas)) && $j->kelas_id === $k->id_kelas) {
                                                        if ($no > 1) {
                                                            $kelasbank .= ', ';
                                                        }
                                                        $kelasbank .= $k->nama_kelas;
                                                        $no++;
                                                    }
                                                }
                                            }
                                            ?>
                                            <ul class="list-group list-group-unbordered">
                                                <li class="list-group-item p-1"> Guru
                                                    <span class="float-right"><b><?= $bank->nama_guru ?></b></span>
                                                </li>
                                                <li class="list-group-item p-1"> Mapel
                                                    <span class="float-right"><b><?= $bank->kode ?></b></span>
                                                </li>
                                                <li class="list-group-item p-1"> Kelas
                                                    <span class="float-right"><b><?= $kelasbank ?></b></span>
                                                </li>
                                                <li class="list-group-item p-1"> Jumlah Soal
                                                    <span class="float-right">
											<b><?= $bank->total_soal == 0 ? 'Belum dibuat' : ($bank->total_soal < ($bank->tampil_pg + $bank->tampil_esai) ? 'Belum selesai' : $bank->tampil_pg + $bank->tampil_kompleks + $bank->tampil_jodohkan + $bank->tampil_isian + $bank->tampil_esai) ?></b>
										</span>
                                                </li>
                                                <li class="list-group-item p-1"> Dibuat
                                                    <span class="float-right"><b><?= singkat_tanggal(date('d M Y - H:i', strtotime($bank->date))) ?></b></span>
                                                </li>
                                                <li class="list-group-item p-1"> Status
                                                    <span class="float-right">
											<b><?= ($bank->status === '0') ? 'Non Aktif' : 'Aktif' ?></b>
										</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row mb-2">
                                        <span class="col-6 text-left" data-toggle="tooltip" title="Buat Soal">
											<a href="javascript:void(0)" data-total="<?= $bank->total_soal ?>"
                                               data-id="<?= $bank->id_bank ?>" onclick="importSoal(this)"
                                               type="button" class="btn btn-warning">
												<i class="fas fa-upload"></i> Import Soal
											</a>
										</span>

                                                <span class="col-6 text-right" data-toggle="tooltip" title="Buat Soal">
                                        <a href="<?= base_url('cbtbanksoal/detail/' . $bank->id_bank) ?>"
                                           type="button" class="btn btn-success">
                                            <?php if ($bank->total_soal == 0) : ?>
                                                <i class="fas fa-plus"></i> Buat Soal
                                            <?php else: ?>
                                                <i class="fas fa-eye"></i> Detail Soal
                                            <?php endif; ?>
                                        </a>
                                    </span>
                                            </div>
                                            <div class="row">
                                                <button data-id="<?= $bank->id_bank ?>"
                                                        data-mapel="<?= $bank->nama_mapel ?>"
                                                        data-level="<?= $bank->bank_level ?>"
                                                        data-essai="<?= $bank->tampil_esai ?>"
                                                        onclick="getSoal(this)" type="button"
                                                        class="btn btn-primary w-100">
                                                    <i class="fas fa-download mr-1"></i> Download Soal Untuk Siswa<br>
                                                    <small><i>untuk keperluan ujian kertas</i></small>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;
                            else: ?>
                            <div class="col-12 p-0">
                                <div class="alert alert-default-warning align-content-center" role="alert">
                                    Belum ada BANK SOAL
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div id="for-siswa" class="d-none" style="width: 100%">
                <table id="table-header-print" style="width: 100%">
                    <tr>
                        <td>
                            <img id="prev-logo-kiri-print" src="<?= base_url() . $setting->logo_kiri ?>" width="100px"
                                 height="100px">
                        </td>
                        <td class="text-center">
                            <div class="text-center" id="jenis-ujian"
                                 style="line-height: 1.1; font-family: 'Times New Roman'; font-size: 16pt"></div>
                            <div class="text-center"
                                 style="line-height: 1.1; font-family: 'Times New Roman'; font-size: 14pt">
                                <b><?= $setting->sekolah ?></b></div>
                            <div class="text-center"
                                 style="line-height: 1.2; font-family: 'Times New Roman'; font-size: 13pt">
                                <b>KECAMATAN <?= strtoupper($setting->kecamatan) . ' KABUPATEN ' . strtoupper($setting->kota) ?></b>
                            </div>
                            <div class="text-center"
                                 style="line-height: 1.2; font-family: 'Times New Roman'; font-size: 12pt"><b>TAHUN
                                    PELAJARAN: <?= strtoupper($tp_active->tahun) . ' SEMESTER ' . strtoupper($smt_active->smt) ?></b>
                            </div>
                        </td>
                        <td>
                            <img id="prev-logo-kanan-print" src="<?= base_url() . $setting->logo_kanan ?>" width="100px"
                                 height="100px">
                        </td>
                    </tr>
                </table>
                <hr style="border: 1px solid; margin-bottom: 6px; margin-top: 0px">
                <br>
                <p><b>I. Soal Pilihan Ganda</b></p>
                <ol id="list-pg">
                </ol>

                <p>&nbsp;</p>
                <p><b>II. Soal Pilihan Ganda Kompleks</b></p>
                <ol id="list-pg2">
                </ol>

                <p>&nbsp;</p>
                <p><b>II. Soal Menjodohkan</b></p>
                <ol id="list-jodohkan">
                </ol>

                <p>&nbsp;</p>
                <p><b>II. Soal Isian Singkat</b></p>
                <ol id="list-isian">
                </ol>

                <p>&nbsp;</p>
                <p><b>II. Soal Uraian / Essai</b></p>
                <ol id="list-essai">
                </ol>
            </div>

        </div>
    </section>
</div>

<div class="modal fade" id="openAllBankSoal" tabindex="-1" role="dialog" aria-labelledby="openBankSoalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php
                if ($id_filter == '1') {
                    $title = 'Bank Soal (' . $gurus[$id_guru] . ')';
                } elseif ($id_filter == '2') {
                    $title = 'Bank Soal (' . $mapels[$id_mapel] . ')';
                } elseif ($id_filter == '3') {
                    $title = 'Bank Soal Kelas ' . $levels[$id_level];
                } else {
                    $title = 'Semua Bank Soal';
                }
                ?>
                <h5 class="modal-title" id="openBankSoalLabel"><?= $title ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                //var_dump($banks);
                $allBanks = [];
                foreach ($tp as $thn) {
                    foreach ($smt as $sem) {
                        if (isset($banks[$thn->id_tp]) && isset($banks[$thn->id_tp][$sem->id_smt])) {
                            $allBanks[] = [
                                'tahun' => $thn->tahun . ' SMT ' . $sem->smt,
                                'banks' => $banks[$thn->id_tp][$sem->id_smt]
                            ];
                        }
                        /*
                        if ($thn->id_tp != $tp_active->id_tp && $sem->id_smt != $smt_active->id_smt) {
                            if (isset($banks[$thn->id_tp]) && isset($banks[$thn->id_tp][$sem->id_smt])) {
                                //$arrBank[] = $banks[$thn->id_tp][$sem->id_smt];
                                $allBanks[] = [
                                    'tahun' => $thn->tahun . ' SMT ' . $sem->smt,
                                    'banks' => $banks[$thn->id_tp][$sem->id_smt]
                                ];
                            }
                        }
                        */
                    }
                }
                usort($allBanks, function ($a, $b) {
                    return $b['tahun'] <=> $a['tahun'];
                });
                //echo '<pre>';
                //var_dump($allBanks);
                //echo '</pre>';

                if (count($allBanks) > 0) :
                    foreach ($allBanks as $allBank) :?>
                        <p><?= $allBank['tahun'] ?></p>
                        <table id="tableEkstra"
                               class="w-100 table table-striped table-bordered table-hover table-head-fixed overflow-auto display nowrap"
                               style="height: 300px">
                            <thead>
                            <tr>
                                <th class="text-center align-middle p-0">No.</th>
                                <th>Kode</th>
                                <th>Mapel</th>
                                <th>Kelas</th>
                                <th>TP/SMT</th>
                                <th class="text-center align-middle p-0" style="width: 100px"><span>Aksi</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($allBank['banks'] as $ab) :
                                ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $ab->bank_kode ?></td>
                                    <td><?= $ab->nama_mapel ?></td>
                                    <td><?= $ab->bank_level ?></td>
                                    <td><?= $allBank['tahun'] ?></td>
                                    <td>
                                        <button onclick="copy(<?= $ab->id_bank ?>)" type="button"
                                                class="btn btn-sm btn-success"><i class="fa fa-copy"></i> Copy
                                        </button>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                            endforeach; ?>
                            </tbody>
                        </table>
                    <?php endforeach; else: ?>
                    <div class="alert alert-default-info align-content-center" role="alert">
                        tidak ada materi sebelumnya
                    </div>
                <?php endif; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="<?= base_url() ?>/assets/app/js/FileSaver.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/app/js/jquery.wordexport.js"></script>

<script>
    var idFilter = '<?=$id_filter?>';
    var idMapel = '<?=$id_mapel?>';
    var idLevel = '<?=$id_level?>';
    var idGuru = '<?=$id_guru?>';
    $(document).ready(function () {
        ajaxcsrf();

        var selectedF = idFilter == '' ? 'selected' : '';
        var selectedM = idMapel == '' ? 'selected' : '';
        var selectedL = idLevel == '' ? 'selected' : '';
        $('#filter').prepend("<option value='' " + selectedF + " disabled='disabled'>Filter berdasarkan:</option>");
        $('#mapel').prepend("<option value='' " + selectedM + " disabled='disabled'>Pilih mapel:</option>");
        $('#level').prepend("<option value='' " + selectedL + " disabled='disabled'>Pilih level:</option>");

        function onChangeFilter(type) {
            if (type == '1') {
                $('#select-guru').removeClass('d-none');
                $('#select-mapel').addClass('d-none');
                $('#select-level').addClass('d-none');
            } else if (type == '2') {
                $('#select-guru').addClass('d-none');
                $('#select-mapel').removeClass('d-none');
                $('#select-level').addClass('d-none');
            } else if (type == '3') {
                $('#select-guru').addClass('d-none');
                $('#select-mapel').addClass('d-none');
                $('#select-level').removeClass('d-none');
            } else {
                $('#select-guru').addClass('d-none');
                $('#select-mapel').addClass('d-none');
                $('#select-level').addClass('d-none');
            }
        }

        $('#filter').on('change', function () {
            var type = $(this).val();
            console.log(type);
            if (idFilter != '' && type == '0') {
                window.location.href = base_url + 'cbtbanksoal?type=0';
            } else {
                onChangeFilter(type);
            }
        });

        $('.sel').on('change', function () {
            var id = $(this).val();
            window.location.href = base_url + 'cbtbanksoal?id=' + id + '&type=' + $('#filter').val();
        });
        /*
		$('#guru').on('change', function () {
			idGuru = $(this).val();
			window.location.href = base_url + 'cbtbanksoal?id=' + idGuru;
		});
		*/

        onChangeFilter($('#filter').val())
    });

    function filterBy() {
        console.log('find', $('#filter-by').val());
        $('.card').show();
        var filter = $('#filter-by').val(); // get the value of the input, which we filter on
        $('#konten').find(".card-body:not(:contains(" + filter + "))").parent().parent().css('display', 'none');
    }

    function getSoal(e) {
        var id = $(e).data('id');
        var level = $(e).data('level');
        var mapel = $(e).data('mapel');
        var jmlEssai = $(e).data('essai');
        $.ajax({
            url: base_url + 'cbtbanksoal/getsoalsiswa/' + id,
            type: "GET",
            success: function (respon) {
                console.log(respon);
                if (respon.soal.length > 0) {
                    var pg1 = '';
                    var pg2 = '';
                    var jodoh = '';
                    var isian = '';
                    var essais = '';

                    $.each(respon.soal, function (i, v) {
                        if (v.jenis == '1') {
                            pg1 += '<li style="padding-bottom: 12px">' +
                                v.soal +
                                '<ol type="a">' +
                                '<li>' + v.opsi_a + '</li>' +
                                '<li>' + v.opsi_b + '</li>' +
                                '<li>' + v.opsi_c + '</li>' +
                                '<li>' + v.opsi_d + '</li>';
                            if ('<?=$setting->jenjang?>' === '3') {
                                pg1 += '<li>' + v.opsi_e + '</li>';
                            }
                            pg1 += '</ol>' + '</li>';
                        } else if (v.jenis == '2') {
                            pg2 += '<li style="padding-bottom: 12px">' + v.soal +
                                '<ol type="a">';
                            $.each(v.opsi_a, function (abjad, opsi) {
                                pg2 += '<li>' + opsi + '</li>';
                            });
                            pg2 += '</ol>' + '</li>';
                        } else if (v.jenis == '3') {
                            jodoh += '<li style="padding-bottom: 12px">' + v.soal +
                                '<table style="width:100%; border: 1px solid black; border-collapse: collapse; border-spacing: 0;">';
                            $.each(v.jawaban.jawaban, function (i, kolom) {
                                var bgkol = i === 0 ? 'lightgrey' : 'white';
                                jodoh += '<tr style="background: '+bgkol+'">';
                                $.each(kolom, function (row, td) {
                                    var val = td === "0" || td === "1" || td === "#" ? "" : td;
                                    var bg = row === 0 ? ' background: lightgrey;' : '';
                                    jodoh += '<td style="border: 1px solid black;border-collapse: collapse; text-align: center;' +bg+'">' + val + '</td>';
                                });
                                jodoh += '</tr>';
                            });
                            jodoh += '</table></li>';
                        } else if (v.jenis == '4') {
                            isian += '<li style="padding-bottom: 12px; display: flex; align-items: baseline;">' +
                                '<span style="margin-right: 12px; padding: 0;">' + v.soal + '</span>' +
                                '<span style="flex: 1; overflow: hidden; margin: 0; padding: 0;">.............' +
                                '......................................</span></li>';
                        } else if (v.jenis == '5') {
                            essais += '<li style="padding-bottom: 24px;"><section style="display: flex; align-items: baseline; margin-bottom: 8px">' +
                                '<span style="margin-right: 12px; padding: 0;">' + v.soal + '</span>' +
                                '<span style="flex: 1; overflow: hidden;">.............' +
                                '.............................................................................' +
                                '.............................................................................' +
                                '.............................................................................</span></section>';
                            for (let j = 0; j < 5; j++) {
                                essais += '<section style="display: flex; align-items: baseline; margin-bottom: 8px">' +
                                    '<span style="flex: 1; overflow: hidden;">.............' +
                                    '.............................................................................' +
                                    '.............................................................................' +
                                    '.............................................................................' +
                                    '.......................' +
                                    '</span></section>';
                            }
                            essais += '</li>';
                        } else {
                            //
                        }
                    });

                    $('#list-pg').html(pg1);
                    $('#list-pg2').html(pg2);
                    $('#list-jodohkan').html(jodoh);
                    $('#list-isian').html(isian);
                    $('#list-essai').html(essais);

                    $('#list-essai p').css({padding: 0, margin: 0});

                    $('#for-siswa img').each(function () {
                        var curSrc = $(this).attr('src');
                        if (curSrc.indexOf("http") === -1 && curSrc.indexOf("data:image") === -1) {
                            $(this).attr('src', base_url+curSrc);
                        } else if (curSrc.indexOf(base_url) === -1) {
                            var pathUpload = 'uploads';
                            var forReplace = curSrc.split(pathUpload);
                            $(this).attr('src', base_url + pathUpload + forReplace[1]);
                        }
                        /*
                        var curSrc = $(this).attr('src');
                        if (curSrc.indexOf("http") === -1 && curSrc.indexOf("data:image") === -1) {
                            $(this).attr('src', base_url + curSrc);
                        }
                        */
                    });

                    setTimeout(function () {
                        $("#for-siswa").wordExport(`Soal ${mapel} Kls ${level}`);
                        //exportWord(mapel, level);
                    }, 500);

                } else {
                    swal.fire({
                        title: "Gagal",
                        text: "Tidak bisa mendownload soal",
                        icon: "error"
                    });
                }
            },
            error: function () {
                swal.fire({
                    title: "Gagal",
                    text: "Error",
                    icon: "error"
                });
            }
        });
    }

    function exportWord(mapel, level) {
        var contentDocument = $('#for-siswa').convertToHtmlFile('ekspor', '');
        var content = '<!DOCTYPE html>' + contentDocument.documentElement.outerHTML;
        var converted = htmlDocx.asBlob(
            content, {
                orientation: 'portrait',
                size: 'A4',
                margins:{
                    top:700,
                    bottom:700,
                    left:700,
                    right:700
                }
            });

        saveAs(converted, 'Soal '+ mapel +' Kls '+ level +'.docx');
    }

    function importSoal(btn) {
        var idBank = $(btn).data('id');
        var total = $(btn).data('total');
        if (total > 0) {
            swal.fire({
                title: "Import Soal?",
                html: "Soal sudah ada, mengimport soal baru akan menghapus soal terdahulu.<br>Lanjutkan import soal?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Lanjut"
            }).then(result => {
                if (result.value) {
                    window.location.href = base_url + 'cbtbanksoal/importsoal/' + idBank;
                }
            });
        } else {
            window.location.href = base_url + 'cbtbanksoal/importsoal/' + idBank;
        }
    }

    function hapus(id) {
        swal.fire({
            title: "Anda yakin?",
            text: "Bank Soal akan dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Hapus!"
        }).then(result => {
            if (result.value) {
                $.ajax({
                    url: base_url + 'cbtbanksoal/deleteBank?id_bank=' + id,
                    //data: {id_bank: id},
                    type: "GET",
                    success: function (respon) {
                        if (respon.status) {
                            swal.fire({
                                title: "Berhasil",
                                text: "Bank soal berhasil dihapus",
                                icon: "success"
                            }).then(result => {
                                if (result.value) {
                                    window.location.href = base_url + 'cbtbanksoal?id=' + idGuru;
                                }
                            });
                        } else {
                            swal.fire({
                                title: "Gagal",
                                text: "Tidak bisa menghapus, " + respon.message,
                                icon: "error"
                            });
                        }
                    },
                    error: function () {
                        swal.fire({
                            title: "Gagal",
                            text: "Ada data yang sedang digunakan",
                            icon: "error"
                        });
                    }
                });
            }
        });
    }

    function copy(id) {
        swal.fire({
            title: "Copi Bank Soal?",
            text: " Bank Soal ini akan dicopy",
            icon: "info",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Copy"
        }).then(result => {
            if (result.value) {
                $.ajax({
                    url: base_url + 'cbtbanksoal/copybanksoal/' + id,
                    type: "GET",
                    success: function (respon) {
                        if (respon) {
                            swal.fire({
                                title: "Berhasil",
                                text: "Bank Soal berhasil dicopy",
                                icon: "success"
                            }).then(result => {
                                if (result.value) {
                                    window.location.reload();
                                }
                            })
                        } else {
                            swal.fire({
                                title: "Gagal",
                                text: "Tidak bisa mengcopy materi",
                                icon: "error"
                            });
                        }
                    },
                    error: function () {
                        swal.fire({
                            title: "Gagal",
                            text: "Ada data yang sedang digunakan",
                            icon: "error"
                        });
                    }
                });
            }
        });
    }

</script>
