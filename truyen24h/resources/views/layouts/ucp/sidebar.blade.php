<div class="list-grouph t24-sidebar">
    <a href="{{route('profile')}}" class="list-group-item list-group-item-action waves-effect font-weight-bold {{$current_menu == 'user' ? 'active' : ''}}"><i
            class="far fa-user mr-2"></i>Cá nhân</a>

</div>
<div class="list-group t24-sidebar py-4">
    <a href="{{route('user.story.follow_list')}}" class="list-group-item list-group-item-action waves-effect font-weight-bold {{$current_menu == 'follow-list' ? 'active' : ''}}"><i
            class="far fa-list-alt mr-2"></i>Danh
        sách theo dõi</a>
    <a href="{{route('user.story.list')}}" class="list-group-item list-group-item-action waves-effect font-weight-bold {{$current_menu == 'list' ? 'active' : ''}}"><i
            class="far fa-folder mr-2"></i>Truyện
        đã đăng</a>
</div>