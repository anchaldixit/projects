<?php
	$author =array("Anchal Dixit", "\n", "akanksha TYagi", "Arpit Kumar");
		$College = array(
		"IEC" => "Gr.Noida",
		"IIT" => "Kanpur",
		"NIET" => "Gr.Noida",
		
	);
	unset($College[1]);
	unset($author[2],$author[1]);
	print_r($author);
	echo $author;
	echo $College;
	print_r($College);
  ?>