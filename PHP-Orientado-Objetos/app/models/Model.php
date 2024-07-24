<?php

namespace app\models;

abstract class Model extends QueryBuilder
{

    use Pagination;

    public function all()
    {

    }

    public function find()
    {

    }

    public function delete()
    {

    }

}

class User extends Model
{

}

class Post extends Model
{

}