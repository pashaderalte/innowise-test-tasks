<?php
require_once Route::class;

$newPathSearch = new Route(10, 10, [3, 4], [8, 7]);

$newPathSearch->bfsSearch();

Storage::serializeResultPath($newPathSearch);

$retrievedPathSearch = Storage::unserializeResultPath(__DIR__ . 'log/result_path/example_filename');