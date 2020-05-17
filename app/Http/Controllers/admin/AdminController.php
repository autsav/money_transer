<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

use App\Admin;
use App\Role;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {               
                     $page['title'] = 'Admin';
                    $roles = Role::all();

                return view('backend.admin.index', compact('page','roles'));
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
        $admin = new Admin;

        $admin->name = $request->name;
        $admin->lastname = $request->lastname;
        $admin->username = $request->username;
        $admin->password = Hash::make($request->password);
        $admin->email = $request->email;
        $admin->status = $request->status;
        $admin->role_id = $request->roles;
        $admin->save();
        return response()->json(['success'=>'Data is successfully added']);

}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
      public function getadminJson(Request $request)
    {   
         $admin = new Admin;

        $where = $this->_get_search_param($request);

        // For pagination
        $filterTotal = $admin->where( function($query) use ($where) {
            if($where !== null) {
                foreach($where as $val) {
                    $query->orWhere($val[0],$val[1],$val[2]);
                }
            }
        } )->get();

        // Display limited list        
        $rows = $admin->where( function($query) use ($where) {
            if($where !== null) {
                foreach($where as $val) {
                    $query->orWhere($val[0],$val[1],$val[2]);
                }
            }
        })->limit($request->length)->offset($request->start)->with("roles")->get();
 
        //To count the total values present
        $total = $admin->get();
       
        echo json_encode(['draw'=>$request['draw'],'recordsTotal'=>count($total),'recordsFiltered'=>count($filterTotal),'data'=>$rows]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function _get_search_param($params)
    {
        $where = null;
        foreach ($params['columns'] as $value) {
            if($value['searchable'] == 'true'){
                
                if($params['search']['value'] != '')
                {
                    $where[] = [ $value['name'], 'like' , "%".$params['search']['value']."%" ];
                }

                if($value['search']['value'] != '')
                {
                }
            }
        }
        
        return $where;

    }

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
        $admin = Admin::find($id);
        $admin->delete();


        return redirect('/dashboard/admins')->with('success', 'Admin deleted!');

           }
}
