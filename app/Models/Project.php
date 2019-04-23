<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function getProjectId() {
        $project_id = preg_replace('/^.*\/project\/([\d]+[^_]).*$/', '$1', $this->path_to_thumbnail);
        return $project_id;
    }

    public function getURL() {
        return "https://scratch.mit.edu/projects/{$this->getProjectId()}/";
    }
}
