<div>
    @include('livewire.admin.brand.modal-form')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Brand List
                        <a class="btn btn-sm btn-primary float-end" data-bs-toggle="modal"
                            data-bs-target="#addBrandModal">Add
                            Brands</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class=" table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brands as $brand)
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->slug }}</td>
                                    <td>{{ $brand->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                    <td>
                                        <a href="#" wire:click ="editBrand({{$brand->id}})" data-bs-toggle="modal" data-bs-target="#updateBrandModal"
                                            class="btn btn-sm btn-success">Edit</a>
                                        <a href="#" wire:click ="deleteBrand({{$brand->id}})" data-bs-toggle="modal" data-bs-target="#deleteBrandModal" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="5"> No data found</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                    <div>
                        {{ $brands->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addBrandModal').modal('hide');
            $('#updateBrandModal').modal('hide');
            $('#deleteBrandModal').modal('hide');
        });
    </script>
@endpush
