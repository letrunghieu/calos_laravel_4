<?php

/**
 * A user (or member) of a organization
 * 
 * @property integer $id Description
 * @property string $first_name Description
 * @property string $last_name Description
 * @property string $email Description
 * @property string $password Description
 * @property integer $gender Description
 * @property string $address Description
 * @property string $mobile_phone Description
 * @property string $verify_token Description
 * @property DateTime $created_at Description
 * @property DateTime $updated_at Description
 * @property DateTime $deleted_at Description
 * 
 * @property array $metas Description
 * @property array $vacancies Description
 * @property array $announcements Description
 * @property array $activities Description
 */
class User extends Eloquent
{

    const GENDER_UNDEFINED = -1;
    const GENDER_FEMALE = 0;
    const GENDER_MALE = 1;

    public $timestamps = true;
    protected $softDelete = true;

    public function metas()
    {
	return $this->belongsToMany('Meta', 'metavalues', 'subject_id', 'meta_id')->withPivot('value')->withTimestamps();
    }

    public function vacancies()
    {
	return $this->belongsToMany('Vacancy')->withTimestamps();
    }

    public function announcements()
    {
	return $this->hasMany('Announcement', 'creator_id');
    }

    public function activities()
    {
	return $this->hasMany('Activity', 'assignee_id');
    }

    /**
     * 
     * @param array $userInfo
     * @param type $site_id
     * @return User
     */
    public static function addMember(array $userInfo, $site_id)
    {
	$token = null;
	if (!isset($userInfo['verify_token']) || $userInfo['verify_token'])
	{
	    $token = sha1($userInfo['email'] . time());
	    $userInfo['verify_token'] = $token;
	}
	$user = static::create($userInfo);
	if ($user)
	{
	    $memberVacancy = Vacancy::getMemberVacancy($site_id);
	    $user->vacancies()->attach($memberVacancy->id);
	    if ($token !== null)
	    {
		Mail::send('emails.auth.new', array(
		    'token' => $token,
			), function($message) use ($user)
			{
			    $message->to($user->email, $user->first_name)
				    ->subject('Wellcome!');
			});
	    }
	}
	return $user;
    }

}