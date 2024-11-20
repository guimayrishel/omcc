<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CompletedProjectsController extends BaseController
{
    public function index()
    {
        $folder_path = 'Images/CompletedProjects/';
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
        echo view('completed', $data);
    }
    public function delete()
    {
        helper(['filesystem', 'url']);
        
        $id = $this->request->getPost('id');
        $sourceFolder = 'Images/OngoingProjects/';
        $filePath = $sourceFolder . $id;

        if (file_exists($filePath)) {
            if (unlink($filePath)) {
                echo json_encode(array("status" => true, "message" => "File deleted successfully"));
            } else {
                echo json_encode(array("status" => false, "message" => "Failed to delete file"));
            }
        } else {
            echo json_encode(array("status" => false, "message" => "File not found"));
        }
    }

}
