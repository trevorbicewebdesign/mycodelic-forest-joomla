<?php

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
    * Define custom actions here
    */
    public function createFakeUser($name, $username, $email){
        $I = $this;
        // Create Test Client User
        $test_client = array(
            'name'          =>$name,
            'username'      =>$username,
            'email'         =>$email,
            //SG1Vc@080%
            'password'      =>'$2y$10$C.UBjSEAOGwxjZUU1HMAzO1K/8L.gQvdreta6DttmhjzntUyLku8C',
            'block'         => '0',
            'sendEmail'     => '1',
            'registerDate'  => date("Y-m-d h:i:s"),
            'lastvisitDate' => '1970-01-01 00:00:00',
            'activation'    => '',
            'params'        =>'{"admin_style":"","admin_language":"","language":"","editor":"","helpsite":"","timezone":""}',
            'lastResetTime' => '1970-01-01 00:00:00',
            'resetCount'    => '0',
            'otpKey'        => '',
            'otep'          => '',
            'requireReset'  => '0'
        );
        
        $test_client_userid = $I->haveInDatabase('jos_users', $test_client);
        $usermap = array(
            'user_id'=> $test_client_userid,
            'group_id'=> 1
        );
        $I->haveInDatabase('jos_user_usergroup_map', $usermap);
        
        $usermap = array(
            'user_id'=> $test_client_userid,
            'group_id'=> 2
        );
        $I->haveInDatabase('jos_user_usergroup_map', $usermap);
        
        $usermap = array(
            'user_id'=> $test_client_userid,
            'group_id'=> 11
        );
        $I->haveInDatabase('jos_user_usergroup_map', $usermap);
        return $test_client_userid;
    }
    public function createFakeClient($userid){
        $I = $this;
        
        $client = array(
            'userid'                =>$userid, 
            'name'                  =>'Codeception Test Client', 
            'client_name'           =>'Codeception Test Client', 
            'contact_fname'=>'', 
            'contact_lname'=>'', 
            'contact_phone'=>'', 
            'contact_cell'          =>'5005550006', 
            'contact_cell_carrier'  =>'', 
            'contact_receive_sms'   =>0, 
            'contact_receive_email' =>0, 
            'contact_email'=>'', 
            'contact_position'=>'', 
            'p_address_1'=>'', 
            'p_address_2'=>'', 
            'p_city'=>'', 
            'p_state'=>'', 
            'p_zipcode'             =>'99999', 
            'm_address_1'=>'', 
            'm_address_2'=>'', 
            'm_city'=>'', 
            'm_state'=>'', 
            'm_zipcode'=>'', 
            'annual_inspection'=>'', 
            'program_aed'=>'', 
            'program_implemented'=>'', 
            'program_expires'=>'', 
            'compliance_medical_direction'  =>date('Y-m-d').' 00:00:00', 
            'compliance_aed_orientation'    =>date('Y-m-d').' 00:00:00', 
            'compliance_training'           =>date('Y-m-d').' 00:00:00',  
            'compliance_ems_notification'   =>date('Y-m-d').' 00:00:00',  
            'compliance_policy'             =>date('Y-m-d').' 00:00:00', 
            'checked_out'                   =>0, 
            'checked_out_time'              =>'1970-01-01 00:00:00', 
            'receive_sms'                   =>0, 
            'receive_email'                 =>0, 
            'accepted_tos'                  =>1, 
            'confirmation_code'             =>0, 
            'confirmation_email_code'       =>0, 
            'valid_email'                   =>1, 
            'valid_sms'                     =>1
        );
        return $I->haveInDatabase('jos_aedman_client', $client);
    }
    public function createFakeFacility($userid, $client_id){
        $I = $this;
        
        $facility = array(
            'cid'                           =>$client_id, 
            'userid'                        =>$userid, 
            'facility_name'                 =>'Codeception Test Facility', 
            'contact_fname'=>'', 
            'contact_lname'=>'', 
            'contact_phone'=>'', 
            'contact_cell'                  =>'5005550006', 
            'contact_cell_carrier'=>'', 
            'contact_receive_sms'   =>0, 
            'contact_receive_email' =>0, 
            'contact_email'=>'', 
            'contact_position'=>'', 
            'p_address_1'=>'', 
            'p_address_2'=>'', 
            'p_city'=>'', 
            'p_state'=>'', 
            'p_zipcode'             =>'99999', 
            'm_address_1'=>'', 
            'm_address_2'=>'', 
            'm_city'=>'', 
            'm_state'=>'', 
            'm_zipcode'=>'', 
            'in_service_notes'=>'', 
            'facility_notes'=>'',
            'checked_out'                   =>0, 
            'checked_out_time'              =>'1970-01-01 00:00:00', 
            'receive_sms'                   =>0, 
            'receive_email'                 =>0, 
            'accepted_tos'                  =>1, 
            'confirmation_code'             =>0, 
            'confirmation_email_code'       =>0,
            'valid_email'                   =>1, 
            'valid_sms'                     =>1
        );
        return $I->haveInDatabase('jos_aedman_facility', $facility);
    }
    public function createFakeAed($location,$cid,$fid,$alert_array){
        $I = $this;
    
        $aed = array(
            'cid'                       =>$cid, 
            'fid'                       =>$fid, 
            'name'                      =>'', 
            'location'                  =>$location, 
            'aed_id'                    =>1, 
            'serial_number'             =>'19D00017511', 
            'model_number'              =>'SAM 350P', 
            'manufacturer'              =>'Heartsine', 
            'date_manufactured'         =>'2019-12-01 06:00:00', 
            'battery_model'             =>'PAD/PAK', 
            'battery_lot'               =>'A3486', 
            'battery_date'              =>'2019-12-01 06:00:00', 
            'battery_expiration'        =>$alert_array['battery_expiration'], 
            'spare_electrode'           =>0, 
            'spare_electrode_expiration'=>$alert_array['spare_electrode_expiration'], 
            'spare_electrode_lot'       =>'', 
            'pad_expiration'            =>$alert_array['pad_expiration'], 
            'pad_lot'                   =>'A3486', 
            'pedi_pad'                  =>0, 
            'pedi_pad_expiration'       =>$alert_array['pedi_pad_expiration'], 
            'pedi_pad_lot'              =>'', 
            'warranty_end_date'         =>$alert_array['warranty_end_date'], 
            'annual_inspection'         =>$alert_array['annual_inspection'], 
            'status'                    =>0,
            'aed_status'                =>NULL, 
            'checked_out'               =>0, 
            'checked_out_time'          =>NULL, 
        );
        return $I->haveInDatabase('jos_aedman_aed', $aed);
    }
}
