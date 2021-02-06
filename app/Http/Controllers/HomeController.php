<?php

namespace App\Http\Controllers;


use App\Http\Livewire\Review;
use App\Models\Category;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Message;
use App\Models\Rezervasyon;
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

    public function review()
    {
        $setting = Review::first();
        return view('home.review', ['setting' => $setting]);
    }
    public function rezervasyon($id,$slug)
    {
       echo "Rezervasyon <br>" ;
       $data = Hotel::find($id);
       print_r($data);
       exit();
    }
    public function sendreview(Request $request,$id)
    {
        $data = new Review;

        $data->user_id = Auth::id();
        $hotel = Hotel::find($id);
        $data->hotel_id=$id;
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->IP = $_SERVER['REMOTE_ADDR'];
        $data->rate = $request->input('rate');

        $data->save();

        return redirect()->route('hotel',['id'=>$hotel->id,'slug'=>$hotel->slug])->with('success','Yourumunuz kaydedilmiştir');
    }

    public function sendrezerve(Request $request,$id)
    {
        $data = new Rezervasyon();
        $data->room_id =$id;
        $data->user_id = Auth::id();
        $data->hotel_id = $id;


        $data->name = $request->input('name');
        $data->surname = $request->input('surname');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->checkin = $request->input('checkin');
        $data->checkout = $request->input('checkout');
        $data->days = $request->input('days');
        $data->note = $request->input('note');
        $data->IP = $_SERVER['REMOTE_ADDR'];
        $data->status = $request->input('status');


        $data->save();

        return redirect()->route('home');
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Hotel::select('title' ,'image', 'price','category_id','city')->limit(3)->get();
        $featured = Hotel::select('id','title', 'image','category_id','city','price','address','country')->limit(6)->orderByDesc('id')->get();
        $firsat = Hotel::select('id','title', 'image','category_id','city','price','address','country')->limit(6)->inRandomOrder()->get();

        $datalist = [
            'setting' => $setting,
            'slider' => $slider,
            'featured' => $featured,
            'firsat' => $firsat,
            'page'=>'home'

       ];
        return view('home.index' ,['datalist' => $datalist ]);

    }
    public function hotel($id)
    {
        $setting = Setting::first();
        $data = Hotel::find($id);
        $rooms=Room::where('hotel_id',$id)->get();
        $datalist = Image::where('hotel_id' ,$id)->get();
        $reviews = Review::where('hotel_id' ,$id)->get();
        /*print_r($data);
        exit();*/

        return view('home.hotel_detail', ['setting' => $setting, 'data' => $data, 'datalist'=>$datalist, 'reviews' => $reviews, 'rooms'=>$rooms]);


    }
    public function gethotel(Request $request)
    {
        $search=$request->input('search');

        $count = Hotel::where('title', 'like' , '%' .$search.'%')->get()->count();
        if ($count==1)
        {
            $data = Hotel::where('title', 'like' , '%' .$search.'%')->first();
            return redirect()->route('hotel', ['id'=>$data->id]);
        }
        else {
            return redirect()->route('hotellist',['search'=>$search]);
        }

    }
    public function search_page(){
        $setting=Setting::first();
        return view('home.search_page',['setting'=>$setting,'page'=>'home']);
    }

    public function hotellist($search)
    {
        $setting = Setting::first();
        $datalist = Hotel::where('title', 'like', '%'.$search.'%' )->get();
        return view('home.search_hotels', ['search'=>$search, 'datalist'=>$datalist, 'setting' => $setting]);
    }

    public function categoryhotels($id)
    {

        $datalist = Hotel::where('category_id', $id)->get();
        $data = Category::find($id);
        return view('home.category_hotels', ['data' => $data,  'datalist' => $datalist]);
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
