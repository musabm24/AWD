<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{
    /*public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news_list' => $model->getNews(),
            'title'     => 'M Cars',
        ];

        return view('templates/header', $data)
            . view('templates/nav')
            . view('news/index')
            . view('templates/footer');
    }*/

    public function index()
    {
    $model = model(NewsModel::class);
    $search = $this->request->getGet('search');

    if ($search) {
        $data = [
            'news_list' => $model->searchNews($search),
            'title'     => 'M Cars',
            'search'    => $search,
        ];
    } else {
        $data = [
            'news_list' => $model->getNews(),
            'title'     => 'M Cars',
            'search'    => '',
        ];
    }

    return view('templates/header', $data)
        . view('templates/nav')
        . view('news/index')
        . view('templates/footer');
    }

    public function show(?string $slug = null)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);

        if ($data['news'] === null) {
            throw new PageNotFoundException('Cannot find the Car item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        return view('templates/header', $data)
            . view('templates/nav')
            . view('news/view')
            . view('templates/footer');
    }

    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Create a car item'])
            . view('news/create')
            . view('templates/footer');
    }
    
    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['title', 'body', 'image']);
        if (! $this->validateData($data, [
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            return $this->new();
        }

        $post = $this->validator->getValidated();

        $model = model(NewsModel::class);

        $model->save([
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'body'  => $post['body'],
            
        ]);

        return view('templates/header', ['title' => 'Create a news item'])
            . view('news/success')
            . view('templates/footer');
    }
    public function audi()
    {
    $model = new NewsModel();
    $data['news'] = $model->where('LOWER(title)', 'audi')->findAll();
    $data['title'] = 'Audi models';

    return view('templates/header', $data)
        . view('templates/nav')
        . view('news/cars/audi', $data)
        . view('templates/footer');
    }

    public function bmw()
    {
    $model = new NewsModel();
    $data['news'] = $model->where('LOWER(title)', 'bmw')->findAll();
    $data['title'] = 'BMW News';

    return view('templates/header', $data)
        . view('templates/nav')
        . view('news/cars/bmw', $data)
        . view('templates/footer');
    }

    
}