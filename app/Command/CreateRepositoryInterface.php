<?php

declare(strict_types=1);

namespace App\Command;

use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Input\InputArgument;

#[Command]
class CreateRepositoryInterface extends HyperfCommand
{
    public function __construct(protected ContainerInterface $container)
    {
        parent::__construct('create:interface');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Hyperf Demo Command');
        $this->addArgument('name', InputArgument::REQUIRED, 'Nome da interface a ser criada.');
    }

    public function handle()
    {
        $name = $this->input->getArgument('name');
       // Diretório de destino
       $directory = BASE_PATH . '/app/Interfaces';
    
       // Crie a pasta "Repositories" se ela não existir
       if (!is_dir($directory)) {
           mkdir($directory, 0755, true);
           $this->line('Pasta "Interfaces" criada em app.');
       } else {
           $this->line('Pasta "Interfaces" já existe em app.');
       }
    
       // Crie o arquivo "ExampleRepository.php" com conteúdo
       $repositoryFile = $directory . '/' . $name . '.php';
        if (!file_exists($repositoryFile)) {
           $content = "<?php\n\nnamespace App\Interfaces;\n\ninterface $name\n{\n    // Conteúdo do repositório\n}\n";
           file_put_contents($repositoryFile, $content);
           $this->line('Arquivo "ExampleRepository.php" criado com conteúdo.');
       } else {
           $this->line('Arquivo "ExampleRepository.php" já existe em app/Interfaces.');
       }
    }
}
