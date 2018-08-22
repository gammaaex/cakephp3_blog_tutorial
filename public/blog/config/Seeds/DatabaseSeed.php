<?php
use Migrations\AbstractSeed;

/**
 * Database seed.
 */
class DatabaseSeed extends AbstractSeed
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
        $this->call('UsersSeed');
        $this->call('ProfilesSeed');
        $this->call('TagsSeed');
//        $this->call('PostsSeed');
//        $this->call('PostsTagsSeed');
//        $this->call('CommentsSeed');
    }
}
