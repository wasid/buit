<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use App\Countpc;
use App\Dailylab;
use App\Labdetails1;
use App\Labdetails2;
use App\Student;
use App\Mailpass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller {
	
	
	public function getWelcome()
		{
			return View('welcome');
		}
	
	public function getStudent(){
			return View('student');
	}
	
		public function showStudent(Request $request){
			$q = $request -> request -> all();
			$students = Student::whereIn('studentid',$q)->get();
			return View('showstudent', ['students' => $students]);
	}
	
	public function getMailpass(){
			$mailpasses = Mailpass::paginate(20);
			return View('mailpass', ['mailpasses' => $mailpasses]);
	}
/*	public function CountpcRun(){
			$pcs = Dailylab::all();//\App\User::all();

			return View('countpc')
				->with('pcs', $pcs);
	}*/
	
	public function labDetails(){
		$users = DB::table('users')->lists('lab_name');
		$labdetails = Labdetails2::whereIn('lab_name',$users)->paginate(20);
		return View('labdetails')
				->with('users', $users)
				->with('labdetails', $labdetails);
	}
	
	public function showLabDetails(Request $request){
		
		$q = $request -> request -> all();

	/*	$labdetails = DB::table('users')
	            ->join('labdetails2', 'users.lab_name', '=', 'labdetails2.lab_name')
				->select('labdetails2.lab_name', 'labdetails2.pc_name', 'labdetails2.processor')
				->whereRaw('users.lab_name = labdetails2.lab_name')
				->get();*/
		$labdetails = Labdetails2::whereIn('lab_name', $q)->get();
		$users = DB::table('users')->lists('lab_name');
		return View('showlabdetails')
				->with('users', $users)
				->with('labdetails', $labdetails);
	}
	
	public function updateLabDetails(Request $request){
		// return $this->isXmlHttpRequest();
		 $post = $request->all();
 		 var_dump($post);
		 die();
		//	$users = User::all();
		// $user = Auth::user();



		// $labnames = Labdetails2::whereIn('lab_name', $user)->get();
	
		// return View('updatelabdetails');
//				->with('user', $user)
//				->with('labnames', $labnames);
	}
	
	public function storeLabDetails(Request $request){
/*		if ($sl!="")
	{
		$query="select * from labdetails2 where lab_name='".$labname."' and sl='".$sl."'";
		$result=mysql_query($query) or die(mysql_error());
		if($row=mysql_fetch_array($result))
		{
			$sl = $row["sl"];
			$pc_code = $row["pc_code"];
			$pc_name = $row["pc_name"];
			$pc_ip = $row["pc_ip"];
			$mac1 = $row["mac1"];
			$assetno = $row["assetno"];
			$username = $row["username"];
			$email = $row["email"];
			$warning = $row["warning"];
			$ipblock = $row["ipblock"];
			$ipunblock = $row[ipunblock];
			$pc_type = $row["pc_type"];
			$processor = $row["processor"];
			$motherboard = $row["motherboard"];
			$ram = $row["ram"];
			$hdd = $row["hdd"];
			$location = $row["location"];
			$department = $row["department"];
			$entrydate = $row["entrydate"];
			$comment = $row["comment"];
		
		}
	}
	else
	{
		$_SESSION['edit']="no";
		//finding the next sl number
		$query="SELECT max(sl) FROM labdetails2 where lab_name='".$labname."'";
		$result=mysql_query($query) or die(mysql_error());
		if($row=mysql_fetch_array($result))
		{
			$sl = $row["max(sl)"]+1;
		}
	
	
	}*/
		
		$this->validate($request, [
			'lab_name' => 'required|max:50',
			'pc_name' => 'required|max:50',
			'pc_ip' => 'required|max:50',
			'mac1' => 'required|max:50',
			'assetno' => 'required|max:50',
			'pc_type' => 'required|max:50',
			'processor' => 'required|max:50',
			'motherboard' => 'required|max:50',
			'ram' => 'required|max:50',
			'hdd' => 'required|max:50',
			'location' => 'required|max:50',
			'department' => 'required|max:50',
			'entrydate' => 'required|max:50',
			'comment' => 'required|max:2000',
		]);

		$post = new Labdetails2();
		$post->lab_name = $request['lab_name'];
		$post->pc_name = $request['pc_name'];
		$post->pc_ip = $request['pc_ip'];
		$post->mac1 = $request['mac1'];
		$post->assetno = $request['assetno'];
		$post->pc_type = $request['pc_type'];
		$post->processor = $request['processor'];
		$post->motherboard = $request['motherboard'];
		$post->ram = $request['ram'];
		$post->hdd = $request['hdd'];
		$post->location = $request['location'];
		$post->department = $request['department'];
		$post->entrydate = $request['entrydate'];
		$post->comment = $request['comment'];
		if($post->save())
		{
			return 'Post Successfully Created!';
		}
		return 'Something went wrong!';
	//	return View('storelabdetails');

	}
	
	public function labInfo(){
		$labinfos = Labdetails1::paginate(10);
		return View('labinfos')
				->with('labinfos', $labinfos);
	}
	
	public function getLogin()
		{
			return View('login');
		}
	public function postLogin(Request $request)
    {		
			$this->validate($request, [
			'lab_name' => 'required',
			'password' => 'required'
			]);
		if (Auth::attempt(['lab_name' => $request['lab_name'], 'password' => $request['password']])) {
            
	         return redirect()->intended();
        }
       else{
        	return 'not working!';
       }
      //  dd($request);

       // return redirect()->back()->with(['fail' => 'You are providing wrong email or password!']);
	}
	
	public function getLogout(){
		
		Auth::logout();
	    return redirect()->route('welcome');
	}

}