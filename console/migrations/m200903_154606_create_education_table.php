<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%education}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200903_154606_create_education_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%education}}', [
            'id' => $this->primaryKey(),
            'edu_name' => $this->string(100),
            'duration' => $this->string(100),
            'description' => $this->text(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-education-created_by}}',
            '{{%education}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-education-created_by}}',
            '{{%education}}',
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
            '{{%fk-education-created_by}}',
            '{{%education}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-education-created_by}}',
            '{{%education}}'
        );

        $this->dropTable('{{%education}}');
    }
}
