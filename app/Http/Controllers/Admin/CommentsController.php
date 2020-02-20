<?php 
namespace App\Http\Controllers\Admin;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
 * 
 */
class CommentsController extends Controller
{
	
	public function index()
	{
		$coms= Comments::paginate(5);
		return view('admin/comment/index',[
			'coms'=>$coms
		]);
	}

	

	public function destroy($id)
	{
		Comments::find($id)->delete();
		return redirect()->route('comment.index');
	}
	
}

?>


