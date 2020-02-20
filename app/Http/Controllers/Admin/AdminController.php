<?php 
namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
/**
 * namespace: chỉ ra thư mục mà class
 */
class AdminController extends Controller
{

    public function index()
    {
    	return view('admin.index');
    }

    public function login(){
    	return view('admin.login');
    }

    public function post_login(Request $request){
    	$this->validate($request,[
    		'email' => 'required|email',
    		'password' => 'required'
    	],[
    		'email.required' => 'Email không được để trống',
    		'email.email' => 'Email không đúng định dạng',
    		'password.required' => 'Mật khẩu không đưuọc để trống'
    	]);

    	if (Auth::attempt($request->only('email','password'),$request->has('rmb'))) {
    		return redirect()->route('admin');
    	}else{
    		return redirect()->back();
    	}

    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }
    public function file(){
        return view('admin.file');
    }

    public function upload(HttpRequest $req){
        if ($req->hasFile('file')) {
            $name = $req->file->getClientOriginalname();
            $req->file->move('uploads/',$name);
        }
        
        return redirect()->back();
    }
    

}

?>