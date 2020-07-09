<?php

namespace App\Http\Controllers;

use App\Constantes;
use App\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    protected $meta;

    public function index()
    {
      //  $news = News::paginate();

       /* Meta::prependTitle('Home page')
          //  ->setPaginationLinks($news)
           // ->setFavicon('favicon-index.ico'); */
        return view('site.home');
    }

    public function about()
    {
        return view('site.about');
    }

    public function contact(){
        return view('site.contact');
    }

    public function services(){
        return view('site.services');
    }

    public function blog(){
        return view('site.blog');
    }

    public function article(Request $request){
        return view('site.article');
    }

    public function contactUs(Request $request){
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $contact = new Contact();
        $contact->setName($request->name);
        $contact->setEmail($request->email);
        $contact->setSubject($request->subject);
        $contact->setMessage($request->message);


        $contact->mailSubject = "Nouveau message sur MBENGSHOP";
        $mailTo = Constantes::MAIL_ADMIN;
        Mail::to($mailTo)->send(new ContactMail($contact));
        //return redirect('contact')->with('success', 'Votre message a été envoyé aves suucès.');
        return response()->json(["OK"]);
    }
}
