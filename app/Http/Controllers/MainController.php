<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use App\Models\Category;
use App\Models\Address;

class MainController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        //dd($categories);
        //return view('home');
        return view('main.categories')->with(['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        //
        //dd($request);
        $rules = [
            'fname' => 'required',
            'lname' => 'required',
            'lstDobDay' => 'required',
            'lstDobMonth' => 'required',
            'lstDobYear' => 'required',
            'email' => ['required','unique:personals','email'],
            'phone' => ['required','unique:personals', 'string', 'min:10']
        ];
        
        $this->validate($request, $rules);
        $ua = $request->server('HTTP_USER_AGENT');
        $ip = $request->ip();
        $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 
        $device = '';
        if($isMob){ 
            $device = 'mobile'; 
        }else{ 
            $device = 'desktop'; 
        }

        $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
        if ((substr($_SERVER['HTTP_USER_AGENT'], 0, 6) == "Opera/") || (strpos($userAgent, 'opera')) != false) {
            $browser = 'opera';
        } elseif ((strpos($userAgent, 'chrome')) != false) {
            $browser = 'chrome';
        } elseif ((strpos($userAgent, 'safari')) != false && (strpos($userAgent, 'chrome')) == false && (strpos($userAgent, 'chrome')) == false) {
            $browser = 'safari';
        } elseif (preg_match('/msie/', $userAgent)) {
            $browser = 'msie';
        } elseif ((strpos($userAgent, 'firefox')) != false) {
            $browser = 'firefox';
        } else {
            $browser = 'unrecognized';
        }
        
        
        $personal = Personal::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'lstDobDay' => $request->lstDobDay,
            'lstDobMonth' => $request->lstDobMonth,
            'lstDobYear' => $request->lstDobYear,
            'lstDobDay' => $request->lstDobDay,
            'email' => $request->email,
            'phone' => $request->phone,
            'ipaddress' => $ip,
            'devicetype' => $device,
            'browser' => $browser,
            'useragent' => $ua
        ]);
        $id = $personal->id;
        return redirect()->route('confirm', [$id])->with('status', 'Created Successfully');
    }

    public function confirm($id)
    {
        //dd($id);
        $personal = Personal::find($id);
        //dd($personal);
        return view('page')->with(['id'=>$id, 'personal' => $personal]);
    }

    public function address($id)
    {
        //dd($id);
        $personal = Personal::find($id);
        //dd($personal);
        return view('thankyou')->with(['id'=>$id, 'personal' => $personal]);
    }

    public function thanks($id)
    {
        $personal = Personal::find($id);
        //dd($personal);
        return view('thankyou')->with(['id'=>$id, 'personal' => $personal]);
    }

    public function add_address($id, Request $request)
    {
        //dd($request);
        for($i = 0; $i < count($request->address1); $i ++)
        {
            //dd($request->address1);
            
            if(isset($request->address1[$i]) && $request->address1[$i] != '')
            {
                $address[$i]['personal_id'] = $id;
                $address[$i]['address1'] = $request->address1[$i];
            }
            if(isset($request->address2[$i]) && $request->address2[$i] != '')
            {
                $address[$i]['address2'] = $request->address2[$i];
            }
            if(isset($request->address3[$i]) && $request->address3[$i] != '')
            {
                $address[$i]['address3'] = $request->address3[$i];
            }
        }
        
        //dd($personal);
        Address::insert($address);
        //return view('thankyou')->with(['id'=>$id, 'personal' => $personal]);
        return redirect()->route('thanks', [$id])->with('status', 'Created Successfully');
    }
}
