<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    public function service_details() {
        $this->load->view('service-details'); // Pastikan nama file benar
    }

}
?>
