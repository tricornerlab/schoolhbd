<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Employee;
use App\Models\Midmenu;
use App\Models\Novita;
use App\Models\Page;
use App\Models\Service;
use App\Models\Social;
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
     * @return \Illuminate\Http\Response
     */
    public function show(Novita $novita)
    {
        //
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
