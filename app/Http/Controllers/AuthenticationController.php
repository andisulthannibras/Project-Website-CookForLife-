<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Registered;





class AuthenticationController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        // Tambahkan flash data untuk menampilkan popup setelah redirect
        Session::flash('popup', true);

        return redirect()->intended($this->redirectPath());
    }
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            
            $request->session()->regenerate();
            
            // Tambahkan flash data untuk menampilkan popup setelah redirect
            Session::flash('popup', true);
            
            return redirect()->intended('/dashboard');
        }
        
        // Autentikasi gagal, lakukan tindakan yang sesuai
    }
    public function register(Request $request){
        
        try{
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'alamat' => 'required|string',
            'password' => 'required|string|min:6|max:20',
            // 'no_hp' => 'required|digits:10|unique:users',
        ]);
        // if ($request->fails()) {
        //     return redirect()->back()->withErrors($request)->withInput();
        // }
        
        
        // $token = getenv("TWILIO_AUTH_TOKEN");
        // $twilio_sid = getenv("TWILIO_SID");
        // $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        // $twilio = new Client($twilio_sid, $token);
        // $twilio->verify->v2->services($twilio_verify_sid)
        //     ->verifications
        //     ->create($data['no_hp'], "sms");
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
            // $data->save(),
            // return redirect('login')->with('alert-success','Anda berhasil register');
            
            // 'no_hp' => $request->no_hp,
        ]);
        // event(new Registered($user));
        // Session::flash('success', 'Berhasil Daftar! Silakan login.');
        return redirect()->route('login');

        
        // return redirect()->route('verify')->with(['no_hp' => $data['no_hp']]);

        
           //$user->sendEmailVerificationNotification();

           // return redirect()->to('/verify-view')->with('success', 'Email verifikasi telah dikirim!');
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Gagal Daftar!',
                'error' => $e->getMessage()
            ], 409);          
        }
    }
    public function login(Request $request){
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:20',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user){
            return redirect()->back()->withErrors([
                'email' => 'email belum terdaftar.',
            ]);
        }

        if(!Hash::check($request->password, $user->password)){
            return redirect()->back()->withErrors([
                'password' => 'Password salah.',
            ]);
        }

        $token = $user->createToken('authToken')->plainTextToken;

        $response = [
            'message' => 'Berhasil Login!',
            'user' => $user,
            'token' => $token
        ];
        return redirect()->to('home')->with('success', 'Berhasil Login!' .$user->name . '!');
        
        // return response()->json($response, 200);
    }
    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('home');
    //     }
        
    //     return redirect("login")->withSuccess('You are not allowed to access');
    //     // return redirect("register")->withSuccess('You are not allowed to access');
        
    // }
    public function getUsername()
    {
    if (Auth::check()) {
        return Auth::user()->name;
    }
    return null;
    }
    
    public function logout(Request $request){
        // $request->user()->currentAccessToken()->delete();

        // return response()->json([
        //     'message' => 'Berhasil Logout !'
        // ], 200)->header('Location', '/home');
        Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/home');
    }
}