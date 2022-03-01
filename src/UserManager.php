<?php


namespace AliOmid\UserManager;

use AliOmid\UserManager\Model\User;

class UserManager
{
    public object $user;

    protected object $model;

    public function __construct($model = User::class)
    {
        $this->model = $model;
    }

    public function create()
    {
    }


    public function save()
    {
    }

    public function delete()
    {
    }

    public function find($id)
    {
        $user =  $this->model->find($id);
        $this->user = $user;
    }

    public function edit()
    {
    }
}
