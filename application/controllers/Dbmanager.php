<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\x53\x45\x50\x41\x54\110") or exit("\116\x6f\x20\x64\151\x72\x65\143\x74\x20\x73\x63\162\x69\160\x74\x20\x61\x63\x63\x65\163\x73\40\141\154\154\157\x77\x65\144"); class Dbmanager extends CI_Controller { public function __construct() { goto TAQTe; FSNe4: VslsB: goto ThRcA; fWCJY: $this->load->library("\165\x70\154\157\x61\x64"); goto g4Jrg; Z5b0o: $this->load->model("\x44\141\163\x68\142\x6f\x61\162\x64\x5f\155\157\144\x65\x6c", "\144\x61\x73\x68\142\157\141\x72\144"); goto tYt2c; g4Jrg: $this->load->model("\x53\145\164\x74\151\156\x67\x73\x5f\x6d\157\x64\x65\154", "\163\x65\164\164\x69\x6e\147\163"); goto Z5b0o; cfic2: Y_H31: goto fWCJY; QlqW2: if (!$this->ion_auth->logged_in()) { goto ZPq3k; } goto v30Qq; v30Qq: if ($this->ion_auth->is_admin()) { goto VslsB; } goto EA5V8; m6Tou: redirect("\141\x75\x74\x68"); goto cfic2; TAQTe: parent::__construct(); goto QlqW2; vvwj9: ZPq3k: goto m6Tou; tYt2c: $this->load->helper("\x64\151\162\x65\143\164\157\x72\x79"); goto za7Fx; ThRcA: goto Y_H31; goto vvwj9; EA5V8: show_error("\x48\141\x6e\x79\x61\x20\101\144\x6d\151\156\40\x79\x61\x6e\x67\x20\142\x6f\154\145\x68\40\x6d\145\156\147\x61\153\x73\x65\163\40\x68\141\x6c\x61\x6d\141\156\40\151\x6e\151", 403, "\x41\x6b\x73\x65\163\40\144\x69\154\x61\x72\x61\156\x67"); goto FSNe4; za7Fx: } public function output_json($data, $encode = true) { goto w0N08; w0N08: if (!$encode) { goto qY6XF; } goto BCHZH; BCHZH: $data = json_encode($data); goto Rn_ZE; Rn_ZE: qY6XF: goto RqnoP; RqnoP: $this->output->set_content_type("\141\x70\160\x6c\151\143\x61\164\x69\x6f\156\x2f\152\x73\157\156")->set_output($data); goto fw3j5; fw3j5: } public function index() { goto Diggg; kyN46: $data["\x74\x61\x62\x6c\x65\x73"] = $this->db->list_tables(); goto vjL7z; vjL7z: $this->load->view("\x5f\x74\x65\x6d\x70\154\x61\x74\x65\163\x2f\144\x61\x73\150\x62\x6f\141\x72\x64\x2f\x5f\x68\x65\x61\x64\145\x72", $data); goto OkE0l; wQWY9: $arrFile = []; goto uhfCg; CDVzU: $this->load->view("\x5f\164\x65\x6d\x70\x6c\141\x74\145\x73\x2f\144\141\163\x68\x62\x6f\x61\162\144\x2f\137\x66\x6f\157\164\145\x72"); goto gSPXS; uhfCg: foreach ($list as $key => $value) { goto pbhtT; LdDDZ: $tgl = filemtime("\x2e\x2f\x62\x61\x63\153\165\160\x73\57" . $value); goto fDrRL; kBDGe: $arrFile[$key] = ["\164\171\160\145" => $type, "\156\x61\155\141" => $nama, "\164\147\x6c" => $tgl, "\163\x69\x7a\x65" => $size, "\x73\162\143" => $value]; goto EIcK2; EIcK2: oBTEc: goto KMxBR; wGdf3: $type = $nfile[1]; goto LdDDZ; pbhtT: $nfile = explode("\x2e", $value); goto r0WSg; fDrRL: $size = $this->formatSizeUnits(filesize("\56\57\142\x61\x63\153\165\160\x73\57" . $value)); goto kBDGe; r0WSg: $nama = $nfile[0]; goto wGdf3; KMxBR: } goto o123y; MBRUS: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto iNfZS; o123y: kkIbS: goto j0O4f; iNfZS: $data["\163\155\164\137\141\x63\x74\x69\x76\145"] = $this->dashboard->getSemesterActive(); goto rbOvY; j0O4f: $data["\x6c\x69\163\164"] = $arrFile; goto kyN46; rbOvY: $list = directory_map("\x2e\x2f\x62\141\143\153\165\x70\163\57"); goto wQWY9; WI8T_: $data = ["\165\x73\x65\x72" => $user, "\152\x75\144\165\154" => "\102\141\143\x6b\x75\160\40\x64\x61\156\x20\x52\x65\x73\164\157\162\x65", "\163\165\x62\x6a\165\144\165\154" => "\x42\141\143\153\165\x70\x20\x53\x65\155\165\141\40\x44\141\x74\x61\142\141\163\x65\40\144\x61\x6e\x20\x46\151\154\145", "\x70\162\x6f\146\x69\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\x69\x6e\x67" => $this->dashboard->getSetting()]; goto OPtfV; OpAd4: $data["\164\160\x5f\141\x63\164\151\166\145"] = $this->dashboard->getTahunActive(); goto MBRUS; OkE0l: $this->load->view("\163\145\x74\x74\151\156\x67\57\x64\142"); goto CDVzU; OPtfV: $data["\x74\x70"] = $this->dashboard->getTahun(); goto OpAd4; Diggg: $user = $this->ion_auth->user()->row(); goto WI8T_; gSPXS: } public function manage() { goto T3kVY; KVqtc: foreach ($tables as $table) { $data_tables[$table] = $this->settings->toJSON($table); zyKXi: } goto CPyzq; Y5mJx: $this->load->view("\x73\x65\x74\x74\x69\156\147\57\155\141\156\x61\x67\145"); goto gUW5b; T3kVY: $user = $this->ion_auth->user()->row(); goto T3e1Q; T3e1Q: $data = ["\165\163\x65\x72" => $user, "\152\x75\x64\x75\x6c" => "\102\x65\162\x73\x69\x68\x6b\x61\156\x20\x44\x61\x74\x61", "\x73\165\142\152\165\x64\x75\x6c" => "\110\141\x70\165\x73\40\x44\141\x74\x61", "\160\162\x6f\146\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\x74\x74\151\156\147" => $this->dashboard->getSetting()]; goto iylYf; nBGm8: $data["\164\141\142\154\x65\163"] = $data_tables; goto f_s2Z; gUW5b: $this->load->view("\x5f\x74\145\155\160\154\x61\x74\145\x73\x2f\x64\141\x73\x68\142\157\x61\162\144\x2f\x5f\146\157\157\164\145\162"); goto b7mxt; CPyzq: ocMb4: goto nBGm8; HOV6L: $data["\x74\x70\137\x61\143\x74\151\x76\145"] = $this->dashboard->getTahunActive(); goto OSH_B; f_s2Z: $this->load->view("\x5f\164\145\x6d\x70\x6c\x61\x74\145\163\57\x64\141\x73\150\142\157\141\x72\144\57\137\x68\145\141\x64\x65\162", $data); goto Y5mJx; BH91n: $tables = $this->db->list_tables(); goto KVqtc; gu__C: $data_tables = []; goto BH91n; iylYf: $data["\x74\160"] = $this->dashboard->getTahun(); goto HOV6L; OSH_B: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto ReyUH; ReyUH: $data["\x73\x6d\164\137\141\x63\164\x69\166\145"] = $this->dashboard->getSemesterActive(); goto gu__C; b7mxt: } public function truncate() { goto SRvsK; fPBSK: $this->settings->truncate($tables); goto Kt6F9; Kt6F9: $this->output_json(["\163\x74\141\x74\x75\163" => true]); goto tpfIB; SRvsK: $tables = $this->db->list_tables(); goto fPBSK; tpfIB: } public function backupDb() { goto CshVP; igfn6: $prefs = ["\x74\x61\x62\154\x65\163" => $this->db->list_tables(), "\151\x67\156\157\x72\145" => array(), "\146\x6f\162\x6d\x61\164" => "\x7a\151\x70", "\x66\151\x6c\145\x6e\141\x6d\145" => "\x62\141\143\153\x75\x70\x2e\163\161\154", "\x61\x64\144\x5f\x64\x72\x6f\160" => TRUE, "\141\x64\x64\137\x69\x6e\x73\x65\x72\x74" => TRUE, "\x6e\x65\167\154\x69\x6e\145" => "\xa"]; goto I71dF; sBpoz: $this->dbutil->optimize_database(); goto igfn6; CshVP: $this->load->dbutil(); goto sBpoz; I71dF: $backup = $this->dbutil->backup($prefs); goto kLMF0; B3XmI: write_file("\56\x2f\x62\x61\143\x6b\165\160\163\x2f\142\141\143\153\165\x70\x2d\144\x62\x2d" . date("\131\55\x6d\55\144\55\110\55\151\55\x73") . "\x2e\x73\161\x6c\56\172\151\x70", $backup); goto UGQ_y; kLMF0: $this->load->helper("\x66\x69\154\145"); goto B3XmI; UGQ_y: $this->output_json(["\164\x79\x70\x65" => "\144\x61\164\x61\142\x61\163\145", "\x6d\145\163\x73\141\x67\x65" => "\x44\141\164\141\x62\x61\x73\x65\x20\142\x65\162\150\141\x73\x69\154\40\x64\x69\142\x61\143\x6b\x75\x70"]); goto OzjIF; OzjIF: } public function backupData() { goto eGZ53; hV4kc: $this->output_json(["\x74\171\x70\x65" => "\146\151\x6c\145", "\155\x65\x73\163\x61\147\145" => "\106\151\x6c\145\x20\144\141\x74\x61\x20\142\145\x72\x68\x61\163\x69\x6c\40\144\x69\142\x61\143\x6b\165\x70"]); goto HAdHU; zQ6L8: $this->zip->read_dir("\x75\160\154\157\141\144\x73"); goto M33pI; M33pI: $this->zip->archive("\56\57\142\x61\x63\x6b\x75\160\x73\57\x62\141\x63\153\165\160\55\x66\x69\154\145\55" . date("\131\x2d\x6d\x2d\x64\55\110\55\x69\x2d\x73") . "\x2e\172\151\160"); goto hV4kc; eGZ53: $this->load->library("\x7a\151\160"); goto zQ6L8; HAdHU: } public function hapusBackup($src) { goto hw61M; M_m4U: goto H5Tkt; goto dlOCH; A2zhi: $this->output_json(["\x73\164\141\164\165\x73" => true, "\155\x65\x73\x73\141\x67\145" => "\x42\x61\143\153\165\x70\x20\x62\x65\162\x68\x61\163\x69\154\40\144\x69\150\141\x70\165\163"]); goto CBzcQ; Qmc5B: $this->output_json(["\163\x74\141\x74\165\163" => false, "\155\145\x73\163\x61\x67\x65" => "\x47\x61\147\141\154\x20\155\x65\156\x67\x68\141\160\165\x73\40\x62\141\143\x6b\x75\x70"]); goto M_m4U; CBzcQ: H5Tkt: goto aj73c; hw61M: if (unlink("\56\57\142\141\x63\x6b\165\x70\163\x2f" . $src)) { goto NiUra; } goto Qmc5B; dlOCH: NiUra: goto A2zhi; aj73c: } function formatSizeUnits($bytes) { goto ks2ax; OfMRP: Ukk3i: goto I6vDg; I6vDg: $bytes = $bytes . "\40\x62\x79\x74\145"; goto nPKaP; wuV1R: if ($bytes >= 1024) { goto C_N98; } goto GSqiQ; ks2ax: if ($bytes >= 1073741824) { goto EmxiJ; } goto a71zc; Ch9ZC: $bytes = number_format($bytes / 1024, 2) . "\40\x4b\x42"; goto APO05; GSqiQ: if ($bytes > 1) { goto B7btI; } goto F2BRr; lgQJN: C_N98: goto Ch9ZC; Gj3bT: $bytes = number_format($bytes / 1048576, 2) . "\40\115\102"; goto sDfgX; c2Tw1: ZVO_6: goto Gj3bT; a71zc: if ($bytes >= 1048576) { goto ZVO_6; } goto wuV1R; trFyw: goto c62Qr; goto w6CAT; nPKaP: c62Qr: goto N4G2J; vz76w: goto c62Qr; goto OfMRP; R_eMj: $bytes = "\x30\40\142\171\164\145\x73"; goto trFyw; i2ZXo: $bytes = $bytes . "\40\142\171\x74\145\163"; goto vz76w; F2BRr: if ($bytes == 1) { goto Ukk3i; } goto R_eMj; w6CAT: EmxiJ: goto MEuDP; MEuDP: $bytes = number_format($bytes / 1073741824, 2) . "\x20\x47\x42"; goto gMfGU; sDfgX: goto c62Qr; goto lgQJN; APO05: goto c62Qr; goto upUgN; N4G2J: return $bytes; goto OyVzR; upUgN: B7btI: goto i2ZXo; gMfGU: goto c62Qr; goto c2Tw1; OyVzR: } }
