
		<table class="table table-bordered table-hover">

			<tbody>
				<tr>
					<th>Tên khách hàng</th>
					<td>{{$model->name}}</td>
				</tr>
				<tr>
					<th>Email</th>
					<td>{{$model->email}}</td>
				</tr>
				<tr>
					<th>SĐT</th>
					<td>{{$model->phone}}</td>
				</tr>
				
				<tr>
					<th>Tên sản phẩm </th>
					<td>{{$model->product_name}}</td>
				</tr>
				
				<tr>
					<th>Đơn giá</th>
					<td>{{$model->price}}</td>
				</tr>
				
				<tr>
					<th>Số lượng</th>
					<td>{{$model->quantity}}</td>
				</tr>
				<tr>
					<th>Thành tiền</th>
					<td>{{$total}}</td>
				</tr>
				
			</tbody>
		</table>
		
