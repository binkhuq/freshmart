<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use App\Models\Order_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
/**
 * 
 */
class SendMailController extends Controller
{
	
	public function send($id,Request $request)
	{
		$input = $request->all();
		
		$model = Order_detail::where('id',$id)->first();
		$email =$model->email;
		$name=$model->name;
		$total=$model['price']*$model['quantity'];
		Mail::send('mail',array('model'=> $model,'total'=> $total),function($message) use($name, $email){
			$message->to($email,$name)->subject('Hoa don');
		});
		Session::flash('flash_message', 'Gửi hóa đơn thành công');
		
		
		 return redirect()->back();
	}


}

?>