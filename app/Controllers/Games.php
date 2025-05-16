<?php

namespace App\Controllers;

use App\Models\GamesModel;

class Games extends BaseController
{
    public function index()
    {
        $model = model(GamesModel::class);

        $data = [
            'games_list' => $model->getGames(),
        ];

        return view('templates/header', $data)
            . view('games/index')
            . view('templates/footer');
    }
	
	public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Insert new game details!'])
            . view('games/create')
            . view('templates/footer');
    }
	
	public function create()
    {
        helper('form');

        $data = $this->request->getPost(['title', 'theme', 'releaseDate', 'image', 'price', 'downloads', 'platforms',
		'ratings', 'reviews', 'developer', 'publisher']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'title' => 'required|max_length[255]|min_length[1]',
            'theme'  => 'required|max_length[5000]|min_length[1]',
			#'releaseDate'  => 'required',
			'image'  => 'required|max_length[5000]|min_length[0]',
			'price'  => 'required|max_length[5000]|min_length[2]',
			'downloads'  => 'required|max_length[5000]|min_length[1]',
			'platforms'  => 'required|max_length[5000]|min_length[0]',
			'ratings'  => 'required|max_length[20]|min_length[0]',
			'reviews'  => 'required|max_length[5000]|min_length[0]',
			'developer'  => 'required|max_length[5000]|min_length[0]',
			'publisher'  => 'required|max_length[5000]|min_length[0]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(GamesModel::class);

        $model->save([
			'title' => $post['title'],
            'theme'  => $post['theme'],
			#'releaseDate'  => $post[date_format('releaseDate',"Y/m/d")],
			'image'  => $post['image'],
			'price'  => $post['price'],
			'downloads'  => $post['downloads'],
			'platforms'  => $post['platforms'],
			'ratings'  => $post['ratings'],
			'reviews'  => $post['reviews'],
			'developer'  => $post['developer'],
			'publisher'  => $post['publisher'],
        ]);

        return view('templates/header')
            . view('games/success')
            . view('templates/footer');
    }
	
	public function json()
    {
        $model = model(GamesModel::class);

        $data = [
            'games_list' => $model->getGames(),
        ];

        return view('games/gamesjson', $data);
    }
}
?>