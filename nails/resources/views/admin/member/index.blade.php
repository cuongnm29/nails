@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('cruds.member.title_singular') }} {{ trans('global.list') }}
    </div>
   
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.accountNumber') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.status') }}
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($member as $key =>  $item)
                    <tr data-entry-id="{{ $item->id }}">
                        <td>
                            <span>{{ ($key+1) }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->firstname }} {{ $item->lastmame }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ isset($item->numberAccount)?$item->numberAccount:"N/A" }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->phone }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->email }}</span>
                        </td>
                    
                        <td class="treeview">
                            <span>{{isset($item->numberAccount)?"Active":"Guest" }}</span>
                        </td>
                        <td>
                            @can('category_edit')
                            <a class="btn btn-xs btn-info" href="{{ route('admin.member.edit', $item->id) }}">
                                {{ trans('global.edit') }}
                            </a>
                            @endcan
                            @can('category_delete')
                            <form action="{{ route('admin.member.destroy', $item->id) }}" method="POST"
                                onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                            </form>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
$(function() {
    let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
    @can('category_delete')
    let deleteButtonTrans = '{{ trans('global.datatables.delete ') }}'
    let deleteButton = {
        text: deleteButtonTrans,
        url: "{{ route('admin.member.massDestroy') }}",
        className: 'btn-danger',
        action: function(e, dt, node, config) {
            var ids = $.map(dt.rows({
                selected: true
            }).nodes(), function(entry) {
                return $(entry).data('entry-id')
            });

            if (ids.length === 0) {
                alert('{{ trans(' global.datatables.zero_selected ') }}')

                return
            }

            if (confirm('{{ trans('global.areYouSure ') }}')) {
                $.ajax({
                        headers: {
                            'x-csrf-token': _token
                        },
                        method: 'POST',
                        url: config.url,
                        data: {
                            ids: ids,
                            _method: 'DELETE'
                        }
                    })
                    .done(function() {
                        location.reload()
                    })
            }
        }
    }
    dtButtons.push(deleteButton)
    @endcan
    $.extend(true, $.fn.dataTable.defaults, {
        pageLength: 100,
    });
    $('.datatable-User:not(.ajaxTable)').DataTable({
        buttons: dtButtons
    })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endsection