<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class AuthController extends Controller
{
    /*
   |--------------------------------------------------------------------------
   | Login Controller
   |--------------------------------------------------------------------------
   |
   | This controller handles authenticating users for the application and
   | redirecting them to your home screen. The controller uses a trait
   | to conveniently provide its functionality to your applications.
   |
   */

    use AuthenticatesUsers;

  public function accessToken(Request $request)
  {


      $this->validateLogin($request);
      $credentials = $this->credentials($request);

      if ($token = Auth::guard('api')->attempt($credentials)) {
          return ['token' => $token];
      }

      return response()->json([
          'error' => \Lang::get('auth.failed')
      ], 400);
  }

  public function logout(Request $request)
  {
      Auth::guard('api')->logout();
      return response()->json([], 204);
  }
}
