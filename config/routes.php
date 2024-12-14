<?php
/** @var Core\Application $app */

use App\Controllers\ArticleController;
use App\Controllers\CommentController;

$app->router->get('/', [ArticleController::class, 'index']);

$app->router->get('/comments/load', [CommentController::class, 'index']);
$app->router->post('/comment/add-modal', [CommentController::class, 'addModal']);
$app->router->post('/comment/add', [CommentController::class, 'add']);
$app->router->post('/comment/edit-modal', [CommentController::class, 'editModal']);
$app->router->post('/comment/edit', [CommentController::class, 'edit']);
$app->router->post('/comment/delete', [CommentController::class, 'delete']);

