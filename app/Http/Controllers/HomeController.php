<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Hotel;
use App\Models\Message;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public static function categorylist()
    {
        return Category::where('parent_id', '=',0)->with('children')->get();
    }
    public static function getsetting()
    {
        return Setting::first();
    }
    public function index()
    {
        $setting = Setting::first();
        return view('home.index', ['setting' => $setting, 'page'=>'home']);

    }
    public function hotel($id)
    {
        $data = Hotel::find($id);
        print_r($data);
        exit();

    }
    public function categoryhotel(Request $request)
    {

        $id=$request->input('id');
        $datalist = Hotel::where('category_id', $id)->get();
        $data = Category::find($id);
        return view('home.category_hotel', ['data' => $data,  'datalist' => $datalist]);
    }
    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

                return redirect()->intended('admin');

            }
            return back()->withErrors([
                'email' => 'Email veya şifre hatalı! ',

            ]);
        {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }




     public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);

    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact' ,  ['setting' => $setting]);
    }
    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data -> save();
        return redirect() -> route('contact')->with('success', 'Mesajınız Kaydedilmiştir , Teşekkür ederiz.');

    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references' ,  ['setting' => $setting]);

    }

/*
    public function test($id,$name)
    {
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data);// tek bir değerde çok şey tanımlamak için
        //return view('home.test', ['id'=>$id , 'name'=>$name]);
        /*echo " Id Number : ", $id;
        echo "<br> Name : ", $name;
        for($i=1;$i<=$id;$id++)
        {
            echo "<br> $i - $name";
        }*/

}
