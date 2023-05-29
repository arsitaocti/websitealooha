<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\StatusModel; 

class Product extends ResourceController
{

    public function __construct() {
        $this->statusModel = new StatusModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $products = $this->statusModel->paginate(1,'story');

        $payload = [
            "story" => $products, 

        ];

        echo view('product/index', $payload);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        echo view('product/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $fileName = "";
        $photo = $this->request->getFile('photo');

        if ($photo) {
            $fileName = $photo->yourpicturehere(); 

            $photo->move('photos', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }

        $payload = [
            "name" => $this->request->getPost('name'),
            "stock" => (int) $this->request->getPost('status'),
            "price" => (int) $this->request->getPost('profil'),
            
        ];
        $this->statusModel->insert($payload);
        return redirect()->to('/product');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $product = $this->statusModel->find($id);
        
        if (!$product) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('product/edit', ["data" => $product]);
    }


    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $payload = [
            "name" => $this->request->getPost('name'),
            "status" => (int) $this->request->getPost('status'),
            "profil" => (int) $this->request->getPost('price'),
        ];

        $this->statusModel->update($id, $payload);
        return redirect()->to('/product');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->statusModel->delete($id);
        return redirect()->to('/product');
    }
}