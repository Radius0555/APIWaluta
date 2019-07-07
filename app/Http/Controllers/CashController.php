<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashController extends Controller
{
    public function index()
	{
		$url = 'http://api.nbp.pl/api/exchangerates/tables/A/?format=json';
		$page = file_get_contents($url);
		$json = json_decode($page, true);
		$j = 0;
		
		while($j < count($json[0]['rates'])){
			$cash[] = $json[0]['rates'][$j];
			$j++;
		}
		
		return view('apiwaluta.index', compact('cash'));
	}
	public function pokaz(Request $request)
	{
		$ulrs = 'http://api.nbp.pl/api/exchangerates/rates/a';
		$cash = $request->input('cash');
		$dateStart = $request->input('start');
		$dateStop = $request->input('end');
		$result = $ulrs.'/'.$cash.'/'.$dateStop.'/'.$dateStart.'/?format=json';
		$page2 = file_get_contents($result);
		$json2 = json_decode($page2, true);
		$i = 0;

		while($i < count($json2['rates'])){
			$chart[] = $json2['rates'][$i];
			$i++;
		}
		return $chart;
	}
}

/*['mid']
['effectiveDate']*/