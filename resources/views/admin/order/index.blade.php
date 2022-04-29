@extends('layouts.admin')
@section('content')
<div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.order.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.order.title_singular') }}
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
                            {{ trans('cruds.order.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.time') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.firstname') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.lastname') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.email') }}
                        </th>
                         <th>
                            {{ trans('cruds.order.fields.note') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.account') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.vourcher') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.service') }}
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($order as $key =>  $item)
                    <tr data-entry-id="{{ $item->id }}">
                        <td>
                            <span>{{ ($key+1) }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->dateOrder }} {{ $item->timeOrder }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->firstname }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->lastname }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->email }}</span>
                        </td>
                         <td class="treeview">
                            <span>{{ $item->note }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->phone }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->accountNumber?$item->accountNumber:"N/A" }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ isset($item->vourcher)?$item->vourcher->name.' discount:'.$item->vourcher->discount.'%' :"" }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->category->name }}</span>
                        </td>
                        <td>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.order.edit', $item->id) }}">
                                {{ trans('global.edit') }}
                            </a>
                            @can('order_delete')
                            <form action="{{ route('admin.order.destroy', $item->id) }}" method="POST"
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