<?php

namespace App\Http\Controllers;


use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use DB;
class MembersController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $members = Member::orderBy('created_at', 'asc')
        ->paginate(5);
        return view('members.index')->with('members', $members);
    }

    public function documentary(){
        
        $members = DB::table('members')
        ->where('preferred_committee', 'LIKE','documentary')
        ->orderBy('created_at', 'asc')
        ->paginate(5);
        return view('members.committee')->with('members', $members);
    }

    public function events(){
        $members = DB::table('members')
        ->where('preferred_committee', 'LIKE','events')
        ->orderBy('created_at', 'asc')
        ->paginate(5);
        return view('members.committee')->with('members', $members);
    }
    
    public function finance(){
        $members = DB::table('members')
        ->where('preferred_committee', 'LIKE','finance')
        ->orderBy('created_at', 'asc')
        ->paginate(5);
        return view('members.committee')->with('members', $members);
    }
    
    public function friendship(){
        $members = DB::table('members')
        ->where('preferred_committee', 'LIKE','friendship')
        ->orderBy('created_at', 'asc')
        ->paginate(5);
        return view('members.committee')->with('members', $members);
    }
    
    public function logistics(){
        $members = DB::table('members')
        ->where('preferred_committee', 'LIKE','logistics')
        ->orderBy('created_at', 'asc')
        ->paginate(5);
        return view('members.committee')->with('members', $members);
    }
    
    public function socialmedia(){
        $members = DB::table('members')
        ->where('preferred_committee', 'LIKE','socialmedia')
        ->orderBy('created_at', 'asc')
        ->paginate(5);
        return view('members.committee')->with('members', $members);
    }
    public function search(){
        $q = Input::get('q');
    if($q != ""){
        $members = DB::table('members')
        ->where('full_name', 'LIKE', '%'.$q.'%')
        ->orderBy('created_at', 'asc')
        ->paginate(5);
        if (count($members) > 0) {
            return view('members.search')->withDetails($members)->withQuery($q);
        }
    }
    else if( $q == ""){
        return redirect('/members');
    }
    return view('members.search')->withMessage('no members found. try again');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'BA_number' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'contact_number' => 'required',
            'home_address' => 'required',
            'direct_upline' => 'required',
            'name_of_group' => 'required',
            'batch_name' => 'required',
            'preferred_committee' => 'required',
            'member_image' => 'image|nullable|max:1999'
        ]);
        if($request->hasFile('member_image')){
            $fileNameWithExt = $request->file('member_image')->getClientOriginalName();
            $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('member_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('member_image')->storeAs('public/member_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'nofile.png';
        }
        $fname = $request->input('full_name');
        $lname = $request->input('last_name');
        $combinedName = sprintf('%s %s', $fname, $lname);

        $month = $request->input('month'.'/');
        $day = $request->input('day'.'/');
        $year = $request->input('year');
        $combinedBDay = sprintf('%s %s %s', $month, $day, $year);

        $housenumber = $request->input('home_address');
        $barangay = $request->input('barangay');
        $city = $request->input('city');
        $combinedAddress = sprintf('%s %s %s', $housenumber, $barangay, $city);
        
        $member = new Member;
        $member->full_name = $combinedName;
        $member->nickname = $request->input('nickname');
        $member->BA_number = $request->input('BA_number');
        $member->birthday = $combinedBDay;
        $member->age = $request->input('age');
        $member->gender = $request->input('gender');
        $member->contact_number = $request->input('contact_number');
        $member->home_address = $combinedAddress;
        $member->email_address = $request->input('email_address');
        $member->direct_upline = $request->input('direct_upline');
        $member->name_of_group = $request->input('name_of_group');
        $member->batch_name = $request->input('batch_name');
        $member->preferred_committee = $request->input('preferred_committee');
        $member->user_id = auth()->user()->id;
        $member->member_image = $fileNameToStore;
        $member->save();
        return redirect('/members')->with('success', 'Member Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members = Member::find($id);
        return view('members.show')->with('members', $members);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
