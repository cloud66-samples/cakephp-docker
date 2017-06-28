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
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'email' => 'john.doe@example.com',
                'created' => '2016-11-11 11:11:11',
                'modified' => '2016-11-11 11:11:11',
                'password' => $this->_getDefaultPassword(),
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }

    /**
     * Get the default password
     *
     * @return string
     */
    protected function _getDefaultPassword()
    {
        return (new \Cake\Auth\DefaultPasswordHasher())->hash('password');
    }
}
