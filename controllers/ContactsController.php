<?php
class ContactsController {
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function helloWorld ()
    {
        echo 'Hello World';
    }

    public function add ()
    {
        $this->model->save([
            'name' => 'John Smith',
            'email' => 'john@smith.com',
            'phone' => '555-555-5555'
        ]);
    }

    public function all()
    {
        return json_encode($this->model->getAll());
    }

    public function findByEmail()
    {
        return json_encode($this->model->getByEmail('john@smith.com'));
    }
}
