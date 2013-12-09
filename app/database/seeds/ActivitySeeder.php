<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ActivitySeed
 *
 * @author TrungHieu
 */
class ActivitySeeder extends Seeder
{

    public function run()
    {
	$unit = Unit::find(1);
	$contentUnit = Unit::find(2);
	$techUnit = Unit::find(3);
	$supportUnit = Unit::find(4);
	$MCUnit = Unit::find(5);
	$user = User::find(1);

	$act1 = $unit->createActivity('Tuyển thành viên mới', '', $user, Carbon\Carbon::now()->addDays(20));
	$act2 = $unit->createActivity('Buổi sinh hoạt đầu tiên', '', $user, Carbon\Carbon::now()->addDays(10));
	// $act1
	/* @var $act1 Activity */
	$act1->hold()->save();
	// end $act1
	// $act2
	/* @var $act2 Activity */
	$act2->hold()->save();
	$rUser = $this->randomUser();
	$act2->assignTo($rUser->id)->updateProgress(rand(30, 70))->save();
	$act2->createTask('Chuẩn bị nội dung', '', $rUser, Carbon\Carbon::now(), Carbon\Carbon::now()->addDay(7), $contentUnit);
	$act2->createTask('Lên kịch bản MC', '', $rUser, Carbon\Carbon::now(), Carbon\Carbon::now()->addDay(7), $MCUnit);
	$act2->createTask('Làm poster', '', $rUser, Carbon\Carbon::now(), Carbon\Carbon::now()->addDay(3), $techUnit);
	$act2->createTask('Dàn dựng sân khấu', '', $rUser, Carbon\Carbon::now()->addDays(9), Carbon\Carbon::now()->addDay(10), $supportUnit);
	$act2->createMilestone('Tiến hành sinh hoạt', '', $rUser, Carbon\Carbon::now()->addDays(10));
	// end $act2
    }

    /**
     * 
     * @return User
     */
    private function randomUser()
    {
	$userCount = User::count();
	return User::find(rand(1, $userCount));
    }

}

?>
