<?php 

class ClientLoginCest
{
    private $test_client_userid;
    private $client_id;
    public function _before(AcceptanceTester $I) {
         // Create Test Client User
        $test_client = array(
            'name'          =>'Test Client',
            'username'      =>'test_client',
            'email'         =>'testclient@aedaccess.com',
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
        
        $this->test_client_userid = $I->haveInDatabase('jos_users', $test_client);
        $usermap = array(
            'user_id'=> $this->test_client_userid,
            'group_id'=> 1
        );
        $I->haveInDatabase('jos_user_usergroup_map', $usermap);
        
        $usermap = array(
            'user_id'=> $this->test_client_userid,
            'group_id'=> 2
        );
        $I->haveInDatabase('jos_user_usergroup_map', $usermap);
        
        $usermap = array(
            'user_id'=> $this->test_client_userid,
            'group_id'=> 11
        );
        $I->haveInDatabase('jos_user_usergroup_map', $usermap);
        
        $I->comment("this->test_client_userid = ".$this->test_client_userid);
        $client = array(
            'userid'                =>$this->test_client_userid, 
            'name'                  =>'Codeception Test Client', 
            'client_name'           =>'Codeception Test Client', 
            'contact_fname'=>'', 
            'contact_lname'=>'', 
            'contact_phone'=>'', 
            'contact_cell'=>'', 
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
            'annual_inspection'=>'', 
            'program_aed'=>'', 
            'program_implemented'=>'', 
            'program_expires'=>'', 
            'compliance_medical_direction'  =>'1970-01-01 00:00:00', 
            'compliance_aed_orientation'    =>'1970-01-01 00:00:00', 
            'compliance_training'           =>'1970-01-01 00:00:00',  
            'compliance_ems_notification'   =>'1970-01-01 00:00:00',  
            'compliance_policy'             =>'1970-01-01 00:00:00', 
            'checked_out'                   =>0, 
            'checked_out_time'              =>'1970-01-01 00:00:00', 
            'receive_sms'                   =>0, 
            'receive_email'                 =>0, 
            'accepted_tos'                  =>0, 
            'confirmation_code'             =>0, 
            'confirmation_email_code'       =>0, 
            'valid_email'                   =>0, 
            'valid_sms'                     =>0
        );
        $this->client_id = $I->haveInDatabase('jos_aedman_client', $client);
    }
    public function loginWithBadCreds(AcceptanceTester $I)
    {
        // Arrange
        
        // Act
        $I->amOnPage('/index.php');
        $I->comment('Fill Username Text Field');
        $I->fillField('#modlgn-username', 'test_client');
        $I->comment('Fill Password Text Field');
        $I->fillField('#modlgn-passwd', 'wrongpassword');
        $I->comment('I click Login button');
        $I->click('Log in');
        // Assert
        $I->comment('I see Login Error');
        $I->see('Username and password do not match or you do not have an account yet.','body');
    }
    public function clientCanLogin(AcceptanceTester $I)
    {
        // Arrange

        // Act
        $I->amOnPage('/index.php');
        $I->comment('Fill Username Text Field');
        $I->fillField('#modlgn-username', 'test_client');
        $I->comment('Fill Password Text Field');
        $I->fillField('#modlgn-passwd', 'SG1Vc@080%');
        $I->comment('I click Login button');
        $I->click('Log in');
        // Assert
        $I->comment('I see AEDMan Dashboard');
        $I->see('My Dashboard', 'h2.title');
    }
    
    public function clientCanSeeMenu(AcceptanceTester $I)
    {
        // Arrange
        
        // Act
        $I->amOnPage('/index.php');
        $I->comment('Fill Username Text Field');
        $I->fillField('#modlgn-username', 'test_client');
        $I->comment('Fill Password Text Field');
        $I->fillField('#modlgn-passwd', 'SG1Vc@080%');
        $I->comment('I click Login button');
        $I->click('Log in');
        
       
        // Assert
        $I->amOnPage('/dashboard.html');
        $I->comment('I see AEDMan Menu');
        $I->see('My Dashboard',         '#Mod140');
        $I->see('Facility Dashboard',   '#Mod140');
        $I->see('Facility AED Status',  '#Mod140');
        $I->see('Employee Training',    '#Mod140');
        $I->see('AED Use Report',       '#Mod140');
        $I->see('Resources',            '#Mod140');
        $I->see('Order Supplies',       '#Mod140');
        $I->see('My AED Uses',          '#Mod140');
        $I->see('Contact Your Rep',     '#Mod140');
        $I->see('Logout',               '#Mod140');
    }
}
