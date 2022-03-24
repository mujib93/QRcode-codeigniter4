<?php

namespace App\Controllers;

use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output\Png;

class Home extends BaseController
{
	public function index()
	{
		$dataQR = 'good luck';
		$qrCode = new QrCode($dataQR);

		$output = new Png();

		$imagedir  = 'temp/';
		$imagename = "{$dataQR}.png";
		// Save black on white PNG image 100px wide to filename.png
		//file_put_contents('temp/filename.png', $output->output($qrCode, 100, [255, 255, 255], [0, 0, 0]));
		file_put_contents("{$imagedir}{$imagename}", $output->output($qrCode, 100, [255, 255, 255], [0, 0, 0]));

		echo '<img src="'.base_url().'/temp/'.$imagename.'" />';
		//echo '<img src="temp/coba.png" />';
	}
}
