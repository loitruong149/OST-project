<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostsCreateRequest;
use Illuminate\Http\Request;
use App\Model\Jobdetail;
use App\Model\Jobtype;
use Illuminate\Support\Facades\Auth;
use App\Photo;
use App\User;
use Illuminate\Support\Facades\File;

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

        $jobtypes = Jobtype::pluck('name','id')->all();
        return view('admin.posts.create', compact('jobtypes'));
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


        $input= $request->validate([
            'name' => 'required',
            'jobtype_id' => 'required',
            'photo_id' => 'required',
            'content' => 'required',

        ]);

        if($file = $request->file('photo_id')){


            $name = time() . $file->getClientOriginalName();


            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);


            $input['photo_id'] = $photo->id;


        }

        $user->posts()->create($input);

        return redirect('/admin/posts');
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

      $post = Jobdetail::find($id);
      $jobtypes = Jobtype::pluck('name','id')->all();
      return view('admin.posts.edit', compact('post', 'jobtypes'));
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
          
        $input= $request->validate([
            'name' => 'required',
            'jobtype_id' => 'required',
            'photo_id' => 'required',
            'content' => 'required',

        ]);

        if($file = $request->file('photo_id')){


            $name = time() . $file->getClientOriginalName();


            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);


            $input['photo_id'] = $photo->id;


        }
       
        Auth::user()->posts()->whereId($id)->first()->update($input);
       

        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$user = Auth::user();
        $post = Jobdetail::find($id);
    
    
        //$post = Jobdetail::findOrFail($id);

        unlink(public_path() . $post->photo->file);
        $post->photo()->delete();
        $post->delete(); 

        return redirect('/admin/posts');
        
    }
}
