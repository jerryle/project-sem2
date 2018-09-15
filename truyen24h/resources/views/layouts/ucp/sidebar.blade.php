<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action text-uppercase font-weight-bold disabled">Truyện của bạn</a>
<a href="{{route('user.story.follow_list')}}" class="list-group-item list-group-item-action waves-effect {{$current_menu == 'follow-list' ? 'active' : ''}}">Danh sách theo dõi</a>
<a href="{{route('user.story.list')}}" class="list-group-item list-group-item-action waves-effect {{$current_menu == 'list' ? 'active' : ''}}">Truyện đã đăng</a>
</div>
