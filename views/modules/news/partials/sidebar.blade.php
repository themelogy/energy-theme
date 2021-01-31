<!-- col-md-3 -->
<div class="less-pad-left col-md-3 col-sm-4 col-xs-12">
    <div class="sidebar box-wrapper equal-column mt-15">
        @newsCategories('categories')
        @newsLatestPosts(5, 'sidebar-latest-posts')
        @isset($share)
            @include('news::widgets.share')
        @endisset
        @isset($post)
            @newsTags($post, 10)
        @endisset
        @isset($posts)
            @newsTags($posts, 2)
        @endisset
    </div>
</div>
<!-- /col-md-3 -->