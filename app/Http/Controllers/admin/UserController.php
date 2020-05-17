<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Role;
use App\Location;
use App\Type;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $page['title'] = 'User';
            $locations = Location::all();
             $types = Type::all();

                return view('backend.user.index', compact('page','locations','types'));

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
         $user = new User();
        $data = $this->validate($request, [
            'Customer_id'=>'required',
            'first_name'=> 'required',
            'first_name'=> 'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'mobile'=>'required',
            'street'=>'required',
            'city_or_town'=>'required',
            'postcode'=>'required',
            'country'=>'required'
        ]);
       
        $user->saveUser($data);
        return redirect('/dashboard/users')->with('success');
         
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function getuserJson(Request $request)
    {   
         $user = new User;


        $where = $this->_get_search_param($request);

        // For pagination
        $filterTotal = $user->where( function($query) use ($where) {
            if($where !== null) {
                foreach($where as $val) {
                    $query->orWhere($val[0],$val[1],$val[2]);
                }
            }
        } )->get();

        // Display limited list        
        $rows = $user->where( function($query) use ($where) {
            if($where !== null) {
                foreach($where as $val) {
                    $query->orWhere($val[0],$val[1],$val[2]);
                }
            }
        })->limit($request->length)->offset($request->start)->get();
        
        //To count the total values present
        $total = $user->get();
       
        echo json_encode(['draw'=>$request['draw'],'recordsTotal'=>count($total),'recordsFiltered'=>count($filterTotal),'data'=>$rows]);
    }

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

    public function show($id)
    {
        //
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
