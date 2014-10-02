<?php

class User_model extends CI_Model {

    private $id = '';
    private $username = '';
    private $password = '';
    private $fullname = '';
    private $mail = '';
    private $phone = '';
    private $createOn = '';
    private $lastLogin = '';
    private $activationCode = '';
    private $forgottenPasswordCode = '';
    private $role = '';
    private $isActive = '';
    private $isDisable = '';
    private $isDelete = '';

    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    function User_model($id = '', $username = '', $password = '', $mail = '', $phone = '', $createOn = '', $lastLogin = '', $activationCode = '', $forgottenPasswordCode = '', $role = '', $isActive = '', $isDisable = '', $isDelete = '') {
        parent::__construct();
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->mail = $mail;
        $this->phone = $phone;
        $this->createOn = $createOn;
        $this->lastLogin = $lastLogin;
        $this->activationCode = $activationCode;
        $this->forgottenPasswordCode = $forgottenPasswordCode;
        $this->role = $role;
        $this->isActive = $isActive;
        $this->isDisable = $isDisable;
        $this->isDelete = $isDelete;
    }

    /*
     * Methods for User Model
     */
    
    /*
     * Insert new record
     */
    
    public function register() {
        $data = $this->User_model();
        $this->db->insert('users', $data);
        
    }
    
    /*
     * Getters and Setters of User
     */

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getFullname() {
        return $this->fullname;
    }

    public function setFullname($fullname) {
        $this->fullname = $fullname;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getCreateOn() {
        return $this->createOn;
    }

    public function setCreateOn($createOn) {
        $this->createOn = $createOn;
    }

    public function getLastLogin() {
        return $this->lastLogin;
    }

    public function setLastLogin($lastLogin) {
        $this->lastLogin = $lastLogin;
    }

    public function getActivationCode() {
        return $this->activationCode;
    }

    public function setActivationCode($activationCode) {
        $this->activationCode = $activationCode;
    }

    public function getForgottenPasswordCode() {
        return $this->forgottenPasswordCode;
    }

    public function setForgottenPasswordCode($forgottenPasswordCode) {
        $this->forgottenPasswordCode = $forgottenPasswordCode;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function getIsActive() {
        return $this->isActive;
    }

    public function setIsActive($isActive) {
        $this->isActive = $isActive;
    }

    public function getIsDisable() {
        return $this->isDisable;
    }

    public function setIsDisable($isDisable) {
        $this->isDisable = $isDisable;
    }

    public function getIsDelete() {
        return $this->isDelete;
    }

    public function setIsDelete($isDelete) {
        $this->isDelete = $isDelete;
    }

}