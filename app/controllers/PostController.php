<?php

class PostController extends Controller
{

    public function __construct()
    {
        //instanciation du model
        $this->postModel = $this->model('post');
    }



    
}