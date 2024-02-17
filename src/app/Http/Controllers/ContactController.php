<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;

class ContactController extends Controller
{
    public function index()
    {
    return view('index');
    }

    public function confirm(Request $request)
{   //$contact = (['tel' => $request->tel1 . $request->tel2 .$request->tel3])+(['name' => $request->last_name + "." + $request->first_name])+$request->only(['gender','email', 'tel','gender','address','building','detail','content']);
$contact = [
    'tel' => $request->tel1 . $request->tel2 . $request->tel3,
    'last_name'=> $request->last_name, 
    'first_name'=>$request->first_name,
    'gender' => $request->gender,
    'email' => $request->email,
    'address' => $request->address,
    'building' => $request->building,
    'detail' => $request->detail,
    'content' => $request->content];
    return view('confirm', compact('contact'));
    //取得した入力情報を変数\$contactに格納し、その値を return
}

    public function store(Request $request)
    {$contact = $request->only(['last_name', 'first_name','gender','email', 'tel','address','building','detail','content']);
    Contact::create($contact);
    return view('thanks');
    }

    
}