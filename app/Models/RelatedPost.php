<?php

namespace App\Models;
use TCG\Voyager\Models\Post as VoyagerPost;
class RelatedPost extends VoyagerPost
{
    protected $table = 'posts';
}
