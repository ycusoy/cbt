<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\x53\105\120\101\124\x48") or exit("\x4e\x6f\x20\144\x69\x72\x65\143\x74\x20\x73\143\x72\151\x70\x74\x20\x61\x63\143\x65\163\x73\40\x61\154\x6c\x6f\167\145\144"); class Dbclear extends CI_Controller { public function __construct() { goto TiTQ2; oO0Uv: TYiSl: goto Nn5rI; bgo3C: FrG7J: goto JJSu7; EKE19: if (!$this->ion_auth->logged_in()) { goto TYiSl; } goto WTAHQ; b3gUq: $this->load->helper("\144\x69\162\145\143\x74\157\162\x79"); goto L6ZvA; YFVZx: $this->load->library("\x75\160\154\x6f\141\144"); goto n8MmR; TiTQ2: parent::__construct(); goto EKE19; niNB_: $this->load->model("\x44\x61\163\x68\142\157\x61\x72\144\x5f\155\157\144\145\154", "\144\x61\x73\x68\142\157\x61\x72\x64"); goto b3gUq; e2n9k: show_error("\x48\x61\156\171\141\x20\x41\144\x6d\151\x6e\x20\x79\141\156\x67\x20\x62\157\154\145\x68\40\x6d\145\156\x67\141\x6b\x73\145\x73\x20\150\x61\x6c\x61\155\x61\x6e\x20\x69\156\x69", 403, "\101\153\x73\145\163\40\144\x69\x6c\141\162\x61\x6e\147"); goto bgo3C; VCPfe: VXS_R: goto YFVZx; n8MmR: $this->load->dbforge(); goto u5Fcr; JJSu7: goto VXS_R; goto oO0Uv; Nn5rI: redirect("\141\x75\x74\x68"); goto VCPfe; WTAHQ: if ($this->ion_auth->is_admin()) { goto FrG7J; } goto e2n9k; u5Fcr: $this->load->model("\123\145\164\x74\x69\x6e\x67\x73\137\x6d\x6f\x64\145\x6c", "\x73\145\x74\164\151\156\147\163"); goto niNB_; L6ZvA: } public function output_json($data, $encode = true) { goto f3Xyo; zSytM: h4u6z: goto d7ECu; f3Xyo: if (!$encode) { goto h4u6z; } goto ObAkL; ObAkL: $data = json_encode($data); goto zSytM; d7ECu: $this->output->set_content_type("\x61\160\160\154\x69\x63\141\x74\151\157\x6e\x2f\152\x73\x6f\x6e")->set_output($data); goto TSpHC; TSpHC: } public function index() { goto TskM2; HQojS: $data["\x73\x6d\164\137\141\143\x74\x69\166\x65"] = $this->dashboard->getSemesterActive(); goto gQ_SI; tOpQV: $tables = $this->db->list_tables(); goto uMSX0; Wx76X: $this->load->view("\137\164\x65\155\160\x6c\x61\x74\x65\163\57\x64\x61\163\150\142\x6f\141\x72\x64\x2f\x5f\150\145\141\144\x65\x72", $data); goto SCll7; srTZJ: $data["\x74\160\137\x61\x63\x74\151\x76\145"] = $this->dashboard->getTahunActive(); goto Zhq0u; x7QH2: hlrYY: goto Ms9PE; Ms9PE: $data["\164\x61\142\154\145\x73"] = $data_tables; goto Wx76X; l9IqL: $data_tables = []; goto tOpQV; tNTxB: $user = $this->ion_auth->user()->row(); goto x_6ze; obdHJ: $json = json_decode($json); goto qRYLU; SCll7: $this->load->view("\163\x65\x74\x74\x69\156\x67\57\x6d\x61\156\141\147\x65"); goto QG1OG; gQ_SI: $excludes = ["\141\160\x69\137\163\x65\x74\164\x69\x6e\x67", "\141\160\x69\137\x74\x6f\153\145\156", "\x62\165\x6c\141\x6e", "\x68\x61\x72\x69", "\163\x65\164\x74\151\x6e\x67", "\x63\142\164\137\152\145\156\x69\x73", "\143\x62\164\x5f\162\165\x61\x6e\147", "\143\142\164\137\163\x65\x73\x69", "\143\142\x74\x5f\x74\157\153\145\x6e", "\154\x65\x76\x65\154\137\147\165\x72\x75", "\154\145\166\145\x6c\137\153\x65\x6c\x61\x73", "\155\x61\x73\164\145\x72\137\164\x70", "\x6d\141\x73\164\145\162\x5f\163\x6d\x74", "\155\x61\163\164\145\x72\137\150\x61\x72\x69\137\145\x66\145\x6b\x74\x69\x66", "\165\163\x65\162\163", "\147\x72\157\165\160\x73", "\x75\163\x65\162\x73\137\x67\162\x6f\165\x70\x73", "\154\157\x67\x69\156\137\x61\164\164\x65\155\160\164\163", "\x75\163\145\x72\163\x5f\x70\162\157\x66\151\x6c\145", "\x72\141\160\157\162\137\141\144\x6d\x69\x6e\x5f\x73\x65\x74\x74\151\x6e\147", "\x72\x75\x6e\x6e\151\x6e\x67\137\x74\x65\170\164"]; goto l9IqL; uMSX0: foreach ($tables as $table) { goto R7Kmj; I70LM: if (in_array($table, $excludes)) { goto jMHA0; } goto D72Tx; KjvR4: jMHA0: goto ayJYv; RSYLZ: $this->dbforge->drop_table($table, true); goto URSB5; E7SNc: if (!($nums == 0)) { goto fvgyY; } goto Adq89; D72Tx: if ($table == "\x62\165\153\x75\137\156\x69\154\141\151") { goto rUprE; } goto RSYLZ; nNPfy: $table_info = ["\x6b\x65\164" => $this->keterangan()[$table], "\163\x69\172\x65" => $this->settings->rowSize($table), "\164\x61\x62\x6c\x65" => $table, "\156\x61\x6d\x65" => ucwords($name)]; goto Cuadk; W812G: s8V1S: goto S5nyP; cesHp: NRhe0: goto SLtsh; Beupv: j4LAJ: goto KjvR4; S5nyP: if (in_array($table, $excludes)) { goto sUHza; } goto OJhsP; M_bHG: BAh14: goto cesHp; iuOx6: $nums = $this->db->get("\142\165\x6b\x75\137\156\x69\x6c\141\x69")->num_rows(); goto E7SNc; inIvb: sUHza: goto M_bHG; URSB5: goto j4LAJ; goto QQ_SS; Adq89: $this->dbforge->drop_table("\x62\x75\x6b\165\x5f\x6e\151\x6c\x61\x69", true); goto H4m9q; H4m9q: fvgyY: goto Beupv; ayJYv: goto BAh14; goto W812G; OJhsP: $name = str_replace("\x5f", "\40", $table); goto nNPfy; R7Kmj: if (isset($json[$table])) { goto s8V1S; } goto I70LM; Cuadk: $data_tables[$table_info["\x6b\x65\x74"]][] = $table_info; goto inIvb; QQ_SS: rUprE: goto iuOx6; SLtsh: } goto x7QH2; Zhq0u: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto HQojS; qRYLU: $json = (array) $json; goto tNTxB; x_6ze: $data = ["\x75\163\x65\x72" => $user, "\x6a\x75\x64\165\154" => "\102\x65\x72\163\151\150\153\x61\156\x20\x44\141\x74\141", "\x73\x75\x62\x6a\x75\x64\x75\154" => "\x48\x61\x70\165\x73\x20\x44\x61\164\141", "\160\x72\x6f\x66\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\x74\164\151\x6e\147" => $this->dashboard->getSetting()]; goto VlMBP; VlMBP: $data["\164\160"] = $this->dashboard->getTahun(); goto srTZJ; QG1OG: $this->load->view("\137\164\145\155\x70\154\x61\164\x65\x73\57\144\x61\163\x68\142\157\x61\x72\x64\57\137\x66\157\157\x74\x65\x72"); goto wF3KQ; TskM2: $json = file_get_contents("\56\x2f\141\x73\163\145\164\x73\57\x61\x70\160\x2f\x64\142\57\144\141\x74\141\x62\x61\x73\x65\x2e\152\x73\x6f\156"); goto obdHJ; wF3KQ: } public function hapusTable() { goto Ad3vZ; WcApV: $this->load->helper("\x66\151\154\x65"); goto xbU4I; o1qKb: $this->output_json(["\x74\x79\x70\x65" => "\144\x61\x74\141\x62\141\x73\145", "\155\145\163\x73\141\147\145" => "\104\141\164\x61\142\141\163\x65\40\x62\x65\162\x68\141\163\x69\154\40\144\x69\142\141\x63\x6b\x75\160"]); goto Q2STv; F6_ji: $prefs = ["\164\x61\142\154\145\x73" => array($table), "\x69\x67\x6e\x6f\162\145" => array(), "\146\x6f\x72\x6d\x61\164" => "\164\x78\164", "\146\x69\x6c\x65\x6e\141\155\145" => $table . "\56\163\x71\154", "\141\144\x64\137\x64\x72\x6f\160" => TRUE, "\141\144\144\x5f\x69\156\163\145\x72\164" => TRUE, "\156\x65\x77\x6c\151\x6e\x65" => "\12"]; goto LjvbI; xbU4I: write_file("\56\x2f\142\x61\x63\153\165\x70\x73\x2f\x62\x61\x63\153\165\x70\137" . $table . "\x5f" . date("\x59\x5f\x6d\137\x64\x5f\x48\x5f\151\137\x73") . "\x2e\163\x71\x6c", $backup); goto o1qKb; LjvbI: $backup = $this->dbutil->backup($prefs); goto WcApV; BWlpT: $this->load->dbutil(); goto F6_ji; Ad3vZ: $table = $this->input->post("\164\141\x62\154\145", true); goto BWlpT; Q2STv: } public function truncate() { goto GP9SO; O3O9r: $this->output_json(["\163\x74\x61\164\165\x73" => true]); goto ek1AM; WB3Ox: $this->settings->truncate($tables); goto O3O9r; GP9SO: $tables = $this->db->list_tables(); goto WB3Ox; ek1AM: } private function keterangan() { $data = ["\141\x70\x69\x5f\163\x65\x74\x74\151\156\147" => "\61", "\x61\160\151\x5f\164\x6f\x6b\145\156" => "\61", "\142\x75\153\x75\137\151\x6e\x64\165\153" => "\61", "\x62\165\154\x61\x6e" => "\60", "\x63\142\164\137\x62\141\156\153\137\163\157\141\154" => "\x32", "\x63\x62\164\x5f\x64\165\162\x61\x73\151\x5f\163\151\x73\x77\141" => "\62", "\x63\x62\x74\x5f\x6a\x61\144\167\141\154" => "\x32", "\x63\x62\164\x5f\x6a\141\x64\x77\141\x6c\x5f\165\x6a\151\x61\x6e" => "\62", "\x63\142\x74\x5f\x6a\x65\x6e\151\163" => "\60", "\x63\142\x74\x5f\x6b\x65\x6c\x61\163\x5f\x72\x75\141\156\147" => "\62", "\143\x62\x74\x5f\153\x6f\160\x5f\x61\142\163\145\x6e\x73\x69" => "\x31", "\x63\142\164\137\x6b\x6f\x70\x5f\x62\x65\x72\x69\164\141" => "\x31", "\143\x62\164\x5f\x6b\x6f\x70\x5f\x6b\x61\162\164\165" => "\x31", "\143\142\x74\137\156\151\154\141\151" => "\x32", "\x63\x62\x74\x5f\156\157\x6d\x6f\162\137\160\145\x73\x65\x72\164\x61" => "\62", "\x63\x62\x74\x5f\160\145\156\x67\x61\x77\x61\163" => "\x32", "\x63\x62\x74\137\x72\x65\153\141\160" => "\62", "\143\142\x74\137\x72\145\153\141\160\137\x6e\151\x6c\x61\x69" => "\x32", "\143\x62\164\x5f\162\x75\x61\156\147" => "\x31", "\x63\x62\164\x5f\163\x65\x73\151" => "\61", "\x63\x62\164\137\x73\x65\x73\x69\x5f\x73\151\163\x77\141" => "\x32", "\143\x62\x74\x5f\163\157\141\154" => "\x32", "\143\142\x74\137\x73\x6f\141\154\137\163\151\163\x77\x61" => "\x32", "\143\x62\164\137\164\x6f\x6b\145\156" => "\x31", "\147\162\x6f\165\x70\x73" => "\x30", "\x68\141\x72\x69" => "\60", "\152\x61\142\141\164\x61\x6e\x5f\x67\165\x72\165" => "\61", "\153\145\x6c\x61\x73\x5f\x63\141\x74\141\164\x61\x6e\137\155\x61\160\x65\154" => "\62", "\153\x65\x6c\141\x73\x5f\143\141\164\x61\x74\x61\156\x5f\167\x61\154\151" => "\62", "\x6b\x65\154\x61\x73\137\x65\153\163\164\162\x61" => "\61", "\x6b\x65\x6c\x61\163\137\x6a\141\144\167\141\x6c\x5f\x6b\142\155" => "\62", "\153\x65\x6c\141\163\137\152\141\144\x77\141\154\x5f\x6d\141\x70\x65\154" => "\62", "\153\145\154\141\x73\137\152\x61\x64\x77\x61\x6c\137\155\141\x74\x65\x72\151" => "\62", "\x6b\145\154\x61\x73\137\152\141\144\167\141\x6c\x5f\x74\165\x67\x61\163" => "\x32", "\x6b\145\154\141\x73\137\x6d\x61\164\145\x72\x69" => "\62", "\153\145\154\x61\x73\137\x73\x69\x73\167\141" => "\x32", "\x6b\145\x6c\141\163\x5f\x73\164\x72\165\x6b\164\x75\162" => "\62", "\153\x65\154\141\x73\x5f\164\165\x67\141\163" => "\62", "\x6c\x65\166\x65\x6c\137\x67\165\x72\165" => "\60", "\154\x65\166\x65\154\137\153\x65\154\x61\163" => "\x30", "\154\157\147" => "\62", "\154\157\147\151\x6e\137\x61\164\x74\145\155\160\164\163" => "\60", "\x6c\157\147\137\155\141\x74\x65\162\151" => "\62", "\154\157\x67\x5f\x74\x75\147\141\x73" => "\62", "\x6c\x6f\147\x5f\165\x6a\x69\x61\x6e" => "\62", "\155\141\163\164\145\x72\137\x65\x6b\163\164\x72\141" => "\x31", "\x6d\x61\163\x74\x65\162\x5f\x67\x75\x72\165" => "\61", "\155\141\x73\164\145\162\137\150\141\x72\x69\x5f\x65\146\x65\153\164\151\x66" => "\61", "\155\x61\163\x74\x65\x72\137\152\165\162\165\x73\x61\156" => "\x31", "\155\141\163\164\x65\x72\137\153\145\x6c\141\x73" => "\61", "\155\x61\163\x74\145\162\137\153\145\154\157\x6d\160\x6f\153\137\155\141\x70\145\154" => "\x31", "\155\x61\x73\x74\x65\162\x5f\155\x61\160\145\x6c" => "\x31", "\x6d\141\x73\x74\145\x72\x5f\163\151\x73\x77\141" => "\x31", "\x6d\141\x73\x74\x65\x72\x5f\163\x6d\164" => "\60", "\x6d\x61\163\x74\x65\x72\x5f\164\160" => "\60", "\x70\x6f\x73\x74" => "\x32", "\160\157\x73\164\x5f\x63\157\155\155\x65\x6e\164\163" => "\x32", "\160\x6f\x73\164\x5f\162\x65\x70\x6c\x79" => "\62", "\x72\x61\160\157\x72\137\x61\144\x6d\x69\x6e\x5f\163\145\164\x74\x69\156\x67" => "\61", "\x72\x61\160\x6f\x72\x5f\143\141\x74\141\164\x61\156\137\167\141\x6c\151" => "\61", "\x72\141\x70\157\x72\x5f\144\141\x74\x61\x5f\x63\x61\x74\141\x74\x61\156" => "\x31", "\162\x61\160\x6f\162\137\x64\x61\164\x61\137\146\151\x73\x69\x6b" => "\x31", "\162\x61\160\157\162\137\x64\141\164\141\x5f\163\x69\153\x61\160" => "\61", "\162\141\x70\157\162\137\146\x69\x73\x69\x6b" => "\x31", "\x72\x61\x70\157\x72\137\153\151\153\144" => "\x31", "\x72\141\x70\x6f\x72\x5f\153\153\x6d" => "\61", "\162\141\x70\157\x72\137\x6e\x61\x69\x6b" => "\61", "\x72\x61\x70\157\162\x5f\x6e\151\154\x61\x69\137\141\153\150\151\x72" => "\x31", "\x72\141\x70\x6f\x72\x5f\x6e\151\x6c\x61\151\x5f\145\x6b\163\x74\x72\x61" => "\61", "\162\141\160\157\162\137\156\x69\154\x61\151\137\x68\141\162\x69\141\x6e" => "\x31", "\162\x61\160\x6f\162\x5f\x6e\151\154\x61\x69\x5f\x70\164\x73" => "\x31", "\162\x61\x70\x6f\x72\137\x6e\151\x6c\x61\x69\137\x73\151\x6b\141\x70" => "\x31", "\x72\141\160\157\162\137\x70\x72\145\163\x74\x61\x73\151" => "\61", "\162\165\156\x6e\151\156\147\x5f\x74\x65\x78\164" => "\x31", "\x73\x65\164\x74\151\156\147" => "\61", "\165\x73\145\x72\x73" => "\60", "\165\x73\145\162\x73\x5f\x67\x72\x6f\x75\x70\163" => "\60", "\x75\163\145\162\x73\137\x70\x72\x6f\146\151\x6c\x65" => "\x30"]; return $data; } }
