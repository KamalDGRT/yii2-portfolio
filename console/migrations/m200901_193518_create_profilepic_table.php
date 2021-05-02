<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profilepic}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200901_193518_create_profilepic_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%profilepic}}', [
            'id' => $this->primaryKey(),
            'has_image' => $this->integer(1),
            'avatar' => $this->string(16),
            'filename' => $this->string(512),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-profilepic-created_by}}',
            '{{%profilepic}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-profilepic-created_by}}',
            '{{%profilepic}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-profilepic-created_by}}',
            '{{%profilepic}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-profilepic-created_by}}',
            '{{%profilepic}}'
        );

        $this->dropTable('{{%profilepic}}');
    }
}
