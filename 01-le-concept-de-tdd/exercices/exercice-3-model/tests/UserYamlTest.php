<?php
use App\ModelPrepare;
use App\User;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes;
use Symfony\Component\Yaml\Parser;


#[Attributes\CoversClass(User::class)]
#[Attributes\CoversClass(ModelPrepare::class)]
class UserYamlTest extends TestCase
{
    public function setUp(): void
    {
        // On utilise sqlite en mode vive
        $this->pdo = new \PDO('sqlite::memory:');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        $this->pdo->exec(
            "CREATE TABLE IF NOT EXISTS user
          (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            username VARCHAR( 225 ),
            createdAt DATETIME
          )
      "
        );

        $yaml = new Parser();
        $users = [
            ['username' => 'Alan', 'createdAt' => date("Y-m-d H:i:s", strtotime('2024-01-15 00:00:00'))],
            ['username' => 'Sophie', 'createdAt' => date("Y-m-d H:i:s", strtotime('2024-01-15 00:00:00'))],
            ['username' => 'Bernard', 'createdAt' => date("Y-m-d H:i:s", strtotime('2024-01-15 00:00:00'))],
        ];
        $users = $yaml->parse(file_get_contents(__DIR__.'/_data/seed.yml'));

        $this->model = new App\ModelPrepare($this->pdo);
        $this->model->hydrate($users['users']);
    }

    public function testUsersCount()
    {
        $this->assertCount(3, $this->model->all());
    }

    public function testDelete()
    {
        $this->model->delete(1);
        $this->assertCount(2, $this->model->all());
    }

    public function testUpdate()
    {
        $user = $this->model->find(1);
        $user->__set('username', 'Rodolphe');
        $this->model->update($user);


        $this->assertEquals('Rodolphe', $user->__get('username'));
    }

    public function testSave()
    {
        $user = new User();
        $user->__set('username', 'Test4');

        $this->model->save($user);
        $userToFind = $this->model->find(4);
        $this->assertEquals('Test4', $userToFind->__get('username'));

        //$this->assertCount(4, $this->model->all());
    }
}
