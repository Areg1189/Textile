<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}
                    </a>
                </div>
            </div>
    @endif

    <!-- search form (Optional) -->
    {{--<form action="#" method="get" class="sidebar-form">--}}
    {{--<div class="input-group">--}}
    {{--<input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>--}}
    {{--<span class="input-group-btn">--}}
    {{--<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</form>--}}
    <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="{{!Request::segment(2) ? 'active' : '' }}"><a href="{{ route('admin') }}"><i
                            class='fa fa-home'></i>
                    <span>Home</span></a></li>
            <li class="{{Request::segment(2) ? 'site' : '' }}"><a href="{{ route('site') }}">
                    <i class='fa fa-home'></i>
                    <span>Site</span></a>
            </li>

            <li class="{{Request::segment(2) == 'users' ? 'active' : ''}}"><a href="{{route('getUsers')}}"><i
                            class="fa fa-users" aria-hidden="true"></i>
                    <span>Users</span></a></li>

            <li class="{{Request::segment(2) == 'messages' ? 'active' : ''}}"><a href="{{route('adminMessages')}}"><i
                            class='fa fa-envelope-o'></i>
                    <span>Messages</span></a></li>
            <li class="treeview
                        {{Request::segment(2) == 'category'
                        || Request::segment(2)  == 'categories'
                        || Request::segment(3) == 'category'
                        || Request::segment(3)  == 'categories'
                        ? 'active' : '' }}">
                <a href="#">
                    <i class='fa fa-book'></i>
                    <span>Category</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('adminCategories')}}">
                            <i class='fa fa-book'></i>
                            All Categories
                        </a>
                    </li>
                    @foreach($categories as $category)
                        <li class="treeview
                                {{Request::segment(3) == $category->link
                                || Request::segment(4) == $category->link
                                ? 'active' : ''}}">
                            <a href="#0">
                                {{$category->translate(session('locale'))->name}}
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview
                                    {{Request::segment(3) == $category->link
                                    || Request::segment(4) == $category->link ?
                                    'active' : ''}}">
                                    <a href="{{route('adminCategory', ['name' => $category->link])}}">
                                        All Sub Categories
                                    </a>
                                </li>
                                @foreach($category->subCategories as $subCategory)
                                   <li>
                                       <a href="{{route('adminSubCategory', [
                                       'cat' => $category->link,
                                       'name' => $subCategory->link
                                       ])}}">
                                           {{$subCategory->translate(session('locale'))->name}}
                                       </a>
                                   </li>
                                @endforeach

                            </ul>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="{{Request::segment(2) == 'filters' ? 'active' : ''}}"><a href="{{route('getFilter')}}">
                    <i class="fa fa-filter" aria-hidden="true"></i>
                    <span>Filters</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
