<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return 'Страница списка постов';
    }
    public function create(){
        return 'Страница создания постов';
    }
    public function store(){
        return 'Запрос создания постов';
    }
    public function show(){
        return 'Страница просмотра поста';
    }
    public function edit(){
        return 'Страница изменения поста';
    }
    public function update(){
        return 'Запрос изменения поста';
    }
    public function delete(){
        return 'Запрос удаления поста';
    }
    public function like(){
        return 'Лайк +1';
    }
}
