<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	require '../vendor/autoload.php';
	require_once '../models/Steps.php';
	require_once '../models/Family.php';

	if(!is_null($_GET['flower']))
	{
		$flower = $_GET['flower'];

		if($flower == 'aclamideas_monoclamideas')
		{
			$key = 1;
		}
		else if($flower == 'dialipetala')
		{
			$key = 2;
		}
		else if($flower == 'gamopetalas')
		{
			$key = 3;
		}

		$where = array(
			'id_key' => $key,
			'step'	 => 1,
			'status' => 1
		);

		$Steps = Steps::where($where)->get()->toArray();

		$data = array();

		foreach ($Steps as $step_key => $step)
		{
			if($step['family'] == 1)
			{
				$where = array(
					'id_step' => $step['id_step']
				);

				$Family = Family::where($where)->first()->toArray();

				$data['family'] = 1;
				$data['name']   = $Family['name'];

				echo json_encode($data);

				return true;
			}

			$data[$step_key]['key']			= $step['id_key'];
			$data[$step_key]['step'] 		= $step['step'];
			$data[$step_key]['next'] 		= $step['next'];
			$data[$step_key]['description'] = $step['description'];
			$data[$step_key]['family']		= 0;
		}

		echo json_encode($data);

		return true;
	}
	else
	{
		return false;
	}
?>