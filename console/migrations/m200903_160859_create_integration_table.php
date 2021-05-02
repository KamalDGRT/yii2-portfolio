<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%integration}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200903_160859_create_integration_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%integration}}', [
            'id' => $this->primaryKey(),
            'header' => $this->text(),
            'body' => $this->text(),
            'footer' => $this->text(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-integration-created_by}}',
            '{{%integration}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-integration-created_by}}',
            '{{%integration}}',
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
            '{{%fk-integration-created_by}}',
            '{{%integration}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-integration-created_by}}',
            '{{%integration}}'
        );

        $this->dropTable('{{%integration}}');
    }
}
