<?php

/**
 * @package AuthenticateSystem
 */
class Member
{
    /**
     * @var dummy variable
     */
    private $arr_member;

    /**
     * @todo what is this
     */
    private $found;

    /**
     * @todo what is this
     */
    private $result;

    /**
     * Description
     * @return void
     */
    public function __construct()
    {
        $this->arr_member = array(0 => array('firstname' => "jutamast",'lastname' => "akkavasakul",'citizenid' =>"1111111111",'gender'=>1,'birthdate'=>"1987-12-22",'phone'=>"0879953272",'registerdate'=>"2012-01-03",'expiredate'=>"2013-01-03"),
                                  1 => array('firstname' => "tai",'lastname' => "kung",'citizenid' =>"1111111111",'gender'=>1,'birthdate'=>"1987-12-22",'phone'=>"0879953272",'registerdate'=>"2012-01-03",'expiredate'=>"2013-01-03"));
        if(isset($_SESSION['member'])!=''){
            $this->arr_member = array_merge($this->arr_member,$_SESSION['member']);
            
            //$_SESSION["member"][]= $this->arr_member;
            //$this->arr_member += $_SESSION['member'];
            //$this->arr_member;
        }else{
            $this->arr_member;
        }
    }

    /**
     * Add member data into $_SESSION['data']
     *
     * @todo find member data (check is it already exist or not?)
     * @todo renew member (if expire)
     *
     * @param array $member Memer data (Firstname, Lastname, Citizen ID, Gender, Birth date, Phone, Register date, Expire date)
     * @return boolean Register status
     */
    public function register($member)
    {
        $_SESSION['member'][] = $member;
        
        $this->arr_member[] = $_SESSION['member'];
    }

    /**
     * Fetch all member
     * 
     * @return array Member[]
     */
    public function memberList()
    {
        return $this->arr_member;
    }

    /**
     * Find member by member ID
     *
     * @param string $member_id
     * @return object Member
     */
    public function findMember($member_id)
    {
        if(isset($this->arr_member[$member_id])){
            return $this->arr_member[$member_id];
        }
    }

    /**
     * Renew member data
     *
     * @param string $member_id
     * @param string $register_date
     * @param string $expire_date
     * @return object Member
     */
    public function renewMember($member_id, $register_date, $expire_date)
    {
        $this->arr_member[$member_id]["registerdate"] = $register_date;
        $this->arr_member[$member_id]["expiredate"] = $expire_date;

        return $this->arr_member[$member_id];
    }

    /**
     * @todo Check username, password
     * @todo register session if success
     * @todo return just boolean :D
     * 
     * @param string $username
     * @param string $password
     * @return boolean
     */
    public function login($username, $password)
    {
        $is_success = true;
        
        return $is_success;
    }

}