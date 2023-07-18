<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	use HasFactory;

	protected $table = 'menu';

	protected $fillable = ['image', 'nama_menu', 'id_kategori', 'harga'];

	public function kategori()
	{
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}
}
