<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\Notifications\SignupActivate;
use Illuminate\Support\Str;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;


class AuthController extends Controller
{
    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function signup(SignUpRequest $request)
    {
        $validated = $request->validated();

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'activation_token' => Str::random(40)
        ]);

        $user->save();
        $user->notify(new SignupActivate($user)); //Send Email Confirm

        return $this->success([], trans('messages.register.register_success'));
    }

    /**
     * Active account
     *
     * @param  [string] token 
     */
    public function signupActivate($token)
	{
	    $user = User::where('activation_token', $token)->first();

	    if (!$user) {
	        return response()->json([
	            'message' => 'This activation token is invalid.'
	        ], 404);
	    }
	    $user->active = true;
	    $user->activation_token = '';
	    $user->save();
	    // $user->notify(new SignupActivated($user));
	    return $user;
	}
  
    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(SignInRequest $request)
    {
       	//Validated Form Request
        $validated = $request->validated();
        
        $credentials = request(['username', 'password']);
        $credentials['active'] = 1;
    	$credentials['deleted_at'] = null;

        if(!Auth::attempt($credentials)) {
            return $this->errorUnauthorized('These credentials do not match our records.');
        }
            
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        } else {
        	$token->expires_at = Carbon::now()->addMinutes(15);
        }
        $token->scopes = 'Bearer '.$tokenResult->accessToken;
        $token->save();

        $dataSuccess = array('access_token' => $tokenResult->accessToken, 
         					 'token_type'   => 'Bearer',
         					 'expires_at'   => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString());
        
        return $this->success($dataSuccess, trans('messages.auth.login_success'));
    }
  
    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
  
    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
    	// $user = User::where('id', $request->user()->id)->get()->toArray();
        return $this->success(array($request->user()));
    }
}