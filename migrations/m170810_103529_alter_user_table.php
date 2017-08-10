<?php

use yii\db\Migration;

class m170810_103529_alter_user_table extends Migration
{

    public function up()
    {
        $this->dropTable('user');
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'authokey' => $this->string()->notNull()->unique(),
            'status' => $this->integer()->defaultValue(1)
        ]);
    }

    public function down()
    {
        $this->dropTable('user');
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->unique(),
            'password' => $this->string(),
            'status' => $this->integer()
        ]);
    }
}
