<li
class="sidebar-item  has-sub">
<a href="#" class='sidebar-link' style="color: var(--bs-dark-text);">
    <i class="bi bi-menu-down"></i>
    <span>input nilai</span>
</a>
<ul class="submenu ">
    <li class="submenu-item ">
        <a href="{{ route('backend.siaga.index') }}" style="color: var(--bs-dark-text);">{{ __('sidebar.siaga') }}</a>
        <a href="{{ route('backend.penggalang.index') }}" style="color: var(--bs-dark-text);">{{ __('sidebar.penggalang') }}</a>
        <a href="{{ route('backend.penegak.index') }}" style="color: var(--bs-dark-text);">{{ __('sidebar.penegak') }}</a>
    </li>
</ul>
</li>