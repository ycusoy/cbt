<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\x53\105\120\101\x54\110") or exit("\116\157\40\144\151\x72\x65\143\x74\x20\x73\143\162\151\x70\164\x20\141\143\x63\145\x73\x73\40\141\x6c\154\x6f\167\x65\x64"); class Install extends CI_Controller { function __construct() { goto RgYLr; qYXea: include APPPATH . "\143\157\x6e\146\151\147\57\x64\x61\164\141\x62\x61\x73\x65\56\160\x68\x70"; goto Zp__Q; RgYLr: parent::__construct(); goto qYXea; vC3TD: $this->load->model("\111\x6e\163\x74\x61\x6c\154\x5f\155\x6f\144\x65\x6c", "\x69\x6e\163\x74\x61\154\x6c"); goto hqfm_; hqfm_: $this->load->model("\104\x61\163\x68\x62\157\x61\x72\144\137\155\x6f\144\145\154", "\144\x61\x73\x68\x62\157\141\162\x64"); goto UPSrn; eKUuI: PCTTJ: goto vC3TD; rgbzB: $this->load->dbforge(); goto eKUuI; Zp__Q: if (!($db["\x64\x65\x66\141\165\x6c\x74"]["\x64\x61\x74\x61\x62\x61\x73\x65"] != '')) { goto PCTTJ; } goto O88Jt; O88Jt: $this->load->database(); goto rgbzB; UPSrn: } public function output_json($data, $encode = true) { goto cc0cT; Drt1G: $data = json_encode($data); goto JJUhU; JJUhU: B3scI: goto pHj6O; pHj6O: $this->output->set_content_type("\141\x70\x70\x6c\x69\x63\x61\164\151\157\156\x2f\x6a\163\157\156")->set_output($data); goto P_fPH; cc0cT: if (!$encode) { goto B3scI; } goto Drt1G; P_fPH: } public function index() { goto BGB3s; Cl1TJ: goto x896X; goto hLleR; tszBw: QMPU9: goto OEO72; xGF5w: if ($res == "\62") { goto QMPU9; } goto v4wza; hLleR: M9RsC: goto Txkwf; OEO72: $data["\155\163\147"] = "\163\x65\142\141\147\x69\x61\156\40\x74\141\x62\145\x6c\x20\x62\145\154\165\x6d\40\144\x69\142\165\x61\164"; goto Cl1TJ; ncL7Q: $data = $this->getSaved(); goto J3mLb; Z6hHb: Wf93o: goto T9YYl; IOf92: $this->load->view("\151\156\x73\164\141\x6c\x6c\x2f\x66\157\x6f\164\145\162"); goto dwvOK; oXLqW: redirect("\165\160\144\x61\x74\145"); goto Z6hHb; BDolB: $this->load->view("\151\156\x73\164\x61\x6c\154\x2f\150\145\141\144\145\162", ["\144\141\164\x61" => $data]); goto iQ0O2; v4wza: if ($res == "\x33") { goto M9RsC; } goto l5fW1; BGB3s: $res = $this->install->check_installer(); goto LPAS9; LPAS9: if ($res == "\60") { goto NADMn; } goto xGF5w; CHF30: x896X: goto ncL7Q; NeWfu: goto x896X; goto tszBw; J3mLb: $data->error = $res; goto BDolB; dwvOK: goto Wf93o; goto S7lnD; iQ0O2: $this->load->view("\x69\x6e\x73\x74\141\154\154\57\163\164\x65\160"); goto IOf92; S7lnD: NADMn: goto oXLqW; Txkwf: $data["\x6d\x73\x67"] = "\x62\x65\154\165\x6d\x20\x61\x64\x61\40\x61\144\155\151\x6e\x69\163\164\x72\141\x74\157\162"; goto CHF30; l5fW1: $data["\155\x73\147"] = "\142\x65\x6c\165\155\x20\141\x64\141\40\144\141\x74\141\x20\x73\x65\153\157\154\141\150"; goto NeWfu; T9YYl: } function getSaved() { goto fOzJE; Q7gIQ: $data["\165\163\145\162\x6e\x61\155\x65"] = $db["\144\x65\146\x61\165\154\164"]["\165\163\145\x72\x6e\141\155\145"]; goto WZcFH; VSB5E: $data["\150\157\x73\164\x6e\141\155\145"] = $db["\144\145\x66\x61\x75\x6c\x74"]["\x68\157\163\x74\x6e\141\155\x65"]; goto Q7gIQ; K6T7m: GLuqy: goto m0LWi; H6cZM: $data["\163\x65\153\157\154\x61\150"] = $setting->sekolah; goto FPX_r; Q6LmY: $data["\x64\x65\163\141"] = ''; goto Y3P5n; mV5hN: $current_page = 2; goto DO_r1; m0LWi: $setting = $this->dashboard->getSetting(); goto wY5Wg; yG2yf: FmN6M: goto FJ9K0; ePMr0: $data["\141\x6c\x61\x6d\x61\x74"] = ''; goto Q6LmY; K8fHn: $data["\x61\x70\x6c\151\x6b\141\163\151"] = $setting->nama_aplikasi; goto H6cZM; V1Vyz: $admin = $this->db->get("\165\x73\145\x72\x73")->row(); goto CLFsK; fVuDb: $data["\x73\141\164\165\x61\156"] = $setting->satuan_pendidikan; goto hB31u; DO_r1: $data["\155\x73\x67"] = "\124\141\x62\x6c\x65\x20\x60\x75\163\x65\x72\x73\x60\x20\x62\145\154\165\155\x20\144\x69\x62\x75\x61\x74"; goto lIbJs; rHQr9: $data["\153\145\143"] = $setting->kecamatan; goto fl7Ar; lIbJs: goto pKJ8v; goto KWrya; EbpBy: $data["\160\141\x73\x73\x5f\x61\x64\155\x69\156"] = ''; goto Bw6PH; W0SXm: $data["\x6b\x6f\x74\x61"] = ''; goto nCuYy; yY6Wp: $data["\165\x73\x65\x72\137\x61\x64\x6d\x69\156"] = ''; goto EbpBy; CLFsK: if (!($admin != null)) { goto GLuqy; } goto fi7o0; eyB8a: $data["\x64\141\164\141\x62\141\163\145"] = $database; goto T0lUR; w3EN9: $data["\160\x61\163\x73\137\141\x64\155\151\156"] = $admin->password; goto K6T7m; AY_zq: $current_page = 2; goto Ouy4b; FJ9K0: $current_page = $admin == null ? 2 : ($setting == null ? 3 : 4); goto FpI2h; Bw6PH: $data["\x61\x70\154\151\x6b\x61\163\x69"] = ''; goto XBh0N; KWrya: RMPr2: goto V1Vyz; hB31u: $data["\153\145\x70\x73\x65\x6b"] = $setting->kepsek; goto qFz_V; fi7o0: $data["\156\141\x6d\x61\137\141\x64\x6d\151\156"] = $admin->first_name . "\40" . $admin->last_name; goto nWf0R; h4XdB: $data["\160\x72\x6f\166"] = $setting->provinsi; goto yG2yf; Y3P5n: $data["\153\x65\143"] = ''; goto W0SXm; WP0jB: $database = $db["\x64\145\146\141\x75\x6c\x74"]["\144\x61\164\x61\x62\141\x73\145"]; goto VSB5E; Ouy4b: if ($this->db->table_exists("\165\x73\145\162\x73")) { goto RMPr2; } goto mV5hN; nWf0R: $data["\x75\x73\x65\x72\137\141\144\x6d\x69\x6e"] = $admin->username; goto w3EN9; wY5Wg: if (!($setting != null)) { goto FmN6M; } goto K8fHn; nCuYy: $data["\160\x72\157\x76"] = ''; goto AY_zq; w8R1_: $data["\x6a\145\x6e\x6a\141\156\147"] = ''; goto ba2q1; ba2q1: $data["\x73\x61\164\x75\x61\x6e"] = ''; goto kBeMe; WZcFH: $data["\160\141\163\163\x77\157\162\144"] = $db["\x64\x65\x66\x61\165\154\x74"]["\x70\141\163\x73\167\157\162\144"]; goto eyB8a; FPX_r: $data["\x6a\x65\x6e\152\141\156\147"] = $setting->jenjang; goto fVuDb; fl7Ar: $data["\x6b\157\x74\141"] = $setting->kota; goto h4XdB; FUmhd: return json_decode(json_encode($data)); goto obYZy; nAyAL: $data["\143\x75\162\x72\145\x6e\164\x5f\160\141\147\x65"] = $current_page; goto FUmhd; T0lUR: $data["\156\x61\155\141\x5f\141\x64\155\x69\156"] = ''; goto yY6Wp; FpI2h: pKJ8v: goto nAyAL; qFz_V: $data["\x61\x6c\141\155\141\x74"] = $setting->alamat; goto O8X8H; O8X8H: $data["\144\x65\x73\x61"] = $setting->desa; goto rHQr9; fOzJE: include APPPATH . "\143\x6f\x6e\x66\x69\147\x2f\x64\141\164\x61\142\141\x73\x65\56\160\150\160"; goto WP0jB; kBeMe: $data["\x6b\145\x70\x73\145\x6b"] = ''; goto ePMr0; XBh0N: $data["\x73\145\153\157\x6c\x61\150"] = ''; goto w8R1_; obYZy: } public function steps() { goto tRoCq; P_PbG: $this->load->view("\151\x6e\163\x74\141\154\x6c\57\x73\164\145\160"); goto JKLj0; JKLj0: $this->load->view("\x69\156\163\164\x61\x6c\154\57\146\157\157\x74\145\162"); goto y9C2J; Cx3Y2: $this->load->view("\x69\156\x73\x74\141\x6c\154\x2f\150\145\x61\144\x65\162", ["\x64\141\164\x61" => $data]); goto P_PbG; tRoCq: $data = $this->getSaved(); goto Cx3Y2; y9C2J: } public function checkDatabase() { goto AkwxF; U_Uo9: $data["\150\157\163\x74"] = true; goto rxsCO; DfqqA: $data["\150\157\x73\x74\x5f\x6d\x73\x67"] = "\x74\x69\144\141\153\x20\x62\x6f\154\x65\150\x20\141\x64\141\x20\x79\141\156\x67\x20\153\157\163\x6f\x6e\x67"; goto yHzgn; UgprF: $data["\144\141\164\141\x62\141\x73\145"] = $this->create_database($hostname, $hostuser, $hostpass, $database); goto wyFQ_; e2Ghj: goto DRjOy; goto mAVAu; N43RG: if (is_writable($output_path)) { goto Ed65X; } goto UIY7X; yHzgn: goto x8uwl; goto rjIZk; F4EDT: $output_path = APPPATH . "\143\157\x6e\x66\x69\147\x2f\144\x61\x74\x61\142\x61\163\145\56\x70\150\160"; goto cve6n; wyFQ_: $data["\x74\141\142\154\145"] = $this->create_tables($hostname, $hostuser, $hostpass, $database); goto MYQ_L; lmkQx: $new = str_replace("\45\110\x4f\123\x54\116\x41\115\105\x25", $hostname, $database_file); goto y8GrI; cTTAd: $template_path = "\56\x2f\141\163\163\x65\x74\x73\x2f\x61\x70\x70\57\x64\142\57\144\x61\164\x61\142\141\x73\x65\x2e\160\150\x70"; goto F4EDT; wcOnO: $data["\150\x6f\x73\164\x5f\x6d\163\147"] = "\x74\x69\144\x61\153\x20\141\x64\141\x20\x61\153\x73\x65\163\40\153\x65\40\146\151\154\x65\x20\x64\141\x74\141\x62\x61\x73\x65\56\x70\x68\160\x2c\x20\160\x61\163\x74\151\x6b\x61\156\40\160\145\x72\x6d\x69\163\163\151\x6f\x6e\40\163\165\144\x61\x68\40\144\151\x7a\x69\x6e\153\141\x6e"; goto S4i3q; kJrIk: if (fwrite($handle, $new)) { goto YMfyR; } goto xy5ng; R4LSh: $data["\x68\x6f\x73\164"] = false; goto DfqqA; KqoP5: $new = str_replace("\45\104\101\x54\101\102\101\x53\x45\45", $database, $new); goto zxN7O; hSNcH: if ($this->validate_host($hostname, $hostuser, $database)) { goto iLZ7Z; } goto R4LSh; ykm3K: $hostpass = $this->input->post("\150\157\163\164\x70\x61\163\163", true); goto GC0Ox; bfTvR: $hostuser = $this->input->post("\x68\x6f\x73\164\165\163\x65\x72", true); goto ykm3K; zxN7O: $handle = fopen($output_path, "\x77\x2b"); goto N5ckJ; cve6n: $database_file = file_get_contents($template_path); goto lmkQx; o3Cv6: x8uwl: goto rULhN; USh9k: n1OaF: goto o3Cv6; rjIZk: iLZ7Z: goto cTTAd; rxsCO: $data["\x68\157\x73\164\x5f\x6d\x73\x67"] = "\142\145\150\x61\x73\151\x6c"; goto UgprF; GC0Ox: $database = $this->input->post("\144\x61\x74\141\x62\141\x73\145", true); goto hSNcH; y8GrI: $new = str_replace("\x25\x55\x53\x45\x52\116\x41\115\x45\45", $hostuser, $new); goto EsP19; Lu86O: DRjOy: goto USh9k; UIY7X: $data["\x68\157\163\x74"] = false; goto wcOnO; EsP19: $new = str_replace("\x25\120\x41\123\123\127\x4f\x52\x44\x25", $hostpass, $new); goto KqoP5; lFplZ: $data["\x68\x6f\x73\x74\x5f\x6d\x73\147"] = "\163\x75\153\163\145\163"; goto GHqmd; h6Pj2: Ed65X: goto kJrIk; N5ckJ: @chmod($output_path, 0777); goto N43RG; S4i3q: goto n1OaF; goto h6Pj2; AkwxF: $hostname = $this->input->post("\150\157\163\x74\x6e\x61\155\145", true); goto bfTvR; rULhN: $this->output_json($data); goto zPI7_; GHqmd: $data["\144\141\164\141\142\141\163\145"] = true; goto Lu86O; Y9iM1: $data["\150\x6f\163\164\137\155\163\x67"] = "\x67\141\x67\141\154\x20\155\x65\x6d\x62\x75\x61\x74\x20\156\141\155\x61\x20\144\x61\164\x61\x62\141\x73\145"; goto e2Ghj; mAVAu: YMfyR: goto U_Uo9; MYQ_L: $data["\150\157\x73\x74"] = true; goto lFplZ; xy5ng: $data["\x68\x6f\163\x74"] = false; goto Y9iM1; zPI7_: } public function createDb() { goto GHDLB; Ro3Pq: $data["\x64\141\x74\141\x62\x61\163\x65"] = true; goto dZHAt; nA6nK: $data["\150\157\163\x74\x5f\155\x73\147"] = "\x73\x75\x6b\x73\145\x73"; goto Ro3Pq; W9nP6: $data["\x64\x61\164\x61\x62\x61\163\145"] = false; goto er7R8; As_dJ: $hostpass = $this->input->post("\150\157\163\x74\x70\141\163\163", true); goto LJKaf; ewcs_: goto YaaQv; goto e1up6; Gmx1c: $this->output_json($data); goto STiUs; x6Mm8: $data["\x74\x61\x62\154\145"] = $this->create_tables($hostname, $hostuser, $hostpass, $database); goto uPeNf; cEJiz: $hostname = $this->input->post("\x68\x6f\x73\x74\x6e\141\155\x65", true); goto aNrEt; nLq8b: if ($page == "\x30") { goto GjDRw; } goto JQoK_; aNrEt: $hostuser = $this->input->post("\x68\x6f\x73\x74\165\x73\145\162", true); goto As_dJ; JQoK_: $data["\150\157\163\x74"] = true; goto c8tBW; er7R8: $data["\x74\141\x62\154\x65"] = false; goto ewcs_; c8tBW: $data["\x68\x6f\163\164\137\155\163\147"] = "\163\x74\145\160\x20\163\141\154\141\150"; goto W9nP6; LJKaf: $database = $this->input->post("\144\x61\x74\x61\x62\x61\163\145", true); goto x6Mm8; uPeNf: $data["\150\x6f\163\x74"] = true; goto nA6nK; e1up6: GjDRw: goto cEJiz; GHDLB: $page = $this->input->post("\x70\141\x67\145", true); goto nLq8b; dZHAt: YaaQv: goto Gmx1c; STiUs: } function validate_host($host, $usr, $db) { return !empty($host) && !empty($usr) && !empty($db); } function create_database($hostname, $hostuser, $hostpass, $database) { goto Jos9X; Hq5uN: return false; goto JcJ3p; VlLB8: $mysqli->query("\x43\x52\x45\101\x54\x45\x20\104\x41\x54\101\x42\101\123\x45\40\111\106\40\x4e\x4f\124\40\x45\x58\111\123\x54\x53\40" . $database); goto NFtgX; NFtgX: $mysqli->close(); goto FOZC7; Jos9X: $mysqli = new mysqli($hostname, $hostuser, $hostpass, ''); goto AFWDA; AFWDA: if (!mysqli_connect_errno()) { goto cpWZs; } goto Hq5uN; JcJ3p: cpWZs: goto VlLB8; FOZC7: return true; goto PGR_Y; PGR_Y: } function create_tables($hostname, $hostuser, $hostpass, $database) { goto ra4Z2; s1CH6: $query = file_get_contents("\x2e\57\x61\163\163\145\x74\x73\57\x61\x70\160\x2f\x64\142\57\x6d\x61\x73\x74\145\162\x2e\x73\x71\x6c"); goto dL0dA; XV_GD: FP1Hb: goto s1CH6; OKKOy: return false; goto XV_GD; o0zaT: if (!mysqli_connect_errno()) { goto FP1Hb; } goto OKKOy; dL0dA: $mysqli->multi_query($query); goto LmPUU; ra4Z2: $mysqli = new mysqli($hostname, $hostuser, $hostpass, $database); goto o0zaT; LmPUU: $mysqli->close(); goto vL1CS; vL1CS: return true; goto B7xl2; B7xl2: } public function createSetting() { goto oF8uR; b1RZi: $alamat = $this->input->post("\x61\154\141\155\141\164", true); goto Nhwxp; V49eQ: $sekolah = $this->input->post("\x6e\x61\155\141\137\x73\x65\153\x6f\x6c\141\150", true); goto MXnfX; fbiNs: $tlp = $this->input->post("\164\154\x70", true); goto lKwI6; Nhwxp: $kota = $this->input->post("\x6b\x6f\164\141", true); goto g7YOJ; wwLip: $data["\x69\156\163\x65\x72\x74"] = $this->db->insert("\163\145\x74\164\151\x6e\x67", $insert); goto nU4dH; ULOXa: $this->output_json($data); goto xWWrT; SIl2E: $kepsek = $this->input->post("\x6b\145\160\x73\145\x6b", true); goto b1RZi; lKwI6: $insert = ["\151\x64\x5f\163\145\164\164\x69\x6e\147" => 1, "\x73\x65\x6b\157\x6c\141\150" => $sekolah, "\x6a\x65\156\152\x61\x6e\147" => $jenjang, "\163\x61\x74\x75\x61\x6e\137\x70\x65\156\x64\x69\144\x69\153\141\156" => $satuan_pendidikan, "\x61\x6c\141\155\141\x74" => $alamat, "\x64\145\x73\x61" => $desa, "\153\157\164\x61" => $kota, "\x6b\x65\143\x61\155\x61\164\x61\x6e" => $kec, "\164\x65\154\160" => $tlp, "\x6b\x65\160\163\145\153" => $kepsek, "\x6e\x61\155\141\x5f\141\x70\154\x69\x6b\x61\163\x69" => $nama_aplikasi]; goto wwLip; oF8uR: $nama_aplikasi = $this->input->post("\x6e\x61\155\x61\x5f\x61\x70\154\x69\x6b\x61\163\151", true); goto V49eQ; MXnfX: $jenjang = $this->input->post("\152\x65\156\x6a\141\156\x67", true); goto tUb73; nU4dH: $data["\163\x61\166\x65\x64"] = $this->getSaved(); goto ULOXa; f4UdY: $desa = $this->input->post("\x64\x65\163\x61", true); goto fbiNs; tUb73: $satuan_pendidikan = $this->input->post("\163\141\x74\x75\x61\156\x5f\160\x65\156\144\151\144\x69\x6b\x61\156", true); goto SIl2E; g7YOJ: $kec = $this->input->post("\x6b\145\x63", true); goto f4UdY; xWWrT: } public function createAdmin() { goto bf2Ll; R6UcW: $this->output_json($data); goto Elg30; XA6_x: $namaAdmin = explode("\x20", $nama); goto Rmu8i; YOzMs: $last_name = end($namaAdmin); goto RnnRK; H7p5j: $email = strtolower($nama) . "\x40\141\x64\x6d\151\156\x2e\143\157\155"; goto MAYgl; RnnRK: $additional_data = ["\x66\151\162\163\164\x5f\156\x61\x6d\x65" => $first_name, "\154\x61\163\x74\137\x6e\141\155\145" => $last_name]; goto qbZWD; S8nn_: $username = $this->input->post("\165\x73\145\x72\x6e\141\x6d\145", true); goto Qbru3; qbZWD: $group = array("\x31"); goto H7p5j; KIdEX: $data["\x61\144\155\151\156"] = $create; goto R6UcW; MAYgl: $create = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto KIdEX; bf2Ll: $nama = $this->input->post("\x6e\141\x6d\141\137\x6c\145\156\147\x6b\x61\x70", true); goto S8nn_; Rmu8i: $first_name = $namaAdmin[0]; goto YOzMs; Qbru3: $password = $this->input->post("\160\141\x73\163\x77\157\162\144", true); goto XA6_x; Elg30: } public function createApp() { goto BcL_L; jLx5E: $alamat = $this->input->post("\141\x6c\x61\x6d\x61\x74", true); goto PVUtM; OK35g: $create = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto hUa6a; BJMZB: $username = $this->input->post("\x75\163\x65\x72\156\141\x6d\x65", true); goto NqaOk; mmQAg: $insert = ["\151\x64\x5f\163\145\164\164\x69\156\x67" => 1, "\x73\x65\153\157\x6c\x61\150" => $sekolah, "\x6a\145\156\152\141\x6e\x67" => $jenjang, "\x73\141\164\165\x61\x6e\137\160\x65\x6e\144\151\144\x69\x6b\x61\x6e" => $satuan_pendidikan, "\x61\x6c\141\x6d\x61\x74" => $alamat, "\144\x65\163\x61" => $desa, "\153\157\x74\x61" => $kota, "\153\x65\x63\141\x6d\x61\x74\141\156" => $kec, "\x70\x72\157\x76\x69\x6e\x73\x69" => $prov, "\153\x65\160\x73\x65\153" => $kepsek, "\x6e\x61\155\x61\137\x61\160\154\x69\x6b\141\x73\x69" => $nama_aplikasi]; goto YHJEF; NqaOk: $password = $this->input->post("\160\141\x73\163\167\157\162\x64", true); goto hWakm; jvGuw: $email = strtolower($nama) . "\100\141\x64\x6d\151\x6e\x2e\x63\x6f\155"; goto OK35g; t1hrf: $first_name = $namaAdmin[0]; goto iDmEj; X3Poe: $group = array("\61"); goto jvGuw; sRia2: $this->output_json($data); goto nNFXJ; ZzfOI: $desa = $this->input->post("\x64\145\x73\141", true); goto yBt8Z; hWakm: $nama_aplikasi = $this->input->post("\156\141\x6d\141\x5f\x61\x70\x6c\x69\153\141\163\151", true); goto OKsxD; hUa6a: $data["\151\x6e\x73\145\x72\164"] = $this->db->insert("\163\145\x74\164\151\x6e\147", $insert); goto doh1S; YHJEF: $namaAdmin = explode("\40", $nama); goto t1hrf; doh1S: $data["\141\144\155\151\x6e"] = $create; goto sRia2; iDmEj: $last_name = end($namaAdmin); goto e4ksR; e4ksR: $additional_data = ["\146\151\162\163\164\x5f\156\141\155\145" => $first_name, "\x6c\x61\163\164\x5f\156\x61\155\145" => $last_name]; goto X3Poe; BcL_L: $nama = $this->input->post("\156\141\155\x61\137\154\145\156\x67\153\x61\x70", true); goto BJMZB; OKsxD: $sekolah = $this->input->post("\x6e\x61\x6d\x61\137\163\x65\x6b\x6f\x6c\x61\x68", true); goto QhZl_; QhZl_: $jenjang = $this->input->post("\x6a\x65\156\x6a\141\x6e\147", true); goto Gl0gP; auDur: $kec = $this->input->post("\x6b\x65\143", true); goto ZzfOI; yBt8Z: $prov = $this->input->post("\x70\x72\157\x76", true); goto mmQAg; PVUtM: $kota = $this->input->post("\153\x6f\x74\x61", true); goto auDur; Gl0gP: $satuan_pendidikan = $this->input->post("\x73\141\x74\165\x61\x6e", true); goto nULea; nULea: $kepsek = $this->input->post("\153\145\x70\163\x65\x6b", true); goto jLx5E; nNFXJ: } }
