<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%social}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200903_160302_create_social_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%social}}', [
            'id' => $this->primaryKey(),
            'link_type' => $this->integer(11),
            'soc_url' => $this->string(256),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-social-created_by}}',
            '{{%social}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-social-created_by}}',
            '{{%social}}',
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
            '{{%fk-social-created_by}}',
            '{{%social}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-social-created_by}}',
            '{{%social}}'
        );

        $this->dropTable('{{%social}}');
    }
}
