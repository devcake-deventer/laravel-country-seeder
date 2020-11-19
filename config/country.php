<?php

return [
	# Config for the country entity
	'countries' => [
		# Should the columns be updated if the package is updated?
		'sync' => true,
		# Which table to write to
		'table' => 'countries',
		# Mapping of column names
		'columns' => [
			'code' => 'code',
			'name' => 'name'
		]
	],
	# Config for the nationality entity
	'nationalities' => [
		# Should the columns be updated if the package is updated?
		'sync' => true,
		# Which table to write to
		'table' => 'nationalities',
		# Mapping of column names
		'columns' => [
			'code' => 'code',
			'name' => 'name'
		]
	],
];
