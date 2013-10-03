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
	DB::table('units')->delete();

	// case study seeding
	$org = Unit::create(array(
		    'name' => 'Câu lạc bộ Tin học Bách Khoa',
		    'description' => "Câu lạc bộ là nơi giao lưu học tập giữa các sinh viên đam mê tin học trong và ngoài khoa KH&KT Máy Tính, trường ĐH Bách Khoa TPHCM",
		    'depth' => 0,
	));
	$org->site_id = $org->id;
	$org->save();
	Vacancy::create(array(
	    'name' => trans('organization.vacancy.administrator'),
	    'order' => 999,
	    'unit_id' => $org->id
	));

	$level1 = array();

	$level1[] = Unit::create(array(
		    'name' => 'Ban nội dung',
		    'description' => 'Chịu trách nhiệm về các nội dung được public ra ngoài của câu lạc bộ',
		    'depth' => 1,
		    'parent_id' => $org->id,
		    'site_id' => $org->id
	));
	$level1[] = Unit::create(array(
		    'name' => 'Ban kỹ thuật',
		    'description' => 'Quản lý website, các công tác multimedia và setup âm thanh',
		    'depth' => 1,
		    'parent_id' => $org->id,
		    'site_id' => $org->id
	));
	$level1[] = Unit::create(array(
		    'name' => 'Ban hậu cần',
		    'description' => 'Chuẩn bị sự kiện, dựng sân khấu, quản lý các thiết bị của câu lạc bộ',
		    'depth' => 1,
		    'parent_id' => $org->id,
		    'site_id' => $org->id
	));
	$level1[] = Unit::create(array(
		    'name' => 'Ban MC',
		    'description' => 'Dẫn chương trình, lead game và viết script',
		    'depth' => 1,
		    'parent_id' => $org->id,
		    'site_id' => $org->id
	));

	foreach ($level1 as $u)
	{
	    Unit::create(array(
		'name' => 'Phân bộ CS2',
		'description' => 'Phân nhóm làm việc tại cơ sở 2',
		'depth' => 2,
		'parent_id' => $u->id,
		'site_id' => $org->id
	    ));
	}
    }

}

?>
