<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ArtikelModel;

class ArtikelController extends Controller
{
   public function read()
   {
   	 $items=ArtikelModel::read();
   	 $user=ArtikelModel::users("1");

   	 return view('Tugas.index',["items"=>$items,"user"=>$user]);
   }
   public function create()
   {
   	return view("Tugas.create");
   }
   public function store(Request $request)
   {
   	 $data=$request->all();

   	 unset($data["_token"]);
   	 $data['created_at'] =now();
   	 $data['updated_at'] =now();
   	 $file1=$data['judul'];
   	 $array=explode(" ", $file1);
   	 $data1=implode("-", $array);

   	 $data['slug']=strtolower($data1);


   	 $exe=ArtikelModel::store($data);

   	 if($exe)
   	 {
   	 	return redirect("/artikel")->with('create','data telah di tambah');
   	 }
   }
   public function show($id)
   {
   	$file=ArtikelModel::get_once($id);
   	return view('Tugas.show',["id"=>$file]);
   }
   public function edit($id)
   {
   	$file=ArtikelModel::get_once($id);
   	return view('Tugas.edit',["file"=>$file]);
   }
   public function update(Request $request,$id)
   {
   	$data=$request->all();
   	$data['updated_at']=now();
   	$file1=$data['judul'];
   	 $array=explode(" ", $file1);
   	 $data1=implode("-", $array);

   	 $data['slug']=strtolower($data1);

   $exe=ArtikelModel::update_file($id,$data);
  
   if($exe)
   {
   	return redirect('/artikel')->with('update','artikel telah di update');
   }
   }
   public function destory($id)
   {
   	$res=ArtikelModel::hapus($id);

   	if($res)
   	{
   		return redirect('/artikel')->with('delete','artikel telah di hapus ');
   	}
   }
}
