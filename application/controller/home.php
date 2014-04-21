<?php

class Home extends Controller {

    public function index() {
        $mhs = $this->loadModel('mahasiswa');
        $data = $mhs::all()->toArray();
        $this->render('template/header');
        $this->render('home/index', $data);
        $this->render('template/footer');
    }

    public function tambah() {
        $mhs = $this->loadModel('mahasiswa');
        if (isset($_POST['submit'])) {
            $mhs->nama = $_POST['nama'];
            $mhs->nim = $_POST['nim'];
            $mhs->email = $_POST['email'];
            if ($mhs->save()) {
                $this->redirect('home/index');
            }
        } else {
            $this->render('template/header');
            $this->render('home/tambah');
            $this->render('template/footer');
        }
    }

    public function edit($id) {
        $mhs = $this->loadModel('mahasiswa');
        if (isset($_POST['submit'])) {
            $data = $mhs::find($id);
            $data->nama = $_POST['nama'];
            $data->nim = $_POST['nim'];
            $data->email = $_POST['email'];
            if ($data->save()) {
                $this->redirect('home/index');
            }
        } else {
            $data = $mhs::find($id)->toArray();
            $this->render('template/header');
            $this->render('home/edit', $data);
            $this->render('template/footer');
        }
    }

    public function delete($id) {
        $mhs = $this->loadModel('mahasiswa');
        $del = $mhs::find($id);
        $del->delete();
        $this->redirect('home/index');
    }

    public function detail($id) {
        $mhs = $this->loadModel('mahasiswa');
        $data = $mhs::find($id)->toArray();
        $this->render('template/header');
        $this->render('home/detail', $data);
        $this->render('template/footer');
    }

}
