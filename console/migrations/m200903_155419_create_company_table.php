<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%company}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200903_155419_create_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%company}}', [
            'id' => $this->primaryKey(),
            'company_name' => $this->string(100),
            'tagline' => $this->string(100),
            'about' => $this->text(),
            'ytlink' => $this->string(100),
            'maplink' => $this->string(100),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-company-created_by}}',
            '{{%company}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-company-created_by}}',
            '{{%company}}',
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
            '{{%fk-company-created_by}}',
            '{{%company}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-company-created_by}}',
            '{{%company}}'
        );

        $this->dropTable('{{%company}}');
    }
}
