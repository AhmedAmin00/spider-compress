<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // delete all images in public/storage/images
        // get all files in public
        $files = \File::files(public_path(''));

        foreach ($files as $file) {
            if ($file->getExtension() == 'jpg' || $file->getExtension() == 'png' || $file->getExtension() == 'jpeg' || $file->getExtension() == 'gif' || $file->getExtension() == 'svg' || $file->getExtension() == 'webp') {
                \File::delete($file);
            }

        }

    }
}
