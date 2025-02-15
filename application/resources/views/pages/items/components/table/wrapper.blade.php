<!--bulk actions-->
@include('pages.items.components.actions.checkbox-actions')

<!--main table view-->
@include('pages.items.components.table.table')

<!--filter-->
@if(auth()->user()->is_team)
@include('pages.items.components.misc.filter-items')
@endif
<!--filter-->

<!--automation tasks-->
@if(auth()->user()->is_team)
@include('pages.itemtasks.components.tasks-side-panel')
@endif
<!--automation tasks-->

<!--export-->
@if(config('visibility.list_page_actions_exporting'))
@include('pages.export.items.export')
@endif