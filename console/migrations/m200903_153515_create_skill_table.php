<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%skill}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200903_153515_create_skill_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%skill}}', [
            'id' => $this->primaryKey(),
            'skillname' => $this->string(100),
            'skillvalue' => $this->integer(11),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-skill-created_by}}',
            '{{%skill}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-skill-created_by}}',
            '{{%skill}}',
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
            '{{%fk-skill-created_by}}',
            '{{%skill}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-skill-created_by}}',
            '{{%skill}}'
        );

        $this->dropTable('{{%skill}}');
    }
}
