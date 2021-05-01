<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%experience}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200903_154710_create_experience_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%experience}}', [
            'id' => $this->primaryKey(),
            'exp_name' => $this->string(100),
            'duration' => $this->string(100),
            'description' => $this->text(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-experience-created_by}}',
            '{{%experience}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-experience-created_by}}',
            '{{%experience}}',
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
            '{{%fk-experience-created_by}}',
            '{{%experience}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-experience-created_by}}',
            '{{%experience}}'
        );

        $this->dropTable('{{%experience}}');
    }
}
