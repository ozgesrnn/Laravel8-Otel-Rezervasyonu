<?php

namespace App\Http\Controllers;



use App\Models\Category;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Message;
use App\Models\Rezervasyon;
use App\Models\Setting;
use Hamcrest\Core\Set;
use App\Models\Review;
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

    public function rezervasyon($id,$slug)
    {
       echo "Rezervasyon <br>" ;
       $data = Hotel::find($id);
       print_r($data);
       exit();
    }



    public function index()
    {
       $setting = Setting::first();
       $slider = Hotel::select('id','title', 'image','category_id','city','slug','address','country')->limit(4)->inRandomOrder()->get();
       $firsat = Hotel::select('id','title', 'image','category_id','city','slug','address','country')->limit(4)->orderByDesc('id')->get();
       $featured = Hotel::select('id','title', 'image','category_id','city','slug','address','country')->limit(4)->inRandomOrder()->get();
       #print_r($slider);
         #exit();


        return view('home.index' ,['setting' => $setting, 'slider' => $slider, 'firsat' => $firsat,  'featured' => $featured,'page' => 'home']);
    }


    public function hotel($id)
    {
        $setting = Setting::first();
        $data = Hotel::find($id);
        $datalist = Image::where('hotel_id' ,$id)->get();
        $reviews = Review::where('hotel_id', $id)->get();

        /*print_r($data);
        exit();*/

        return view('home.hotel_detail', ['setting' => $setting, 'data' => $data, 'datalist'=>$datalist, 'reviews'=>$reviews]);


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
