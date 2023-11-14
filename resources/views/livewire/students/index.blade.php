<div class="row d-flex justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Students Table</h5>
                <hr>
                <x-search-field />
                <div class="d-flex justify-content-end">
                    <button class="btn btn-outline-info my-3"><i class="bi bi-file-earmark-plus"></i></button>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name
                                <a wire:click="sortBy('name')" href="#" class="ms-1 text-body-secondary"><i
                                        class="bi bi-arrow-down-up"></i></a>
                            </th>
                            <th scope="col">Email
                                <a wire:click="sortBy('email')" href="#" class="ms-1 text-body-secondary"><i
                                        class="bi bi-arrow-down-up"></i></a>
                            </th>
                            <th scope="col">Address
                                <a wire:click="sortBy('address')" href="#" class="ms-1 text-body-secondary"><i
                                        class="bi bi-arrow-down-up"></i></a>
                            </th>
                            <th scope="col">Phone
                                <a wire:click="sortBy('phone')" href="#" class="ms-1 text-body-secondary"><i
                                        class="bi bi-arrow-down-up"></i></a>
                            </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr wire:key="{{ $student->id }}">
                                <td scope="row">{{ $loop->index + $students->firstItem() }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>
                                    <button class="btn text-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn text-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <x-pagination :items="$students" />
            </div>
        </div>
    </div>
</div>
