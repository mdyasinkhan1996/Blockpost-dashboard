<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\{User, Categorie, Tag, Post, UserSetting, Image};
use Hash;

class DashboardController extends Controller
{
    public function dashboard(){
        $users = DB::table('users')->get();
        // $categories = DB::table('categories')->get();
        $usersChart = DB::table('users')->selectRaw('count(id) as count')->whereBetween('created_at', [Carbon::now()->subDays(180), Carbon::now()])->groupBy('month')->get();
        $categories = DB::table('categories')->selectRaw('count(id) as count')->whereBetween('created_at', [Carbon::now()->subDays(180), Carbon::now()])->groupBy('month')->get();
        $tags = DB::table('tags')->selectRaw('count(id) as count')->whereBetween('created_at', [Carbon::now()->subDays(180), Carbon::now()])->groupBy('month')->get();
        
        // return date('Y-m');
        $posts = Post::selectRaw('count(id) as count')->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])->groupBy('date')->get();
        // $postsCount = Post::selectRaw('count(id) as count,date')->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])->groupBy('date')->get();
        
        return view('auth.dashboard', ['users'=> $users,'usersChart'=> $usersChart, 'categories' => $categories, 'tags' => $tags, 'posts'=> $posts]);
    }
    public function userProfile(){
        return view('auth.user.profile');
    }
    public function userProfileSetting(){
        return view('auth.user.profileSetting');
    }
    public function profileStore(ProfileRequest $request){
        // return $request->all();
        // $UserSetting = UserSetting::where('name', 'userName')->first();
        // if (!isset($UserSetting->id)) {
        //     $UserSetting = new UserSetting;
        // }
        // $UserSetting->name = 'userName';
        // $UserSetting->value = $request->name;
        // $UserSetting->save();

        if ($request->hasFile('image')) {
            
            $user = User::find(1);
            $userImage = Image::where('imageable_type', 'App\Models\User')->first();
            if(!$userImage){
                $userImage = new Image();
                $randomNum = rand(1000, 100000);
                $image = $request->file('image');
                $name = $randomNum.time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('assets/images');
                $image->move($destinationPath, $name);
                $userImage->url = 'assets/images/'.$name??'No image';
                $user->image()->save($userImage);
            }else{
                $destinationPath = public_path($user->image->url);
                if ($user->image->url != null) {
                    if (file_exists($destinationPath)) {
                        unlink($destinationPath);
                    }
                }
                $randomNum = rand(1000, 100000);
                $image = $request->file('image');
                $name = $randomNum.time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('assets/images');
                $image->move($destinationPath, $name);
                $user->image->url = 'assets/images/'.$name??'No image';
                $user->image->save();
            }
        }


        userSetting('userName', $request->name);
        userSetting('designation', $request->designation);
        userSetting('phone', $request->phone);
        userSetting('mail', $request->mail);
        userSetting('facebook', $request->facebook);
        userSetting('twitter', $request->twitter);
        userSetting('linkedin', $request->linkedin);
        userSetting('address', $request->address);
        userSetting('aboutMyself', $request->aboutMyself);
        userSetting('aboutSite', $request->aboutSite);
        return redirect()->route('user.profile')->with('message', 'Profile update done.');
    }
    public function passwordChange(){
        return view('auth.passwords.passChange');
    }
    public function passwordChangeStore(Request $request, $id){
       
        if($request->password == $request->confirmpassword){
            $request->validate([
                'currentpassword' => 'required',
                'password' => 'required|min:6|max:16',
                'confirmpassword' => 'required',
            ]);
        }else{
            $request->validate([
                'currentpassword' => 'required',
                'password' => 'required|min:6|max:16|confirmed',
                'confirmpassword' => 'required',
            ]);
        }
        $user = Auth::user($id);
        if(Hash::check($request->currentpassword, $user->password)){
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');
        }
        return back()->with('message', 'Sorry your password do not change');
    }
    public function locationIndex(){
        return view('auth.location.index');
    }
    public function locationStore(Request $request, $id){
        // return $request->all();
        $request->validate([
            'googlemap'=>'required'
        ]);
        
        userSetting('googleMap', $request->googlemap);

        return back()->with('message', 'Map location upload done');
    }
    
}
