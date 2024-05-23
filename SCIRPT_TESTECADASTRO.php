<?php
class BuddyPressFormTest extends WP_UnitTestCase {
    
    public function setUp() {
        parent::setUp();
    }

    public function testBuddyPressFormSubmission() {
        $_POST = array(
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => 'testpassword',
            'name' => 'Test User',
            'gender' => 'Masculino',
            'game' => 'Example Game',
            'rank' => 'Gold',
            'dob_day' => '15',
            'dob_month' => '06',
            'dob_year' => '1990',
           
        );

        buddypress_process_registration();

        $user = get_user_by('login', 'testuser');
        $this->assertNotEmpty($user);
        $this->assertEquals('test@example.com', $user->user_email);

        $this->assertEquals('masculino', bp_get_profile_field_data(array('user_id' => $user->ID, 'field' => 'gender')));
        $this->assertEquals('Example Game', bp_get_profile_field_data(array('user_id' => $user->ID,

?>
