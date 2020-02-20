<?php 
namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
 * 
 */
class UserController extends Controller
{
	
	public function index()
	{
		$cats= User::paginate(5);
		return view('admin/user/index',[
			'cats'=>$cats
		]);
	}
	public function edit($id,Request $request)
	{
		$model = User::find($id);
		return view('admin/user/edit',['model'=>$model]);
		$this->validate( $request,[
			'name'=>'required',
			'email'=>'required|email|unique:users,email',
			'password'=>'required',
			'confirm_password'=>'required|same:password'
		],[

			'name.required'=>'Tên tài khoản không được để trống ',
			'name.unique'=>'Tên tài khoản đã có ',
			'email.required'=>'Email tài khoản không được để trống ',
			'email.email'=>'Email phải đúng định dạng @mail ',
			'email.unique'=>'Email tài khoảnc đã có ',
			'password.required'=>'Mật khẩu không được để trống ',
			'confirm_password.required'=>'Nhập lại mật khẩu  không được để trống ',
			'confirm_password.required|same'=>'Nhập lại mật khẩu  không chính xác '
		] );
		$password=bcrypt($request->password);
		$request->merge(['password'=>$password]);
		User::create($request->all());
		return redirect()->route('user.index');

	}

	public function  update($id,Request $request)
	{	$request->offsetUnset('_method');
	$request->offsetUnset('_token');
	User::where(['id'=>$id])->update($request->all());
	return redirect()->route('user.index');
}

public function destroy($id)
{
	User::find($id)->delete();
	return redirect()->route('user.index');
}

public function create()
{
	return view('admin/user/add');
}

public function store(Request $request)
{	
	$this->validate( $request,[
		'name'=>'required',
		'email'=>'required|email|unique:users,email',
		'password'=>'required',
		'confirm_password'=>'required|same:password'
	],[

		'name.required'=>'Tên tài khoản không được để trống ',
		'name.unique'=>'Tên tài khoản đã có ',
		'email.required'=>'Email tài khoản không được để trống ',
		'email.email'=>'Email phải đúng định dạng @mail ',
		'email.unique'=>'Email tài khoảnc đã có ',
		'password.required'=>'Mật khẩu không được để trống ',
		'confirm_password.required'=>'Nhập lại mật khẩu  không được để trống ',
		'confirm_password.required|same'=>'Nhập lại mật khẩu  không chính xác '
	] );
	$password=bcrypt($request->password);
	$request->merge(['password'=>$password]);
	User::create($request->all());
	return redirect()->route('user.index');
}
}

?>