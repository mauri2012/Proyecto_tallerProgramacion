<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Bajado implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(session()->baja=='SI'){
            return redirect()->to('')->with('baja','Usuario dado de baja');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
?>