<?php

namespace App\Controllers;

use App\Models\CarsModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\UserModel;
use CodeIgniter\Session\Session;

class Cars extends BaseController
{
    public function index()
    {
        $model = new CarsModel();
        $cars = $model->findAll();
        $makes = $model->distinct()->select('make')->findAll();
        $models = $model->distinct()->select('make, model')->findAll();

        $data = [
            'title' => '',
            'cars' => $cars,
            'makes' => $makes,
            'models' => $models,
        ];

        return view('templates/header', $data)
            . view('templates/nav3', $data)
            . view('templates/nav2', $data)
            . view('cars/index', $data)
            . view('templates/footer');
    }

    public function home()
    {
        $model = new CarsModel();

        $cars = $model->findAll();
        shuffle($cars);
        $featuredCars = array_slice($cars, 0, 8);

        $data = [
            'title' => 'Motor Market - Home',
            'featuredCars' => $featuredCars,
            'google_maps_api_key' => 'AIzaSyAyFGSlJKCcwCTViXeVjv76KJKq0sysJRM',
        ];

        return view('templates/header', $data)
            . view('templates/nav3', $data)
            . view('cars/home', $data)
            . view('templates/footer', $data);
    }

    public function filter()
    {
        $make = $this->request->getGet('make');
        $model = $this->request->getGet('model');

        $carsModel = new CarsModel();
        $query = $carsModel->select('*');

        if ($make) {
            $query->where('make', $make);
        }

        if ($model) {
            $query->where('model', $model);
        }

        $cars = $query->findAll();

        return view('cars/partials/car_list', ['cars' => $cars]);
    }

    public function create()
    {
        

        helper(['form', 'url']);

        $data = $this->request->getPost(['make', 'model', 'description', 'price', 'milage', 'year', 'gearbox', 'fuel', 'image']);

        if (! $this->validate([
            'make' => 'required',
            'model'  => 'required',
            'description'  => 'required',
            'price'  => 'required',
            'milage'  => 'required',
            'year'  => 'required',
            'gearbox'  => 'required',
            'fuel'  => 'required',
            'image'  => 'required|valid_url',
        ])) {
            return view('templates/header', ['title' => 'Create a Car'])
                . view('cars/create', [
                    'validation' => $this->validator,
                ])
                . view('templates/footer');
        }

        $post = $this->request->getPost();

        $model = new CarsModel();

        $model->save([
            'make' => $post['make'],
            'model'  => $post['model'],
            'description'  => $post['description'],
            'price'  => $post['price'],
            'milage'  => $post['milage'],
            'year'  => $post['year'],
            'gearbox'  => $post['gearbox'],
            'fuel'  => $post['fuel'],
            'image'  => $post['image'],
        ]);

        return view('templates/header', ['title' => 'Create a Car'])
            . view('cars/success')
            . view('templates/footer');
    }

    public function getRandomCars()
    {
        $model = new CarsModel();
        $cars = $model->findAll();

        $randomCars = array_rand($cars, 3);

        return view('cars/partials/car_list', ['cars' => $randomCars]);
    }


    
    public function login()
    {
        helper(['form', 'url']);
    
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
    
            $userModel = new UserModel();
            $user = $userModel->getUserByUsername($username);
    
            if (!$user) {
                return view('cars/login', ['error' => 'User not found.']);
            }
    
            if (!password_verify($password, $user['password'])) {
                return view('cars/login', ['error' => 'Incorrect username or password.']);
            }
            return redirect()->to(base_url('motormarket/create'));
        }
    
        return view('cars/login');
    }


    public function logout()
    {
        
    }

    public function view($id)
    {
        $carsModel = new \App\Models\CarsModel();

        $car = $carsModel->find($id);

        if (!$car) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Car with ID $id not found.");
        }
        $data = [
            'car' => $car,
            'title' => '____________________________________',
            'google_maps_api_key' => 'AIzaSyAyFGSlJKCcwCTViXeVjv76KJKq0sysJRM',
        ];

        return view('templates/header', $data)
            . view('templates/nav3', $data)
            . view('cars/view', $data)
            . view('templates/footer', $data);
        }
}
// AIzaSyAyFGSlJKCcwCTViXeVjv76KJKq0sysJRM
//AIzaSyDt8udfAz62SrR5EUCL5XZi9PkmSWt1G1E