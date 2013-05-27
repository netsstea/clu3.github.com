<?php
$a = array(
		array(	
			'selector' => '#demo_stopOn',
			'title' => 'Ajaxed title from server',
			'content' => "I was found because I have selector=#demo_stopOn",
			'width' => "400px",
			'placement' => 'right'
		),
		array(
			'selector' => '#demo_ajax',
			'title' => 'Ajaxed Title 2',
			'content' => "I was found because I have selector=#demo_ajax",
			'width' => "400px",
			'placement' => 'right'
		)
);
send_json(array('success' => true, 'result' => $a));

function send_json($data)
{
	header("Content-type: application/json");
	
	echo json_encode($data);
	exit();
}
