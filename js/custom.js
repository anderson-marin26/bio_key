var key = 0;

$('.flowers').click(function()
{
	key = $(this).find('input').val();

	var data = {
		'flower' : key
	};

	var request = $.ajax({
		method 	: 'GET',
		url 	: 'controller/flower_type_controller.php',
		data 	: data
	});

	request.done(function(response)
	{
		$('#flowers').slideUp('fast');
		$('#steps').slideDown('fast');
		response = JSON.parse(response);

		make_step(response);
	});

	request.fail(function(errorThrow)
	{
		console.log(errorThrow);
	});
});

$('.step').click(function()
{
	if($(this).find('.family').length)
	{
		var family_name = $(this).find('.family').attr('data-value');
		family_name = family_name.charAt(0).toUpperCase() + family_name.slice(1);

		$('<h4>' + family_name + '</h4>').appendTo('#family_found');
		$('#steps').slideUp('fast');
		$('#family').slideDown('fast');
	}

	var data = {
		'next' : $(this).find('.next').val(),
		'key'  : $(this).find('.key').val()
	};

	var request = $.ajax({
		method : 'GET',
		url    : 'controller/step_controller.php',
		data   : data
	});

	request.done(function(response)
	{
		response = JSON.parse(response);
		make_step(response);
	});
});

function make_step(data)
{
	$('#step').empty();
	$('#actual_step').empty();
	
	var i = 0;

	for(steps in data)
	{
		if(i == 0)
		{
			$('<th colspan="2" class="text-center">Passo ' + data[steps]['step'] + '</th>').appendTo('#actual_step');
			i = 1;
		}

		if(data[steps]['family'] == 1)
		{
			var family = '<input type="hidden" class="family" value="' + data[steps]['family_key'] + '" data-value="' + data[steps]['name'] + '">';
		}
		else
		{
			var family = '';
		}

		$('<tr><td class="step">' + family + '<input class="next" type="hidden" value="' + data[steps]['next'] +'"><input type="hidden" class="key" value="' + data[steps]['key'] + '">' + data[steps]['description'] + '</td></tr>').appendTo('#step');
	}
}