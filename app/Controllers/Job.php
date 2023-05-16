<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JobModel;

class Job extends BaseController
{
    protected $jobModel;

    public function __construct()
    {
        $this->jobModel = new JobModel();
    }

    public function index()
    {
        $job = $this->jobModel->findAll();

        $data = [
            'job' => $job
        ];

        $successMessage = session()->getFlashdata('success'); // mengambil flashdata success dari class UserData

        if (!empty($successMessage)) {
            $data['successMessage'] = $successMessage; // memasukkan pesan success ke dalam variabel data
        }

        return view('job', $data);
    }
}
