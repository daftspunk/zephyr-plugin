<?php namespace Responsiv\Zephyr\Components;

use Redirect;
use Validator;
use ValidationException;
use Cms\Classes\ComponentBase;
use Responsiv\Zephyr\Models\Post as PostModel;

class BrowseMap extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Browse Map',
            'description' => 'Map and posting functionality'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getEditPost()
    {
        $post = new PostModel;
        return $post;
    }

    public function onRefresh()
    {
        $items = PostModel::all();
        $this->page['items'] = $items;
    }

    public function onPostAd()
    {
        /*
         * Validate input
         */
        $data = input('Post');
        $rules = [
            'title'      => 'required|min:5|max:255',
            'details'    => 'required',
            'address'    => 'required'
        ];

        $validation = Validator::make($data, $rules);
        if ($validation->fails())
            throw new ValidationException($validation);

        $post = new PostModel;
        $post->save(post('Post'));

        $query = http_build_query([
            'lat' => $post->latitude,
            'lng' => $post->longitude
        ]);

        return Redirect::to($this->currentPageUrl().'?'.$query);
    }

}