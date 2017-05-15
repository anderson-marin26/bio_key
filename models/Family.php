<?php
	use Illuminate\Database\Eloquent\Model;

	class family extends Model
	{
		public $timestamps = false;
		protected $primaryKey = 'id_family';
		protected $table = 'family';

		public $timestamp = false;
	}