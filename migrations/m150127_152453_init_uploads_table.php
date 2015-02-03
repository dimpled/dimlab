<?php

use yii\db\Schema;
use yii\db\Migration;

class m150127_152453_init_uploads_table extends Migration
{
    public function up()
    {
      $this->createTable(
        'uploads',
        [
            'id'=>'pk',
            'ref'=>'integer',
            'file_name'=>'string',
            'file_path'=>'string'
        ]
      );
    }

    public function down()
    {
        $this->dropTable('uploads');
    }
}
