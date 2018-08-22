<?php
use Migrations\AbstractSeed;

/**
 * Tags seed.
 */
class TagsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $now = (new DateTime('now'))->format('Y-m-d H:i:s');
        $data = [
            [
                'id' => 1,
                'name' => 'プログラミング',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 2,
                'name' => '旅行',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 3,
                'name' => '日記',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        $table = $this->table('tags');
        $table->insert($data)->save();
    }
}
