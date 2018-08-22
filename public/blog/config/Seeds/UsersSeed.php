<?php

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'email' => 'login1@mail.com',
                'password' => '$2y$10$tIqkgOeyuF0u0uyO0f8uuecgU0Fj3XJcVGlrrSyVyOtH8sBlNWLZu', // secret1
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 2,
                'email' => 'login2@mail.com',
                'password' => '$2y$10$SuDweWnxK.Tvka3lS8QRP.6glJz5iNNOIBeY4ocGMgmF5Sogwt35O', // secret2
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 3,
                'email' => 'login3@mail.com',
                'password' => '$2y$10$eG8hbOsmcHchJTVf9Ont/OLIfWXu9UBRoG2sIvla3QF2ADclFd5JO', // secret3
                'created_at' => $now,
                'updated_at' => $now
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
