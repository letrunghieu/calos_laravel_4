<?php

/**
 * Description of UserTableSeeder
 *
 * @author TrungHieu
 */
class UserTableSeeder extends Seeder
{

    public function run()
    {
	DB::table('users')->delete();

	$admin = User::addMember(array(
		    'first_name' => 'Hiếu',
		    'last_name' => 'Lê Trung',
		    'email' => 'letrunghieu.cse09@gmail.com',
		    'password' => Hash::make('admin'),
		    'gender' => User::GENDER_MALE,
		    'address' => '7A/33/59 Thành Thái, F14, Q10, TP Hồ Chí Minh',
		    'mobile_phone' => '0982210719',
			), 1);
	$adminVacancy = Vacancy::getByOrder(1, Vacancy::ORDER_SITE_ADMIN);
	$admin->vacancies()->attach($adminVacancy->id);
	$adminVacancy = Vacancy::getLeaderVacancy(1);
	$admin->vacancies()->attach($adminVacancy->id);
	
	

	// seed users
	$users[] = array();
	$users[] = User::addMember(array('first_name' => 'Nhân', 'last_name' => 'Phan Mạnh', 'email' => 'nhanphanmanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Sơn', 'last_name' => 'Nguyễn Mạnh', 'email' => 'sonnguyenmanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Hoàng', 'last_name' => 'Phan Mạnh', 'email' => 'hoangphanmanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Thông', 'last_name' => 'Trần Bá', 'email' => 'thongtranba@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Trí', 'last_name' => 'Dương Mạnh', 'email' => 'triduongmanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Hoài', 'last_name' => 'Lê Mạnh', 'email' => 'hoailemanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Hạnh', 'last_name' => 'Lý Gia', 'email' => 'hanhlygia@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Hoài', 'last_name' => 'Phạm Mạnh', 'email' => 'hoaiphammanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Minh', 'last_name' => 'Vũ Thị', 'email' => 'minhvuthi@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Phú', 'last_name' => 'Ngô Đức', 'email' => 'phungoduc@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Hạnh', 'last_name' => 'Hồ Mậu', 'email' => 'hanhhomau@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Phú', 'last_name' => 'Nguyễn Đức', 'email' => 'phunguyenduc@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Đăng', 'last_name' => 'Lý Văn', 'email' => 'danglyvan@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Tín', 'last_name' => 'Huỳnh Mạnh', 'email' => 'tinhuynhmanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Cẩm', 'last_name' => 'Ngô Mậu', 'email' => 'camngomau@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Nhân', 'last_name' => 'Huỳnh Mạnh', 'email' => 'nhanhuynhmanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Tín', 'last_name' => 'Dương Trọng', 'email' => 'tinduongtrong@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Châu', 'last_name' => 'Ngô Diệu', 'email' => 'chaungodieu@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Tín', 'last_name' => 'Ngô Mạnh', 'email' => 'tinngomanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Thu', 'last_name' => 'Hồ Thị', 'email' => 'thuhothi@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Gấm', 'last_name' => 'Phạm Mạnh', 'email' => 'gamphammanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Tín', 'last_name' => 'Đặng Diệu', 'email' => 'tindangdieu@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Tuệ', 'last_name' => 'Đặng Mạnh', 'email' => 'tuedangmanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Nhân', 'last_name' => 'Trần Gia', 'email' => 'nhantrangia@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Hải', 'last_name' => 'Nguyễn Gia', 'email' => 'hainguyengia@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Châu', 'last_name' => 'Nguyễn Mạnh', 'email' => 'chaunguyenmanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Công', 'last_name' => 'Ngô Diệu', 'email' => 'congngodieu@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Phú', 'last_name' => 'Ngô Bá', 'email' => 'phungoba@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Duyên', 'last_name' => 'Đặng Trọng', 'email' => 'duyendangtrong@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Sáng', 'last_name' => 'Phan Trọng', 'email' => 'sangphantrong@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Hương', 'last_name' => 'Huỳnh Mạnh', 'email' => 'huonghuynhmanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Nghĩa', 'last_name' => 'Hồ Mạnh', 'email' => 'nghiahomanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Tín', 'last_name' => 'Trần Mạnh', 'email' => 'tintranmanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Sáng', 'last_name' => 'Bùi Mậu', 'email' => 'sangbuimau@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Châu', 'last_name' => 'Bùi Trọng', 'email' => 'chaubuitrong@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Duyên', 'last_name' => 'Hồ Mạnh', 'email' => 'duyenhomanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Sơn', 'last_name' => 'Hồ Bá', 'email' => 'sonhoba@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'Nhân', 'last_name' => 'Phạm Bá', 'email' => 'nhanphamba@gmail.com', 'password' => Hash::make('demouser')), 1);
	$users[] = User::addMember(array('first_name' => 'An', 'last_name' => 'Đặng Mạnh', 'email' => 'andangmanh@gmail.com', 'password' => Hash::make('demouser')), 1);
	shuffle($users);
	// seed users
    }

}

?>
