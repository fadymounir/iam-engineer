<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use DB;
use App\cases;
use App\contactusmessage;
class newsController extends Controller
{

	public function index(){
		 	$news=News::paginate(20);
		 	return view('website.news.index',compact('news'));
	}

	public function insert_new(Request $request){

		 	$validate=Validator::make($request->all(), [
		 					'title'=>'required|min:2',
		 					'content'=>'required|min:5',
		 		      ]);

		 	if($validate->fails()) return false;
		 	$new=new News();
		 	$new->title=$request->title;
		 	$new->content=$request->content;
		 	$new->created_at=Carbon::now();
		 	$new->save();
		 	return true;
	}

	public function update_new(Request $request){
		 	$validate=Validator::make($request->all(), [
		 					'title'=>'required|min:2',
		 					'content'=>'required|min:5',
		 					'new_id'=>'required|integer',
		 		      ]);
		 	if($validate->fails()) return false;
		 	$new=News::find($request->new_id);
		 	$new->title=$request->title;
		 	$new->content=$request->content;
		 	$new->created_at=Carbon::now();
		 	$new->save();
		 	return true;
	}


	public function delete_new(Request $request){
		 	$validate=Validator::make($request->all(), [
		 					'new_id'=>'required|integer',
		 		      ]);
		 	if($validate->fails()) return false;
		 	$new=News::find($request->new_id);
		 	$new->delete();
		 	$new->save();
		 	return true;	
	}



	public function search_News(Request $request){
		$news=DB::select('select * from news where news.title like ? order by created_at DESC',['%'.$request->search_key.'%']);
		return view('website.news.search',compact('news'));
	}


	public function index_website(){

		$home=DB::select('select content  from home');
		$setting=DB::select('select aboutUsVideo from appsetting ');
				$video=html_entity_decode($setting[0]->aboutUsVideo);

		return view('welcome',['home'=>$home[0],'setting'=>$setting[0],'video'=>$video]);
	}


	public function terms(){
		$terms=DB::select('select termOfUse from  appsetting');
		return view('website.news.terms',['terms'=>$terms[0]]);
	}


	public function case_studeis(){
		    $cases=cases::paginate(20);
			return view('website.news.case_studeis',compact('cases'));
	}



	public function aboutUs(){

		$info=DB::select('SELECT aboutUs as aboutUs , aboutUsVideo as aboutUsVideo  from  appsetting');
			$video=html_entity_decode($info[0]->aboutUsVideo);
		return view('website.news.aboutUs',['info'=>$info[0],'video'=>$video]);
	}


	public function contactUs(){

		$info=DB::select('SELECT contactUs_phone as contactUs_phone,contactUs_email as contactUs_email FROM appsetting');
		return view('website.news.contactUs',['info'=>$info[0]]);
	}

	public function send_message(Request $request){
	

        $validate=Validator::make($request->all(), [
        				'talkAbout'=>'required|min:2',
        				'talkAboutSpaecify'=>'required|min:5',
        				'email'=>'required|email',
        				'website'=>'required|url',
        				'name'=>'required|min:3',
        				'code'=>'required|min:3',
        	      ]);


        if($validate->fails()) return back()->with(['status'=>'make sure that all field  is  valid ']);
        		




		$talkAbout=$request->talkAbout;
		$talkAboutSpaecify=$request->talkAboutSpaecify;
		$email=$request->email;
		$website=$request->website;
		$name=$request->name;
		$code=$request->code;


		//send mail message

		$contactusmessage=new contactusmessage();
		$contactusmessage->TalkAbout=$talkAbout;
		$contactusmessage->TalkAboutSpecify=$talkAboutSpaecify;
		$contactusmessage->email=$email;
		$contactusmessage->websiteLink=$website;
		$contactusmessage->name=$name;
		$contactusmessage->code=$code;
		$contactusmessage->save();
		return redirect('/contactUs');
	}


}
