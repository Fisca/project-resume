<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use App\Contact;
use App\Skill;

class FrontController extends Controller
{
    //menampilkan data contact for
    public function index(){
    
        // $name = request('firstname');
        // $lname = request ('lastname');
        // $country = request('country');
        // $subject = request ('subject');
        //     return view('contacts.contact',
        //     ['name' => $name, 'lname'=>$lname, 'country'=>$country, 'subject'=>$subject]
        return view('contacts.contact');
    }

    public function save(){
    
        $contact = new Contact();
        $contact -> firstname = request('firstname');
        $contact -> lastname = request ('lastname');
        $contact -> country = request('country');
        $contact -> subject = request ('subject');

        $contact->save();
       
        return redirect('/contact')-> with ('mesg','Thank you for cotacting me');
    }


    // public function showa(){
    //     // $works = [
    //     //     ['Workflow' =>'Sketch-First, Storyboard Design'],
    //     //     ['Workflow' =>'Modeling and Rendering'],
    //     //     ['Workflow' =>'Add Sound and Testing'],
    //     //     ['Workflow' =>'Review']
    //     //       ];
    //     // return view('welcome', ['works' => $works]);
    // }

    public function exp(){
        // $peng = [
        //     ['exp_1' =>'Animator',
        //      'exp_2' =>'I was responsible for executing a game-based study program for children between the ages of 6 and 11
        //                 Produced a 3D animated TV adverts
        //                 Made a 10 minute animated lesson for school kids',
        //      'exp_3' =>'March 2019 - Present',
        //      'exp_4' =>'Disney',],
        //     ['exp_1' =>'2D Artist/Animator',
        //      'exp_2' =>'Developed guidance on to establish development centre and techniques
        //                 Cinematics Animator for the assignment title 13 Kampung Tematik Malang
        //                 Layout Director: Led 30+ animation team through scene set-ups.',
        //      'exp_3' =>'December 2019 - March 2020',
        //      'exp_4' =>'Pixar',],
        //     ['exp_1' =>'Content Developer - Animator',
        //      'exp_2' =>'Cinematics Animator for the project title 13 Kampung Tematik Malang',
        //      'exp_3' =>'July 2020 - December 2020',
        //      'exp_4' =>'Marvel',],
        //       ];
            //   $peng = Experience::all();
            //   $peng = Experience::orderBy('job','asc')->get();
            //   $peng = Experience::where('job','Animator')->get();
              $peng = Experience::latest()->get();
              return view('pengalaman', ['laman' => $peng]);
    }

    public function show(){
    
        $skills = Skill::all();

        return view('welcome', ['skills' => $skills]);
        // return redirect('/skills');
    }

}


