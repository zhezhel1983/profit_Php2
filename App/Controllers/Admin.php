<?php

namespace App\Controllers;


use App\Controller, App\Models\Article;

class Admin
    extends Controller
{
    public function actionDefault()
    {
        $this->view->news = Article::findAll();
        $this->view->render(__DIR__ . '/../templates/EditTemplate.php');
    }

    public function actionEdit($id)
    {
        $article = Article::findById($id);
        $this->view->article = $article;
        $this->view->render(__DIR__ . '/../templates/article.php');
    }

    public function actionSave($id == null)
    {
        if ($id) {
            $article = Article::findById($id);
            if (null === $article) {
                return false;
            } else {
                $article = new Article;
            }
        }
    }
}