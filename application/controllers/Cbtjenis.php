<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtjenis extends CI_Controller { public function __construct() { goto CTcqH; SrbSs: oF9e0: goto nz54P; EiUIA: goto lwx_J; goto SrbSs; nz54P: redirect("\141\x75\x74\x68"); goto EQnA8; EQnA8: lwx_J: goto ngCg6; fMXAq: show_error("\110\x61\x6e\171\141\x20\101\144\155\x69\156\x69\163\x74\x72\141\x74\157\x72\40\171\x61\x6e\x67\x20\x64\x69\x62\x65\x72\x69\x20\x68\141\153\40\165\x6e\164\x75\x6b\40\155\145\x6e\x67\x61\x6b\x73\145\163\x20\x68\x61\154\141\x6d\141\x6e\x20\151\x6e\x69\x2c\40\x3c\141\x20\x68\x72\x65\146\75\42" . base_url("\144\x61\x73\150\x62\x6f\141\x72\x64") . "\42\76\x4b\x65\x6d\142\141\x6c\x69\x20\153\x65\40\x6d\x65\156\x75\40\x61\x77\141\154\74\x2f\141\76", 403, "\x41\153\x73\x65\163\x20\x54\x65\x72\x6c\x61\162\141\156\x67"); goto pu2h5; u6YZE: $this->load->model("\104\141\163\x68\x62\x6f\x61\x72\x64\137\155\x6f\144\x65\x6c", "\x64\141\163\x68\142\157\x61\162\144"); goto SSHo0; SSHo0: $this->load->model("\103\x62\164\x5f\x6d\x6f\x64\x65\154", "\x63\142\x74"); goto TA358; ngCg6: $this->load->library(["\144\x61\x74\141\164\141\142\x6c\145\x73", "\146\x6f\x72\x6d\137\166\x61\x6c\151\144\x61\164\x69\157\156"]); goto jmVYD; zeFY7: if (!$this->ion_auth->logged_in()) { goto oF9e0; } goto s5svG; s5svG: if ($this->ion_auth->is_admin()) { goto xuaE_; } goto fMXAq; pu2h5: xuaE_: goto EiUIA; CTcqH: parent::__construct(); goto zeFY7; TA358: $this->load->model("\114\x6f\x67\x5f\155\x6f\144\x65\154", "\154\x6f\x67\x67\x69\x6e\x67"); goto MYV34; MYV34: $this->form_validation->set_error_delimiters('', ''); goto wD8E9; jmVYD: $this->load->model("\x4d\x61\163\164\145\162\x5f\155\157\x64\145\154", "\155\141\x73\x74\145\162"); goto u6YZE; wD8E9: } public function output_json($data, $encode = true) { goto DVA_a; woMwC: $this->output->set_content_type("\x61\160\x70\x6c\151\x63\x61\x74\x69\157\x6e\x2f\152\x73\157\156")->set_output($data); goto X1l_h; XOIhf: HZnGH: goto woMwC; Quh4v: $data = json_encode($data); goto XOIhf; DVA_a: if (!$encode) { goto HZnGH; } goto Quh4v; X1l_h: } public function index() { goto fQ_l6; fQ_l6: $user = $this->ion_auth->user()->row(); goto MmFS7; WWbkd: $data["\164\160\x5f\141\x63\x74\x69\166\x65"] = $this->dashboard->getTahunActive(); goto kK5th; MmFS7: $data = ["\x75\163\145\162" => $user, "\152\x75\144\165\x6c" => "\x4a\x65\156\151\x73\x20\x55\152\x69\141\156", "\163\x75\142\152\165\144\165\154" => "\x44\141\x74\x61\40\x4a\x65\156\151\x73\x20\x55\152\151\141\x6e", "\x70\162\157\146\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\145\x74\164\x69\156\147" => $this->dashboard->getSetting()]; goto oQ3ag; arzCB: $this->load->view("\x63\142\x74\57\x6a\145\156\151\163\57\x64\141\164\141"); goto chXzA; oQ3ag: $data["\x74\x70"] = $this->dashboard->getTahun(); goto WWbkd; kK5th: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto n3Fwx; chXzA: $this->load->view("\137\164\145\155\x70\x6c\x61\x74\x65\x73\x2f\144\141\163\x68\142\157\141\162\x64\x2f\137\x66\157\157\164\x65\x72"); goto sxf2v; a3kNl: $this->load->view("\x5f\164\145\155\160\x6c\x61\164\x65\163\57\x64\x61\x73\150\142\157\x61\162\x64\x2f\137\x68\145\141\144\x65\x72", $data); goto arzCB; n3Fwx: $data["\x73\x6d\164\137\141\143\164\x69\x76\x65"] = $this->dashboard->getSemesterActive(); goto a3kNl; sxf2v: } public function data() { $this->output_json($this->cbt->getJenis(), false); } public function add() { goto aW_Sw; PswtD: $this->output_json($data); goto fYYPD; aW_Sw: $insert = ["\156\x61\155\x61\137\152\145\x6e\151\163" => $this->input->post("\156\x61\x6d\x61\x5f\x6a\145\x6e\151\163", true), "\153\x6f\x64\x65\x5f\x6a\x65\156\151\x73" => $this->input->post("\153\x6f\144\145\x5f\x6a\145\156\x69\163", true)]; goto CvzwT; d_10o: $data["\x73\164\141\x74\165\163"] = $insert; goto PswtD; CvzwT: $this->master->create("\x63\142\164\x5f\152\x65\156\151\163", $insert, false); goto d_10o; fYYPD: } public function update() { $data = $this->cbt->updateJenis(); $this->output->set_content_type("\x61\x70\160\154\151\143\141\x74\x69\x6f\156\57\152\x73\x6f\156")->set_output($data); } public function delete() { goto kY8ak; d_dFe: goto ssaaB; goto fvbAi; fvbAi: k4r30: goto cuCRT; QBZfM: Wv90z: goto d_dFe; cuCRT: $this->output_json(["\163\164\x61\x74\x75\163" => false]); goto ghQNy; Y7PSE: $this->output_json(["\163\x74\141\164\165\163" => true, "\164\x6f\164\141\154" => count($chk)]); goto QBZfM; BSi2V: if (!$this->master->delete("\x63\x62\164\x5f\152\145\156\151\x73", $chk, "\151\144\x5f\152\x65\156\151\163")) { goto Wv90z; } goto Y7PSE; vNrAu: if (!$chk) { goto k4r30; } goto BSi2V; kY8ak: $chk = $this->input->post("\143\x68\145\143\x6b\145\x64", true); goto vNrAu; ghQNy: ssaaB: goto ypg3d; ypg3d: } public function saveLog($type, $desc) { $user = $this->ion_auth->user()->row(); $this->logging->createLog($user->id, $type, $desc); } }
