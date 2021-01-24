<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * 
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    /**
     * 
     */
    public function index()
    {
        $this->load->view('./templates/header.php');
        $this->load->view('./templates/nav.php');
        $this->load->view('./home/index.php');
        $this->load->view('./templates/footer.php');
    }

    /**
     * 
     */
    public function Create()
    {
        $this->load->view('./templates/header.php');
        $this->load->view('./templates/nav.php');
        $this->load->view('./home/create.php');
        $this->load->view('./templates/footer.php');
    }

    /**
     * 
     */
    public function Read()
    {
        $this->load->view('./templates/header.php');
        $this->load->view('./templates/nav.php');
        $this->load->view('./home/read.php');
        $this->load->view('./templates/footer.php');
    }

    /**
     * 
     */
    public function update()
    {
        $this->load->view('./templates/header.php');
        $this->load->view('./templates/nav.php');
        $this->load->view('./home/update.php');
        $this->load->view('./templates/footer.php');
    }

    /**
     * 
     */
    public function delete()
    {
        var_dump('delete'); die;
        $this->load->view('./templates/header.php');
        $this->load->view('./home/index.php');
        $this->load->view('./templates/footer.php');
    }
}
