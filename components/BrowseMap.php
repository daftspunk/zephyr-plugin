<?php namespace Responsiv\Zephyr\Components;

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

    public function onPostAd()
    {
        $post = new PostModel;
        $post->save(post());
    }

}