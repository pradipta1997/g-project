<form action="<?= base_url('Layanan/import_excel'); ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    <span <?php echo $My_Controller->savePermission; ?>> </span>

                    <div class="form-group">
                        <label class="col-sm-3 col-form-label">Pilih Table</label>
                        <select class="form-control select2" style="width: 50%;" name="layanan" id="layanan">
                            <option value="">--Select Tabel--</option>
                            <option value="data_segel_tas">Data Segel Tas (DSP)</option>
                            <option value="gps_kendaraan">GPS Kendaraan (DSP)</option>
                            <option value="kendaraan">Kendaraan (DSP)</option>
                            <option value="tbl_mhu_dan_msu">MHU & MSU (DSP)</option>
                            <option value="rekap_analisa_kc_non_cro_cit">Rekap Analisa KC Non CRO CIT (DSP)</option>
                            <option value="rekap_analisa_kc_total">Rekap Analisa KC Total (DSP)</option>
                            <option value="rekap_kinerja_kc_cit">Rekap Kinerja KC CIT (DSP)</option>
                            <option value="rekap_kinerja_kc_cro">Rekap Kinerja KC CRO (DSP)</option>
                            <option value="rekap_persedian_log_kc">Rekap Persediaan Log KC (DSP)</option>
                            <option value="tb_vaksin">Data Vaksin (DSP)</option>
                            <!-- <option value="tb_vaksin">Data Laporan Vaksin (DSP)</option> -->

                            <option value="tbl_data_kas">Data Kas (ANEV)</option>
                            <option value="tbl_masterkas">Master Kas (ANEV)</option>
                            <option value="rekap_bank_bjb">Rekap Bank BJB (ANEV)</option>
                            <option value="rekap_cr_bank_bjb">Rekap CR Bank BJB (ANEV)</option>
                            <option value="rekap_flm_bank_bjb">Rekap FLM Bank BJB (ANEV)</option>
                            <option value="rekap_biaya_cr_flm_bank_bjb">Rekap Biaya CR FLM Bank BJB (ANEV)</option>
                            <option value="harga_kegiatan_bank_bjb">Harga Kegiatan Bank BJB (ANEV)</option>
                            <option value="rekap_analisa_problem_kc_selindo">Rekap Analisa Problem KC Selindo (ANEV)</option>
                            <option value="rekap_flm_bg_selindo">Rekap FLM BG Selindo (ANEV)</option>
                            <option value="rekap_rpl_bg_selindo">Rekap RPL BG Selindo (ANEV)</option>
                            <option value="rekon_atm_bank_bjb">Rekon ATM Bank BJB (ANEV)</option>
                            <option value="rekon_flm_bank_bjb">Rekon FLM Bank BJB (ANEV)</option>
                            <option value="data_sm">Data SM (ANEV)</option>
                            <option value="reliability_harian_bg">Reability Harian BG (ANEV)</option>
                            <option value="rekap_presentase_return_rpl_kl_selindo">Rekap Presentase Return RPL KL Selindo (ANEV)</option>
                            <option value="proyeksi_nilai_sanggahan">Proyeksi Nilai Sanggahan (ANEV)</option>
                            <option value="update_cro_crm">Update CRO CRM (ANEV)</option>
                            <option value="performance_slm_bg_jalin">Performance SLM BG Jalin (ANEV)</option>
                            <option value="rekap_laporan_posisi_kas_utle_bg">Rekap Laporan Posisi Kas UTLE BG (ANEV/Weekly)</option>
                            <option value="posisi_saldo_kas_sortir">Posisi Saldo Kas Sortir (ANEV/Weekly)</option>
                            <option value="update_kirim_ba_ho_bjb">Update Kirim BA HO BJB (ANEV/Weekly)</option>
                            <option value="rekap_data_pm">Rekap Data PM (ANEV/Weekly)</option>
                            <option value="rekap_data_sm">Rekap Data SM (ANEV/Weekly)</option>
                            <option value="rekap_maintenance_cctv_atm">Rekap Maintenance CCTV ATM (ANEV/Weekly)</option>
                            <option value="denda_return_jabodetabek">Denda Return JABODETABEK (ANEV/Monthly)</option>
                            <option value="rekap_data_performance_cluster_bulanan">Rekap Data Performance Cluster Bulanan (ANEV/Monthly)</option>
                            <option value="rekap_penggunaan_sparepart">Rekap Penggunaan Sparepart (ANEV/Monthly)</option>
                            <option value="rekap_rpl_bank_bjb">Rekap RPL Bank BJB (ANEV/Monthly)</option>
                            <option value="data_vandalisme_relokasi">Data Vandalisme & Relokasi (ANEV/Daily)</option>
                            <option value="format_proyeksi_kebutuhan_kas_bg_selindo">Format Proyeksi Kebutuhan Kas BG Selindo (ANEV/Daily)</option>
                            <option value="rekap_ej_bg_selindo">Rekap EJ BG Selindo (ANEV/Daily)</option>
                            <option value="rekap_saldo_dsr_cro_bjb">Rekap Saldo DSR CRO BJB (ANEV/Daily)</option>
                            <option value="rekap_saldo_dsr_cro_bri">Rekap Saldo DSR CRO BRI (ANEV/Daily)</option>
                            <option value="saldo_restocking_terpusat">Saldo Restocking Terpusat (ANEV/Daily)</option>
                            <option value="saldo_restocking">Saldo Restocking (ANEV/Daily)</option>


                            <option value="tbl_rekap_shortage">Rekap Shortage (RDI)</option>
                            <option value="Closed_Case_shortage_Januari_Oktober_berdasarkan_kategori_kasus">Closed Case Shortage Berdasarkan Kategori Kasus Tahunan (RDI)</option>
                            <option value="Closed_Case_shortage_September_berdasarkan_kategori_kasus">Closed Case Shortage Berdasarkan Kategori Kasus Bulanan (RDI)</option>
                            <option value="Update_Kategori_kasus_Closed_Case_Frekuensi">Update Kategori Kasus Closed Case Frekuensi (RDI)</option>
                            <option value="Update_Kategori_kasus_Closed_Case_Nominal">Update Kategori Kasus Closed Case Nominal (RDI)</option>
                            <option value="Monitoring_Instruksi_Investigasi_Shortage_BG_Selindo">Monitoring Instruksi Investigasi Shortage BG Selindo (RDI)</option>
                            <option value="Monitoring_Outstanding_Shortage_BG_Selindo">Monitoring Outstanding Shortage BG Selindo (RDI)</option>
                            <option value="Grafik_Progress_dan_Pending_CaseCabang">Grafik Progress & Pending Case Cabang (RDI)</option>
                        </select>
                    </div>
                    

                    <div class="form-group">
                        <label class="col-sm-3 col-form-label">Pilih File Excel</label>
                        <input type="file" name="fileExcel">
                    </div>
                    <div class="row text-center" style="margin-bottom: 20px;">
                    <button type="submit" id='addBarang' class="btn btn-info" >
                        Import <i class="fa fa-plus"></i>
                    </button>
                    </div>
                    <hr style="border: 1px solid #013a63;">
                    <div class="form-group">
                        <div class="col-sm" style="width: 100%;">
                            <div>
                                <a class="col-sm-" href="Gpskendaraan" style="color: #013a63;"><b style="color:orange;">|</b> GPS Kendaraaan <b style="color:orange;"> (DSP) |</b> </a>
                                <a class="col-sm-" href="Datasegeltas" style="color: #013a63;">Data Segel Tas <b style="color:orange;"> (DSP) |</b> </a>
                                <a class="col-sm-" href="Kendaraan" style="color: #013a63;">Kendaraan <b style="color:orange;"> (DSP) |</b> </a>
                                <a class="col-sm-" href="Mhumsu" style="color: #013a63;">MHU & MSU <b style="color:orange;"> (DSP) |</b> </a>
                                <a class="col-sm-" href="Rekanalisakcnoncrocit" style="color: #013a63;">Rekap Analisa KC Non CRO CIT <b style="color:orange;"> (DSP) |</b> </a>
                                <a class="col-sm-" href="Rekapanalisakctotal" style="color: #013a63;">Rekap Analisa KC Total <b style="color:orange;"> (DSP) |</b> </a>
                                <a class="col-sm-" href="Rekkinerjakccit" style="color: #013a63;">Rekap Kinerja KC CIT <b style="color:orange;"> (DSP) |</b> </a>
                                <a class="col-sm-" href="Rekkinerjakccro" style="color: #013a63;">Rekap Kinerja KC CRO <b style="color:orange;"> (DSP) |</b> </a>
                                <a class="col-sm-" href="Rekpersedianlogkc" style="color: #013a63;">Rekap Persediaan Log KC <b style="color:orange;"> (DSP) |</b> </a>
                                <a class="col-sm-" href="DataVaksin" style="color: #013a63;">Data Vaksin <b style="color:orange;"> (DSP) |</b> </a>

                                <br> <hr style="border: 1px solid #013a63;">
                                
                                <a class="col-sm-" href="Datakas" style="color: #013a63;">Data Kas <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="Masterkas" style="color: #013a63;">Master Kas <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="Rekapbankbjb" style="color: #013a63;">Rekap Bank BJB <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="Rekapcrbankbjb" style="color: #013a63;">Rekap CR Bank BJB <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="Rekapflmbankbjb" style="color: #013a63;">Rekap FLM Bank BJB <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="Rekapbiayacrflmbjb" style="color: #013a63;">Rekap Biaya CR FLM Bank BJB <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="Hargakegiatanbankbjb" style="color: #013a63;">Harga Kegiatan Bank BJB <b style="color:orange;"> (ANEV) |</b> </a>
                                <br>
                                <a class="col-sm-" href="Rekanalisaproblemkcselindo" style="color: #013a63;">Rekap Analisa Problem KC Selindo <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="Rekflmbgselindo" style="color: #013a63;">Rekap FLM BG Selindo <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="Rekrplbgselindo" style="color: #013a63;">Rekap RPL BG Selindo <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="Rekatmbankbjb" style="color: #013a63;">Rekon ATM Bank BJB <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="Rekflmbankbjb" style="color: #013a63;">Rekon FLM Bank BJB <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="Datasm" style="color: #013a63;">Data SM <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="ReliabilityHarianBG" style="color: #013a63;">Reliability Harian BG <b style="color:orange;"> (ANEV)|</b> </a>
                                <a class="col-sm-" href="RekapPresentaseReturnRPL" style="color: #013a63;">Rekap Presentase Return RPL KL Selindo <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="ProyeksiNilaiSanggahan" style="color: #013a63;">Proyeksi Nilai Sanggahan <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="UpdateCROCRM" style="color: #013a63;">Update CRO CRM <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="PerformanceSLMBGJalin" style="color: #013a63;">Performance SLM BG Jalin <b style="color:orange;"> (ANEV) |</b> </a>
                                <a class="col-sm-" href="RekapLaporanPosisiKasUTLE" style="color: #013a63;">Rekap Laporan Posisi Kas UTLE BG <b style="color:orange;"> (ANEV/Weekly) |</b> </a>
                                <br>
                                <a class="col-sm-" href="PosisiSaldoKasSortir" style="color: #013a63;">Posisi Saldo Kas Sortir <b style="color:orange;"> (ANEV/Weekly) |</b> </a>
                                <a class="col-sm-" href="UpdateKirimBAHOBJB" style="color: #013a63;">Update Kirim BA HO BJB <b style="color:orange;"> (ANEV/Weekly) |</b> </a>
                                <a class="col-sm-" href="RekapDataPM" style="color: #013a63;">Rekap Data PM <b style="color:orange;"> (ANEV/Weekly) |</b> </a>
                                <a class="col-sm-" href="RekapDataSM" style="color: #013a63;">Rekap Data SM <b style="color:orange;"> (ANEV/Weekly) |</b> </a>
                                <br>
                                <a class="col-sm-" href="RekapMaintenanceCCTVATM" style="color: #013a63;">Rekap Maintenance CCTV ATM <b style="color:orange;"> (ANEV/Weekly) |</b> </a>
                                <a class="col-sm-" href="DendaReturnJabodetabek" style="color: #013a63;">Denda Return JABODETABEK <b style="color:orange;"> (ANEV/Monthly) |</b> </a>
                                <a class="col-sm-" href="RekapDataPerformanceClusterBulanan" style="color: #013a63;">Rekap Data Performance Cluster Bulanan <b style="color:orange;"> (ANEV/Monthly) |</b> </a>
                                <a class="col-sm-" href="RekapPenggunaaSparepart" style="color: #013a63;">Rekap Penggunaan Sparepart <b style="color:orange;"> (ANEV/Monthly) |</b> </a>
                                <a class="col-sm-" href="RekapRPLBankBJB" style="color: #013a63;">Rekap RPL Bank BJB <b style="color:orange;"> (ANEV/Monthly) |</b> </a>
                                <a class="col-sm-" href="DataVandalismeRelokasi" style="color: #013a63;">Data Vandalisme & Relokasi <b style="color:orange;"> (ANEV/Daily) |</b> </a>
                                <a class="col-sm-" href="FormatProyeksiKebutuhanKasBGSelindo" style="color: #013a63;">Format Proyeksi Kebutuhan Kas BG Selindo <b style="color:orange;"> (ANEV/Daily) |</b> </a>
                                <a class="col-sm-" href="RekapEJBGSelindo" style="color: #013a63;">Rekap EJ BG Selindo <b style="color:orange;"> (ANEV/Daily) |</b> </a>
                                <br>
                                <a class="col-sm-" href="RekapSaldoDSRCROBJB" style="color: #013a63;">Rekap Saldo DSR CRO BJB <b style="color:orange;"> (ANEV/Daily) |</b> </a>
                                <a class="col-sm-" href="RekapSaldoDSRCROBRI" style="color: #013a63;">Rekap Saldo DSR CRO BRI <b style="color:orange;"> (ANEV/Daily) |</b> </a>
                                <a class="col-sm-" href="SaldoRestockingTerpusat" style="color: #013a63;">Saldo Restocking Terpusat <b style="color:orange;"> (ANEV/Daily) |</b> </a>
                                <a class="col-sm-" href="SaldoRestocking" style="color: #013a63;">Saldo Restocking <b style="color:orange;"> (ANEV/Daily) |</b> </a>

                                <br> <hr style="border: 1px solid #013a63;">

                                <a class="col-sm-" href="Rekapshortage" style="color: #013a63;">Rekap Shortage <b style="color:orange;"> (RDI) |</b> </a>
                                <a class="col-sm-" href="ClosedCaseShortageJanuariOktober" style="color: #013a63;">Closed Case Shortage Berdasarkan Kategori Kasus Tahunan <b style="color:orange;"> (RDI) |</b> </a>
                                <a class="col-sm-" href="ClosedCaseShortageSeptember" style="color: #013a63;">Closed Case Shortage Berdasarkan Kategori Kasus Bulanan <b style="color:orange;"> (RDI) |</b> </a>
                                <a class="col-sm-" href="UpdateKategoriKasusClosedCaseFrekuensi" style="color: #013a63;">Update Kategori Kasus Closed Case Frekuensi <b style="color:orange;"> (RDI) |</b> </a>
                                <a class="col-sm-" href="UpdateKategoriKasusClosedCaseNominal" style="color: #013a63;">Update Kategori Kasus Closed Case Nominal <b style="color:orange;"> (RDI) |</b> </a>
                                <a class="col-sm-" href="MonitoringInstruksiInvestigasiShortageBGSelindo" style="color: #013a63;">Monitoring Instruksi Investigasi Shortage BG Selindo <b style="color:orange;"> (RDI) |</b> </a>
                                <a class="col-sm-" href="MonitoringOutstandingShortageBGSelindo" style="color: #013a63;">Monitoring Outstanding Shortage BG Selindo <b style="color:orange;"> (RDI) |</b> </a>
                                <a class="col-sm-" href="GrafikProgressdanPendingCaseCabang" style="color: #013a63;">Grafik Progress & Pending Case Cabang <b style="color:orange;"> (RDI) |</b> </a>
                            
                                <br> <hr style="border: 1px solid #013a63;">
                            </div>
                        </div>
                    </div>
                </header>
                <div class="panel-body">
                    <table id="tableBarang" class="table table-bordered table-striped" style="width: 100%;">
                        <thead style="background-color: #012a4a; color: white;">
                            <tr role="row">
                                <th>NO</th>
                                <th>KANTOR LAYANAN</th>
                                <th>BC</th>
                                <th>RETURN (50)</th>
                                <th>RETURN (100)</th>
                                <th>SALDO AWAL (50)</th>
                                <th>SALDO AWAL (100)</th>
                                <th>RPL (50)</th>
                                <th>RPL (100)</th>
                                <th>SALDO AKHIR (50)</th>
                                <th>SALDO AKHIR (100)</th>
                                <th>User</th>
                                <th>Tanggal Update</th>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all" style="background-color: rgba(1, 42, 74, 0.3);"></tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</form>

<script>
    const urlSaldoRestocking = '<?= site_url("SaldoRestocking/") ?>';
    let table;

    $(function() {
        $('.select2').select2();
    })

    $(function() {
        if (!$.fn.DataTable.isDataTable('#tableBarang')) {
            table = $('#tableBarang').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                order: [],
                scrollX: true,
                ajax: {
                    url: urlSaldoRestocking + "listSaldoRestocking",
                    type: "POST"
                },
                columnDefs: [{
                    targets: [0, -1],
                    orderable: false,
                }, ],
            });
        }
    });
</script>