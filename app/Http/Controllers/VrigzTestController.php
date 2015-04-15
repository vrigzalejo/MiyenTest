<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Http\Requests\CreateImageRequest;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class VrigzTestController extends Controller
{

    private $post;
    private $directory;

    public function __construct( Post $post )
    {
        $this->middleware( 'guest' );
        $this->post      = $post;
        $this->directory = public_path() . "/uploads/";
    }


    public function index()
    {


        $filecount = count( glob( $this->directory . "*.*" ) );

        $posts = $this->post->all();

        $images = preg_grep( '/^([^.])/', scandir( $this->directory ) );

        $arr = array(
            'countUploads' => $filecount,
            'posts'        => $posts,
            'images'       => $images
        );


        return view( 'index', $arr );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store( CreatePostRequest $request )
    {
        $this->post->create( $request->all() );

        return redirect()->route( 'test.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show( $id )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update( $id )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy( $id )
    {
        $this->post->destroy( $id );

        return redirect()->route( 'test.index' );


    }

    public function upload( CreateImageRequest $image )
    {

        $file = $image->file( 'image' );

        if( $file->isValid() ) {

            $renamed = strtolower( date( "[m-d-y]" ) . md5( $file->getClientOriginalName() ) . "." . $file->getClientOriginalExtension() );
            $file->move( public_path() . '/uploads/', $renamed );
        }

        return redirect()->route( 'test.index' );
    }

    public function uploadDelete( $image )
    {

        unlink( $this->directory . $image );

        return redirect()->route( 'test.index' );
    }

}
