<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Jenssegers\Blade\Blade;

class Welcome extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $blade = new Blade(VIEWPATH, APPPATH . 'cache');
        echo $blade->make('form', [])->render();
    }

    public function tampil()
    {
        $nama = 'tata';
        $blade = new Blade(VIEWPATH, APPPATH . 'cache');
        echo $blade->make('tampil', ['nama' => $nama])->render();

        let umur = prompt("Masukkan umur Anda: ");

		else if (usia <10) {
			kategori ="Anak-anak";
		}
		else if (usia <20) {
			kategori ="Remaja";
		}
		else if (usia <30) {
			kategori ="Dewasa";
		}
		else if (usia >30) {
			kategori ="Tua";
		}
		console.log("Status: " + status);

    }
}
