<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'adminfilter' => \App\Filters\AdminFilter::class,
		'superadminfilter' => \App\Filters\SuperadminFilter::class
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			'adminfilter' => [
				'except' => [
					'/',
					'auth', 'auth/*'
				],

			],
			'superadminfilter' => [
				'except' => [
					'/',
					'auth', 'auth/*'
				],

			]
		],
		'after'  => [
			'adminfilter' => [
				'except' => [
					'home', 'home/*', 'pensiun', 'pensiun/*'
				]
			],
			'superadminfilter' => [
				'except' => [
					'home', 'home/*', 'pengguna', 'pengguna/*', 'pegawai', 'pegawai/*', 'pensiun', 'pensiun/*', 'laporan', 'laporan/*'
				]
			],
			'toolbar',
			//'honeypot'
		]
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [];
}
