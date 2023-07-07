<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Google\Cloud\Storage\StorageClient;
use League\Flysystem\Filesystem;
use Superbalist\Flysystem\GoogleStorage\GoogleStorageAdapter;
class GoogleStorageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Storage::extend('gcs', function($app, $config) {
            
            $pid = $config['project_id'];
            $storageClient = new StorageClient([
                "projectId" => $pid,
                "keyFilePath" => $config["key_file"],
            ]);
            $bucket = $storageClient->bucket($config["bucket"]);
            $adapter = new GoogleStorageAdapter($storageClient, $bucket);

            return new Filesystem($adapter);
        });
    }
}