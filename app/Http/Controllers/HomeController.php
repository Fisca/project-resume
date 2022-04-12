<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Experience;
use App\Skill;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cont = Contact::all();
        return view('home',['kontak'=>$cont]);
    }

    public function addData()
    {
        return view('formTambahData');
    }

    public function saveData(){
    
        $experience = new Experience();
        $experience -> job = request('job');
        $experience -> company = request ('company');
        $experience -> start = request('start');
        $experience -> end = request ('end');
        $experience -> description = request ('description');

        $experience->save();
       
        return redirect('/TambahData');
    }

    public function addSkill()
    {
        return view('formTambahSkil');
    }

    public function saveSkill(){
    
        $skill = new skill();
        $skill -> firststep = request('firststep');
        $skill -> laststep = request ('laststep');

        $skill->save();
       
        return redirect('/TambahSkill');
    }
}
