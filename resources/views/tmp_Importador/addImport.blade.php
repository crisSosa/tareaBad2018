@extends('layoutBase')

@section('content')

<!DOCTYPE html>

	<html>
    <head>
        <title>Agregar Importador</title>
    </head>
    <body>
		<div>
			<form action('Importador@agregarImportador') method="POST" id="my-form">
				{{ csrf_field() }}

				       <div>
            <h3>Datos Personales</h3>
            <section>
                <label for="userName">User name *</label>
                <input id="userName" name="userName" type="text" class="required">
                <label for="password">Password *</label>
                <input id="password" name="password" type="password" class="required">
                <label for="confirm">Confirm Password *</label>
                <input id="confirm" name="confirm" type="password" class="required">
                <p>(*) Mandatory</p>
            </section>
            <h3>Cargo</h3>
            <section>
                <label for="name">First name *</label>
                <input id="name" name="name" type="text" class="required">
                <label for="surname">Last name *</label>
                <input id="surname" name="surname" type="text" class="required">
                <label for="email">Email *</label>
                <input id="email" name="email" type="text" class="required email">
                <label for="address">Address</label>
                <input id="address" name="address" type="text">
                <p>(*) Mandatory</p>
            </section>
            <h3>Finish</h3>
            <section>
                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
            </section>
        </div>

			</form>
			<script>
				var form = $("#my-form");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password"
        }
    }
});
form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        form.submit();
    }
});

			</script>
		</div>
	</body>

@endsection
