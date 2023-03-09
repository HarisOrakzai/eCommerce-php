<?php
	function get_product($con,$id=''){

		$sql = "SELECT * from `ourmenu` where id = '$id'";
		
		$res=mysqli_query($con,$sql);
		$data=array();

		while($row=mysqli_fetch_assoc($res)){
			$data[]=$row;
		}
		return $data;
	}
?>