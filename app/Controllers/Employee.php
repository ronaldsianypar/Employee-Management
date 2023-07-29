<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\EmployeeModel;
 
class Employee extends Controller
{
    public function index()
    {
        $employeeModel = new EmployeeModel();

        $data['employees'] = $employeeModel->findAll();

        return view('employee/index', $data);
    }

    public function add()
    {
        return view('employee/add');
    }

    public function create()
    {
        $validationRules = [
            'name'      => 'required',
            'address'   => 'permit_empty',
            'phone'     => 'permit_empty',
            // 'photo'     => 'uploaded[photo]|mime_in[photo,image/jpg,image/jpeg]|is_image[photo]|uploaded_size[photo,300]',
        ];

        if ($this->validate($validationRules)) {
            $name       = $this->request->getPost('name');
            $address    = $this->request->getPost('address');
            $phone      = $this->request->getPost('phone');
            $photoFile  = $this->request->getFile('photo');

            if ($photoFile->isValid() && !$photoFile->hasMoved()) {
                $photoFilename = $photoFile->getRandomName();
                
                $photoFile->move(ROOTPATH . 'public/uploads', $photoFilename);
                
                $employeeModel = new \App\Models\EmployeeModel();
                $employeeModel->insert([
                    'name'              => $name,
                    'address'           => $address,
                    'phone'             => $phone,
                    'photo_filename'    => $photoFilename,
                ]);
                
                return redirect()->to(route_to('employee.index'));
            }
        } else {
            return redirect()->to(route_to('employee.add'));
        }
    }
 
}

