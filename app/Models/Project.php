<?php

namespace App\Models;

use App\like;
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

    public function getLikes() {
        return $this->hasMany(like::class)->get()->count();
    }

    public function toggleLiked() {
        if ($this->liked()) {
            like::where('user_id', '=', Auth::id())->delete();
        } else {
            (new like([
                'user_id' => Auth::id(),
                'project_id' => $this->id,
            ]))->save();
        }
    }

    public function liked() {
        return like::where([['user_id', '=', Auth::id()],['project_id', '=', $this->id]])->count() > 0;
    }

    public function getEmbed() {
        return "<iframe src='{$this->getURL()}embed' allowtransparency='true' frameborder='0' scrolling='no' allowfullscreen></iframe>";
    }

    public static function getFromURL($user, $url) {
        $project_id = preg_replace('/^.*projects\/([\d]+)\/$/', '$1', $url);

        $contents = file_get_contents("https://api.scratch.mit.edu/users/{$user}/projects/{$project_id}");
        $contents = json_decode($contents, false);

        dd($contents);


        return (new Project([
            "title" => $contents->title,
            "description" => $contents->description,
            "user_id" => Auth::user()->id,
            "path_to_thumbnail" => $contents->image
        ]));
    }
}
