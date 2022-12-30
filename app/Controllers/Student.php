<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Student extends BaseController
{
    protected $db;
    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: X-Requested-With');
        header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE');
        $this->db = new StudentModel();
    }
    public function index()
    {
        $res = $this->db->findAll();
        return json_encode($res);
    }
    public function detail($nis)
    {
        $res = $this->db->where('nis', $nis)->first();
        return json_encode($res);
    }
    public function delete($id)
    {
        $this->db->delete($id);
        return redirect()->to('student');
    }
    public function create()
    {
        $this->db->save($this->request->getVar());
        return redirect()->to('student');
    }
    public function update()
    {
        $this->db->save($this->request->getVar());
        return redirect()->to('student');
    }
}
