<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%events}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m210323_004738_create_events_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%events}}', [
            'id' => $this->integer()->notNull(),
            'event_name' => $this->string(50)->notNull(),
            'location' => $this->text()->notNull(),
            'date' => $this->string(255)->notNull(),
            'time' => $this->string(255)->notNull(),
        ]);

        $this->addPrimaryKey('PK_events', '{{%events}}', 'id');

        // $this->addPrimaryKey('{{%events}}', 'id', $this->smallInteger(8).' NOT NULL AUTO_INCREMENT');

        // creates index for column `id`
        $this->createIndex(
            '{{%idx-events-id}}',
            '{{%events}}',
            'id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-events-id}}',
            '{{%events}}',
            'id',
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
            '{{%fk-events-id}}',
            '{{%events}}'
        );

        // drops index for column `id`
        $this->dropIndex(
            '{{%idx-events-id}}',
            '{{%events}}'
        );

        $this->dropTable('{{%events}}');
    }
}
