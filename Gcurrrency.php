<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Get currency data from Google
 *
 * @package  GLibraries
 * @author     Luiz Alberto <madeinnordeste at gmail.com>
 * @version   0.0.1
 *
 *  More currency codes:
 *  http://pt.wikipedia.org/wiki/ISO_4217
 *
 */

class Gcurrrency
{
		
		
	public function convert($from='USD', $to='BRL', $amount=1){
	
		$url = "http://www.google.com/finance/converter?a=".$amount."&from=".$from."&to=".$to;
		
		$fd = fopen ($url, "r");
		
		$lines = "";
		
		while (!feof ($fd))
		{
			$buffer = fgets($fd, 4096);
			
			//$lines[] = $buffer;			
			$lines.=$buffer;
		}
	
		fclose ($fd);
		
		$pattern = '/([0-9](.|,| )?){1,20}\ [A-Z]{3}/';
	
		preg_match_all($pattern, $lines, $matches);
		
		return $matches[0];
	
	
	
	}
}