<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\Classe;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Midmenu;
use App\Models\Novita;
use App\Models\Page;
use App\Models\Paracha;
use App\Models\Photo;
use App\Models\Service;
use App\Models\Social;
use App\Models\Teacher;
use App\Models\Timetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NovitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $topmenu = Page::where('topmenu', 1)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $sidemenu = Page::where('topmenu', 0)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $midmenu = Midmenu::orderby('item_order')->select(['title_en','title_fr', 'link_en', 'link_fr'])->get();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $news = DB::table('novitas')->paginate(2);
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->select(['title_en', 'title_fr', 'id'])->get();
        //echo('<pre>');
       // echo $news->links();//
        return view('layouts.default.news')->with([
            'news' => $news,
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Novita  $novita
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Novita $novita)
    {
        $topmenu = Page::where('topmenu', 1)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $sidemenu = Page::where('topmenu', 0)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $midmenu = Midmenu::orderby('item_order')->select(['title_en','title_fr', 'link_en', 'link_fr'])->get();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $timetable = Timetable::orderby('timetable')->take(4)->pluck('timetable', 'fromto')->toArray();
        $item = Novita::find($novita->id)->get();
        $teachers = Teacher::orderBy('surname')->get()->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->select(['title_en', 'title_fr', 'id'])->get();
        $paracha = Paracha::find(1)->select(['title_en', 'title_fr', 'content_fr', 'content_en'])->get();
        $about = Page::find(1)->select(['title_en', 'title_fr', 'content_fr', 'content_en'])->get();
        $photos = Photo::orderBy('created_at')->take(15)->select('id', 'link')->get();
        $activities = Activitie::orderBy('created_at')->take(4)->get();
        $classes = Classe::all()->pluck('title', 'id')->toArray();
        $news = DB::table('novitas')->paginate(2);
        //echo '<pre>';
        //print_r($director);
        return view('layouts.default.new')->with([
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
            'item' => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Novita  $novita
     * @return \Illuminate\Http\Response
     */
    public function edit(Novita $novita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Novita  $novita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Novita $novita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Novita  $novita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novita $novita)
    {
        //
    }
}
