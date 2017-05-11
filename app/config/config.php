<?php
app/config/config.php
$container->loadFromExtension('doctrine', array(
            'dbal' => array(
                'driver'   => 'pdo_mysql',
                'host'     => '%127.0.0.1%',
                'dbname'   => '%product'%,
                'user'     => '%eric_tu%',
                'password' => '%Eric_tu168%',
                'charset' => 'utf8mb4',
                'default_table_options' => array(
                    'charset' => 'utf8mb4'
                    'collate' => 'utf8mb4_unicode_ci'
                    )
                ),
            ));
?>
