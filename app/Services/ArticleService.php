<?php

namespace App\Services;

use App\Models\Article;

class ArticleService
{
    protected $article;

    public function __construct(Article $article)
    {
        $this->articleModel = $article;
    }

}
