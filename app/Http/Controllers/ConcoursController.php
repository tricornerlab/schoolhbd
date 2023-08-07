<?php

namespace App\Http\Controllers;

use App\Models\Concour;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Midmenu;
use App\Models\Page;
use App\Models\Service;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConcoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $topmenu = Page::where('topmenu', 1)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $sidemenu = Page::where('topmenu', 0)->select(['title_en', 'title_fr', 'link'])->orderby('page_order')->get();
        $midmenu = Midmenu::orderby('item_order')->select(['title_en','title_fr', 'link_en', 'link_fr'])->get();
            $socials = Social::orderby('icon_order')->get()->toArray();
            $contact = Contact::where('id', 1)->get()->toArray();
            $text = Page::where('id', 14)->select(['title_en', 'title_fr'])->get();
            $concours = DB::table('concours')->paginate(2);
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->select(['title_en', 'title_fr', 'id'])->get();
            //echo('<pre>');
            // echo $news->links();//
            return view('layouts.default.concours')->with([
                'concours' => $concours,
                'topmenu' => $topmenu,
                'socials' => $socials,
                'contact' => $contact,
                'midmenu' => $midmenu,
                'sidemenu' => $sidemenu,
                'director' => $director,
                'services' => $services,
                'text' => $text,

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
     * @param  \App\Models\Concour  $concour
     * @return \Illuminate\Http\Response
     */
    public function show(Concour $concour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Concour  $concour
     * @return \Illuminate\Http\Response
     */
    public function edit(Concour $concour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Concour  $concour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concour $concour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Concour  $concour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concour $concour)
    {
        //
    }
}
