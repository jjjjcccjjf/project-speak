<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_divisions_table extends CI_Migration {

  public function up()
  {
    # Table PK
    $this->dbforge->add_field('id');

    # Other table fields
    $this->dbforge->add_field(array(
      'division_name' => array(
        'type' => 'VARCHAR',
        'constraint' => '300',
      )
    ));

    # Table date defaults
    $this->dbforge->add_field("`created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP");
    $this->dbforge->add_field("`updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP");


    if($this->dbforge->create_table('divisions'))
    {
      $table = 'divisions';

      $data = array(
        'division_name' => 'Scotland Yard',
      );
      $this->db->insert($table, $data);

      $data = array(
        'division_name' => 'KPD',
      );
      $this->db->insert($table, $data);

      $data = array(
        'division_name' => 'Morioh Police',
      );
      $this->db->insert($table, $data);

    }
  }

  public function down()
  {
    $this->dbforge->drop_table('divisions');
  }
}
