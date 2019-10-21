<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect,Response,DB,Config,URL;
// use \Yajra\Datatables\Datatables;
use Datatables;
use App\Data;

class tableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Data::all();
        // ,compact('data')
        return view('data.index');
    }
    public function dataList()
    {
        $data_db = DB::table('data')->select('*')->where('deleted_at', NULL);
        return Datatables::of($data_db)->addColumn('image', function ($data_db) {
            return '<img src="http://127.0.0.1/Wakeb_task/public/uploads/images/'.$data_db->image.'" border="0" width="40" class="img-rounded" align="center" />';
        })->rawColumns(['image', 'action'])->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/images/');
            $image->move($destinationPath, $name);
            // $this->save();

      $data  = Data::Create([ 'name'=> $request->name,
                              'image'=>$name,
                              'screen_name'=> $request->screen_name,
                              'content'=> $request->content,
                              'description'=> $request->description,
                              'user_name'=> $request->user_name,
                              'date'=> $request->date,
                              'statuse'=> $request->statuse
                            ]);
      }
      return redirect('/Dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $where = array('id' => $id);
      $data  = Data::where($where)->first();
      return Response::json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $where = array('id' => $id);
      $data  = Data::where($where)->first();
      // return Response::json($data);
      return view('data.edit',compact('data'));
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
      if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/images/');
            $image->move($destinationPath, $name);
            $where = array('id' => $id);
            $data  = Data::where($where)->update([
                                          'name'=> $request->name,
                                          'image'=> $name,
                                          'screen_name'=> $request->screen_name,
                                          'content'=> $request->content,
                                          'description'=> $request->description,
                                          'user_name'=> $request->user_name,
                                          'date'=> $request->date,
                                          'statuse'=> $request->statuse
                                        ]);
          }
      return redirect('/Dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $where = array('id' => $id);
      $data = Data::where($where)->delete();
      return redirect('/Dashboard');
    }
}
