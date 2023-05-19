<<<<<<< HEAD
<?php

namespace App\Controllers;

use CodeIgniter\Debug\Toolbar\Collectors\Views;

class Pages extends BaseController
{
    public function index()
    {
      return view ('product/index');
      
    }

    public function about ()

    {
        echo view ('pages/about');
        echo view('pages/about');
        echo view('layout/footer');
    }
=======
<?php

namespace App\Controllers;

use CodeIgniter\Debug\Toolbar\Collectors\Views;

class Pages extends BaseController
{
    public function index()
    {
      return view ('product/index');
      
    }

    public function about ()

    {
        echo view ('pages/about');
        echo view('pages/about');
        echo view('layout/footer');
    }
>>>>>>> 499d2465ef258e68fa13ad5937916d9f7db06d21
}