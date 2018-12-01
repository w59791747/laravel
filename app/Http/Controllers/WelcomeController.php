<?php

namespace App\Http\Controllers;
use View;
use DB;
use Illuminate\Http\Request;
use App\Models\Article;


class WelcomeController extends Controller
{
    function  index()
	{
		$country = new Article();  
		echo $country->ceshi();
		$test_1 = range(0,9);
		$test_2 = range(10,19);
		$test_3 = range(20,29);
		$test_5 = '11111';
		return View('welcome.index',compact('test_1','test_2' ,'test_3','test_5'));
	}
	
	function getall()
	{
		$country = new Article();
		DB::listen(function($sql) {
			dump($sql);
		});
		$article = $country->readCountry();
		//$all = json_decode($article,true);
		//$ONE = $country->find(520)->toArray();  
		//$ONE = $country->where('article_id','520')->where('cate_id','112')->where('from','article')->orwhere('from','help')->get()->toArray();
        //$country2 = $country->where('article_id','520');  
        //$country2->delete();
		$country->addCountry(array('title'=>'345345','cate_id'=>'22322'));
		$country2 = $country->where('article_id','532')->update(array('title'=>'3333333','cate_id'=>'222')); 
		$ONE = $country->where(function($q){
			return $q->where('article_id','520')->orWhere([['from', 'article'],['article_id', '>','20']]);
		}) 
		->where('cate_id','112')->get()->toArray();
		var_dump($ONE);
		
	}
}
  
