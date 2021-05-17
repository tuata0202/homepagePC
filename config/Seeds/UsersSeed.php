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
        $data = [
            'id' => \App\Model\Entity\User::DEFAULT_ADMIN_ID,
            'full_name' => 'Admin',
            'phone' => '19001009',
            'email' => 'contact@evaca.vn',
            'password' => (new \Cake\Auth\DefaultPasswordHasher())->hash('123456'),
            'avatar' => NULL,
            'status' => \App\Model\Entity\User::STATUS_ACTIVE,
            'role' => \App\Model\Entity\User::ROLE_ADMINISTRATOR,
            'acl' => NULL,
            'modified' => date('Y-m-d H:i:s'),
            'created' => date('Y-m-d H:i:s')
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
