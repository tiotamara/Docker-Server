<?php
	

	if(isset($_POST['submit']))
	{
		//set data
		$nama_table = safe($_POST['nmtable']);
		$mod = safe($_POST['nmtable']);
		$act = "act_".$mod;
		$nama_folder = $mod;

		$nama_header = $_POST['nmtitle'];
		$desc_header = $_POST['desc'];

		//nama file
		$file1 = $mod.".php";
		$file2 = $act.".php";

		//create folder
		if (!file_exists("../mod/" . $nama_folder))
        {
        	umask(0);
            mkdir("../mod/" . $nama_folder, 0777, true);
        }

		$pk = $hc->primary_field($nama_table);
        $non_pk = $hc->not_primary_field($nama_table);
        $all = $hc->all_field($nama_table);


        //generate
        include "create_mod.php";
        include "create_mod_aksi.php";


	}

?>