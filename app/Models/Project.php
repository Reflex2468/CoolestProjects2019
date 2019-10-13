<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Project extends Model
{
    protected $fillable = array('title', 'description', 'user_id', 'path_to_thumbnail');

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function getProjectId() {
        $project_id = preg_replace('/^.*\/project\/([\d]+[^_]).*$/', '$1', $this->path_to_thumbnail);
        return $project_id;
    }

    public function getURL() {
        return "https://scratch.mit.edu/projects/{$this->getProjectId()}/";
    }

    public function getEmbed() {
        return "<iframe src='{$this->getURL()}embed' allowtransparency='true' width='485' height='402' frameborder='0' scrolling='no' allowfullscreen></iframe>";
    }

    public static function getFromURL($url) {
        $project_id = preg_replace('/^.*projects\/([\d]+)\/$/', '$1', $url);
        $contents = file_get_contents("https://api.scratch.mit.edu/users/cdjeeklo/projects/{$project_id}");
        $contents = json_decode($contents, false);


        return (new Project([
            "title" => $contents->title,
            "description" => $contents->description,
            "user_id" => Auth::user()->id,
            "path_to_thumbnail" => $contents->image
        ]));
    }
}
