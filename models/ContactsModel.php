<?php

class ContactsModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function save (array $data)
    {
        return $this->db->table('contacts')->insert($data);
    }

    public function deleteContact ()
    {

    }

    public function getAll ()
    {
        return $this->db->table('contacts')->select('*')->get();
    }

    public function getByEmail ($email)
    {
        return $this->db->table('contacts')->where('email', '=', $email)->first();
    }
}
