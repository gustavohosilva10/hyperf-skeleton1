<?php

declare(strict_types=1);

namespace App\Command;

use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Input\InputArgument;

#[Command]
class CreateModel extends HyperfCommand
{
    public function __construct(protected ContainerInterface $container)
    {
        parent::__construct('create:model'); 
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Hyperf Demo Command');
        $this->addArgument('name', InputArgument::REQUIRED, 'Nome do arquivo');
    }
    
    public function handle()
    {
        $modelName = $this->ask('Digite o nome da model:');
        
        $modelDirectory = BASE_PATH . '/app/Model';
        if (!is_dir($modelDirectory)) {
            mkdir($modelDirectory, 0755, true);
        }

        $modelContent = <<<'EOT'
        <?php

        namespace App\Model;

        use Hyperf\DbConnection\Model\Model;

        class {{modelName}} extends Model
        {
            protected $table = '{{tableName}}';
            protected $primaryKey = '{{primaryKey}}';
        }

        EOT;
        $modelContent = str_replace([
            '{{modelName}}',
            '{{tableName}}',
            '{{primaryKey}}',
        ], [
            $modelName,
            strtolower($modelName) . 's', 
            'id', 
        ], $modelContent);

        $modelPath = $modelDirectory . '/' . $modelName . '.php';

        if (file_put_contents($modelPath, $modelContent) !== false) {
            $this->info("Model $modelName criada com sucesso!");
        } else {
            $this->error("Erro ao criar a model $modelName.");
        }
    }
}
