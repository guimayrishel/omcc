<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('home');
    // }
    public function index()
    {
        $folder_path = 'Images/AboutUs/';
        if (is_dir($folder_path)) {
            $files = array_diff(scandir($folder_path), array('.', '..'));
            $images = [];
            foreach ($files as $file) {
                if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                    $images[] = $file;
                }
            }
            $data['images'] = $images;
        } else {
            $data['images'] = [];
        }
        echo view('home', $data);
    }
    public function store()
    {  
        helper(['form', 'url']);
        // $model = new ProjectsModel();
        $img = $this->request->getFile('image');
        if ($img && $img->isValid() && !$img->hasMoved()) {
            $imageName = $img->getRandomName();
            $img->move('Images/AboutUs', $imageName);
        }
        // return redirect()->to('/about_us')->with('success', 'Student Added Successfully');
        // $data = [
        //     'image' => $imageName ?? null,
        //     'title' => $this->request->getPost('title'),
        //     ];
        // $save = $model->insert($data);
        // if($save != false)
        // {
        //     $data = $model->where('id', $save)->first();
            echo json_encode(array("status" => true));
        // }
        // else{
        //     echo json_encode(array("status" => false , 'data' => $data));
        // }
    }
}
