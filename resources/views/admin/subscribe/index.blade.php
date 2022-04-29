@extends('layouts.admin')
@section('content')
<div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.subscribe.sendmail") }}">
                {{ trans('cruds.subscribe.sendmail_singular') }}
            </a>
        </div>
    </div>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.subscribe.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
    <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
            <thead>
                <tr>
                    <th>
                        {{ trans('cruds.subscribe.fields.id') }}
                    </th>
                    
                    <th>
                        {{ trans('cruds.subscribe.fields.email') }}
                    </th>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach($subscribe as $key => $item)
                <tr>
                    <td>
                        <span>{{ $key+1 }}</span>
                    </td>
                   
                    <td class="treeview">
                        <span>{{ $item->email }}</span>
                    </td>
                    
                    <td>

                        @can('subscribe_delete')
                        <form action="{{ route('admin.subscribe.destroy', $item->id) }}" method="POST"
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
        </table>
</div>

    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
$(function() {
    let deleteButtonTrans = '{{ trans('global.datatables.delete ') }}'
    let deleteButton = {
        text: deleteButtonTrans,
        url: "{{ route('admin.contact.massDestroy') }}",
        className: 'btn-danger',
        action: function(e, dt, node, config) {
            var ids = $.map(dt.rows({
                selected: true
            }).nodes(), function(entry) {
                return $(entry).data('entry-id')
            });
            if (ids.length === 0) {
                alert('{{ trans('global.datatables.zero_selected ') }}')

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
    let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
    @can('subscribe_delete')
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