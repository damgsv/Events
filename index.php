<?php
/**
 * Created by PhpStorm.
 * User: galicher
 * Date: 26/03/17
 * Time: 00:58
 */
require 'vendor/autoload.php';

$emitter = \Galicher\Event\Emitter::getInstance();

// Ecouteurs
$emitter->on('Comment.created', function ($firstname , $lastname) {
    echo $firstname . ' ' . $lastname . ' a posté un nouveau commentaire';
}, 1);
$emitter->on('Comment.created', function ($firstname , $lastname) {
    echo $firstname . ' ' . $lastname . ' a posté un nouveau commentaire';
}, 100);


// Partie logique du code
$emitter->emit('Comment.created', 'John', 'Doe');
$emitter->emit('User.new');

//
//$emitter->on('User.new', function ($user) {
//   mail('test', 'test', 'test');
//});