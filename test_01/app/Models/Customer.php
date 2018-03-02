<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'surname',
		'date_of_birth',
		'notes'
	];

	/**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = [
		'id'
	];
}