@extends('admin.layouts.app')

@section('content')
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            @if (Session::has('success'))
				<div class="alert alert-success alert-dismissible" role="alert">
					{{ Session::get('success') }}
				</div>
			@endif
            <table id="dataTable" class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Nama</th>
                        <th class="border-0">Alamat</th>
                        <th class="border-0">No Tlp</th>
                        <th class="border-0">Tahun Lahir</th>
                        <th class="border-0">No Ticket</th>
                        <th class="border-0 rounded-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->no_tlp }}</td>
                        <td>{{ \Carbon\Carbon::parse($order->birthdate)->isoFormat('D MMMM YYYY') }}</td>
                        <td>{{ $order->ticket_id }}</td>
                        <td>
                            <a href="{{ route('order.edit', $order->id) }}" type="button" class="btn btn-success btn-sm">
								<i class="fa fa-edit my-auto"></i>
							</a>
                            <button onclick="deleteItem('{{ $order->id }}')" type="button" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
							</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
<script>
    function deleteItem(id) {
    swal({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			buttons:{
				confirm: {
					text : 'Yes, delete it!',
					className : 'btn btn-success'
				},
				cancel: {
					visible: true,
					className: 'btn btn-danger'
				}
			}
		}).then((Delete) => {
			var url = '{{ route("order.destroy", ":id") }}';
    	url = url.replace(':id', id);

			if (Delete) {
				$.ajax({
				url: url,
				method: 'delete',
				cache: false,
				data: {
					"_token": "{{ csrf_token() }}",
				},
				success: function(data){
          if (data === 'success') {
						swal({
							title: 'Deleted!',
							text: 'Your file has been deleted.',
							type: 'success',
							buttons : {
								confirm: {
									className : 'btn btn-success'
								}
							}
						});
            location.reload();
          } else {
						swal({
							title: 'Oops...',
							text: 'Ada yang salah!',
							type: 'error',
							buttons : {
								confirm: {
									className : 'btn btn-danger'
								}
							}
						});
          }
        },
        error: function (xhr, ajaxOptions, thrownError) {
					swal({
						title: 'Oops...',
						text: 'Ada yang salah!',
						type: 'error',
						buttons : {
							confirm: {
								className : 'btn btn-danger'
							}
						}
					});
        }
      });
			} else {
				swal.close();
			}
		});
  }
</script>
