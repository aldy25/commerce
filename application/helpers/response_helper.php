<?php
function makeresponse($responseData,$payload = null)
{
	$res = array(
		"responseData"=>$responseData,
		"payload"=>$payload
	);

	echo json_encode($res);
}
