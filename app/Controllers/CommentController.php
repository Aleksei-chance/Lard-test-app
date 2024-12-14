<?php

namespace App\Controllers;
use App\Services\CommentService;
use Core\View;

class CommentController
{
    private CommentService $commentService;

    public function __construct()
    {
        $this->commentService = new CommentService();
    }

    public function index(): string
    {
        $comments = $this->commentService->getAllComments();
        return view('comments/items', compact('comments'), false);
    }

    public function addModal(): string
    {
        return view('comments/add', ['parent_id' => $_POST['parent_id'] ?? 0], false);
    }

    public function add(): int
    {
        return $this->commentService->addComment($_POST['parent_id'], $_POST['nickname'], $_POST['content']);
    }

    public function editModal(): string
    {
        $comment = $this->commentService->getComment($_POST['id']);
        return view('comments/edit', $comment, false);
    }

    public function edit(): int
    {
        return $this->commentService->editComment($_POST['id'], $_POST['content']);
    }

    public function delete(): int
    {
        return $this->commentService->deleteComment($_POST['id']);
    }
}
