<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateImageTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table=$this->table("image");
        $table->addColumn("name","string")
                ->addColumn("description","string")
                ->addColumn("image","string")
               ->addColumn("category_id",'integer')
               ->addColumn("download_count","integer")
        ->create();
    }
}
