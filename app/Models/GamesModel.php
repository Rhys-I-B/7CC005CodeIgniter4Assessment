<?php

namespace App\Models;

use CodeIgniter\Model;

class GamesModel extends Model
{
    protected $table = '7CC005games';
	
	protected $allowedFields = ['title', 'theme', 'releaseDate', 'image', 'price', 'downloads', 'platforms',
	'ratings', 'reviews', 'developer', 'publisher'];
	
	public function getGames()
	{
		return $this->findAll();
	}
}