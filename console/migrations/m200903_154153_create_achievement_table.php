<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%achievement}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200903_154153_create_achievement_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%achievement}}', [
            'id' => $this->primaryKey(),
            'ach_name' => $this->string(100),
            'description' => $this->text(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-achievement-created_by}}',
            '{{%achievement}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-achievement-created_by}}',
            '{{%achievement}}',
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
            '{{%fk-achievement-created_by}}',
            '{{%achievement}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-achievement-created_by}}',
            '{{%achievement}}'
        );

        $this->dropTable('{{%achievement}}');
    }
}
