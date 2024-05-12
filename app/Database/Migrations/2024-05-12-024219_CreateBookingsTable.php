<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'userId' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'selectedDay' => [
                'type' => 'DATE',
            ],
            'selectedTeeTime' => [
                'type' => 'TIME',
            ],
            'selectedPlayer' => [
                'type' => 'INT',
            ],
            'selectedPrice' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'selectedPaymentMethod' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('bookings');
    }

    public function down()
    {
        $this->forge->dropTable('bookings');
    }
}
