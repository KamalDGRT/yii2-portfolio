<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%theme}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200903_162430_create_theme_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%theme}}', [
            'id' => $this->primaryKey(),
            'theme_chosen' => $this->integer(11),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-theme-created_by}}',
            '{{%theme}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-theme-created_by}}',
            '{{%theme}}',
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
            '{{%fk-theme-created_by}}',
            '{{%theme}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-theme-created_by}}',
            '{{%theme}}'
        );

        $this->dropTable('{{%theme}}');
    }
}
