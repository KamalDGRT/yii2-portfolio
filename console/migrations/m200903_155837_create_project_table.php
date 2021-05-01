<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200903_155837_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'project_name' => $this->string(100),
            'description' => $this->text(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-project-created_by}}',
            '{{%project}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-project-created_by}}',
            '{{%project}}',
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
            '{{%fk-project-created_by}}',
            '{{%project}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-project-created_by}}',
            '{{%project}}'
        );

        $this->dropTable('{{%project}}');
    }
}
