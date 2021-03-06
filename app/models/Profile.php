<?php

class Profile extends Eloquent {

	/**
	 * Columns fillable by this model
	 */
	protected $fillable = array(
		'user_id',
		'first_name',
		'middle_name',
		'last_name',
		'full_name',
		'address',
		'birthdate',
		'avatar',
		'contact_no'
	);

	/**
	 * Transform the avatar attribute to a link
	 */
	public function getAvatarAttribute($value)
	{
		return asset("uploads/{$value}");
	}

	/**
	 *
	 */
	public function getDates()
	{
		return [
			'created_at',
			'updated_at',
			'birthdate'
		];
	}
	
	/**
	 *
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}
}