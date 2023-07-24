<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;


class Contactcontrol extends Controller
{
		public function show(){
			$data['contacts'] = Contact::paginate(500);
			$data['page_title'] = 'messages';

			return view('admin.contacts',$data);
		}
    public function contact_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'contact_email'  => 'required',
        ]);
        if($validator->fails()){
            $success=0;
            return  back()->withErrors($validator)->withInput();
        }else{
            $data = array(
                    'name'  => $request->contact_name,
                    'email' => $request->contact_email,
                    'message' => $request->contact_message,
                );
            $contact = Contact::create($data);
        if($contact){
	        return redirect('/contact');
        }
        }
    }

    public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
         ]);
        //  Store data in database
        Contact::create($request->all());
        // 
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

 
   
    // public function files_select2() {
    //                 $contact = Contact::select('select isread from contacts');
    //                 Contact::update('update contacts set isread = 1 where isread = 0');
    //                 return view('dashboard',['contact'=>$contact]);
    //                 }


    // public function message(Request $request) {

    //     $name = $request->input('name');
    //     $email = $request->input('email');
    //     $subject = $request->input('subject');
    //     $message = $request->input('message');
      
       

    //     $data = array(
    //         "name" =>$name,
    //         "subject" => $subject,
    //         "email" => $email,
    //         "message" => $message,
            
    //     );
    //     DB::table('messages')->insert($data);
    //     return view('contact');

    // }
    
    // public function disFeedback() {
    //     $mess = DB::select('select * from messages');
    //     return view('message',['mess'=>$mess]);
    //     }
    //  public function delFeedback($id) {
    //       DB::delete('delete from messages where id = ?',[$id]);
    //      return redirect('/message')->with('Record deleted successfully');
           
    // }


      
}
