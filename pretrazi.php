<?php
$output='';
	if(isset($_POST['searchVal'])){
		$pretraga = htmlEntities($_POST['searchVal'], ENT_QUOTES);
		//ovdje nešto
		//ovo dodaje u autput u vajl
		//ovo vadi sve registrovane
		$files=glob('registration/*.xml');
		$brojac=1;
	foreach($files as $file){
		if($brojac>=10) break;
		$xml=new SimpleXMLElement($file,0,true);
		$fname=$xml->first_name;
		$lname=$xml->last_name;
		//ovdje if se nalazi u imenu ili prezimenu
		//dodaj u autput
		if($pretraga=='')
		{
			$output.='<div>'.$fname.' '.$lname.'<div>';
		}
		elseif(strpos(strtolower($fname), strtolower($pretraga))!==false || strpos(strtolower($lname),strtolower($pretraga))!==false)
		{
			$output.='<div>'.$fname.' '.$lname.'<div>';
		}
		$brojac=$brojac+1;
	}
	var_dump($pretraga);
}
echo $output;
?>