<?php
	use Illuminate\Database\Eloquent\Model;

	class Summary extends Model
	{
		public $timestamps = false;
		protected $primaryKey = 'id_summary';
		protected $table = 'summary';

		public $timestamp = false;
	}