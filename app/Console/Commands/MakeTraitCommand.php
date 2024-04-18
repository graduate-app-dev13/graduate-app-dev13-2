<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeTraitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:trait {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new trait';

    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Create a new command instance.
     *
     * @param  \Illuminate\Filesystem\Filesystem  $files
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $path = $this->getPath($name);

        if ($this->files->exists($path)) {
            $this->error("The [{$name}] trait already exists!");
            return 1;
        }

        $this->makeDirectory(dirname($path));

        $this->files->put($path, $this->buildClass($name));

        $this->info("The [{$name}] trait has been created!");

        return 0;
    }

    /**
     * Get the full path to the trait.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        return base_path('app/Traits') . '/' . $name . 'Trait.php';
    }

    /**
     * Build the trait class with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        return "<?php

namespace App\Traits;

trait {$name}Trait {

}";
    }

    protected function makeDirectory($path)
    {
        if (!$this->files->isDirectory($path)) {
            $this->files->makeDirectory($path, 0755, true, true);
        }
    }
}
