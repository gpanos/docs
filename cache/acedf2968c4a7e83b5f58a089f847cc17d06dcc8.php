---
title: Pagination
extends: _layouts.documentation
section: content
---

Livewire offers the ability to paginate results within a component. This feature hooks into Laravel's native pagination features, so it should feel like an invisible feature to you.

## Paginating Data

Let's say you have a `show-posts` component, but you want to limit the results to 10 posts per page.

You can paginate the results by using the `WithPagination` trait provided by Laravel.

<?php $__env->startComponent('_partials.code-component', [
    'className' => 'app/Http/Livewire/ShowPosts.php',
    'viewName' => 'resources/views/livewire/show-posts.blade.php',
]); ?>
<?php $__env->slot('class'); ?>

use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::paginate(10),
        ]);
    }
}

<?php $__env->endSlot(); ?>
<?php $__env->slot('view'); ?>

<div>
    @foreach ($posts as $post)
        ...
    @endforeach

    {{ $posts->links() }}
</div>

<?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

Now there will be rendered HTML links for the different pages at the bottom of your posts, and the results will be paginated.
<?php /**PATH /Users/calebporzio/Documents/Code/sites/livewire-docs/cache/e27bb71b660d145862321e42c322d5b7ddc7a9b4.blade.md ENDPATH**/ ?>