<?php

	require '../vendor/autoload.php';
	require_once '../models/Steps.php';
	require_once '../models/Family.php';

	if(!is_null($_GET['next']) && !is_null($_GET['key']))
	{
		$next 	= $_GET['next'];
		$key  	= $_GET['key'];

		$where = array(
			'id_key' => $key,
			'step' 	 => $next,
			'status' => 1
		);

		$Steps = Steps::where($where)->get()->toArray();

		foreach ($Steps as $step_key => $step)
		{
			if($step['family'] == 1)
			{
				$where = array(
					'id_step' => $step['id_step']
				);

				$Family = Family::where($where)->first()->toArray();

				$data[$step_key]['family'] = 1;
				$data[$step_key]['name']   = $Family['name'];
				$data[$step_key]['family_key'] = $Family['id_family'];
			}
			else
			{
				$data[$step_key]['family'] = 0;
			}

			$data[$step_key]['key']			= $step['id_key'];
			$data[$step_key]['step'] 		= $step['step'];
			$data[$step_key]['next'] 		= $step['next'];
			$data[$step_key]['description'] = $step['description'];
		}

		echo json_encode($data);

		return true;
	}
	else
	{
		return false;
	}
