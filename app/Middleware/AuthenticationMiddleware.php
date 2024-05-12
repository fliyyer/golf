<?php

namespace App\Middleware;

use CodeIgniter\Config\Services;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthenticationMiddleware
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = Services::session();

        if (!$session->has('userId')) {
            return redirect()->to('/login');
        }
        return;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here after the request has been processed
    }
}
