<?php

namespace App\Controllers\Costumer;

use App\Controllers\BaseController;
use CodeIgniter\Model;
use Config\App;

// defined('BASEPATH') or exit("404 Not Found");
class Costumer extends BaseController
{
    public function index()
    {
    }
    // USER LOG
    public function login()
    {
        if ($this->request->getPost()) {
            $session = session();
            $userModel = new \App\Models\UserModel();
            $login = $this->request->getPost();
            $find = $userModel->where('email', $login['email'])->first();
            if ($find) {
                if ($find->password == $login['password']) {
                    $ses_data = [
                        'id_pengguna' => $find->id_pengguna,
                        'nama' => $find->nama,
                        'nomorhandphone' => $find->nomorhandphone,
                        'email' => $find->email,
                        'logged' => TRUE,
                        'user' => TRUE,
                    ];
                    $session->set($ses_data);
                    return redirect()->to(site_url('home'));
                }
            }
        }
        echo view('costumers/init/navbar');
        echo view('costumers/init/login');
        echo view('costumers/init/footer');
    }

    public function register()
    {
        if ($this->request->getPost()) {
            $daftar = $this->request->getPost();
            $session = session();
            $userModel = new \App\Models\UserModel();
            $user = new \App\Entities\User();
            $user->fill($daftar);
            $userModel->save($user);
            return redirect()->to(site_url('user/login'));
        }
        echo view('costumers/init/navbar');
        echo view('costumers/init/register');
        echo view('costumers/init/footer');
    }

    public function logout()
    {
        if (session()->has('logged')) {
            session_destroy();
            unset($ses_data);
            return redirect()->to(site_url('user/login'));
        }
    }
    // END


    // USER TRANS
    public function sewa()
    {
        // ambil session
        $id_pengguna = session()->get('id_pengguna');
        if (!session()->has('user')) {
            return redirect()->to(site_url('user/login'));
        }

        $id = $this->request->uri->getSegment(3);
        $motorModel = new \App\Models\MotorModel();
        $motor = $motorModel->find($id);
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $sewaModel = new \App\Models\SewaModel();
            $sewa = new \App\Entities\Sewa();
            $sewa->fill($data);
            helper('text');
            $sewa->kode_booking = random_string('alnum', 8);
            $sewaModel->save($sewa);
            return redirect()->to(site_url('user/transaksi'));
        }
        $data = session()->get();
        echo view('costumers/init/sewa', ['data' => $data, 'motor' => $motor, 'id_pengguna' => $id_pengguna]);
    }

    public function profil()
    {
        if (!session()->has('user')) {
            return redirect()->to(site_url('user/login'));
        }
        $userModel = new \App\Models\UserModel();
        $user = new \App\Entities\User();
        $data = session()->get('id_pengguna');
        $info = $userModel->where('id_pengguna', $data)->first();
        if ($this->request->getPost()) {
            $posting = $this->request->getPost();
            $user->fill($posting)->info;
            $userModel->update($data, $posting);
            return \redirect()->to(\site_url('user/profil'));
        }
        return view('costumers/init/dashboard', ['info' => $info]);
    }

    public function foto()
    {
        if (!session()->has('user')) {
            return redirect()->to(site_url('user/login'));
        }
        $id = session()->get('id_pengguna');
        $userModel = new \App\Models\UserModel();
        $user = new \App\Entities\User();
        $info = $userModel->where('id_pengguna', $id)->first();
        if ($this->request->getFile('gambar')) {
            $gambar = $this->request->getFile('gambar');
            $img = $gambar->getRandomName();
            $writepath = './uploads/profil';
            $gambar->move($writepath, $img);
            $data = [
                'gambar' => $img
            ];
            $userModel->update($id, $data);
            header("Refresh:0;");
        }
        return view('costumers/init/foto', ['info' => $info]);
    }
    public function transaksi()
    {
        if (!session()->has('user')) {
            return redirect()->to(site_url('user/login'));
        }
        $session = session();
        $current = $session->get('nama');
        $sewaModel = new \App\Models\SewaModel();
        $hai = $sewaModel->where('nama', $current)->find();
        return view('costumers/init/transaksi', ['hai' => $hai]);
    }

    public function bayar()
    {
        $id = $this->request->uri->getSegment(3);
        $sewaModel = new \App\Models\SewaModel();
        $sewa = $sewaModel->find($id);
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $gambar = $this->request->getFile('bukti_bayar');
            $img = $gambar->getRandomName();
            $path = './uploads/bukti_bayar';
            $gambar->move($path, $img);
            $up = [
                'status' => "Transaksi Diproses",
                'bank' => $data["bank"],
                'harga' => $data["total"],
                'kode_booking' => $data["kode_booking"],
                'bukti_bayar' => $img
            ];
            $sewaModel->update($id, $up);
            return redirect()->to(site_url('user/transaksi'));
        }
        return view('costumers/init/bayar', ['sewa' => $sewa]);
    }
    public function carasewa()
    {
        return view('costumers/init/carasewa');
    }
    //--------------------------------------------------------------------

}
