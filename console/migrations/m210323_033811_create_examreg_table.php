<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%examreg}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m210323_033811_create_examreg_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%examreg}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(255)->notNull(),
            'last_name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'phone' => $this->string(255)->notNull(),
            'gender' => $this->string(25)->notNull(),
            'street' => $this->string(255)->notNull(),
            'city' => $this->string(255)->notNull(),
            'country' => $this->string(255)->notNull(),
            'zip' => $this->string(255)->notNull(),
        ]);

        $this->addPrimaryKey('PK_examreg', '{{%examreg}}', 'id');

        // creates index for column `id`
        $this->createIndex(
            '{{%idx-examreg-id}}',
            '{{%examreg}}',
            'id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-examreg-id}}',
            '{{%examreg}}',
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
            '{{%fk-examreg-id}}',
            '{{%examreg}}'
        );

        // drops index for column `id`
        $this->dropIndex(
            '{{%idx-examreg-id}}',
            '{{%examreg}}'
        );

        $this->dropTable('{{%examreg}}');
    }
}
