# Upload

- Upload semua file ini ke hosting
- Upload `blog.sql` ke database

# Setting

- Menyesuaikan alamat domain

	- Buka `application/config/config.php`
	- Perhatikan pada

		```php
		$config['base_url'] = 'http://localhost/blog/';
		```

		Bagian tersebut disesuaikan dengan alamat domain

- Menyesuaikan database

	- Buka `application/config/database.php`
	- Perhatikan pada

		```php
		$db['default'] = array(
			'dsn'	=> '',
			'hostname' => 'localhost',
			'username' => 'root', // username database
			'password' => 'mysql', // password database
			'database' => 'blog', // nama database
			'dbdriver' => 'mysqli',
			'dbprefix' => '',
			'pconnect' => FALSE,
			'db_debug' => (ENVIRONMENT !== 'production'),
			'cache_on' => FALSE,
			'cachedir' => '',
			'char_set' => 'utf8',
			'dbcollat' => 'utf8_general_ci',
			'swap_pre' => '',
			'encrypt' => FALSE,
			'compress' => FALSE,
			'stricton' => FALSE,
			'failover' => array(),
			'save_queries' => TRUE
		);
		```