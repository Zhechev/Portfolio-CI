<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

    public function index()
    {

        $file = base_url() . 'assets/docs/Zhechev.pdf';

        $type = filetype($file);

        header("Content-type: $type");
        header("Content-Disposition: attachment;filename={$file}.pdf");
        header("Content-Transfer-Encoding: binary");
        header('Pragma: no-cache');
        header('Expires: 0');

        set_time_limit(0);
        readfile($file);
    }
}