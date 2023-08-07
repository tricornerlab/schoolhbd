<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Midmenu;
use App\Models\Novita;
use App\Models\Service;
use App\Models\Social;
use App\Models\Teacher;
use App\Models\Timetable;
use Illuminate\Http\Request;
use App\Models\Page;
use App;
use App\Models\Paracha;
use App\Models\Photo;
use App\Models\Classe;
use App\Models\Activitie;

class PagesController extends Controller
{
    public function index()
    {
        $topmenu = Page::where('topmenu', 1)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $sidemenu = Page::where('topmenu', 0)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $midmenu = Midmenu::orderby('item_order')->select(['title_en','title_fr', 'link_en', 'link_fr'])->get();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $timetable = Timetable::orderby('timetable')->take(4)->pluck('timetable', 'fromto')->toArray();
        $news = Novita::latest()->take(5)->get()->toArray();
        $teachers = Teacher::orderBy('surname')->get()->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->select(['title_en', 'title_fr', 'id'])->get();
        $paracha = Paracha::find(1)->select(['title_en', 'title_fr', 'content_fr', 'content_en'])->get();
        $about = Page::find(1)->select(['title_en', 'title_fr', 'content_fr', 'content_en'])->get();
        $photos = Photo::orderBy('created_at')->take(15)->select('id', 'link')->get();
        $activities = Activitie::orderBy('created_at')->take(4)->get();
        $classes = Classe::all()->pluck('title', 'id')->toArray();
        //echo '<pre>';
        //print_r($director);
        return view('layouts.default.main')->with([
            'topmenu' => $topmenu,
            'sidemenu' => $sidemenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'news' => $news,
            'teachers' => $teachers,
            'timetable' => $timetable,
            'director' => $director,
            'services' => $services,
            'paracha' => $paracha,
            'about' => $about,
            'photos' => $photos,
            'activities' => $activities,
            'classes' => $classes,
        ]);
    }


    public function about()
    {
        $topmenu = Page::where('topmenu', 1)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $sidemenu = Page::where('topmenu', 0)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $midmenu = Midmenu::orderby('item_order')->select(['title_en','title_fr', 'link_en', 'link_fr'])->get();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $about = Page::find(1)->select(['content_en', 'content_fr'])->get();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->select(['title_en', 'title_fr', 'id'])->get();
        $classes = Classe::all()->pluck(['id', 'title'])->toArray();
        //print_r($about);
        return view('layouts.default.about')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'about' => $about,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,
            'classes' => $classes,

        ]);
    }

    public function history()
    {
        $topmenu = Page::where('topmenu', 1)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $sidemenu = Page::where('topmenu', 0)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $midmenu = Midmenu::orderby('item_order')->select(['title_en','title_fr', 'link_en', 'link_fr'])->get();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $text = Page::find(1)->select(['content_en', 'content_fr', 'title_en', 'title_fr'])->get();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->select(['title_en', 'title_fr', 'id'])->get();
        //print_r($about);
        return view('layouts.default.history')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'text' => $text,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }

    public function advantages()
    {
        $topmenu = Page::where('topmenu', 1)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $sidemenu = Page::where('topmenu', 0)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $midmenu = Midmenu::orderby('item_order')->select(['title_en','title_fr', 'link_en', 'link_fr'])->get();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $advantages = Page::where('id', 2)->select(['content_en', 'content_fr', 'title_en', 'title_fr'])->get();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->select(['title_en', 'title_fr', 'id'])->get();
        //print_r($topmenu);
        return view('layouts.default.advantages')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'advantages' => $advantages,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }

    public function program()
    {
        $topmenu = Page::where('topmenu', 1)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $sidemenu = Page::where('topmenu', 0)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $midmenu = Midmenu::orderby('item_order')->select(['title_en','title_fr', 'link_en', 'link_fr'])->get();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $program = Page::where('id', 3)->select(['content_en', 'content_fr', 'title_en', 'title_fr'])->get();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->select(['title_en', 'title_fr', 'id'])->get();
        //print_r($topmenu);
        return view('layouts.default.program')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'program' => $program,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }

    public function partners()
    {
        $topmenu = Page::where('topmenu', 1)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $sidemenu = Page::where('topmenu', 0)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $midmenu = Midmenu::orderby('item_order')->select(['title_en','title_fr', 'link_en', 'link_fr'])->get();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();

        $text = Page::where('id', 7)->select(['content_en', 'content_fr', 'title_en', 'title_fr'])->get();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->select(['title_en', 'title_fr', 'id'])->get();
        //print_r($topmenu);
        return view('layouts.default.partners')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'text' => $text,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }

    public function suppliers()
    {
        $topmenu = Page::where('topmenu', 1)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $sidemenu = Page::where('topmenu', 0)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $midmenu = Midmenu::orderby('item_order')->select(['title_en','title_fr', 'link_en', 'link_fr'])->get();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $text = Page::where('id', 9)->select(['content_en', 'content_fr', 'title_en', 'title_fr'])->get();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->select(['title_en', 'title_fr', 'id'])->get();
        //print_r($topmenu);
        return view('layouts.default.suppliers')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'text' => $text,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }



    public function moodleLogin(Request $request)
    {
        $username = $request['login'];
        $password = $request['pwd'];
            //for moodle api:
            if(1==2)//auth_user_login ($username, $password))
                {
                return redirect('https://moodle.idistance.school');
            } else{
                return redirect()->back()->with('failed', __('auth.failed'));
            }
    }


    public function moodle()
    {
        $topmenu = Page::where('topmenu', 1)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $sidemenu = Page::where('topmenu', 0)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $midmenu = Midmenu::orderby('item_order')->select(['title_en','title_fr', 'link_en', 'link_fr'])->get();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $text = Page::where('id', 7)->pluck('content')->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->select(['title_en', 'title_fr', 'id'])->get();
        //print_r($topmenu);
        return view('layouts.default.moodle')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'text' => $text,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }

//    public function change(Request $request){
//
////        $locale = App::currentlocale();
////        if (App::islocale('en')){ redirect()->back();
////        } else {redirect()->back();}
////        //session()->put('locale', $request->lang);
//
//
//        App::setLocale($request->lang);
//        session()->put('locale', $request->lang);
//
//        return redirect()->back();
//
//    }
//
}
