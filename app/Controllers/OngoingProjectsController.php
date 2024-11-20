<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class OngoingProjectsController extends BaseController
{
    public function index()
    {
        $folder_path = 'Images/OngoingProjects/';
        if (is_dir($folder_path)) {
            $files = array_diff(scandir($folder_path), array('.', '..'));
            $images = [];
            foreach ($files as $file) {
                if (preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file)) {
                    $images[] = $file;
                }
            }
            $data['images'] = $images;
        } else {
            $data['images'] = [];
        }
        echo view('ongoing', $data);
        // return view('ongoing');
    }
    public function store()
    {  
        helper(['form', 'url']);
        $img = $this->request->getFile('image');
        $title = $this->request->getPost('title');

        if ($img && $img->isValid() && !$img->hasMoved()) {
            $extension = $img->getClientExtension();
            $imageName = $title . '_' . uniqid() . '.' . $extension;
            $img->move('Images/OngoingProjects', $imageName);
        }
        
        echo json_encode(array("status" => true));
    }
    public function update()
{
    helper(['filesystem', 'url']);

    $id = $this->request->getPost('id');
    $sourceFolder = 'Images/OngoingProjects/';
    $destinationFolder = 'Images/CompletedProjects/';
    $filePath = $sourceFolder . $id;
    
    if (file_exists($filePath)) {
        if (rename($filePath, $destinationFolder . basename($filePath))) {
            echo json_encode(array("status" => true, "message" => "File moved successfully"));
        } else {
            echo json_encode(array("status" => false, "message" => "Failed to move file"));
        }
    } else {
        echo json_encode(array("status" => false, "message" => "File not found"));
    }
}

}
