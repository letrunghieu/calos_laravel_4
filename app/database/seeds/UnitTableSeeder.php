<?php

/**
 * Description of UnitTableSeeder
 *
 * @author TrungHieu
 */
class UnitTableSeeder extends Seeder
{
    public function run()
    {
	Unit::delete();
	
	// case study seeding
	Unit::create(array(
	    'name' => 'Câu lạc bộ Tin học Bách Khoa',
	    'description' => "Câu lạc bộ là nơi giao lưu học tập giữa các sinh viên đam mê tin học trong và ngoài khoa KH&KT Máy Tính, trường ĐH Bách Khoa TPHCM",
	    'depth' => 0,
	));
    }
}

?>
