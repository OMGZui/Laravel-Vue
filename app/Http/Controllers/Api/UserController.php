<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/3/27
 * Time: 22:17
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 登录
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $input = $request->input();
        $result = $this->user->login($input);
        if ($result){
            return  response()->json(['code' => 200, 'msg' => '登录成功']);
        }else{
            return  response()->json(['code' => 222, 'msg' => '登录失败']);
        }
    }

    /**
     * 注册
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $input = $request->input();
        $result = $this->user->register($input);
        if ($result){
            return  response()->json(['code' => 200, 'msg' => '注册成功']);
        }else{
            return  response()->json(['code' => 223, 'msg' => '注册失败']);
        }
    }
}