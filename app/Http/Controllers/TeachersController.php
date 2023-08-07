<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Employee;
use App\Models\Midmenu;
use App\Models\Page;
use App\Models\Service;
use App\Models\Social;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $topmenu = Page::where('topmenu', 1)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $sidemenu = Page::where('topmenu', 0)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $midmenu = Midmenu::orderby('item_order')->select(['title_en','title_fr', 'link_en', 'link_fr'])->get();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $text = Page::where('id',4)->select(['content_en', 'content_fr', 'title_en', 'title_fr'])->get();
        $teachers = Teacher::orderby('surname')->get()->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->select(['title_en', 'title_fr', 'id'])->get();
        //print_r($topmenu);
        return view('layouts.default.teachers')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'text' => $text,
            'teachers' => $teachers,
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
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('layouts.default.teacher')->with([

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
