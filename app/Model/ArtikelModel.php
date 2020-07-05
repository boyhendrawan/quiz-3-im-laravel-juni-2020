<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArtikelModel extends Model
{
 public static function read()
  {
  	  $items=DB::table("table_artikel")->get();
  	  return $items;
  }
  public static function users($id)
  {
  	$users=DB::table("table_users")->where('id',$id)->first();
  	return $users;
  }
  public static function store($data)
  {
  	$file=DB::table('table_artikel')->insert($data);
  	return $file;
  }
  public static function get_once($id)
  {
  	$file=DB::table('table_artikel')->where('id',$id)->first();
  	return $file;
  }
  public static function update_file($id,$data)
  {

  	$file=DB::table('table_artikel')->where('id',$id)->update([
  		'judul'=>$data["judul"],
  		'isi'=>$data["isi"],
  		'slug'=>$data["slug"],
  		'tag'=>$data["tag"],
  		'updated_at'=>$data["updated_at"],
  	]);
 
  	return $file;
  }
  public static function hapus($id)
  {
  	$file=DB::table('table_artikel')->where('id',$id)->delete();
  	return $file;
  }
}
