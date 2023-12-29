<?php declare (strict_types = 1);

namespace App\GraphQL\Queries;

final class PostsResolver
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // return Post::latest()->get();
        // return Post::query()->paginate(perPage: 5, page: $args['page'] ?? 1);
    }
}
