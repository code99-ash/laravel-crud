<div class="mt-3">
    @include('livewire.create')
    @include('livewire.update')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('message'))
                        <div class="alert alert-success"> {{ session('message') }} </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="h3">All Students
                                <button type="button" class="btn btn-primary btn-stripped btn-sm ml-3"
                                        data-toggle="modal" data-target="#addStudentModal"
                                >
                                    Add New +
                                </button>
                            </h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->firstname }}</td>
                                            <td>{{ $student->lastname }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->phone }}</td>
                                            <td>
                                                <button class="btn btn-info btn-sm"
                                                        data-toggle="modal"
                                                        data-target="#editStudentModal"
                                                        wire:click.prevent="edit({{$student->id}})"
                                                >Edit</button>
                                                <button class="btn btn-danger btn-sm" 
                                                        wire:click.prevent="delete({{$student->id}})"
                                                >Delete</button>
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
</div>
