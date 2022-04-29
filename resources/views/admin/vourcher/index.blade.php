@use Carbon\Carbon;
@extends('layouts.admin')
@section('content')

<div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.vourcher.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.vourcher.title_singular') }}
            </a>
        </div>
    </div>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.order.title_singular') }} {{ trans('global.list') }}
    </div>
   
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.vourcher.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.vourcher.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.vourcher.fields.discount') }}
                        </th>
                        <th>
                            {{ trans('cruds.vourcher.fields.expired') }}
                        </th>
                        <th>
                            {{ trans('cruds.vourcher.fields.status') }}
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($vourcher as $key =>  $item)
                    <tr >
                        <td>
                            <span>{{ ($key+1) }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->name }} </span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->discount }}% </span>
                        </td>
                        <td class="treeview">
                            <span>{{date('d-m-Y', strtotime($item->expried)) }} </span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->status==0?"Used":"Available" }}</span>
                        </td>
                        <td>

                            @can('vourcher_delete')
                            <form action="{{ route('admin.vourcher.destroy', $item->id) }}" method="POST"
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
 $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('order_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.order.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

    $.extend(true, $.fn.dataTable.defaults, {
    
    pageLength: 100,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endsection