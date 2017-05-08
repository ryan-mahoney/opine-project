<?php

use Phinx\Migration\AbstractMigration;

class FirstMigration extends AbstractMigration
{
    public function up()
    {
        $users = $this->table('contacts');
        $users->addColumn('name', 'string', array('limit' => 20))
              ->addColumn('email', 'string', array('limit' => 100))
              ->addColumn('phone', 'string', array('limit' => 30))
              ->addIndex(array('email'), array('unique' => true))
              ->save();
    }

    public function down()
    {
        $this->dropTable('contacts');
    }
}
