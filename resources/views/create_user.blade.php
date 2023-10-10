<x-layout title="Register User">

    <form class="register-card" method="POST" action="{{route('user-store')}}">


        <h2 class="header">Enter Registrant's details</h2>

        <div class="body">
            @csrf

            <!-- Ticket Type input -->
            <div class="form-outline mb-2">
                <label class="form-label" for="ticket_type">Ticket Type:</label>
                <select id="ticket_type" name="ticket_type_id" class="form-control" required>
                    @foreach($ticketTypes as $ticketType)
                        <option value="{{$ticketType->id}}">{{$ticketType->name}} -
                            ₦{{number_format($ticketType->price)}}</option>
                    @endforeach
                </select>
                @error('ticket_type')
                <p class="form-error">{{$message}}</p>
                @enderror
            </div>

            <!-- Name input -->
            <div class="form-outline mb-2">
                <label class="form-label" for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required/>
                @error('name')
                <p class="form-error">{{$message}}</p>
                @enderror
            </div>

            <!-- Email input -->
            <div class="form-outline mb-2">
                <label class="form-label" for="email">Email address:</label>
                <input type="email" id="email" name="email" class="form-control" required/>
                @error('email')
                <p class="form-error">{{$message}}</p>
                @enderror
            </div>

            <!-- Phone Number input -->
            <div class="form-outline mb-2">
                <label class="form-label" for="phone_number">Phone Number:</label>
                <input type="number" id="phone_number" name="phone_number" class="form-control"/>
                @error('phone_number')
                <p class="form-error">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="footer">
            <!-- Register button -->
            <button type="submit" class="register-button">
                Register
            </button>
        </div>

    </form>

</x-layout>
