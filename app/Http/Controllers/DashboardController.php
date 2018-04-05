<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use DB;
use App\cases;
use App\contactusmessage;
use App\appsetting;
use App\home;

class DashboardController extends Controller
{
	public function headerFooter(){

		$appSetting=appsetting::all();
		$home=home::all();
		return view('dashboard.headerFooter',['appsetting'=>$appSetting,'home'=>$home]);	
	}



	public function headerFooterUpdate(Request $request){
					$validator=Validator::make($request->all() ,[
					'Title'	=>'required|min:4|max:30',
					'subTitle'	=>'required|min:3|max:20',
					'homeContent' =>'required|min:3',
					'Benfits'=>'required|min:3',
					'cus'=>'required|min:3',
					'termOfUse'=>'required|min:3',
					'facebook'=>'required|url',
					'twitter'=>'required|url',
					'linkedin'=>'required|url',

				]);
			 if ($validator->fails())
			 		return back()->with(['errors'=>$validator->errors()->all()]);


		
			$home=home::find(1);
			$home->title=$request->Title;
			$home->subtitle=$request->subTitle;
			$home->content=$request->homeContent;
			$home->save();

			$appSetting=appSetting::find(1);
			$appSetting->Benfits=$request->Benfits;
			$appSetting->CustomerSay=$request->cus;
			$appSetting->facebook_Url=$request->facebook;
			$appSetting->twitter_Url=$request->twitter;
			$appSetting->termOfUse=$request->termOfUse;
			$appSetting->linkedin_Url=$request->linkedin;
			$appSetting->save();
			
			return back();
	}



	public function newMangement(){
			$news=News::paginate(20);
			return view('dashboard.news',['news'=>$news]);
	}


	public function deletePost($id){
		$new=News::find($id);
		$new->delete();
		return back();
	}

	public function editPost($id){
		$new=News::find($id);
		
		return view('dashboard.editPost',['new'=>$new]);
	}


	public function updatePost(Request $request,$id){
		$new=News::find($id);

			$validator=Validator::make($request->all() ,[
					'title'=>'required|min:3',
					'content'=>'required|min:3',
				]);
			 if ($validator->fails())
			 		return back()->with(['errors'=>$validator->errors()->all()]);


			 	$new->title=$request->title;
			 	$new->content=$request->content;
			 	$new->save();
			 	return redirect('/Dashboard/NewsMangement');
	}


	public function insert(Request $request){
		$new=new News();

			$validator=Validator::make($request->all() ,[
					'title'=>'required|min:3',
					'content'=>'required|min:3',
				]);
			 if ($validator->fails())
			 		return back()->with(['errors'=>$validator->errors()->all()]);


			 	$new->title=$request->title;
			 	$new->content=$request->content;
			 	$new->created_at=Carbon::now();
			 	$new->save();
			 	return redirect('/Dashboard/NewsMangement');
	}

	public function add_new(){
		return view('dashboard.add_post');
	}


	public function case_studeis(){
		 $cases=cases::paginate(20);
		return view('dashboard.caseStudies',['cases'=>$cases]);
	}


	public function editCase($id){
		$case=cases::find($id);
		return view('dashboard.editCase',['case'=>$case]);
	}


	public function updateCase(Request $request,$id){
			$validator=Validator::make($request->all() ,[
					'FirstnameImage'=>'sometimes|image',
					'Industry'=>'required|min:3',
					'ResultsEamil'=>'required|email',
					'Lastname'=>'required|min:3',
					'KeywordsLink'=>'required|url',
				]);
			 if ($validator->fails())
			 		return back()->with(['errors'=>$validator->errors()->all()]);

			 if($request->file('FirstnameImage')  == true){
			 	$file=$request->FirstnameImage;
			 	$file_name = str_random(30) . '.' . $file->getClientOriginalExtension();
			 	$file->move( public_path('uploades/FirstnameImage/').'' , $file_name); 
			 	$FirstnameImage_url=Request()->root().'/uploades/FirstnameImage/'.$file_name;		
			 }


		$case=cases::find($id);
		if($request->file('FirstnameImage') == true)
				$case->FirstnameImage=$FirstnameImage_url;

		$case->Industry=$request->Industry;
		$case->ResultsEamil=$request->ResultsEamil;
		$case->Lastname=$request->Lastname;
		$case->KeywordsLink=$request->KeywordsLink;
		$case->save();
		return back();	
	}

	public function addCase(){
		return view('dashboard.addCase');
	}

	public function insertCase(Request $request){
		$validator=Validator::make($request->all() ,[
				'FirstnameImage'=>'required|image',
				'Industry'=>'required|min:3',
				'ResultsEamil'=>'required|email',
				'Lastname'=>'required|min:3',
				'KeywordsLink'=>'required|url',
			]);
		 if ($validator->fails())
		 		return back()->with(['errors'=>$validator->errors()->all()]);





		 		 if($request->file('FirstnameImage')  == true){
		 		 	$file=$request->FirstnameImage;
		 		 	$file_name = str_random(30) . '.' . $file->getClientOriginalExtension();
		 		 	$file->move( public_path('uploades/FirstnameImage/').'' , $file_name); 
		 		 	$FirstnameImage_url=Request()->root().'/uploades/FirstnameImage/'.$file_name;		
		 		 }


		 	$case=new cases();
		 	$case->FirstnameImage=$FirstnameImage_url;
		 	$case->Industry=$request->Industry;
		 	$case->ResultsEamil=$request->ResultsEamil;
		 	$case->Lastname=$request->Lastname;
		 	$case->KeywordsLink=$request->KeywordsLink;
		 	$case->save();
		 	return back();	
	}


	public function DeleteCase($id){
			$case=cases::find($id);
			$case->delete();
			return back();
	}

	public function aboutUsMangements(){
		$appsetting=appsetting::all();

		return view('dashboard.aboutUs',['appsetting'=>$appsetting[0]]);
	}

	public function updateAboutUs(Request $request){
			$validator=Validator::make($request->all() ,[
					'content'=>'required|min:3',
					'aboutUsVideo'=>'required',
				]);
			 if ($validator->fails())
			 		return back()->with(['errors'=>$validator->errors()->all()]);

			$appsetting=appsetting::find(1);
			$appsetting->aboutUs=$request->content;
			$appsetting->aboutUsVideo=$request->aboutUsVideo;
			$appsetting->save();
			return back(); 	
	}



	public function ContactUa(){
		$appsetting=appsetting::find(1);
		return view('dashboard.contactUS',['appsetting'=>$appsetting]);
	}



	public function updateContactUS(Request $request){
			$validator=Validator::make($request->all() ,[
					'content'=>'required|min:3',
					'contactUs_phone'=>'required|numeric',
					'contactUs_email'=>'required|email'
				]);
			 if ($validator->fails())
			 		return back()->with(['errors'=>$validator->errors()->all()]);


			$appsetting=appsetting::find(1);
			$appsetting->contactUs=$request->content;
			$appsetting->contactUs_phone=$request->contactUs_phone;
			$appsetting->contactUs_email=$request->contactUs_email;
			$appsetting->save();


			return back();



	}

	public function ContactMessage(){
		$ContactMessage=contactusmessage::paginate(20);
		return view('dashboard.ContactMessage',['ContactMessage'=>$ContactMessage]);
	}

	public function DeleteMessage($id){
		$ContactMessage=contactusmessage::find($id);
		$ContactMessage->delete();
		return back();
	}



	




}
