<?php
use Migrations\AbstractSeed;

/**
 * Profiles seed.
 */
class ProfilesSeed extends AbstractSeed
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
                'user_id' => 1,
                'last_name' => '田中',
                'first_name' => '太郎',
                'gender' => '男性',
                'born_on' => '1990-01-01',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'last_name' => '山田',
                'first_name' => '花子',
                'gender' => '女性',
                'born_on' => '1999-12-31',
                'created_at' => $now,
                'updated_at' => $now
            ]
        ];

        $table = $this->table('profiles');
        $table->insert($data)->save();
    }
}
