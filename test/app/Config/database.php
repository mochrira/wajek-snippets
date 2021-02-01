<?php
use Selvi\Database\Manager;

Manager::add([
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'kontak',
    'debug' => true
], 'main');

Manager::get('main')->addMigration(__DIR__.'/migrations');