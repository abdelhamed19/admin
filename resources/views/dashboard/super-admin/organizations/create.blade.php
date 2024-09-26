<x-dashboard-layout title="Create Organization">
    @section('content')
        <div class="container full-page-form">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Organization</h4>
                    <x-error-message />
                    <form action="{{route('create.organization')}}" method="POST" class="forms-sample">
                        @csrf
                        <x-dashboard-form-input name="name" value="{{ old('name') }}" label="Name" placeholder="Name" />
                        <x-dashboard-form-input name="email"  type="email" value="{{ old('email') }}" label="Admin Email" placeholder="Admin Email" />
                        <select name="status" class="form-control" id="exampleInputUsername1">
                            <option value="" selected>status</option>
                            <option value="active">active</option>
                            <option value="inactive">inactive</option>
                        </select>
                        <br>

                        <!-- Additional Dynamic Name Input Fields -->
                        <div id="dynamic-name-fields">
                            <x-dashboard-form-input name="braches[]" value="{{ old('braches.0') }}" label="Branche Name" placeholder="Branche Name" />
                        </div>

                        <!-- Button to Add New Name Input -->
                        <button type="button" class="btn btn-secondary" onclick="addNameField()">Add Another Name</button>

                        <br><br>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="{{url()->previous()}}" type="button" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
        <script>
            // Counter for keeping track of the number of additional input fields
            let nameFieldCount = 1;

            // Function to add a new input field dynamically
            function addNameField() {
                // Select the div container for dynamic input fields
                const container = document.getElementById('dynamic-name-fields');

                // Create a new div to hold the input field
                const newField = document.createElement('div');
                newField.classList.add('form-group', 'mb-2');

                // Create the label for the new input field
                const label = document.createElement('label');
                label.innerHTML = 'Branche Name';

                // Create the input field
                const input = document.createElement('input');
                input.type = 'text';
                input.name = `braches[]`;  // Make the input an array field
                input.classList.add('form-control');
                input.placeholder = 'Branche Name';
                input.value = '';

                // Append the label and input to the div
                newField.appendChild(label);
                newField.appendChild(input);

                // Append the new field to the container
                container.appendChild(newField);

                // Increment the field counter
                nameFieldCount++;
            }
        </script>

    @endsection

</x-dashboard-layout>
