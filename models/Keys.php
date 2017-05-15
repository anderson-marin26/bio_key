<?php
	use Illuminate\Database\Eloquent\Model;

	class Keys extends Model
	{
		public $timestamps = false;
		protected $primaryKey = 'id_key';
		protected $table = 'keys';

		public $timestamp = false;
	}