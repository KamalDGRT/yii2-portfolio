<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%testimonial}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200903_154423_create_testimonial_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%testimonial}}', [
            'id' => $this->primaryKey(),
            'test_name' => $this->string(100),
            'tagline' => $this->string(100),
            'message' => $this->text(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-testimonial-created_by}}',
            '{{%testimonial}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-testimonial-created_by}}',
            '{{%testimonial}}',
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
            '{{%fk-testimonial-created_by}}',
            '{{%testimonial}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-testimonial-created_by}}',
            '{{%testimonial}}'
        );

        $this->dropTable('{{%testimonial}}');
    }
}
