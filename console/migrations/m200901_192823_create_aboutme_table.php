<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%aboutme}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200901_192823_create_aboutme_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%aboutme}}', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string(40)->notNull(),
            'lastname' => $this->string(40)->notNull(),
            'profession' => $this->string(60),
            'aboutme' => $this->text(),
            'ytlink' => $this->string(100),
            'website' => $this->string(100),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-aboutme-created_by}}',
            '{{%aboutme}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-aboutme-created_by}}',
            '{{%aboutme}}',
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
            '{{%fk-aboutme-created_by}}',
            '{{%aboutme}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-aboutme-created_by}}',
            '{{%aboutme}}'
        );

        $this->dropTable('{{%aboutme}}');
    }
}
