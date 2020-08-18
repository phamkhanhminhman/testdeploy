<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PlayListYoutube;
use App\Http\Requests\PlaylistRequest;

class YoutubeController extends Controller
{
	public function index() 
	{
		$playlist = PlayListYoutube::orderBy('year', 'desc')->get()->toArray();

		return $this->success($playlist, trans('messages.common.show_success'));
	}

    public function store(PlaylistRequest $request)
    {
    	$validated = $request->validated();
    	$img       = $request->file('thumbnails');
        
        $playlist = new PlayListYoutube([
            'playlist_id' => $request->playlist_id,
            'title' => $request->title,
            'thumbnails' => "upload/".$img->getClientOriginalName(),
            'desc' => $request->desc,
            'link' => $request->link,
            'total_video' => $request->total_video,
            'year' =>$request->year,
            'account_id' => $request->account_id,
            'channel_id' => $request->channel_id,
            'creation_time' => $request->creation_time,
        ]);

        $img->move('./upload/',$img->getClientOriginalName()); 
        $playlist->save();

        $data = array('playlist_id' =>  $request->playlist_id);
        return $this->success($data, trans('messages.common.create_success'));
    }

    public function show($id) 
    {
    	$playlist = PlayListYoutube::find($id)->toArray();

    	return $this->success($playlist, trans('messages.common.show_success'));
    }

    public function update($id, PlaylistRequest $request) 
    {
    	$validated = $request->validated();

    	$playlist = PlayListYoutube::find($id);

    	$playlist->title = $request->title;
    	$playlist->thumbnails = $request->thumbnails;
    	$playlist->desc = $request->desc;
    	$playlist->link = $request->link;
    	$playlist->total_video = $request->total_video;
    	$playlist->year = $request->year;
    	$playlist->account_id = $request->account_id;
    	$playlist->channel_id = $request->channel_id;
   		$playlist->creation_time = $request->creation_time;

   		$playlist->save();

   		return $this->success($playlist, trans('messages.common.update_success'));
    }

    public function destroy($id) 
    {
    	$playlist= PlayListYoutube::find($id);

		$playlist->delete();

		return $this->success([], trans('messages.common.delete_success'));
    }
}
