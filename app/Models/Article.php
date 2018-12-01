<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Support\Facades\DB;


class Article extends Model
{
	
	
    public $table = 'zc_article';
	protected $primaryKey = 'article_id';
	const UPDATED_AT='dateline';
	
	public function ceshi(){
		return "ddddd";
	}
	
	public function readCountry()//查  
    {  
        return $this->where('article_id','>=',520)->get();  
    }  
    public function oneCountry($data,$arr)//单条查询  
    {  
        return $this->where($data,$arr)->get()->toArray();  
    }  
    public function delCountry($data)//删  
    {  
        $country = $this->where($data);  
        return $country->delete();  
    }  
    public function updCountry($data,$list,$arr)//改  
    {  
        $country = $this->where($data,$list);  
        return $country->update($arr);  
    }  
    public function addCountry($data)//增  
    {  
        return $this->insert($data);  
    } 
}