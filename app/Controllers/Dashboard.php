<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Dashboard extends Controller
{
    public function index()
    {
        $session = session();

        $data['user_name'] = $session->get('user_name');

        return view('home_dashboard', $data);
    }
}