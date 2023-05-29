@if (!empty($list))
	<table>
		<tr>
			<th>Rank</th>
			<th>User</th>
			<th>VIP</th>
		</tr>
		@foreach ($list as $vip)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{get_user_info($vip->userId)->name}}</td>
			<td>{{$vip->level}}</td>
		</tr>
		@endforeach
	</table>
@else
<p>VIP rank is unavailable now. Retry later!</p>
@endif
