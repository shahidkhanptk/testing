<?php

namespace App\Http\Controllers;
use App\Models\Feeling;
use App\Models\Activity;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FacebookController extends Controller
{
    //
    public function handleLogout(Request $request)        
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');    
    }    
    public function login() 
    {
        return view('welcome'); 
    }

    public function facebook() 
    {       
        $session = Session::all();
        // dd($session);
        $user = Auth::user();
        $all_users = User::all()->except(Auth::id());
        $feelings = Feeling::all();
        $posts = Post::orderby('id', 'DESC')->get();
        $activities = Activity::all();
    
        $friends = Friend::where('friend_id',Auth::user()->id)->where('hide', false)->get('user_id');
        $data =array();
        foreach($friends as $friend){
          array_push($data,$friend->user_id);
        }
        $data = User::whereIn('id',$data)->get();
    
        $accepted_friends = Friend::where('friend_id',Auth::user()->id)->where('status_id', 2)->get('user_id');
        $accepted_data =array();
        foreach($accepted_friends as $accepted_friend){
        array_push($accepted_data,$accepted_friend->user_id);
        }
        $accepted_data = User::whereIn('id',$accepted_data)->get();
    
        $new_accepted_friends = Friend::where('user_id',Auth::user()->id)->where('status_id', 2)->get('friend_id');
        $new_accepted_data =array();
        foreach($new_accepted_friends as $new_accepted_friend){
        array_push($new_accepted_data,$new_accepted_friend->friend_id);
        }
        $new_accepted_data = User::whereIn('id',$new_accepted_data)->get();
    
            return view('dashboard', compact('all_users', 'user', 'feelings', 'posts', 'activities', 'friends', 'data', 'accepted_data', 'new_accepted_data'));
        }

        public function postStore(Request $request)
        {
            $user = Auth::user();
            $request->validate([
                'text' => 'nullable',
                'image' => 'nullable|mimes:jpg,jpeg,png',
                'live_video' => 'nullable|mimes:mp4',
                'feeling_activity' => 'nullable'
            ]);
            if ($request->hasFile('image')) {
                $path = $request->file('image');
                $target = 'public/post';
                $file = Storage::putFile($target, $path);
                $file = substr($file, 7, strlen($file) - 7);
            }
            Post::create([   
                'user_id' => $user->id,
                'text' => $request->text,
                'photo_video' => $file,
                'live_video' => $request->live_video,
                'feeling_activity' =>$request->feeling_activity,
            ]);
            return redirect('/facebook');
        }
    
        public function addFriend($id)
        {
            $user = Auth::user();
            $friend = Friend::create([
                'user_id' => $user->id,
                'friend_id' => $id,
            ]);
            $user_status =  User::find($id);
    
            if($user_status->hide == true)
            {
                $user_status->hide = false ;            
            }else{
                $user_status->hide = true ;            
            }
            $user_status->save();
            $friend->save();
            return back();
        }
        public function status($id){
            $user_status =  User::find($id);
    
            if($user_status->hide == true)
            {
                $user_status->hide = false ;            
            }else{
                $user_status->hide = true ;            
            }
            $user_status->save();
            return back();  
        }
        public function changeStatus(Request $request)
        {
            $myFriend = Friend::where('user_id', $request->friendid)->update(['status_id'=> $request->statusid, 'hide'=> true]);
            return back()->with("Successful Add Friend");
        }     
}