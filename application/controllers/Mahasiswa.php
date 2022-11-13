<?php
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-mahasiswa');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'nama mahasiswa',
            'required|min_length[3]',
            [
                'required' => 'nama mahasiswa Harus diisi',
            ]
        );
        $this->form_validation->set_rules(
            'NIM',
            'NIM mahasiswa',
            'required|min_length[3]',
            [
                'required' => 'NIS mahasiswa Harus diisi',
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'kelas ',
            'required|min_length[3]',
            [
                'required' => 'kelas Harus diisi',
            ]
        );
        $this->form_validation->set_rules(
            'tanggal',
            'tanggal lahir',
            'required|min_length[3]',
            [
                'required' => 'tanggal lahir Harus diisi',
            ]
        );
        $this->form_validation->set_rules(
            'tempat',
            'tempat lahir',
            'required|min_length[3]',
            [
                'required' => 'tempat lahir Harus diisi',
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-mahasiswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'NIM' => $this->input->post('NIM'),
                'kelas' => $this->input->post('kelas'),
                'tanggal' => $this->input->post('tanggal'),
                'tempat' => $this->input->post('tempat'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('view-data-mahasiswa', $data);
        }
    }
}
