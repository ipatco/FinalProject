@extends('web')
@section('title', 'Purchase')

@section('css')
<style>
	.card {
		box-shadow: 0px 0px 10px gray;
	}
	.razorpay-payment-button {
		background-color: #2441e7;
		border: 2px solid #2441e7;
		border-radius: 5px;
		color: #ffffff;
		-webkit-transition: all 0.3s ease;
		-o-transition: all 0.3s ease;
		transition: all 0.3s ease;
		box-shadow: 0px 1px 4px 0px rgba(36, 65, 231, 0.3);
		font-size: 14px;
		height: 50px;
		margin-left: -15px;
		width: 150px;
		display: inline-block;
		font-weight: 400;
	}
	.razorpay-payment-button:hover, .razorpay-payment-button:active, .razorpay-payment-button:focus {
		background-color: #ffffff;
		border-color: #2441e7;
		color: #2441e7;
		box-shadow: none;
		outline: none;
	}
</style>
@endsection

@section('page')


<!-- How It's Work -->
<section class="our-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3 col-md-offset-6">
				<div class="card card-default">
					<div class="card-header">
						<h3>Enroll For {{ $course->title }}</h3>
					</div>
					<div class="card-body text-center">
						<form action="{{ route('web.purchased') }}" method="GET" id="paySubmit">
							@csrf
							<div class="row text-left">
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">Name:</label>
										<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ Auth::user()->name }}" required>
										<div class="valid-feedback">Valid.</div>
										<div class="invalid-feedback">Please fill out this field.</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Email:</label>
										<input type="text" class="form-control" id="email" placeholder="Enter Email" name="emails" value="{{ Auth::user()->email }}" required>
										<div class="valid-feedback">Valid.</div>
										<div class="invalid-feedback">Please fill out this field.</div>
									</div>
								</div>
								<input type="hidden" name="course_id" value="{{ $course->id }}" required>
								<input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" required>
								<input type="hidden" name="razorpay_order_id" id="razorpay_order_id" required>
								<input type="hidden" name="razorpay_signature" id="razorpay_signature" required>
								<div class="col-md-6">
									<div class="form-group">
										<label for="designation">Current Designation:</label>
										<select name="designation" class="custom-select">
											<option value="" selected>Choose Designation</option>
											<option value="Student">Student</option>
											<option value="Working">Working</option>
											<option value="Fresher">Fresher</option>
										</select>
										<div class="valid-feedback">Valid.</div>
										<div class="invalid-feedback">Please fill out this field.</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="start_class">Start Class From:</label>
										<input type="text" class="form-control" id="start_class" placeholder="Enter Date" name="start_class" required>
										<div class="valid-feedback">Valid.</div>
										<div class="invalid-feedback">Please fill out this field.</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="time_slot">Time Slot:</label>
										<select name="time_slot" class="custom-select">
											<option value="" selected>Choose Time Slot</option>
											<option value="Morning">Morning</option>
											<option value="Evening">Evening</option>
											<option value="Any Time">Any Time</option>
										</select>
										<div class="valid-feedback">Valid.</div>
										<div class="invalid-feedback">Please fill out this field.</div>
									</div>
								</div>
							</div>
							<button type="button" id="rzp-button1" class="btn btn-lg btn-thm dbxshad">Complete Payment</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@section('js')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    @php
        $user = Auth::user();
    @endphp
    var options = {
        "key": "{{ env('RAZORPAY_KEY') }}",
        "name": "Learn to Earn",
        "description": "{{ $course->title }}",
        "image": "{{ asset('assets/logo.png') }}",
        "order_id": "{{ $order->id }}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        "handler": function (response){
            console.log(response);
            $('#razorpay_payment_id').val(response.razorpay_payment_id);
            $('#razorpay_order_id').val(response.razorpay_order_id);
            $('#razorpay_signature').val(response.razorpay_signature)
            $('#paySubmit').submit()
        },
        "prefill": {
            "name": "{{ $user->name }}",
            "email": "{{ $user->email }}",
            "contact": "{{ $user->phone }}"
        },
        "notes": {
            "address": "Razorpay Corporate Office"
        },
        "theme": {
            "color": "#1442ec"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.on('payment.failed', function (response){
            alert(response.error.code);
            alert(response.error.description);
            alert(response.error.source);
            alert(response.error.step);
            alert(response.error.reason);
            alert(response.error.metadata.order_id);
            alert(response.error.metadata.payment_id);
    });
    document.getElementById('rzp-button1').onclick = function(e){
        rzp1.open();
        e.preventDefault();
    }
</script>
@endsection
