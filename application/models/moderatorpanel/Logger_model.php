<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Logger_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function loger_LoginAttempt()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Login Attempt | Query Process...",
            'category' => "Session",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_LoginFailed()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Login Attempt | Login Failed",
            'category' => "Session",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_LoginFailNotGM()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Login Attempt | Query Canceled",
            'category' => "Session",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_LoginSuccess()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "".$_SESSION['admin_name']." Successfully Logged In",
            'category' => "Session",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_logoutberhasil()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Logout Attempt | Logout Successfully",
            'category' => "Session",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_logoutgagal()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Logout Attempt | Logout Failed",
            'category' => "Session",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_CreateAccountSuccess()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Create Player Attempt (GM : ".$_SESSION['admin_name'].") | Create Player Successfully",
            'category' => "Player",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_CreateAccountFailed()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Create Player Attempt (GM : ".$_SESSION['admin_name'].") | Create Player Failed",
            'category' => "Player",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_DeleteItemSuccess($player_id, $item_name)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Delete Item Attempt (GM : ".$_SESSION['admin_name']." , Inventory ID : ".$player_id." , Item Name : ".$item_name.") | Delete Item Successfully",
            'category' => "Player",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_DeleteItemFailed($player_id, $item_name)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Delete Item Attempt (GM : ".$_SESSION['admin_name']." , Inventory ID : ".$player_id." , Item Name : ".$item_name.") | Delete Item Failed",
            'category' => "Player",
            'date' => date('d-m-Y h:i:s')
        ));
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>