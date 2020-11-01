<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostsCreateRequest;
use Illuminate\Http\Request;
use App\Model\Jobdetail;
use Illuminate\Support\Facades\Auth;
use App\Photo;


class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $posts = Jobdetail::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user();

        if($file = $request->file('photo_id')){

            $name = time().$file->getClientOriginalName(); // ten unique

            $file->move('images', $name); 
            $photo = Photo::create(['file' => $name]); 

            $input['photo_id'] = $photo->id;
        }

          $user->posts()->create($input);

          return redirect('/admin/posts');



        $request->validate([
            'name' => 'required',
         //   'jobtype_id' => 'required',
            'photo_id' => 'required',
            'content' => 'required',

        ]);

        
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('admin.posts.edit');
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
