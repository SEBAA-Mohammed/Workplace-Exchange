<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $title }}</h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    @foreach ($columns as $column)
                                        <th>{{ ucfirst($column) }}</th>
                                    @endforeach
                                    <th>Actions</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($collection as $item)
                                    <tr>
                                        @foreach ($columns as $column)
                                            @switch($column)
                                                @case('region')
                                                    @if (is_object($item->region))
                                                        <td>{{ $item->region->region ?? '' }}</td>
                                                    @else
                                                        <td>{{ $item->region ?? '' }}</td>
                                                    @endif
                                                @break

                                                @case('employee')
                                                    @if (is_object($item->employee))
                                                        <td>{{ $item->employee->nom ?? '' }}{{ $item->employee->prenom ?? '' }}
                                                        </td>
                                                    @else
                                                        <td>{{ $item->employee ?? '' }}</td>
                                                    @endif
                                                @break

                                                @case('occupation')
                                                    <td>{{ $item->occupation->occupation ?? '' }}</td>
                                                @break

                                                @case('city')
                                                    @if (is_object($item->city))
                                                        <td>{{ $item->city->city ?? '' }}</td>
                                                    @else
                                                        <td>{{ $item->city ?? '' }}</td>
                                                    @endif
                                                @break

                                                @case('establishment')
                                                    @if (is_object($item->establishment))
                                                        <td>{{ $item->establishment->establishment ?? '' }}</td>
                                                    @else
                                                        <td>{{ $item->establishment ?? '' }}</td>
                                                    @endif
                                                @break

                                                @default
                                                    <td>{{ $item->$column }}</td>
                                            @endswitch
                                        @endforeach
                                        <td>
                                            <form action="{{ route($table . '.edit', $item->id) }}" method="get">
                                                <button class="btn btn-primary">Edit</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route($table . '.destroy', $item->id) }}" method="post">
                                                @csrf()
                                                @method('DELETE')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
