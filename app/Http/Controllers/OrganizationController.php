<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;
use App\User;
use Illuminate\Support\Facades\Auth;

class OrganizationController extends Controller
{
    //
    public function index() {
      $organizations = Organization::all();
      return view('org.index', ['orgs' => $organizations]);
    }

    public function show($id) {
      $organization = Organization::findOrFail($id);
      return view('org.show', ['org' => $organization]);
    }

    public function join(Request $request) {
      if(Auth::check()){
        $resume = User::find(Auth::id())->resume()->first();
        if($resume){
          $resume->orgs()->attach($request->id);
          return redirect()->action('OrganizationController@show', ['id' => $request->id])->with(['msg'=>'Welcome']);
        }else{
          $request->session()->put('resume_to_org',$request->id);
          return redirect()->action('ResumeController@index');
        }
      }else{
        $request->session()->put('resume_to_org',$request->id);
        return redirect()->action('ResumeController@index');
      }

    }

    public function show_resumes($id) {
      $resumes = Organization::findOrFail($id)->resumes->all();
      // dd($resumes);
      return view('org.show_resume', ['resumes' => $resumes]);
    }


    public function create() {
      return view('org.create', ['type' => 0]);
    }

    public function edit($id) {
      $org = Organization::findOrFail($id);
      return view('org.create', ['type' => 1, 'org' => $org]);
    }

    public function save(Request $request) {
      $this->validate($request, [
          'organization_name' => 'required|max:255',
          'organization_contact' => 'required|max:255',
          'organization_description' => 'required|max:10000',
      ]);
      // dd($request->all());
      $org = new Organization;
      $org->user_id = Auth::id();
      $org->organization_name = $request->organization_name;
      $org->organization_contact = $request->organization_contact;
      $org->organization_description = $request->organization_description;
      $org->save();
      return redirect()->action('OrganizationController@manage')->with(['success' => 1]);
    }

    public function store(Request $request) {
      // dd($request->all());
      $this->validate($request, [
          'organization_name' => 'required|max:255',
          'organization_contact' => 'required|max:255',
          'organization_description' => 'required|max:10000',
      ]);
      $org = Organization::findOrFail($request->id);
      if($org->user_id != Auth::id()){
        abort(403);
      }
      $org->organization_name = $request->organization_name;
      $org->organization_contact = $request->organization_contact;
      $org->organization_description = $request->organization_description;
      $org->save();
      return redirect()->action('OrganizationController@manage')->with(['success' => 1]);
    }

    public function manage(){
      $organizations = Organization::where('user_id', Auth::id())->get();
      return view('org.control_index', ['orgs' => $organizations]);
    }

}
