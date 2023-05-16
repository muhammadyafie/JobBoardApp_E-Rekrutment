<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserDataModel;

class UserData extends BaseController
{
	public function index()
	{
		$berkas = new UserDataModel();
		$data['berkas'] = $berkas->findAll();
		return view('/view_berkas', $data);
	}
 
	public function create()
	{
		return view('/form_upload');
	}
 
	public function save()
	{
		if (!$this->validate([
			'position' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'file' => [
				'rules' => 'uploaded[file]|mime_in[file,image/jpg,image/jpeg,image/gif,image/png,application/pdf]|max_size[file,2048]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]
 
			]
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
 
		$berkas = new UserDataModel();
		$dataBerkas = $this->request->getFile('file');
		$fileName = $dataBerkas->getRandomName();
		$berkas->insert([
			'file' => $fileName,
			'position' => $this->request->getPost('position')
		]);
		$dataBerkas->move('uploads/berkas/', $fileName);
		session()->setFlashdata('success', 'Berkas Berhasil diupload');
		return redirect()->to(base_url('job'));
	}

	function download($id)
	{
		$berkas = new UserDataModel();
		$data = $berkas->find($id);
		return $this->response->download('uploads/berkas/' . $data->file, null);
	}
}