<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Auth;
use Exception;
//use Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth as Auth;
use Laravel\Socialite\Facades\Socialite;
class TwitterController extends Controller
{
    public function loginwithTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }
       
    public function cbTwitter()
    {
        try {
     
            $user = Socialite::driver('twitter')->user();
            dd($user);
            $userWhere = User::where('twitter_id', $user->id)->first();
      
            if($userWhere){
      
                Auth::login($userWhere);
     
                return redirect('/home');
      
            }else{
                $gitUser = User::create([
                    'name' => $user->name,
                    'email' => "correo@correo.com",
                    'twitter_id'=> $user->id,
                    'oauth_type'=> 'twitter',
                    'password' => encrypt('123password123')
                ]);
     
                Auth::login($gitUser);
      
                return redirect('/home');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}