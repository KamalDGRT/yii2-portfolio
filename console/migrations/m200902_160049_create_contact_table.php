<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200902_160049_create_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact}}', [
            'id' => $this->primaryKey(),
            'phone' => $this->string(10),
            'email' => $this->string(100),
            'whatsapp' => $this->string(50),
            'address' => $this->text(),
            'skype' => $this->string(255),
            'fb' => $this->string(255),
            'created_by' => $this->integer(11),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-contact-created_by}}',
            '{{%contact}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-contact-created_by}}',
            '{{%contact}}',
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
            '{{%fk-contact-user_id}}',
            '{{%contact}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-contact-user_id}}',
            '{{%contact}}'
        );

        $this->dropTable('{{%contact}}');
    }
}
