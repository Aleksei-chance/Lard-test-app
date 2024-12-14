<?php

namespace App\Services;

use App\Models\Comment;

class CommentService
{
    public function getAllComments(): array
    {
        $comments = [];
        $data = Comment::query()->orderBy('id', 'desc')->get();
        foreach ($data as $item) {
            $comments[] = [
                'id' => $item->id,
                'parent_id' => $item->parent_id,
                'nickname' => $item->nickname,
                'content' => nl2br(htmlspecialchars(trim($item->content))),
                'time' => $item->created_at,
            ];
        }
        return $this->buildCommentTree($comments);
    }

    public function buildCommentTree(array $comments, int $parentId = 0, int $level = 0): array
    {
        $tree = [];

        foreach ($comments as $comment) {
            if ($comment['parent_id'] == $parentId) {
                $comment['items'] = [];
                if ($level < 9) {
                    $comment['items'] = $this->buildCommentTree($comments, $comment['id'], $level + 1);
                }
                $comment['level'] = $level;
                $tree[] = $comment;
            }
        }
        return $tree;
    }

    public function addComment(int $parent_id, string $nickname, string $content): bool
    {
        if ($nickname && $content) {
            $comment = new Comment();
            $comment->parent_id = $parent_id;
            $comment->nickname = $nickname;
            $comment->content = $content;
            return $comment->save();
        }
        return false;
    }

    public function getComment(int $id): array
    {
        $arr = [];
        $comment = Comment::query()->find($id);
        if ($comment) {
            $arr = [
                'id' => $comment->id,
                'content' => htmlspecialchars($comment->content),
            ];
        }
        return $arr;
    }

    public function editComment(int $id, string $content): bool
    {
        $comment = Comment::query()->find($id);
        $comment->content = $content;
        return $comment->save();
    }

    public function deleteComment(int $id): bool
    {
        $comment = Comment::query()->find($id);
        return $comment->delete();
    }
}
