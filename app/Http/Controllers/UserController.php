<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Throwable;

class UserController extends Controller
{


    /* Check Email Function */

    public function checkEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            "email" => "required|unique:users",
            "password" => "required|confirmed|min:6",
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        return response()->json(['message' => 'New User', 'status' => 200], 200);
    }

    /* Check Phone Number  */


    public function checkNumber(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "mobile_number" => "required|unique:users",
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        return response()->json(['message' => 'New User', 'status' => 200], 200);
    }


    /* Register User Function */

    public function registerUser(Request $request)
    {

        /* Request Validation */
        $validator = Validator::make($request->toArray(), [
            'full_name' => 'required',
            "mobile_number" => "required|unique:users",
            "password" => "required|confirmed|min:6",
            "email" => "required|unique:users",
            'verification_code' => 'required|unique:users'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }

        $user = User::create([
            'full_name' => $request['full_name'],
            "mobile_number" => $request['mobile_number'],
            "password" =>  $request['password'],
            "email"  => $request['email'],
            'verification_code' => $request['verification_code'],
            'login_with' => 'email',
            'password' => Hash::make($request['password'])
        ]);
        $role = Role::where('name', 'User')->first();
        $user->roles()->attach($role->id); // Assign Role to User 
        $token = $user->createToken($user->email ?? $user->number)->plainTextToken;
        return response()->json(["status" => 200, "message" => "Registration completed Successfully.",  "user" => $user, "access_token" => $token,], 200);
    }

    /* User Create Account Function */
    public function createAccount(Request $request)
    {
        /* Request Validation */
        $validator = Validator::make($request->toArray(), [
            'area_of_expertise' => 'required',
            'account_types' => 'required',
            "services" => "required",
            "industry" => "required",
            // 'files' => 'mimes:jpeg,png,jpg,pdf',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }

        $user_id = Auth::user()->id;


        User::where('id', $user_id)->update([
            'industry' =>  $request->industry,
            'details' => $request->details
        ]);
        $user = User::find($user_id);
        if (!is_null($user)) {
            $token = $user->createToken($user->email ?? $user->mobile_number)->plainTextToken;
            if ($request->hasFile('files')) {
                $files =  $request->file('files');
                foreach ($files as  $image) {
                    $img_name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                    $img_name = $img_name . '-'     . time() . '.' . $image->getClientOriginalExtension();
                    $ext =  $image->getClientOriginalExtension();
                    // if ($ext == 'pdf') {
                    // }
                    if ($ext == 'jpeg' || $ext  == 'png' || $ext == 'jpg') {
                        $user->attachments()->create(
                            ['images' => url('images') . '/' . $img_name]
                        );
                        Image::make($image->getRealPath())->encode(Config::get('img_encode', 'webp'), Config::get('img_quality', 60));
                        $image->move(public_path('images'), $img_name);
                    }
                }
            }


            if ($request->has('services')) {
                foreach ($request->services as $service) {
                    $user->services()->create(
                        [
                            'service_id' => $service
                        ]
                    );
                }
            }
            if ($request->has('area_of_expertise')) {
                $user->expertise()->create([
                    'expertise_id' => $request->area_of_expertise
                ]);
            }
            if ($request->has('account_types')) {
                foreach ($request->account_types as $account_type) {
                    $user->accountType()->create(
                        [
                            'account_type_id' => $account_type
                        ]
                    );
                }
            }
            $user->location()->create([
                'city' => $request->city,
                'country' => $request->country,
                'state' => $request->state,
                'location_str' => $request->location_str,
                'location_coord' => $request->location_coord
            ]);
            $data = User::with('services', 'expertise', 'accountType', 'attachments')->where('id', $user_id)->first();
            return response()->json(
                ['message' => 'Account created successfully', 'access_token' => $token, 'data' => $data, 'status' => 200],
                200
            );
        } else {
            return response()->json([
                'message' => 'Unauthentcaited User', 'status' => 201
            ], 201);
        }
    }

    /* User Logged IN api */
    public function loginUser(Request $request)
    {
        $validator = Validator::make($request->toArray(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        $user = User::where('email', $request->email)->first();
        if (!is_null($user)) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken($user->email ?? $user->mobile_number);
                Auth::guard('web')->login($user);
                return response()->json(['user' => $user, 'access_token' => $token->plainTextToken, 'message' => 'User Login Successfully.', 'status' => 200], 200);
            } else {
                return response()->json(['message' => 'Invalid Password', 'status' => 401], 401);
            }
        } else {
            return response()->json(['message' => 'User not found', 'status' => 404], 404);
        }
    }



    /* ************************ */
    /* End User- Login with FB */
    /* ************************ */

    public function loginWithFacebook(Request $request)
    {
        $validator = Validator::make($request->toArray(), [
            "location_str" => 'required',
            "location_cod" => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        $user = User::where('number', $request->number)->first();
        $email = User::where('email', $request->email)->first();
        if (isset($user)  || isset($email)) {
            $token = $user->createToken($user->number ?? $user->email);
            $token = $token->plainTextToken;
            Auth::guard('web')->login($user);
            return response()->json(["status" => 200, "message" => "Successfully Logged in.", "access_token" => $token, "user" => $user], 200);
        } else {
            User::create([
                'full_name' => $request['full_name'] ?? null,
                "mobile_number" => $request['mobile_number'] ?? NULL,
                "email"  => $request['email'] ?? NULL,
                'verification_code' => $request['verification_code'] ?? NULL,
                'login_with' => 'facebook',
                'password' => Hash::make($request->number ?? $request->email),

            ]);
            $user = User::where('number', $request->number)->first();
            $token = $user->createToken($user->number ?? $user->email)->plainTextToken;
            Auth::guard('web')->login($user);
            return response()->json(["status" => 200, "message" => "User Registered & Sign In", "access_token" => $token, "user" => $user], 200);
        }
    }




    /* ************************* */
    /*End User Login with Google */
    /* ************************* */
    public function loginWithGoogle(Request $request)
    {
        $validator = Validator::make($request->toArray(), [
            "location_str" => 'required',
            'email' => 'required',
            "location_cod" => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (isset($user)) {
            $token = $user->createToken($user->number ?? $user->email);
            $token = $token->plainTextToken;
            Auth::guard('web')->login($user);
            return response()->json(["status" => 200, "message" => "Successfully Logged in.", "access_token" => $token, "user" => $user], 200);
        } else {
            User::create([
                'full_name' => $request['full_name'] ?? null,
                "mobile_number" => $request['mobile_number'] ?? NULL,
                "email"  => $request['email'] ?? NULL,
                'verification_code' => $request['verification_code'] ?? NULL,
                'login_with' => 'google',
                'password' => Hash::make($request->number ?? $request->email)
            ]);
            $user = User::where('email', $request->email)->first();
            $token = $user->createToken($user->number ?? $request->email);
            $token = $token->plainTextToken;
            Auth::guard('web')->login($user);
            return response()->json(["status" => 200, "message" => "Registered & Sign In", "access_token" => $token, "user" => $user], 200);
        }
    }


    public function loginWithApplePay(Request $request)
    {
        $validator = Validator::make($request->toArray(), [
            "location_str" => 'required',
            "location_cod" => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }

        $user = User::where('number', $request->number)->first();
        if (isset($user)) {
            $token = $user->createToken($user->number ?? $user->email);
            $token = $token->plainTextToken;
            Auth::guard('web')->login($user);
            return response()->json(["status" => 200, "message" => "Successfully Logged in.", "token" => $token, "user" => $user], 200);
        } else {
            User::create([
                'full_name' => $request['full_name'] ?? null,
                "mobile_number" => $request['mobile_number'] ?? NULL,
                "email"  => $request['email'] ?? NULL,
                'verification_code' => $request['verification_code'] ?? NULL,
                'password' => Hash::make($request->number ?? $request->email),
                "login_with" => "applepay"
            ]);
            $user = User::where('number', $request->number)->first();
            $token = $user->createToken($user->number);
            $token = $token->plainTextToken;
            Auth::guard('web')->login($user);
            return response()->json(["status" => 200, "message" => "Registered & Sign In", "access_token" => $token, "user" => $user], 200);
        }
    }


    /* USER FORGOT PASSWORD API */

    public function validateEmailForForgotPassword(Request $request)
    {


        $validator = Validator::make($request->toArray(), [
            "email" => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }

        /* Check user Exist via this email */
        $user =  User::where('email', $request['email'])->first();

        if (isset($user)  && (!is_null($user))) {
            $email_verification_code =    str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
            Mail::to('saadabdullah314405@gmail.com')->send(new ForgotPassword($email_verification_code));
            User::where('email', $request->email)->update([
                'email_verification_code' => $email_verification_code
            ]);
            return response()->json([
                'message' => 'Verification code sent successfully. Please check your email', 'status' => 200
            ], 200);
        } else {
            return response()->json(['message' => 'User not found', 'statu' => 201], 201);
        }
    }

    public function validateEmailCode(Request $request)
    {
        $validator = Validator::make($request->toArray(), [
            "email_verification_code" => 'required|min:6|max:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        $user =  User::where('email_verification_code', $request->email_verification_code)->first();
        if (isset($user)  && (!is_null($user))) {
            $token = $user->createToken($user->email)->plainTextToken;
            return   response()->json([
                'message' => 'Verification code matches', 'access_token' => $token,  'status' => 200
            ], 200);
        }
        return   response()->json([
            'message' => 'Verification code not matches', 'status' => 201
        ], 201);
    }
    public function changePassword(Request $request)
    {
        /* Request Validation */
        $validator = Validator::make($request->toArray(), [
            "password" => "required|confirmed|min:6",
            "email" => "required",
            'email_verification_code' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        try {

            User::where('email', $request->email)
                ->where('email_verification_code', $request->email_verification_code)
                ->update(['password' => Hash::make($request->password)]);
        } catch (Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(), 'status' => 201
            ]);
        }
    }
}
