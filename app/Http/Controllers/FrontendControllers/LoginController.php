<?php
/**
 * Created by PhpStorm.
 * Users: wangsl
 * Date: 2018/10/29
 * Time: 10:12
 *
 */

namespace App\Http\Controllers\FrontendControllers;

use App\Services\LogHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    protected $request;

    protected $log_Services;

    protected $input;

    /**
     * 初始化
     * @access public
     *
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->log_Services = new LogHelper();
        $this->input = $this->request->all();
    }

    /**
     * @return string
     */
    /**
     * @return string
     */
    public function login()
    {
        return view('frontend.login');
    }

    /**
     * @return string
     */
    public function register()
    {
        return view('frontend.register');
    }
}