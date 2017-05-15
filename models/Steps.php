<?php
	use Illuminate\Database\Eloquent\Model;

	class steps extends Model
	{
		public $timestamps = false;
		protected $primaryKey = 'id_step';
		protected $table = 'steps';

		public $timestamp = false;
	}