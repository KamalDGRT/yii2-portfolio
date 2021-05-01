<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%companylogo}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200903_153114_create_companylogo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%companylogo}}', [
            'id' => $this->primaryKey(),
            'image_id' => $this->string(10),
            'has_image' => $this->integer(1),
            'image_name' => $this->string(100),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-companylogo-created_by}}',
            '{{%companylogo}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-companylogo-created_by}}',
            '{{%companylogo}}',
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
            '{{%fk-companylogo-created_by}}',
            '{{%companylogo}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-companylogo-created_by}}',
            '{{%companylogo}}'
        );

        $this->dropTable('{{%companylogo}}');
    }
}
